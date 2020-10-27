<?php

namespace App\Models\Model;

use App\Models\Blog;
use Illuminate\Support\Str;

class BlogModel
{
    public function getAll($request)
    {
        $blog = Blog::orderBy('created_at', 'desc');
        return $blog->get();
    }

    public function findById($id)
    {
        $blog = Blog::findOrFail($id);
        return $blog;
    }

    public function findBySlug($slug)
    {
        $blog = Blog::where('slug_title', $slug);
        return $blog->first();
    }

    public function create($request)
    {
        $decode = json_decode($request->tags);
        $tags = array_map(function ($arr) {
            return $arr->value;
        }, $decode);

        $blog = new Blog();
        $blog->id = Str::uuid()->getHex();
        $blog->blog_type = 'article';
        $blog->title = $request->title;
        $blog->slug_title = Str::slug($request->title);
        $blog->subject = $request->subject;
        $blog->description = $request->article;
        $blog->tags = implode(',', $tags);
        $blog->viewed = 0;
        $blog->published = $request->publish;
        return $blog->save();
    }

    public function update($request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->slug_title = Str::slug($request->title);
        $blog->subject = $request->subject;
        $blog->description = $request->article;
        $blog->tags = $request->tags;
        $blog->viewed = 0;
        $blog->published = $request->publish;
        return $blog->save();
    }

    public function delete($id)
    {
        $blog = Blog::findOrFail($id);
        return $blog->delete();
    }
}
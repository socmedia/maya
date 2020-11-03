<?php

namespace App\Contracts;

use App\Models\Blog;

trait ArticleContracts
{
    public function getBlogs($total = 5)
    {
        $article = Blog::where('published', 1)->orderBy('created_at', 'desc')->select([
            'title',
            'slug_title',
            'subject',
            'viewed',
            'created_at'
        ]);
        return $article->paginate($total);
    }

    public function getPopulars($total = 5)
    {
        $article = Blog::where(['published'=> 1, ['viewed' ,'>', 10]])->orderBy('viewed', 'desc')->limit($total);
        return $article->get([
            'title',
            'slug_title',
            'subject',
            'viewed',
            'created_at'
        ]);
    }

    public function findRelatedBlog($tags)
    {
        $article = Blog::orderBy('viewed', 'desc')
            ->where('published', 1);
        foreach($tags as $tag){
            $article->orWhere('tags', 'LIKE', '%'.$tag.'%');
        }
        return $article->limit(5)->get([
            'title',
            'slug_title',
            'subject',
            'viewed',
            'created_at'
        ]);
    }
}
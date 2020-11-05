<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogViewer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $blog = Blog::where('slug_title', request()->segment(3))->first();
        if($blog){
             $blog->viewed += 1;
             $blog->save();
        }
        return $next($request);
    }
}
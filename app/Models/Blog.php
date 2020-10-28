<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = ['title', 'blog_type', 'slug_title', 'subject', 'description', 'tags', 'viewed', 'published'];

    protected $hidden = ['thumbnail_image', 'blog_media'];
}
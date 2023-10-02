<?php

namespace App\Services;

use App\Models\Category;
use Symfony\Component\Console\Input\Input;

class PostService
{
    public function getCategory($name)
    {
        if(Category::where('name', $name)->exists()){
            return $name;
        } else {
            return Category::create('name');
        }
    }

    public function getSlug($name, $slug = null)
    {
        return 0;

    }

    public function createPost($post, $category, $slug)
    {
        return 0;

    }

    public function createTags($post, $tags)
    {
        return 0;

    }
}

<?php

namespace App\Models;
class Post
{
    public static function find($slug)
    {
        // Laravel helper function
        base_path();

        // checks if the file exists
        if( !file_exists($path = resource_path("posts/{$slug}.html") ) ){
            return redirect('/');
        }

        //cache
        return cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));
    }
}
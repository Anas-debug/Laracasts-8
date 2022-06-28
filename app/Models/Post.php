<?php

namespace App\Models;
class Post
{
    public static function find($slug)
    {
        // Laravel helper function
        base_path();

        // checks if the file exists
        if( !file_exists($path = ressource_path("posts/{$slug}.html") ) ){
            return redirect('/');
        }

        //cache
        $post = cache->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));
    }
}
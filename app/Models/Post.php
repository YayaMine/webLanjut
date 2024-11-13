<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return  [[
            'id' => 1,
            'slug' => 'judul-artikel-1-dari-route',
            'title' => 'Judul Artikel 1 dari route',
            'author' => 'Lea Alyu',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo, dolorum aspernatur recusandae atque maiores dolorem ad officiis soluta, pariatur quibusdam eum culpa. Ducimus a ullam id omnis quas iure consequatur, perspiciatis eos quibusdam. Id a deserunt dolorum praesentium ullam, rerum quas iste alias ad magnam ipsam fugiat esse nemo. Quam!',
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2-dari-route',
            'title' => 'Judul Artikel 2 dari route',
            'author' => 'Lea Alyu',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo, dolorum aspernatur recusandae atque maiores dolorem ad officiis soluta, pariatur quibusdam eum culpa. Ducimus a ullam id omnis quas iure consequatur, perspiciatis eos quibusdam. Id a deserunt dolorum praesentium ullam, rerum quas iste alias ad magnam ipsam fugiat esse nemo. Quam!',
        ]];
    }

    public static function find($slug): array
    {
        // return Arr::first(static::all(), function($blog) use ($slug) {
        //     return $blog['slug'] == $slug;
        // });

        $blog = Arr::first(static::all(), fn ($blog) => $blog['slug'] == $slug);

        if (!$blog) {
            abort(404);
        }
        return $blog;
    }

}

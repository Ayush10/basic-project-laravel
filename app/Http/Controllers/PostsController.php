<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
//    public function show() {
//        $posts = [
//            'my-first-post' => 'Hello, this is my first blog post!',
//            'my-second-post' => 'Now I am getting the hang of this blogging thing.',
//        ];
//
//        if (! array_key_exists($post, $posts)) {
//            abort(404, 'Sorry, this post was not found.');
//        }
//
//        return view('post', [
//            'post' => $posts[$post],
//        ]);
//
//    }

//    public function show($slug) {
//        $post = DB::table('posts')->where('slug', $slug)->first();
//
//        $post = Post::where('slug', $slug)->firstOrFail();
//        dd($post);
//
//        if (! $post) {
//            abort(404);
//        }
//
//        return view('post', [
//            'post' => $post,
//        ]);
//
//    }

    public function show($slug) {
        return view('post', [
            'post' => Post::where('slug', $slug)->firstOrFail(),
        ]);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function posts() : JsonResponse
    {
        $posts = Post::All();
        foreach($posts as $post) {
            $post->user;
        }
        $data = [
            'posts' => $posts
        ];
        return response()->json($data, 200);
    }

    public function listing() :View
    {
        $posts = Post::paginate(5); // Paginate with 5 posts per page
        return view('post.listing', ['posts' => $posts]);
    }
}

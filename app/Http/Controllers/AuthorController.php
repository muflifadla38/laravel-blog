<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    public function index(User $author){
        return view('posts', [
              'title' => "Post By Author: {$author->name}",
              "active" => "posts",
              'posts' => $author->posts->load(['author', 'category'])
        ]);
    }
}

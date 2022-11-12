<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('about', [
            "title" => "About",
            "active" => "about",
            "name" => "Mufli Fadla",
            "place" => "Bumi",
            "age" => 23,
            "img" => "avatar.jpg"
        ]);
    }
}

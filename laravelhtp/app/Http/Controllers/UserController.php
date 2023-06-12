<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('depan.home', ["title" => "home"]);
    }

    public function about()
    {
        return view("depan.about", ["title" => "about"]);
    }
    public function class()
    {
        return view("depan.class", ["title" => "class"]);
    }
    public function galery()
    {
        return view("depan.galery", ["title" => "galery"]);
    }
    public function guru()
    {
        return view("depan.guru", ["title" => "guru"]);
    }
    public function blog()
    {
        return view("depan.blog", ["title" => "blog"]);
    }
    public function contact()
    {
        return view("depan.contact", ["title" => "contact"]);
    }

}

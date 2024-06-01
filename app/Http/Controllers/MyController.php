<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home(){
        $title= 'Healet Website';
        return view('home',compact('title'));
    }
    public function about(){
        $title= 'About Us';
        return view('aboutUs',compact('title'));
    }
    public function shop(){
        $title= 'Shop';
        return view('shop',compact('title'));
    }
    public function blog(){
        $title= 'Our Blog';
        return view('blog',compact('title'));
    }
}

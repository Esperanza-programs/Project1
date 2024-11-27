<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view("index");
    }

    public function about(){
        return view("about");
    }

    public function new(){
        return view("new");
    }

    public function login(){
        return view("login");
    }

    public function admin(){
        return view("admin");
    }
    public function privacy(){
        return view("privacy");
    }
}

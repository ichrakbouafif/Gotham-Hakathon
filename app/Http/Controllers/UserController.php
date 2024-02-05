<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function about(){
        return view('pages.about');
    }
    public function profile(){
        return view('pages.profile');
    }
    public function service(){
        return view('pages.service');
    }
    public function single(){
        return view('pages.single');
    }
    public function team(){
        return view('pages.team');
    }
}

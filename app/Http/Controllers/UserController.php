<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function profile(){
        return view('profile');
    }
    public function terms(){
        return view('terms');
    }
}

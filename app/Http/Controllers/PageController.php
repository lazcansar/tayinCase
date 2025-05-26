<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Index (Home) Page
    public function index() {
        return view('home.index');
    }
    public function login() {
        return view('home.login');
    }
}

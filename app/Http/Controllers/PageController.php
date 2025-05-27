<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\userDetail;
use App\Models\City;

class PageController extends Controller
{
    // Index (Home) Page
    public function index() {
        $id = Auth::id();
        $userDetail = userDetail::whereUsersId($id)->first();
        return view('home.index', compact('userDetail'));
    }
    // Login Page
    public function login() {
        return view('home.login');
    }
    // Ticket Page
    public function ticket() {
        $cities = City::all();
        return view('home.ticket', compact('cities'));
    }

}

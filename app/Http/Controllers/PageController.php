<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\userDetail;
use App\Models\City;
use App\Models\Changeticket;
use PHPUnit\Framework\Attributes\Ticket;

class PageController extends Controller
{
    // Index (Home) Page
    public function index() {
        $id = Auth::id();
        $userDetail = userDetail::whereUsersId($id)->first();
        $allTickets = Changeticket::all();
        $cities = City::all();
        return view('home.index', compact('userDetail', 'allTickets', 'cities'));
    }
    // Login Page
    public function login() {
        return view('home.login');
    }
    // Ticket Page
    public function ticket() {
        $cities = City::all();
        $allTickets = Changeticket::all();
        return view('home.ticket', compact('cities', 'allTickets'));
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }

    public function funding()
    {
        //$banks = AdminBank::latest()->get();
        return view('user.fund_wallet');
    }
}

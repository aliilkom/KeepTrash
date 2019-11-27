<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view("profile.profile",compact('user'));
    }
   
}

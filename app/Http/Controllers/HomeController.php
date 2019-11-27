<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.dashboard');
    }
    public function pengepul()
    {
        $user = User::where('is_pengepul','Penyetor')->get();
        return view('pages.dashboard', compact("user"));
    }
    public function penyetor()
    {
        $user = User::where('is_pengepul','Pengepul')->get();
        return view('pages.dashboardpenyetor', compact("user") );
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\User;

class TransaksiController extends Controller
{
    public function index(){
        $user = User::where('id','2')->get();
        return view("transaksi.setor",compact('user'));
    }
}

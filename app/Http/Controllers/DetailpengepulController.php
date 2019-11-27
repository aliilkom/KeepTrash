<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Barangbekas;
use App\Tukarpoin;

class DetailpengepulController extends Controller
{
    public function index(){
        $user = User::where('id','1')->get();
        $barang = Barangbekas::all();
        $poin = Tukarpoin::all();
        return view("pengepul.detail",compact('user','barang','poin'));
    }
}

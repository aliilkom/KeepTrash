<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tukarpoin;

class TukarpoinController extends Controller
{
    public function index(){
        $tukarpoin = Tukarpoin::all();
        return view("poin.poin", compact("tukarpoin"));
    }
    public function create(){
        return view("poin.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|max:255',
            'nilai_tukar' => 'required|numeric',
        ]);

        $tukarpoin = new Tukarpoin([
            'nama_barang' => $request->get('nama_barang'),
            'nilai_tukar'=> $request->get('nilai_tukar'),
            'keterangan'=> $request->get('keterangan'),
          ]);
        $tukarpoin->save();
        return redirect('/tukarpoin')->with('success', 'Barang is successfully saved');
    }
    public function edit($id)
    {
        $tukarpoin = Tukarpoin::find($id);
        return view('poin.edit', compact('tukarpoin'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required|max:255',
            'nilai_tukar' => 'required|numeric',
        ]);
        
        $tukarpoin = Tukarpoin::find($id);
        $tukarpoin->nama_barang = $request->get('nama_barang');
        $tukarpoin->nilai_tukar = $request->get('nilai_tukar');
        $tukarpoin->keterangan = $request->get('keterangan');
        $tukarpoin->save();

      return redirect('/tukarpoin')->with('success', 'Barang bekas has been updated');
    }
    public function destroy($id)
    {
     $tukarpoin = Barangbekas::find($id);
     $tukarpoin->delete();

     return redirect('/tukarpoin')->with('success', 'Barang has been deleted Successfully');
    }
}

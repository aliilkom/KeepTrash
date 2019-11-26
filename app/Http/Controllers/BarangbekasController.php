<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barangbekas;

class BarangbekasController extends Controller
{
    public function index(){
        $barangbekas = Barangbekas::all();
        return view("bekas.bekas", compact("barangbekas"));
    }
    public function create(){
        return view("bekas.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang_bekas' => 'required|max:255',
            'berat' => 'required|numeric',
            'poin' => 'required|numeric',
        ]);

        $barangbekas = new Barangbekas([
            'nama_barang_bekas' => $request->get('nama_barang_bekas'),
            'berat'=> $request->get('berat'),
            'poin'=> $request->get('poin'),
            'keterangan'=> $request->get('keterangan'),
          ]);
        $barangbekas->save();
        return redirect('/barangbekas')->with('success', 'Show is successfully saved');
    }
    public function edit($id)
    {
        $barangbekas = Barangbekas::find($id);
        return view('bekas.edit', compact('barangbekas'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang_bekas' => 'required|max:255',
            'berat' => 'required|numeric',
            'poin' => 'required|numeric',
        ]);
        
        $barangbekas = Barangbekas::find($id);
        $barangbekas->nama_barang_bekas = $request->get('nama_barang_bekas');
        $barangbekas->berat = $request->get('berat');
        $barangbekas->poin = $request->get('poin');
        $barangbekas->keterangan = $request->get('keterangan');
        $barangbekas->save();

      return redirect('/barangbekas')->with('success', 'Barang bekas has been updated');
    }
    public function destroy($id)
    {
     $barangbekas = Barangbekas::find($id);
     $barangbekas->delete();

     return redirect('/barangbekas')->with('success', 'Stock has been deleted Successfully');
    }
}

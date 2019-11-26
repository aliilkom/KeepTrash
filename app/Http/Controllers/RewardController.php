<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reward;

class RewardController extends Controller
{
    public function index(){
        $reward = Reward::all();
        return view("reward.reward", compact("reward"));
    }
    public function create(){
        return view("reward.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_reward' => 'required|max:255',
            'keterangan' => 'required|max:255',
        ]);

        $reward = new Reward([
            'nama_reward' => $request->get('nama_reward'),
            'keterangan'=> $request->get('keterangan'),
          ]);
        $reward->save();
        return redirect('/reward')->with('success', 'Reward is successfully saved');
    }
    public function edit($id)
    {
        $reward = Reward::find($id);
        return view('reward.edit', compact('reward'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_reward' => 'required|max:255',
            'keterangan' => 'required|max:255',
        ]);
        
        $reward = Reward::find($id);
        $reward->nama_reward = $request->get('nama_reward');
        $reward->keterangan = $request->get('keterangan');
        $reward->save();

      return redirect('/reward')->with('success', 'Reward has been updated');
    }
    public function destroy($id)
    {
     $reward = Reward::find($id);
     $reward->delete();
     return redirect('/reward')->with('success', 'Reward has been deleted Successfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kontak;

class kontak2controller extends Controller
{
    public function index()
    {
        $data1 = kontak::all();
        return view ('kontak.index',compact('data1'),[
            'title' => 'Kontak'
        ]);
    }

    public function show($id)
    {
        $data1 = kontak::findorfail($id);
        return view ('kontak.show',compact('data1'),[
            'title' => 'show'
        ]);
    }

    public function destroy($id)
    {
        $kontaks = kontak::findorfail($id);
        $kontaks->delete();
        return redirect('/kontak2')->with('succes','data berhasi; dihapus');

    }
    //
}

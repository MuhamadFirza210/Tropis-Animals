<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kontak;
use Illuminate\Support\str;

class KontaksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layout.kontak',[
            'title'=>'kontak'
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layout.kontak');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'subject'=>'',
            'nama'=>'required',
            'deskripsi'=>'required',
            'email'=> 'required|email:dns',
        ]);

        $kontaks = new kontak();
        $kontaks->subject = $request->subject;
        $kontaks->nama = $request->nama;
        $kontaks->email = $request->email;
        $kontaks->deskripsi = $request->deskripsi;
        $kontaks->excerpt = Str::limit(strip_tags($request->deskripsi), 20, '...');


        $kontaks->save();

        return redirect('/kontak')->with('success', 'Anda Berhasil Kontak Kami :)');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

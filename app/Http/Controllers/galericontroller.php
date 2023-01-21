<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\galeri;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class galericontroller extends Controller
{
    //
    public function index()
    {
        $data = galeri::all();
        return view ('galeri.index',compact('data'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('galeri.create');
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
            'image'=>'required|image|file|max:1024',


        ]);
        $galeris = new galeri();
        $galeris ->image =$request ->file('image')->store('beritafoto');

        $galeris-> save();

        return redirect('/galeri')->with('succes','Data Sukses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = galeri::findOrFail($id);
        return view ('galeri.show' , compact('data'));
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
        $data = galeri::findOrfail($id);
        return view ('galeri.edit',compact('data'));
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
        $data = $request->validate([
            'image'=>'required|image',

        ]);
        $galeris = galeri::findOrfail($id);
       if($request->file('image')){
        if ($request->oldimage){
            Storage::delete($request->oldimage);
        }
        $galeris->image = $request->file('image')->store('beritafoto');

       }
        $galeris->save();

        return redirect('/galeri')->with('success','Data Sukses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeris = galeri::findOrFail($id);
        if($galeris->image){
            Storage::delete($galeris->image);
        }
        $galeris -> delete();
        return redirect('/galeri')->with('succes','Data Sukses');
        //
    }
}

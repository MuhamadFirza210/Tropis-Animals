<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita;
use App\Models\kategori;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class beritacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $datas = berita::all();
        return view ('berita.index', [
            'datas' => berita::all(),

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
        $categories = kategori::all();
        return view('berita.create', compact('categories'));
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
            'image' => 'required|image|file|max:1024',
            'title' => 'required',
            'id_kategori' => 'required',
            'body' => 'required',
        ]);

        $berita = new berita();
        $berita->image = $request->file('image')->store('beritafoto');
        $berita->title = $request->title;
        $berita->id_kategori = $request->id_kategori;
        $berita->body = $request->body;
        $berita->bodysingkat = Str::limit(strip_tags($request->body), 100);
        $berita->save();

        return redirect('/berita')->with('success', 'Data Sukses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = berita::findOrFail($id);
        return view ('berita.show' , compact('data'));
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
        $categories = kategori::all();
        $data = berita::findOrfail($id);
        return view ('berita.edit',compact('data','categories'));
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
        $beritas = berita::findOrfail($id);
        $data = $request->validate([
            'image'=>'required',
            'title'=>'required',
            'body'=>'required'
        ]);
        if($request->file('image')){
            if ($request->oldimage){
                Storage::delete($request->oldimage);
            }
            $beritas->image = $request->file('image')->store('galeri/beritafoto');
        }
        $beritas->title =$request->title;
        $beritas->id_kategori =$request->id_kategori;
        $beritas->body =$request->body;
        $beritas->bodysingkat= Str::limit(strip_tags($request->body),100);
        // dd($beritas);
        $beritas->save();

        return redirect('/berita')->with('success','Data Sukses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $beritas = berita::findOrFail($id);
        if($beritas->image){
            Storage::delete($beritas->image);
        }
        $beritas -> delete();
        return redirect('/berita')->with('succes','Data Sukses');
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Str;
class AboutController extends Controller
{
    public function index()
    {
        $about = About::all();
        return view('tentangkami.index',compact('about'));
    }

    public function show($id)
    {
        $data = About::findOrFail($id);
        return view ('tentangkami.show',compact('data'));
        //
    }

    public function edit($id)
    {
        $data = About::findOrFail($id);
        return view ('tentangkami.edit',compact('data'));
        //
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title'=>'required',
            'body' => 'required',
            'subtitle' =>'required'

    ]);
    $tentangkamis = About::findOrFail($id);
    $tentangkamis->title = $request->title;
    $tentangkamis->body = $request->body;
    $tentangkamis->bodysingkat = Str::limit(strip_tags($request->body),300);
    $tentangkamis->subtitle = $request->subtitle;
    $tentangkamis->save();

    return redirect('/tentangkami')->with('succes', 'Data Sukses');
        //
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tentangkami;
use Illuminate\Support\Str;

class tentangkamicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = tentangkami::all();
        return view ('tentangkami.index',compact('data'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tentangkami.create');
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
                'title'=>'required',
                'body' => 'required',
                'subtitle' => 'required'

        ]);
        $tentangkamis = new tentangkami();
        $tentangkamis->title = $request->title;
        $tentangkamis->body = $request->body;
        $tentangkamis->bodysingkat = Str::limit(strip_tags($request->body),300);
        $tentangkamis->subtitle = $request->subtitle;
        $tentangkamis->save();

        return redirect('/tentangkami')->with('succes', 'Data Sukses');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = tentangkami::findOrFail($id);
        return view ('tentangkami.show',compact('data'));
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
        $data = tentangkami::findOrFail($id);
        return view ('tentangkami.edit',compact('data'));
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
            'title'=>'required',
            'body' => 'required',
            'subtitle' =>'required'

    ]);
    $tentangkamis = tentangkami::findOrFail($id);
    $tentangkamis->title = $request->title;
    $tentangkamis->body = $request->body;
    $tentangkamis->bodysingkat = Str::limit(strip_tags($request->body),300);
    $tentangkamis->subtitle = $request->subtitle;
    $tentangkamis->save();

    return redirect('/tentangkami')->with('succes', 'Data Sukses');
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
        $tentangkamis = tentangkami::findOrFail($id);
        $tentangkamis->delete();
        return redirect('/tentangkami')->with('succes', 'Data Sukses');
        //
    }
}

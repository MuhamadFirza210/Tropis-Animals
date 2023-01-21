<?php

namespace App\Http\Controllers;
use App\Models\visimisi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class visimisicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = visimisi::all();
        return view ('visimisi.index',compact('data'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('visimisi.create');
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
            'visi'=>'required',
            'visibody' => 'required',
            'misi' => 'required',
            'misibody' => 'required'

        ]);

        $visimisis = new visimisi();
        $visimisis->visi = $request->visi;
        $visimisis->visibody = $request->visibody;
        $visimisis->misi = $request->misi;
        $visimisis->misibody = $request->misibody;
        $visimisis->save();

        return redirect('/visimisi')->with('succes', 'Data Sukses');

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
        $data = visimisi::findOrFail($id);
        return view ('visimisi.show',compact('data'));
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
        $data = visimisi::findOrFail($id);
        return view ('visimisi.edit',compact('data'));
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
        {
            $data = $request->validate([
                'visi'=>'required',
                'visibody' => 'required',
                'misi' => 'required',
                'misibody' => 'required',

            ]);

            $visimisis = visimisi::findOrFail($id);
            $visimisis->visi = $request->visi;
            $visimisis->visibody = $request->visibody;
            $visimisis->misi = $request->misi;
            $visimisis->misibody = $request->misibody;
            $visimisis->save();

            return redirect('/visimisi')->with('succes', 'Data Sukses');

            //
        }
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
        $visimisis = visimisi::findOrFail($id);
        $visimisis->delete();
        return redirect('/visimisi')->with('succes', 'Data Sukses');
        //
    }
}

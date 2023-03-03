<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Models\berita;
use App\Models\galeri;
use App\Models\tentangkami;
use App\Models\visimisi;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('layout.index',[
            'berita' =>berita::all(),
            'galeri' =>galeri::all(),
            'dataartikel' =>About::find(1),
            'title' =>"home"
        ]);


    }
    public function tetangkami()
    {
        return view('layout.tentang',[
            'visimisi'=>visimisi::all(),
            'dataartikel' =>About::find(1),
            'title' =>'tentang'
        ]);


    }
    public function berita()
    {
        return view('layout.berita',[

            'berita' =>berita::all(),
            'galeri' =>galeri::all(),
            'dataartikel' =>tentangkami::find(1),
            'title' =>'berita'


        ]);


    }
    public function galeri()
    {
        return view('layout.galeri',[

            'galeri' =>galeri::all(),
            'title' =>'galeri'


        ]);


    }

    public function showberita(berita $berita)
    {
        return view('layout.showberita',[
            'berita'=>$berita,
            'title'=>'showberita'

        ]);

    }
}

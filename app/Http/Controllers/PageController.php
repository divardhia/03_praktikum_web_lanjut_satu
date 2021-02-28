<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Products
    public function produk()
    {
        return view('product');
    }

    public function tumblr()
    {
        return view('productdetail', ['name' => 'Tumblr Gotoon', 'harga' => 'Rp 245.000']);
    }

    public function magazine()
    {
        return view('productdetail', ['name' => 'Trendmo Magz', 'harga' => 'Rp 95.000']);
    }

    public function album()
    {
        return view('productdetail', ['name' => 'Album BOL', 'harga' => 'Rp 285.000']);
    }

    public function slipper()
    {
        return view('productdetail', ['name' => 'Stitch Slipper', 'harga' => 'Rp 85.000']);
    }

    // News
    public function berita($id)
    {
        if ($id == 1) {
            return view('news', ['news' => 'Utama', 'paragraf' => 'GOT7 baru saja merilis lagu comeback mereka yang diberi judul ENCORE. 
            Lagu tersebut merupakan single perdana yang dirilis mereka usai hengkang dari JYP Entertainment.
            Tak lama setelah lagu tersebut dirilis, ENCORE langsung merajai chat iTunes dunia. 
            Lagu tersebut berada di posisi pertama chart iTunes di 40 negara, termasuk Amerika Serikat.']);
        }
        else if ($id == 2){
            return view('news', ['news' => 'COVID', 'paragraf' => 'Beberapa waktu lalu masyarakat dikagetkan dengan 
            kebijakan santunan COVID-19 dihapus. Ahli waris korban COVID-19 tidak bisa mendapat santunan kematian 
            dari pemerintah sebesar Rp 15 juta seperti tahun 2020.']);
        }
        else {
            return view('news');
        }
    }

    // Program
    public function program()
    {
        return view('program');
    }

    public function karir()
    {
        return view('programdetail', ['name' => 'Karir', 'keterangan' => 'Dapat memilih beberapa pekerjaan 
        seperti game, backend, sales, dan web']);
    }

    public function magang()
    {
        return view('programdetail', ['name' => 'Magang', 'keterangan' => 'Magang dalam bidang teknis seperti Design 
        (Game design, Web/App design, UI/UX design), Art & Illustration 
        (Sketch, Storyboard, Character Dev, Game Assets Production, Animation Assets Production), 
        3D Creation, Video & Animation, Audio Engineering, QA & Testing dan Programming (Game, Web, Apps).']);
    }

    public function kunjungan()
    {
        return view('programdetail', ['name' => 'Kunjungan Industri', 'keterangan' => 'Seminar tentang perkembangan 
        industri terbaru terutama terkait dengan industri kreatif game, animasi, komik, IP (Intelectual Property)']);
    }

    // About
    public function about()
    {
        return view('about-us', ['nama' => "Diva Ardhia Rahmania", 'nim' => '1941720184', 'kelas' => 'TI-2C']);
    }
}

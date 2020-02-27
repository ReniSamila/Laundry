<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;

class FrontendPegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('contact', compact('pegawai'));
    }

    public function store(Request $request)
    {
        $pegawai = new Pegawai;
        $pegawai->nama = $request->get('nama');
        $pegawai->last = $request->get('last');
        $pegawai->email = $request->get('email');
        $pegawai->subject = $request->get('subject');
         $pegawai->message = $request->get('message');
        $pegawai->save();

        Session::flash("flash_notofication", [
            "level" => "success",
            "message" => "Berhasil menyimpan <b>$pegawai->nama</b>"
        ]);
        return redirect()->back();
    }
}

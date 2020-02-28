<?php

namespace App\Http\Controllers;

use App\Wali;
use App\Mahasiswa;
use Illuminate\Http\Request;

class WaliController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // } 
    public function index()
    {
        $wl = Wali::with('mahasiswa')->get();
        return view('wali.index',compact('wl'));
    }


    public function create()
    {
        $mhs = Mahasiswa::all();
        return view('wali.create',compact('mhs'));
    }


    public function store(Request $request)
    {
        $wl= new Wali();
        $wl->nama = $request->nama;
        $wl->id_mahasiswa = $request->id_mahasiswa;
        $wl->save();
        return redirect()->route('wali.index')
            ->with(['message'=>'Berhasil dibuat']);   
    }

    public function show($id)
    {
        $wl = Wali::findOrFail($id);
        return view('wali.show',compact('wl'));
    }

    public function edit($id)
    {
        $mhs = Mahasiswa::all();
        $wl = Wali::findOrFail($id);
        return view('wali.edit',compact('wl','mhs'));
    }


    public function update(Request $request, $id)
    {
        $wl = Wali::findOrFail($id);
        $wl->nama = $request->nama;
        $wl->id_mahasiswa = $request->id_mahasiswa;
        $wl->save();
        return redirect()->route('wali.index')
            ->with(['message'=>'Berhasil dibuat']);   
    }

    public function destroy($id)
    {
        $wl = Wali::findOrFail($id)->delete();
        return redirect()->route('wali.index')
        ->with(['message1'=>'Berhasil dihapus']);
    }
}

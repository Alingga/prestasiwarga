<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Pengguna;
use App\Models\Datawarga;
use App\Models\Kelurahan;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class BiodataController extends Controller
{
    //
    public function index(Datawarga  $datawarga)
    {
        $datawarga = Auth::user()->datawarga;
        return view('user.biodata.home', compact('datawarga'));
    }
    public function edit( $biodata)
    {
        //
        $kelurahan = Kelurahan::all();

        $biodata = Datawarga::find($biodata);
        return view('user.biodata.edit', compact('biodata','kelurahan'));
    }
    public function update(Request $request,  $biodata)
    {
        //
        $user = Auth::user();
        $biodata = Datawarga::find ($biodata);
        $request->validate([
            'nik'=>'required|string|max:100',


        ]);
        $biodata->update([
            'nik'=>$request->nik,
            'kelurahan_id'=> $request->kelurahan_id,
            'jk' =>$request->jk,
            'ttl' =>$request->ttl,
            'tlp' =>$request->tlp,
            'umur' =>$request->umur,
            'alamat' =>$request->alamat,
            'rt' =>$request->rt

        ]);
        return redirect(route('biodata.index'));
    }

    public function create()
    {
        //
         $user = Auth::user();
         $kelurahan = Kelurahan::all();
         return view('user.biodata.create', compact('user','kelurahan'));
    }
    public function store(Request $request)
    {
        //
         $request->validate([
            'alamat'=>'required|string|max:100'
        ]);

        $datawarga = Datawarga::create([
            'nik'=>$request->nik,
            'user_id'=>$request->user_id,
            'kelurahan_id'=>$request->kelurahan_id,
            'jk'=>$request->jk,
            'ttl'=>$request->ttl,
            'tlp'=>$request->tlp,
            'umur'=>$request->umur,
            'alamat'=>$request->alamat,
            'rt'=>$request->rt
        ]);

        return redirect(route('biodata.index'));
    }

}

<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Pengguna;
use App\Models\Datawarga;
use App\Models\Kelurahan;
use App\Models\User;
use Illuminate\Http\Request;use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class UserDataController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('user.datadiri.home', compact('user'));
    }

    public function edit( $pengguna)
    {
        //
        $pengguna = Pengguna::find($pengguna);
        return view('user.datadiri.edit', compact('pengguna'));
    }
    public function update(Request $request, $pengguna)
    {
        //
        $user = Auth::user();
        $pengguna = Pengguna::find ($pengguna);
        $request->validate([
            'name'=>'required|string|max:100',


        ]);
        $pengguna->update([
            'name'=>$request->name,
            'email'=> $request->email

        ]);
        return redirect(route('datadiri.index'));
       }

}



<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class PenggunaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $pengguna = Pengguna::all();
        // return $pengguna;
        $user = Auth::user();
        $s = request()->s ?? "";
        $datas = Pengguna::where(function($w)use($s){
            $w->where('name','LIKE','%'.$s.'%');
        })->orderBy('created_at','DESC')->paginate(10);
        return view('admin.pengguna.home',compact('datas'));

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
            'email'=> $request->email,
            'role' =>$request->role

        ]);
        return redirect(route('pengguna.index'));
       }
 public function edit(Pengguna $pengguna)
    {
        //
        $pengguna = Pengguna::find($pengguna)->first();
        return view('admin.pengguna.edit', compact('pengguna'));
    }
    public function destroy(Pengguna $pengguna)
    {
        //
        $user = Auth::user();

        $pengguna->delete();
        // return $datawarga;
        return redirect(route('pengguna.index'));
    }
}

<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Datawarga;
use App\Models\Kelurahan;
use App\Models\User;
use Illuminate\Http\Request;

class DatawargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        $user = Auth::user();
        $s = request()->s ?? "";
        $datas = Datawarga::whereHas('user',function($w)use($s)

        {
            $w->where('name', 'like', "%$s%")->orwhere('nik', 'like', "%$s%");
        })->orderBy('created_at','DESC')->paginate(10);
        return view('admin.datawarga.home',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datawarga  $datawarga
     * @return \Illuminate\Http\Response
     */
    public function show(Datawarga $datawarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datawarga  $datawarga
     * @return \Illuminate\Http\Response
     */
    public function edit(Datawarga $datawarga)
    {
        //
        $kelurahan = Kelurahan::all();
        $user = User::all();
        return view('admin.datawarga.edit', compact('kelurahan','user','datawarga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datawarga  $datawarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $datawarga)
    {
        //
        $user = Auth::user();
        $datawarga = Datawarga::find ($datawarga);
        $request->validate([
            'nik'=>'required|string|max:100',


        ]);
        $datawarga->update([
            'nik'=>$request->nik,
            'kelurahan_id'=> $request->kelurahan_id,
            'jk' =>$request->jk,
            'ttl' =>$request->ttl,
            'tlp' =>$request->tlp,
            'umur' =>$request->umur,
            'alamat' =>$request->alamat,
            'rt' =>$request->rt

        ]);
        return redirect(route('datawarga.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datawarga  $datawarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datawarga $datawarga)
    {
        //
        $user = Auth::user();

        $datawarga->delete();
        // return $datawarga;
        return redirect(route('datawarga.index'));
    }

}

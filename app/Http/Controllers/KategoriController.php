<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();
        $s = request()->s ?? "";
        $datas = Kategori::where(function($w)use($s){
            $w->where('kategori','LIKE','%'.$s.'%');
        })->orderBy('created_at','DESC')->paginate(10);
        return view('admin.kategori.home',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $user = Auth::user();
         return view('admin.kategori.create');
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
        $request->validate([
            'kategori'=>'required|string|max:100'
        ]);

        $kategori = Kategori::create([
            'kategori'=>$request->kategori
        ]);

        // return $kategori

        return redirect(route('admin.kategori'))->with(['success'=>'Menambah Kategori Baru Dengan Nama : '.$kategori->kategori]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit( $kategori)
    {
        //
        $user = Auth::user();
        $kategori = Kategori::find($kategori);
        // return $kategori;

        return view('admin.kategori.edit',compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $kategori)
    {
        //
        $user = Auth::user();
        $kategori = Kategori::find ($kategori);
        $request->validate([
            'kategori'=>'required|string|max:100'
        ]);
        $kategori->update([
            'kategori'=>$request->kategori
        ]);
        return redirect(route('admin.kategori'))->with(['success'=>'Mengupdate Data Kategori Dengan Nama : '.$kategori->kategori]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy( $kategori)
    {
        //
        $user = Auth::user();

        $kategori = Kategori::find ($kategori);
        $kategori->delete();
        // return $kategori;
        return redirect()->route('admin.kategori')
            ->with('success','Kategori deleted successfully');
    }
}

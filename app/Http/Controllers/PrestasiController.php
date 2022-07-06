<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Datawarga;
use App\Models\Kelurahan;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Prestasi;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class PrestasiController extends Controller
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
        $datas = Prestasi::where(function($w)use($s){
            $w->where('Validasi','LIKE','%'.$s.'%');
        })->orderBy('created_at','DESC')->paginate(10);
        return view('admin.prestasi.home',compact('datas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('admin.prestasi.create');
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
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function show(Prestasi $prestasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestasi $prestasi)
    {
        //
        $datawarga = Datawarga::all();
        $kategori = Kategori::all();
        return view('admin.prestasi.edit', compact('kategori','datawarga','prestasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $prestasi)
    {
        //
        $user = Auth::user();
        $prestasi = Prestasi::find ($prestasi);
        $request->validate([
            'prestasi'=>'required|string|max:100',


        ]);
        $prestasi = Prestasi::findOrFail($prestasi->id);

          if($request->file('image') == "") {

        $prestasi->update([
            'prestasi'=>$request->prestasi,
            'Validasi'=> $request->Validasi

        ]);
        } else {

        //hapus old image
        Storage::disk('local')->delete('public/gambar/'.$prestasi->image);

        //upload new image
        $image = $request->file('image');
        $image->storeAs('public/gambar', $image->hashName());

        $prestasi->update([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->content
        ]);

    }
        return redirect(route('prestasi.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestasi $prestasi)
    {
        //
        $user = Auth::user();

        $prestasi->delete();
        // return $prestasi;
        return redirect(route('prestasi.index'));
    }
}

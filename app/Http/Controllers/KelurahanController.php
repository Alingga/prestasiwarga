<?php

namespace App\Http\Controllers;


use Auth;
use App\Models\Kelurahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class KelurahanController extends Controller
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
        $datas = Kelurahan::where(function($w)use($s){
            $w->where('nama_kelurahan','LIKE','%'.$s.'%');
        })->orderBy('created_at','DESC')->paginate(10);
        return view('admin.kelurahan.home',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.kelurahan.create');
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
            'nama_kelurahan'=>'required|string|max:100'
        ]);

        $kelurahan = Kelurahan::create([
            'nama_kelurahan'=>$request->nama_kelurahan
        ]);

        return redirect(route('admin.kelurahan'))->with(['success'=>'Menambah Data Kelurahan Baru Dengan Nama : '.$kelurahan->nama_kelurahan]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function show(Kelurahan $kelurahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function edit( $kelurahan)
    {
        //
         $user = Auth::user();

        $kelurahan = Kelurahan::find($kelurahan);
        // return $kelurahan;

        return view('admin.kelurahan.edit',compact('kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $kelurahan)
    {
        //
        $user = Auth::user();
        $kelurahan = Kelurahan::find ($kelurahan);
        $request->validate([
            'nama_kelurahan'=>'required|string|max:100'
        ]);
        $kelurahan->update([
            'nama_kelurahan'=>$request->nama_kelurahan
        ]);
        return redirect(route('admin.kelurahan'))->with(['success'=>'Mengupdate Data Provinsi Dengan Nama : '.$kelurahan->nama_kelurahan]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function destroy( $kelurahan)
    {
        //
        $user = Auth::user();

        $kelurahan = Kelurahan::find ($kelurahan);
        $kelurahan->delete();
        // return $kelurahan;
        return redirect()->route('admin.kelurahan')
            ->with('success','Kelurahan deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use Auth;

class ProvinsiController extends Controller
{
   
    public function index()
    {
        $user = Auth::user();
          $s = request()->s ?? "";
        $datas = Provinsi::where(function($w)use($s){
            $w->where('nama_provinsi','LIKE','%'.$s.'%');
        })->orderBy('created_at','DESC')->paginate(10);
        return view('admin.provinsi.home',compact('datas'));

    }

    
    public function create()
    {
        //menambah data
        return view('admin.provinsi.create');
    }

   
    public function store(Request $request)
    {
        //store data
        $request->validate([
            'nama_provinsi'=>'required|string|max:100'
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi'=>$request->nama_provinsi
        ]);

        return redirect(route('admin.provinsi'))->with(['success'=>'Menambah Data Provinsi Baru Dengan Nama : '.$provinsi->nama_provinsi]);
    }

    
     
    public function show($id)
    {
        //
        $user = Auth::user();
        return view('admin.provinsi.show',compact('provinsi'));
    }

      public function edit($provinsi)
    {
         $user = Auth::user();

        $provinsi = Provinsi::find($provinsi);

        return view('admin.provinsi.edit',compact('provinsi'));

        // $provinsi = Provinsi::find($provinsi);
        // return $provinsi ;


    }

       public function update(Request $request,  $provinsi)
    {
        //
         $user = Auth::user();
        $provinsi = Provinsi::find ($provinsi);
        $request->validate([
            'nama_provinsi'=>'required|string|max:100'
        ]);
        $provinsi->update([
            'nama_provinsi'=>$request->nama_provinsi
        ]);
        return redirect(route('admin.provinsi'))->with(['success'=>'Mengupdate Data Provinsi Dengan Nama : '.$provinsi->nama_provinsi]);
        // $user = Auth::user();
        // $request->validate([
        //     'nama_provinsi'=>'required|string|max:100'
        // ]);
        // $provinsi = Provinsi::all();
        // $provinsi->update([
        //     'nama_provinsi'=>$request->nama_provinsi
        // ]);

        // return redirect(route('admin.provinsi'))->with(['success'=>'Mengupdate Data Provinsi Dengan Nama : '.$provinsi->nama_provinsi]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($provinsi)
    {   

         $user = Auth::user();
        
        // $provinsi = Provinsi::find($provinsi)->delete();

        //  return redirect()->route('admin.provinsi')->with('success','Post updated successfully');

        $provinsi = Provinsi::find ($provinsi);
        $provinsi->delete();
        // return $provinsi;
        return redirect()->route('admin.provinsi')
            ->with('success','Product deleted successfully');
        
    }
}

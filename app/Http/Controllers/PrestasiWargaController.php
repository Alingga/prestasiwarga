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


class PrestasiWargaController extends Controller
{
	public function index(Prestasi $prestasi)
    {
        
       

        if (is_null(  $prestasi = Auth::user()->datawarga)) {
            # code...""
                return redirect(route('biodata.index'));
        } else {
            # code...
             $prestasi = Auth::user()->datawarga->prestasi ;
            return view('user.prestasiwarga.home', compact('prestasi'));
        }
        
            
    
        
    }
    public function create()
    {
        //
         $prestasi = Auth::user();
         $kategori = Kategori::all();
         return view('user.prestasiwarga.create', compact('prestasi','kategori'));
    }

    public function store(Request $request)
    {
    	$request->validate([
            'image'     => 'required|image|mimes:png,jpg,jpeg',
        	'prestasi'     => 'required'
        ]);
        $image = $request->file('image');
    	$image->storeAs('public/gambar', $image->hashName());

        $prestasi = Prestasi::create([
        	'kategori_id' =>$request->kategori_id,
        	'datawarga_id' =>$request->datawarga_id,
        	'image'     => $image->hashName(),
        	'Validasi'     => ('Menunggu'),
        	'prestasi'  => $request->prestasi


        ]);

        // return $kategori

        return redirect(route('prestasiwarga.index'));

    }

}

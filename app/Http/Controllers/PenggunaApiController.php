<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class PenggunaApiController extends Controller
{
    //
    public function index(){
    	$pengguna = Pengguna::all();
    	return $pengguna;
    }
}

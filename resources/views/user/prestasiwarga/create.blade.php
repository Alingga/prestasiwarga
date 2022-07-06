
@extends('user.layouts.app')

@section('title', 'Dashboard')



@section('content')


<form action="{{ route('prestasiwarga.store') }}" method="Post" enctype="multipart/form-data">
                        
    @csrf
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <b>Data Prestasi</b>
            </div>
            <div class="float-right">
            </div>
        </div>

        <div class="card-body">
            
                <div class="form-group">
                    <label for="datawarga_id">Nama</label>
                    <p type="text"  class="form-control">
                    	{{ $prestasi->datawarga->user->name }}
                    	<input type="text" readonly class="invisible" name="datawarga_id" id="datawarga_id" required placeholder="Nama" 
                    value="{{ $prestasi->datawarga->id}}">
                    </p>
                    
                </div>
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <p type="text"  class="form-control" name="nik" id="nik">
                    	{{ $prestasi->datawarga->nik }}
                    </p>
                </div>
                <div class="form-group">
                    <label for="prestasi">Prestasi</label>
                    <input type="text" class="form-control" name="prestasi" id="prestasi" required placeholder="Keterangan Prestasi" >
                </div>
                 <div class="form-group">
                    <label for="kategori_id">Kategori</label>
                    <select name="kategori_id" class="form-control">
                        <option value="">Pilih Kategori</option>
                        @foreach ($kategori as $item)
                        <option value="{{$item->id}}"> {{$item->kategori}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="font-weight-bold">
                <label>Gambar</label>
                     <input class="form-control" type="file" name="image"/>
                    <p class="form-text">Tambah Gambar</p>
                <img src="" height="75" />
            </div>
               

                <div class="form-group">
                    <button class="btn btn-success"  value="Publish">
                        Save
                    </button>
                </div>
        </div>
    </div>
</form>
@endsection


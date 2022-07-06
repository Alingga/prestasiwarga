
@extends('user.layouts.app')

@section('title', 'Dashboard')



@section('content')


<form action="{{ route('biodata.store') }}" class="form" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <b>Add Biodata</b>
            </div>
            <div class="float-right">
                
            </div>
            
        </div>

        <div class="card-body">
            
                <div class="">
                    <label for="user_id">Nama</label>
                    <p class="form-control">{{$user->name}}</p>
                    <input type="text" readonly class="invisible" name="user_id" id="user_id" required placeholder="Nama" value="{{$user->id}}">
                </div>
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" name="nik" id="nik" required placeholder="Nomer Induk Keluarga" value="">
                </div>

                <div class="form-group">
                    <label for="kelurahan_id">Kelurahan</label>
                    <select name="kelurahan_id" class="form-control">
                        <option value="">Kelurahan</option>
                        @foreach ($kelurahan as $item)
                        <option value="{{$item->id}}"> {{$item->nama_kelurahan}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select name="jk" id= "jk" class="form-control">
                        <option value="">
                        	Jenis Kelamin
                        </option>
                        <option value="Laki-Laki">
                        Laki-Laki
                        </option>
                        <option value="Perempuan">
                        Perempuan
                        </option>
                    </select>              
                </div>

                <div class="form-group">
                    <label for="ttl">Tempat Tanggal Lahir</label>
                    <input type="text" class="form-control" name="ttl" id="ttl" required placeholder="Tempat Tanggal Lahir" value="">
                </div>

                <div class="form-group">
                    <label for="tlp">No Telepon</label>
                    <input type="text" class="form-control" name="tlp" id="tlp" required placeholder="Nomer Telepon" value="">
                </div>

                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="text" class="form-control" name="umur" id="umur" required placeholder="Umur" value="">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" required placeholder="Alamat" value="">
                </div>

                <div class="form-group">
                    <label for="rt">RT</label>
                    <input type="text" class="form-control" name="rt" id="rt" required placeholder="Nomer RT" value="">
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


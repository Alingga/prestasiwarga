
@extends('admin.layouts.app')

@section('title', 'Dashboard')



@section('content')


<form action="{{ route('datawarga.update',$datawarga->id) }}" class="form" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="_method" value="put">
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <b>Data Warga</b>
            </div>
            <div class="float-right">
            </div>
        </div>

        <div class="card-body">
            
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" readonly class="form-control" name="name" id="name" required placeholder="Nama" value="{{  old('$user_id', $datawarga->user->name) }}">
                </div>
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" name="nik" id="nik" required placeholder="Nomer Induk Keluarga" value="{{ old('nik', $datawarga->nik) }}">
                </div>

                <div class="form-group">
                    <label for="kelurahan_id">Kelurahan</label>
                    <select name="kelurahan_id" class="form-control">
                        <option value="{{$datawarga->kelurahan_id}}">{{  $datawarga->kelurahan->nama_kelurahan }}</option>
                        @foreach ($kelurahan as $item)
                        <option value="{{$item->id}}"> {{$item->nama_kelurahan}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select name="jk" id= "jk" class="form-control">
                        <option value="{{ old('jk', $datawarga->jk) }}">
                            {{  $datawarga->jk }}
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
                    <input type="text" class="form-control" name="ttl" id="ttl" required placeholder="Tempat Tanggal Lahir" value="{{ old('ttl', $datawarga->ttl) }}">
                </div>

                <div class="form-group">
                    <label for="tlp">No Telepon</label>
                    <input type="text" class="form-control" name="tlp" id="tlp" required placeholder="Nomer Telepon" value="{{ old('tlp', $datawarga->tlp) }}">
                </div>

                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="text" class="form-control" name="umur" id="umur" required placeholder="Umur" value="{{ old('umur', $datawarga->umur) }}">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" required placeholder="Alamat" value="{{ old('alamat', $datawarga->alamat) }}">
                </div>

                <div class="form-group">
                    <label for="rt">RT</label>
                    <input type="text" class="form-control" name="rt" id="rt" required placeholder="Nomer RT" value="{{ old('rt', $datawarga->rt) }}">
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


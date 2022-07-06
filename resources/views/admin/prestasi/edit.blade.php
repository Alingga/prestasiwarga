
@extends('admin.layouts.app')

@section('title', 'Dashboard')



@section('content')


<form action="{{ route('prestasi.update',$prestasi->id) }}" class="form" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="_method" value="put" >
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <b>Data Prestasi</b>
            </div>
            <div class="float-right">
            </div>
        </div>

        <div class="card-body">

            <div class="d-flex justify-content-center">
                    <img src="{{ Storage::url('public/gambar/').$prestasi->image }}" class="img-thumbnail " style="width: 70%" alt="Responsive image">
                </div>
            
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" readonly class="form-control" name="name" id="name" required placeholder="Nama" value="{{  old('$datawarda_id', $prestasi->datawarga->user->name) }}">
                </div>
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" readonly class="form-control" name="nik" id="nik" required placeholder="NIK" value="{{  old('$datawarda_id', $prestasi->datawarga->nik) }}">
                </div>
                <div class="form-group">
                    <label for="prestasi">Prestasi</label>
                    <input type="text" class="form-control" name="prestasi" id="prestasi" required placeholder="Keterangan Prestasi" value="{{  old('$prestasi', $prestasi->prestasi) }}">
                </div>

                <div class="form-group">
                    <label for="Validasi">Validasi</label>
                    <select name="Validasi" id= "Validasi" class="form-control">
                        <option value="{{ old('Validasi', $prestasi->Validasi) }}">
                            {{  $prestasi->Validasi }}
                        </option>
                        <option value="Menunggu">
                        Menunggu
                        </option>
                        <option value="Diterima">
                        Diterima
                        </option>
                        <option value="Ditolak">
                        Ditolak
                        </option>
                    </select>              
                </div>
                <div class="form-group">
                <label>Gambar</label>
                     <input class="form-control" type="file" name="image" value="{{ old('image') }}" />
                    <p class="form-text">Kosongkan jika tidak ingin mengubah gambar.</p>
                <img src="{{ $prestasi->image() }}" height="75" />
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


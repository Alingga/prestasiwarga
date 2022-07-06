
@extends('user.layouts.app')

@section('title', 'Dashboard')

@section('content_header')
    <div class="col-sm-6" >
        <ol class="breadcrumb float-sm-left">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Provinsi</li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
      </div>
  </br>
@stop

@section('content')


<form action="{{ route('datadiri.update',$pengguna->id) }}" 
    class="form" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="_method" value="put">
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <b>Data Diri</b>
            </div>
            <div class="float-right">
            </div>
        </div>

        <div class="card-body">
            
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text"  class="form-control" name="name" id="name" required placeholder="Nama Lengkap" value="{{ old('name', $pengguna->name) }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" required placeholder="Email" value="{{ old('email', $pengguna->email) }}">
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


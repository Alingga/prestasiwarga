

@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content_header')
    <div class="col-sm-6" >
        <ol class="breadcrumb float-sm-left">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Kategori</li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
      </div>
  </br>
@stop

@section('content')


<form action="{{ route('admin.kategori.update',$kategori->id) }}" class="form" method="POST">
    @csrf
    @method('PUT')
    
    <input type="hidden" name="_method" value="put">
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <b>Edit Kategori</b>
            </div>
            <div class="float-right">
                
            </div>
            
        </div>

        <div class="card-body">
            
            
                <div class="form-group">
                    <label for="kategori">Nama Kategori</label>
                    <input type="text" class="form-control" name="kategori" id="kategori" required placeholder="Nama kategori" 
                    value="{{ old('kategori', $kategori->kategori) }}">
                    @error('kategori')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              

                <div class="form-group">
                    <button class="btn btn-success" kategori="status" value="Publish">
                        Save
                    </button>
                </div>
        </div>
    </div>
</form>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
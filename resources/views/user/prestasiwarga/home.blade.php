

@extends('user.layouts.app')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<div class="card">

    <div class="card">
    <div class="card-header">
        <div class="float-left">
            <b>
               <h3>Data Prestasi</h3>
            </b>
        </div>
        <div class="float-right">
            <a href="{{ route('prestasiwarga.create') }}" class="btn btn-primary">
                +Tambah Prestasi
            </a>
        </div>
        
    </div>


        
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>
                        NIK
                    </th>
                    <th>
                        Nama
                    </th>
                    <th>
                        Prestasi
                    </th>
                    <th>
                        Foto
                    </th>
                    <th>
                        Validasi
                    </th>
                    <th>
                        Kategori
                    </th>
                </tr>
            </thead>
            <tbody>
               @foreach ($prestasi as $data)
                    <tr>
                        <td>
                            {{ $data->datawarga->nik }}

                        </td>
                        <td>
                            {{ $data->datawarga->user->name }}
                        </td>
                        <td>
                            {{ $data->prestasi }}
                        </td>
                        <td>
                              <img src="{{ Storage::url('public/gambar/').$data->image }}" class="rounded" style="width: 150px">
                        </td>
                        <td>
                            {{ $data->Validasi }}
                        </td>
                        <td>
                            {{ $data->kategori->kategori }}
                        </td>
                    </tr>
                 @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan=" 2">

                
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
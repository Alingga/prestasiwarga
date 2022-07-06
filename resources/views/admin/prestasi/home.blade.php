

@extends('admin.layouts.app')

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
        
    </div>


        
    <div class="card-body">
        <div class="float-right">
            @include('admin.search.search_form')
        </div>
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
                        Kategori
                    </th>
                    <th>
                        Validasi
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
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
                            {{ $data->kategori->kategori }}
                        </td>
                        <td>
                            {{ $data->Validasi }}
                        </td>
                        


                        <td>
                             <a href="{{ route('prestasi.edit',$data->id) }}" class="btn btn-sm btn-warning">
                                    Edit
                              </a>
                                
                            <form class="d-inline" action="{{ route('prestasi.destroy',$data->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button value="delete" type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    Delete
                                </button>
                            </form>
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
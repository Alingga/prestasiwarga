

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
               <h3>Data Warga</h3>
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
                        Nik
                    </th>
                    <th>
                        Nama
                    </th>
                    <th>
                        Kelurahan
                    </th>
                    <th>
                        J/K
                    </th>
                    <th>
                        Tempat&Tanggal Lahir
                    </th>
                    <th>
                        No.Tlp
                    </th>
                    <th>
                        Umur
                    </th>
                    <th>
                        Alamat
                    </th>
                    <th>
                        RT
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
                            {{ $data->nik }}
                        </td>
                        <td>
                            {{ $data->user->name }}
                        </td>
                        <td>
                            {{ $data->kelurahan->nama_kelurahan }}
                        </td>
                        <td>
                            {{ $data->jk}}
                        </td>
                        <td>
                            {{ $data->ttl }}
                        </td>
                        <td>
                            {{ $data->tlp }}
                        </td>
                        <td>
                            {{ $data->umur }}
                        </td>
                        <td>
                            {{ $data->alamat }}
                        </td>
                        <td>
                            {{ $data->rt }}
                        </td>


                        <td>
                             <a href="{{ route('datawarga.edit',$data->id) }}" class="btn btn-sm btn-warning">
                                    Edit
                              </a>
                                
                            <form class="d-inline" action="{{ route('datawarga.destroy',$data->id) }}" method="post">
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
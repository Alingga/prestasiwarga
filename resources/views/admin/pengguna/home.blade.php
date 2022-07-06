

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
               <h3>Pengguna</h3>
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
                        Nama
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Role
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
                            {{ $data->name }}
                        </td>
                        <td>
                            {{ $data->email }}
                        </td>
                        <td>
                            {{ $data->role}}
                        </td>


                        <td>
                             <a href="{{ route('pengguna.edit',$data->id) }}" class="btn btn-sm btn-warning">
                                    Edit
                              </a>
                                
                            <form class="d-inline" action="{{ route('pengguna.destroy',$data->id) }}" method="post">
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

                        {!! $datas->appends(request()->all())->links() !!}
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
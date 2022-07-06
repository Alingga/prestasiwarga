

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
               <h3>Data User</h3>
            </b>
        </div>
        
    </div>


        
    <div class="card-body">
        <div class="card">
            <div class="card-body">
             <div class="form-group row">
                 <label for="colFormLabel" class="col-sm-2   col-form-label">Nama :</label>
                 <div class="col-sm-10">
                 <p class="form-control" >{{ old('name', $user->name) }}</p>
                 </div>
            </div>
            <div class="form-group row">
                 <label for="colFormLabel" class="col-sm-2   col-form-label">Email :</label>
                 <div class="col-sm-10">
                 <p class="form-control" >{{ old('email', $user->email) }}</p>
                 </div>
            </div>
           <a href="{{ route('datadiri.edit',$user->id) }}" 
            class="btn btn-sm btn-warning"> Edit </a>
        </div>
        
    </div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


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
        <div class="float-right">
            <a href="{{ route('biodata.create') }}" class="btn btn-primary">
                Isi Data Diri
            </a>
        </div>
        
    </div>


        
    <div class="card-body">
        <div class="card">
            <div class="card-body">
             <div class="form-group row">
                 <label for="colFormLabel" class="col-sm-2   col-form-label">Nama :</label>
                 <div class="col-sm-10">
                 <p class="form-control" >
                     <?php if (empty($datawarga->user->name)): 
                        echo "";
                    ?>
                       
                   <?php else: 
                    echo $datawarga->user->name;
                    ;?>
                       
                   <?php endif ?>
                 </p>
                 </div>
            </div>
             <div class="form-group row">
                 <label for="colFormLabel" class="col-sm-2   col-form-label">NIK :</label>
                 <div class="col-sm-10">
                 <p class="form-control" >
                     <?php if (empty($datawarga->nik)): 
                        echo "";
                    ?>
                       
                   <?php else: 
                    echo $datawarga->nik;
                    ;?>
                       
                   <?php endif ?>
                 </p>
                 </div>
            </div>
            <div class="form-group row">
                 <label for="colFormLabel" class="col-sm-2   col-form-label">Email :</label>
                 <div class="col-sm-10">
                 <p class="form-control" >
                      <?php if (empty($datawarga->user->email)): 
                        echo "";
                    ?>
                       
                   <?php else: 
                    echo $datawarga->user->email;
                    ;?>
                       
                   <?php endif ?>
                 </p>
                 </div>
            </div>
            <div class="form-group row">
                 <label for="colFormLabel" class="col-sm-2   col-form-label">Umur :</label>
                 <div class="col-sm-10">
                 <p class="form-control" >
                      <?php if (empty($datawarga->umur)): 
                        echo "";
                    ?>
                       
                   <?php else: 
                    echo $datawarga->umur;
                    ;?>
                       
                   <?php endif ?>
                 </p>
                 </div>
            </div>
            <div class="form-group row">
                 <label for="colFormLabel" class="col-sm-2   col-form-label">Jenis Kelamin:</label>
                 <div class="col-sm-10">
                 <p class="form-control" >
                      <?php if (empty($datawarga->jk)): 
                        echo "";
                    ?>
                       
                   <?php else: 
                    echo $datawarga->jk;
                    ;?>
                       
                   <?php endif ?>
                 </p>
                 </div>
            </div>
            <div class="form-group row">
                 <label for="colFormLabel" class="col-sm-2   col-form-label">Tempat Tanggal Lahir :</label>
                 <div class="col-sm-10">
                 <p class="form-control" >
                     <?php if (empty($datawarga->ttl)): 
                        echo "";
                    ?>
                       
                   <?php else: 
                    echo $datawarga->ttl;
                    ;?>
                       
                   <?php endif ?>
                 </p>
                 </div>
            </div>
             <div class="form-group row">
                 <label for="colFormLabel" class="col-sm-2   col-form-label">No Telepon :</label>
                 <div class="col-sm-10">
                 <p class="form-control" >
                      <?php if (empty($datawarga->tlp)): 
                        echo "";
                    ?>
                       
                   <?php else: 
                    echo $datawarga->tlp;
                    ;?>
                       
                   <?php endif ?>
                 </p>
                 </div>
            </div>
            <div class="form-group row">
                 <label for="colFormLabel" class="col-sm-2   col-form-label">Alamat :</label>
                 <div class="col-sm-10">
                 <p class="form-control" >
                      <?php if (empty($datawarga->alamat)): 
                        echo "";
                    ?>
                       
                   <?php else: 
                    echo $datawarga->alamat;
                    ;?>
                       
                   <?php endif ?>
                 </p>
                 </div>
            </div>
            <div class="form-group row">
                 <label for="colFormLabel" class="col-sm-2   col-form-label">Kelurahan :</label>
                 <div class="col-sm-10">
                 <p class="form-control" >
                    <?php if (empty($datawarga->kelurahan->nama_kelurahan)): 
                        echo "";
                    ?>
                       
                   <?php else: 
                    echo $datawarga->kelurahan->nama_kelurahan;
                    ;?>

                   <?php endif ?>
                 </p>
                 </div>
            </div>
            <div class="form-group row">
                 <label for="colFormLabel" class="col-sm-2   col-form-label">RT :</label>
                 <div class="col-sm-10">
                 <p class="form-control" >
                      <?php if (empty($datawarga->rt)): 
                        echo "";
                    ?>
                       
                   <?php else: 
                    echo $datawarga->rt;
                    ;?>
                       
                   <?php endif ?>                
                    </p>
                 </div>
            </div>
           </div>
           <a href="
           <?php if (empty($datawarga->id)): 
                        echo "/home";
                    ?>
                       
                   <?php else: 
                    echo  route('biodata.edit',$datawarga->id) ;
                    ;?>
                       
                   <?php endif ?> "
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
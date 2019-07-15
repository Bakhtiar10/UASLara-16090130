@extends('admin.template')

@section('content') 
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Data Anggota</h3>       
                        </div>
                        <div class="panel-body">
                            <form action="/anggota/{{$anggota->id}}/update" method="POST">
                            {{csrf_field()}}
                                <div class="form-group{{$errors->has('nama') ? ' has-error': ''}}">
                                    <label for="exampleInputEmail1">Nama Lengkap</label>
                                    <input name="nama" value="{{$anggota->nama}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama lengkap">      
                                    @if($errors->has('nama'))
                                        <span class="help-block">{{$errors->first('nama')}}</span>
                                    @endif
                                </div>
                                <div class="form-group{{$errors->has('email') ? ' has-error': ''}}">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input name="email" value="{{$anggota->email}}" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">      
                                    @if($errors->has('email'))
                                        <span class="help-block">{{$errors->first('email')}}</span>
                                    @endif
                                </div>
                                <div class="form-group{{$errors->has('alamat') ? ' has-error': ''}}">
                                    <label for="exampleFormControlTextarea1">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$anggota->alamat}}</textarea>
                                    @if($errors->has('alamat'))
                                        <span class="help-block">{{$errors->first('alamat')}}</span>
                                    @endif
                                </div>
                                
                                <div class="form-group{{$errors->has('no_hp') ? ' has-error': ''}}">
                                    <label for="exampleInputEmail1">no_hp</label>
                                    <input name="no_hp" value="{{$anggota->no_hp}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="no_hp">      
                                    @if($errors->has('no_hp'))
                                        <span class="help-block">{{$errors->first('no_hp')}}</span>
                                    @endif
                                </div>
                                <div class="form-group{{$errors->has('password') ? ' has-error': ''}}">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input name="password" value="{{$anggota->password}}" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="password">      
                                    @if($errors->has('password'))
                                        <span class="help-block">{{$errors->first('password')}}</span>
                                    @endif
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-warning">Update</button>
                                    <a href="/anggota" type="button" class="btn btn-danger" >Batal</a>
                            </form>
                                </div> 
                        </div>
                    </div>        
                </div>
            </div>
        </div>
    </div>
</div>
@stop
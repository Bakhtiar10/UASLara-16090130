@extends('admin.template')

@section('content') 

<div class="main">
<div class="main-content">
<div class="container-fluid">
<div class="row">
  <div class="col-md-12">
  <div class="panel">
    <div class="panel-heading">
      <h3 class="panel-title">Edit Data Rumah</h3>       
    </div>
    <div class="panel-body">
    <form action="/rumah/{{$rumah->id}}/update" method="POST">
        {{csrf_field()}}
          <div class=" form-group row">
        </div>

        <div class="form-group{{$errors->has('luas_tanah') ? ' has-error': ''}}">
          <label for="exampleInputEmail1">Luas Tanah</label>
           <input name="luas_tanah" value="{{$rumah->luas_tanah}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="luas_tanah">      
             @if($errors->has('luas_tanah'))
             <span class="help-block">{{$errors->first('luas_tanah')}}</span>
               @endif
        </div>

        <div class="form-group{{$errors->has('luas_bangunan') ? ' has-error': ''}}">
          <label for="exampleInputEmail1">Luas bangunan</label>
           <input name="luas_bangunan" value="{{$rumah->luas_bangunan}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="luas_bangunan">      
             @if($errors->has('luas_bangunan'))
             <span class="help-block">{{$errors->first('luas_bangunan')}}</span>
               @endif
        </div>

        <div class="form-group{{$errors->has('alamat') ? ' has-error': ''}}">
          <label for="exampleInputEmail1">Alamat</label>
           <input name="alamat" value="{{$rumah->alamat}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="alamat">      
             @if($errors->has('alamat'))
             <span class="help-block">{{$errors->first('alamat')}}</span>
               @endif
        </div>

        <div class="form-group{{$errors->has('harga') ? ' has-error': ''}}">
          <label for="exampleInputEmail1">Harga</label>
           <input name="harga" value="{{$rumah->harga}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="harga">      
             @if($errors->has('harga'))
             <span class="help-block">{{$errors->first('harga')}}</span>
               @endif
        </div>

        <div class="form-group{{$errors->has('deskripsi') ? ' has-error': ''}}">
          <label for="exampleInputEmail1">Deskripsi</label>
           <input name="deskripsi" value="{{$rumah->deskripsi}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="deskripsi">      
             @if($errors->has('deskripsi'))
             <span class="help-block">{{$errors->first('deskripsi')}}</span>
               @endif
        </div>

        <div class=" form-group">
            <button class="btn btn-success" type="submit">Update</button>
        </div>
        </form>
        </div> 
      </div>
       </div>        
     </div>
      </div>
  </div>
    </div>
</div>
@endsection
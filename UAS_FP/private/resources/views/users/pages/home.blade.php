@extends('users.template')

@section('content') 


<div class="col-md-4 col-sm-6 col-xs-6">
@foreach($datas as $data)
    <div class="panel">
    <div class="panel-heading bg-white border-none">
    <img src="{{asset('public/images/'.$data->image)}}" width="300px" height="300px" alt="">
</div>
        <div class="panel-body">
        <div class="col-md-12 padding-0 text-center">
        <div class="col-md-4 col-sm-4 col-xs-6 padding-0">
        <h5>Luas Tanah</h5>
        <p>{{$data->luas_tanah}}</p>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 padding-0">
        <h6>Luas Bangunan</h6>
        <p>{{$data->luas_bangunan}}</p>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 padding-0">
        <h5>Alamat</h5>
        <p>{{$data->alamat}}</p>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 padding-0">
        <h5>Harga</h5>
        <p>{{$data->harga}}</p>
        </div>

        <div class="panel-body">
        <div class="col-md-12 padding-0 text-left">
        <div class="col-md-12 col-sm-12 col-xs-12 padding-0">
        <div class="col-md-12 col-sm-12 col-xs-12 padding-0">
        <h5>Deskrpsi</h5>
        <p>{{$data->deskripsi}}</p>
        </div>
        
        <div class="form-group">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <textarea id="middle-name" class="form-control col-md-12 col-xs-12" type="text" name="Isi pesan"></textarea>
        </div>
        </div>
        
        <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12">
        <button class="btn btn-primary" type="submit">Pesan</button>
        </div>
    </div>
    @endforeach
</div>



@endsection

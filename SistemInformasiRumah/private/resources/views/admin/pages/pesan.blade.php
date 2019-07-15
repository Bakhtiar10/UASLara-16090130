@extends('admin.template')

@section('content')

<div class="col-md-10">
    <div class="page-title">
    <div class="title_left">
      <h3>Pesan Masuk</h3>
    </div>
 <div class="container">
  <div class="row">
   <div class="col-md-10">
    <!-- <a href="#" class="btn btn-danger btn-sm">
        Klik Disini
    </a> -->
    @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
      </div>
    @endif

    @if ($message = Session::get('error'))
      <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
      </div>
    @endif

    @if ($message = Session::get('warning'))
      <div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ($message = Session::get('info'))
      <div class="alert alert-info alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
      </div>
    @endif

    @if ($errors->any())
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        Please check the form below for errors
    </div>
    @endif

    <table class="table table-striped">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>No Hp</th>
      <th>Isi Pesan</th>
      <th>Aksi</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Bakhtiar Shofawi</td>
        <td>Rt 01 Rw 04</td>
        <td>0838-4100-5309</td>
        <td>Kapan Hijrah ?</td>
        <td><button class="glyphicon glyphicon-pencil" type="submit">Balas</button> </td>
    </tr>
    </table>
  </div>
 </div>
</div>
@endsection
@extends('admin.template')

@section('content') 

<div class="col-md-12">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Rumah</h3>
              </div>
              <div class="title_right">
                <div class="col-md-4 col-sm-4 col-xs-5 form-group pull-right top_search">
                  <div class="input-group">
                  <button onclick="window.location='{{route("rumah.create")}}'" type="button" class="btn btn-primary">Tambah</button>
                  </div>
                </div>
              </div>
              <form action="{{ url()->current() }}">

        <div class="col-md-3">
            <input type="text" name="keyword" class="form-control" placeholder="Search users...">
        </div>
        
        <div class="col-md-1">
            <button type="submit" class="btn btn-primary">
                Search
            </button>
        </div>
    </form>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Image</th>
                          <th>Luas Tanah</th>
                          <th>Luas Bangunan</th>
                          <th>Alamat</th>
                          <th>Harga</th>
                          <th>Deskripsi</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                  <?php $no = 0; ?>
                    @foreach($datas as $data)
                    <?php $no++ ;?>
                      <tr> 
                        <td>{{$no}}</td>
                        <td> <img src="{{asset('public/images/'.$data->image)}}" width="50px" height="50px" alt=""> </td> 
                        <td>{{$data->luas_tanah}}</td> 
                        <td>{{$data->luas_bangunan}}</td> 
                        <td>{{$data->alamat}}</td>
                        <td>{{$data->harga}}</td>
                        <td>{{$data->deskripsi}}</td>
                        <td>
                         <a href="{{route('rumah.edit', $data->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                         <a href="{{route('rumah.destroy', $data->id)}}" onclick="return confirm('delete data ini ?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                         </td>
                    </tr>
                @endforeach
          </tbody>

                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
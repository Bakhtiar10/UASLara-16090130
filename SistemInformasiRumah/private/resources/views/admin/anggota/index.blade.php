@extends('admin.template')

@section('content') 

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
		        <div class="col-md-12">
                    <ul class="nav navbar-right">
                        <ol class="breadcrumb">
                            
                        </ol>
                    </ul>
				</div>
			</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
						<div class="panel-heading"> 
                            <h3 class="panel-title">Data Anggota</h3>
                        </div>
                        <div class="panel-body">
                            <a class="fa fa-plus-square" data-toggle="modal" data-target="#exampleModal" > Tambah </a>
                        @if(count($data_anggota) > 0)
                            <table class="table table-hover" >
								<thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Alamat</th>
                          <th>No Hp</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 0 ?>
                        @foreach($data_anggota as $anggota)
                        <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{$anggota->nama}}</td>
                        <td>{{$anggota->email}}</td>
                        <td>{{$anggota->alamat}}</td>
                        <td>{{$anggota->no_hp}}</td>
                        <td>
                            <a href="{{route('anggota.edit',$anggota)}}" class="lnr lnr-pencil">Edit</a>&nbsp&nbsp&nbsp
                            <a href="{{route('anggota.delete',$anggota)}}"class="lnr lnr-trash" onclick="return confirm('Yakin Ingin Menghapus??')">Hapus</a>
                        </td>
                        </tr>
                            @endforeach
					</tbody>
				</table>
                    @else
                <p>Tidak ada data Anggota.</p>
                    @endif
				</div>
			</div>
        </div>
    </div>
</div>
</div>
</div>
@stop
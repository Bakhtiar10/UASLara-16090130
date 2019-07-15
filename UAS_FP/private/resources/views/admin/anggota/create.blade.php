@extends('admin.template')

@section('content') 
<div class="col-md-12">
            <div class="page-title">
              <div class="title_left">
                <h3>Tambah</h3>
              </div>

            <div class="clearfix"></div>
            <div class="row">
                    
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" action="{{route('anggota.store')}}" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                      @csrf
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="nama">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="email">
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="alamat"></textarea>
                        </div>
                      </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">No HP</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="no_hp"></textarea>
                        </div>
                      </div>
                    
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@stop
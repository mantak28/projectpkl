@extends('main')
@section('title', 'Dashboard')

@section('header')
Edit Biodata Peserta PKL
    
@endsection

@section('subheader')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Edit Biodata Peserta</li>
    </ol>
  </div><!-- /.col -->
    
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        </div>
    </div>
</div>
<br>
<div class="card card-primary">
    <div class="card-header bg-prymary text-white">
      <h3 class="card-title">Form Peserta</h3>
    </div>
    <!-- /.card-header -->
    <form role="form" enctype="multipart/form-data" action="{{route('masapkl.update',$masapkl->id_masapkl)}}" method="post" >
      <div class="card-body">{{method_field('PUT')}}
          @csrf
          <table class="table table-bordered">
            <thead>                  
                  <div class=""></div>
                  @csrf
                <div class="form-group">
                    <label>Status</label>
                    <div>
                        <select style="width:1000px" type="text" name="status" value="{{ $masapkl->status }}" id="">
                        <option>-Pilih-</option>
                        <option value='Aktif' selected>Aktif</option>
                        <option value='Tidak Aktif' selected>Tidak Aktif</option>
                        <option value='Belum Aktif' selected>Belum Aktif</option>
                        </select>
                </div></div>
                </select>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
            </tbody>
        </table>
    </div>
@endsection
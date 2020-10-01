@extends('main')
@section('title', 'Dashboard')

@section('header')
Biodata Peserta PKL
    
@endsection

@section('subheader')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Buat Biodata</li>
    </ol>
  </div><!-- /.col -->
    
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('biodata.index') }}"> Kembali</a>
        </div>
    </div>
</div>
<br>
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Form Peserta</h3>
    </div>
      <!-- /.card-header -->
      <form role="form" enctype="multipart/form-data">
      <div class="card-body">
        <table class="table table-bordered">
          <thead>                  
                <div class=""></div>
                @csrf
                <div class="form-group">
                    <img src="{{asset('uploads/foto/'.$biodata->foto_peserta)}}" style="max-width: 100%; height:100px">
                    </div>
                <div class="form-group">
                    <label>Nama Peserta :</label>
                    {{ $biodata->nama_peserta }}
                </div>
                <div class="form-group">
                    <label>Tempat Lahir :</label>
                    {{ $biodata->tempat_lahir }}
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    {{ $biodata->tgl_lahir }}
                </div>
                <div class="form-group">
                    <label>Alamat Lengkap :</label>
                    {{ $biodata->alamat }}
                </div>
                <div class="form-group">
                    <label>Agama :</label>
                    {{ $biodata->agama }}
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin :</label>
                    {{ $biodata->jenis_kelamin }}
                </div>
                <div class="form-group">
                    <label>No. Telp :</label>
                    {{ $biodata->no_tlp }}
                </div>
                <div class="form-group">
                    <label>Asal Lembaga :</label>
                    {{ $biodata->pendidikan->nama_lembaga }}
                </div>
                <div class="form-group">
                    <label>Jurusan :</label>
                    {{ $biodata->jurusan }}
                </div>
                <div class="form-group">
                    <label>Awal Masuk PKL :</label>
                    {{ $biodata->masapkl->awal_masuk }}
                </div>
                <div class="form-group">
                    <label>Akhir Masuk PKL:</label>
                    {{ $biodata->masapkl->akhir_masuk }}
                </div>
          </thead>
        </table>
      </div>
      </form>
</div>
    
@endsection
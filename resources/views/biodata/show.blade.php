@extends('main')
@section('title', 'Dashboard')

@section('header')
Biodata Peserta PKL
    
@endsection

@section('subheader')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Lihat Biodata Peserta</li>
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
                <div class=""></div>
                @csrf
                <div class="form-group">
                    <img src="{{asset('uploads/foto/'.$biodata->foto_peserta)}}" class="img-thumbnail mx-auto d-block mb-3 rounded"
                    width="300px">
                    <div class="table-responsive pr-3">
                        <table class="table">
                    </div>
                    <tbody>
                <tr>
                    <td class="font-weight-bold" width="30%">Nama Peserta :</td>
                    <td> {{ $biodata->nama_peserta }} </td>
                </tr>
                <tr>
                    <td class="font-weight-bold" width="30%">Tempat Lahir :</td>
                    <td>{{ $biodata->tempat_lahir }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold" width="30%">Tanggal Lahir</td>
                    <td>{{ $biodata->tgl_lahir }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold" width="30%">Alamat Lengkap :</td>
                    <td>{{ $biodata->alamat }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold" width="30%">Agama :</td>
                    <td>{{ $biodata->agama->nama_agama }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold" width="30%">Jenis Kelamin :</td>
                    <td>{{ $biodata->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold" width="30%">No. Telp :</td>
                    <td>{{ $biodata->no_tlp }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold" width="30%">Nama Instansi :</td>
                    <td>{{ $biodata->instansi->nama_instansi }}</td>
                    </tr>
                    <td class="font-weight-bold" width="30%">Jurusan :</td>
                    <td>{{ $biodata->jurusan }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold" width="30%">Awal Masuk PKL :</td>
                    <td>{{ $biodata->masapkl->awal_masuk }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold" width="30%">Akhir Masuk PKL:</td>
                    <td>{{ $biodata->masapkl->akhir_masuk }}</td>
                </tr>
        </table>
      </div>
      </form>
</div>
    
@endsection
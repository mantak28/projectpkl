@extends('main')
@section('title', 'Dashboard')

@section('header')
Instansi Pendidikan Peserta PKL
    
@endsection

@section('subheader')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Buat Instansi Pendidikan</li>
    </ol>
  </div><!-- /.col -->
    
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pendidikan.index') }}"> Kembali</a>
        </div>
    </div>
</div>
<br>
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Form Instansi Pendidikan Peserta</h3>
      
    </div>
      <!-- /.card-header -->
      <form role="form" enctype="multipart/form-data">
      <div class="card-body">
        <table class="table">
              
                <div class=""></div>
                @csrf
                <div class="form-group">
                    <tbody>
                <tr>
                    <td class="font-weight-bold" width="30%">Nama Instansi :</td>
                    <td>{{ $instansi->nama_instansi }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold" width="30%">Lembaga Pendidikan :</td>
                    <td>{{ $instansi->lembaga->nama_lembaga }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold" width="30%">Alamat Instansi :</td>
                    <td>{{ $instansi->alamat_instansi }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold" width="30%">No. Telp :</td>
                    <td>{{ $instansi->no_tlpn_instansi }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold" width="30%">Email :</td>
                    <td>{{ $instansi->email_instansi }}</td>
                </tr> 
        </table>
      </div>
      </form>
</div>
    
@endsection
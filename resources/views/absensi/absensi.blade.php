@extends('main')
@section('title', 'Dashboard')

@section('header')
Dashboard Absensi
    
@endsection

@section('subheader')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Absensi</li>
    </ol>
  </div><!-- /.col -->
    
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Absensi</h3>
        <!-- SEARCH FORM -->
        <form class="form-inline ml-3 float-sm-right">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar-" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
        </div>
        
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>                  
              <tr>
                <th>No</th>
                <th>Nama Peserta</th>
                <th>Nama Instansi</th>
                <th>Jenis Kelamin</th>
                <th>Status Kehadiran Datang</th>
                <th>Status Kehadiran Pulang</th>
              </tr>
            </thead>
              <tbody>
                <?php $x = 1; ?>
                @foreach ($absensi as $data)
                <tr>
                <td>{{$x}}</td>
                <td>{{$data->nama_peserta}}</td>
                <td>{{$data->nama_instansi}}</td>
                <td>{{$data->jenis_kelamin}}</td>
                <td>{{$data->waktu_datang}}</td>
                <td>{{$data->waktu_plg}}</td>
                </tr>
                @endforeach  
                <?php $x = $x + 1; ?>          
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
  
     
    </div>
  
    </div>
  </div>

@endsection



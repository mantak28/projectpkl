@extends('main')
@section('title', 'Dashboard')

@section('header')
Dashboard Peserta PKL
    
@endsection

@section('subheader')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Biodata</li>
    </ol>
  </div><!-- /.col -->
    
@endsection

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Tabel Biodata</h3>
      <!-- SEARCH FORM -->
      <form class="form-inline ml-3 float-sm-right">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar-" type="search" placeholder="Search" aria-label="Search" value="{{ old('search') }}">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit" value="search">
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
              <th>Waktu PKL</th>
            </tr>
          </thead>
            <tbody>
              @foreach ($biodata as $data)
              <tr>
              <td>{{$data->id_peserta}}</td>
              <td>{{$data->nama_peserta}}</td>
              <td>{{$data->nama_instansi}}</td>
              <td>{{$data->awal_masuk}} s/d {{$data->akhir_masuk}}</td>
              </tr>
              @endforeach            
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



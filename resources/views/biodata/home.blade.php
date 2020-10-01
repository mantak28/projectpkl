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
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered">
          <thead>                  
            <tr>
              <th>No</th>
              <th>Nama Peserta</th>
              <th>Asal Pendidikan</th>
              <th>Jenis Kelamin</th>
              <th>Alamat Peserta</th>
              <th>Waktu PKL</th>
              <th>Aksi</th>
            </tr>
          </thead>
            <tbody>
              @foreach ($biodata as $data)
              <tr>
              <td>{{$data->id_peserta}}</td>
              <td>{{$data->nama_peserta}}</td>
              <td>{{$data->nama_lembaga}}</td>
              <td>{{$data->jenis_kelamin}}</td>
              <td>{{$data->alamat}}</td>
              <td>{{$data->awal_masuk}} s/d {{$data->akhir_masuk}}</td>
              <td>
                <!-- view btn -->
                
              <a href="{{route('biodata.show',$data->id_peserta)}}" class="btn btn-primary btn-circle btn-sm view_data m-1" title="Lihat Detail">
                <i class="fas fa-eye"></i>
              </a>
              <!-- edit btn -->
              <a href="{{route('biodata.edit',$data->id_peserta)}}" class="btn btn-success btn-circle btn-sm m-1 edit_data" title="Edit Data Pengguna"
                name="edit" value="edit" id="edit">
                <i class="fas fa-pen"></i>
            </a>
              </td>
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



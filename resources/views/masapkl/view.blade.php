@extends('main')
@section('title', 'Dashboard')

@section('header')
Dashboard Masa PKL
    
@endsection

@section('subheader')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Masa PKL</li>
    </ol>
  </div><!-- /.col -->
    
@endsection

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Tabel Masa PKL</h3>
        <form action="{{ route('masapkl.filter') }}" method="POST" class="form-group">
          @csrf
          <div class="row mb-3">
                <div class="col-sm-12">
                <div class="col-sm-3">
                    <div class="form-group">
                      <select style="cursor:pointer;" class="form-control" id="tag_select" name="year">
                        <option value="0" selected disabled> Pilih Tahun</option>
                          @php
                          $year = date('Y');
                          $min = $year - 60;
                          $max = $year;    
                          @endphp
                          @for($i=$max; $i>=$min; $i-- )
                      <option value="{{$i}}">{{$i}}</option>;
                          @endfor      
                      </select>
                        <select style="cursor:pointer;margin-top:1.5em;margin-bottom:1.5em;" class="form-control" id="tag_select" name="month">
                        <option value="0" selected disabled> Pilih Bulan</option>
                  <option value="01"> Januari</option>
                  <option value="02"> Februari</option>
                  <option value="03"> Maret</option>
                  <option value="04"> April</option>
                  <option value="05"> Mei</option>
                  <option value="06"> Juni</option>
                  <option value="07"> Juli</option>
                  <option value="08"> Agustus</option>
                  <option value="09"> September</option>
                  <option value="10"> Oktober</option>
                  <option value="11"> November</option>
                  <option value="12"> Desember</option>
                  </select>
                  
                  <button type="filter" >Cari Data</button>
                    </div>
                </div>
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
              <th>Awal Masuk PKL</th>
              <th>Akhir Masuk PKL</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
            <tbody>
              <?php $x = 1; ?>
              @foreach ($masapkl as $data)
              <tr>
              <td>{{$x}}</td>
              <td>{{$data->nama_peserta}}</td>
              <td>{{$data->nama_instansi}}</td>
              <td>{{$data->awal_masuk}}</td>
              <td>{{$data->akhir_masuk}}</td>
              <td>{{$data->status}}</td>
              <td>
                <a href="{{url('masapkl/'.$data->id_masapkl.'/edit')}}" >Edit </a> 
              </td>
              </tr>
              <?php $x = $x + 1; ?>  
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



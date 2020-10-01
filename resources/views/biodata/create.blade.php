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

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Form Buat Peserta</h3>
    </div>
      <!-- /.card-header -->
      <form role="form" enctype="multipart/form-data" action="{{route('biodata.store')}}" method="POST">
      <div class="card-body">
        <table class="table table-bordered">
          <thead>                  
                <div class=""></div>
                @csrf
                <div class="form-group">
                    <label>Nama Peserta</label>
                    <input type="text" name="nama_peserta">
                </div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" name="tempat_lahir">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" id="">
                </div>
                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" id="">
                </div>
                <div class="form-group">
                    <label>Agama</label>
                    <input type="text" name="agama" id="">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select type="text" name="jenis_kelamin">
                        <option>-Pilih-</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                        </select>
                </div>
                <div class="form-group">
                    <label>No. Telp</label>
                    <input type="text" name="no_tlp" id="">
                </div>
                <div class="form-group">
                    <label>Asal Pendidikan</label>
                    <select type="text" name="id_lembagapend">
                    <option>-Pilih-</option>
                    @foreach ($lembagapendidikan as $data)
                    <option value="{{$data->id_lembagapend}}">{{$data->nama_lembaga}}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan" id="">
                </div>
                <div class="form-group">
                    <label>Awal Masuk PKL</label>
                    <input type="text" name="awal_masuk" id="">
                </div>
                <div class="form-group">
                    <label>Akhir Masuk PKL</label>
                    <input type="text" name="akhir_masuk" id="">
                </div>
                <div class="form-group">
                    <label>Upload Foto Diri</label>
                    <input type="file" name="foto_peserta" id="">
                </div>
                    @endforeach
                </select>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
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
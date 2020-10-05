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
      <h3 class="card-title">Form Peserta</h3>
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
                    <div>
                    <input style="width:1000px" type="text" name="nama_peserta">
                </div></div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <div>
                    <input style="width:1000px" type="text" name="tempat_lahir">
                </div></div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <div>
                    <input style="width:1000px" type="date" name="tgl_lahir" id="">
                </div></div>
                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <div>
                    <input style="width:1000px" type="text" name="alamat" id="">
                </div></div>
                <div class="form-group">
                    <label>Agama</label>
                    <div>
                    <input style="width:1000px" type="text" name="agama" id="">
                </div></div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div>
                    <select style="width:1000px" type="text" name="jenis_kelamin">
                        <option>-Pilih-</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                        </select>
                </div></div>
                <div class="form-group">
                    <label>No. Telp</label>
                    <div>
                    <input style="width:1000px" type="text" name="no_tlp" id="">
                </div></div>
                <div class="form-group">
                    <label>Nama Pendidikan</label>
                    <div>
                    
                        <input style="width:1000px" type="text" name="nama_lembagapend">
                    </div>
                </div>
                <div class="form-group">
                    <label>Pendidikan</label>
                    <div>
                    <select style="width:1000px" type="text" name="jenis_lembagapend">
                    <option>-Pilih-</option>
                    @foreach ($lembagapendidikan as $data)
                        <option value="{{$data->id_lembagapend}}">{{$data->jenis_lembaga}}</option>
                    @endforeach
                    </select>
                </div></div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <div>
                    <input style="width:1000px" type="text" name="jurusan" id="">
                </div></div>
                <div class="form-group">
                    <label>Awal Masuk PKL</label>
                    <div>
                    <input style="width:1000px" type="date" name="awal_masuk" id="">
                </div></div>
                <div class="form-group">
                    <label>Akhir Masuk PKL</label>
                    <div>
                    <input style="width:1000px" type="date" name="akhir_masuk" id="">
                </div></div>
                <div class="form-group">
                    <label>Upload Foto Diri</label>
                    <div>
                    <input type="file" name="foto_peserta" id="">
                </div></div>
                </select>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
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
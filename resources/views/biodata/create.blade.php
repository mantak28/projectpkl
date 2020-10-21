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
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <form role="form" enctype="multipart/form-data" action="{{route('biodata.store')}}" method="POST">
        @csrf
        <div class="card-body">
        <table class="table table-bordered">
          <thead>                  
                <div class=""></div>
                
                <div class="form-group">
                    <label>Nama Peserta</label>
                    <div>
                    <input style="width:1000px" type="text" name="namapeserta" value="{{old('namapeserta')}}" required>
                </div></div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <div>
                    <input style="width:1000px" type="text" name="tempatlahir" value="{{old('tempatlahir')}}" required>
                </div></div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <div>
                    <input style="width:1000px" type="date" name="tgllahir" value="{{old('tgllahir')}}" required>
                </div></div>
                <div class="form-group">
                    <label>Alamat Lengkap</label>
                      <div>
                    <input style="width:1000px" type="text" name="almt" value="{{old('almt')}}" required>
                </div></div>
                <div class="form-group">
                    <label>Agama</label>
                    <div>
                        <select style="width:1000px" type="text" name="namaagama" required>
                            <option>-Pilih-</option>
                            @foreach ($agama as $datum)
                                <option value="{{$datum->id_agama}}">{{$datum->nama_agama}}</option>
                            @endforeach
                            </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div>
                    <select style="width:1000px" type="text" name="jk" required>
                        <option>-Pilih-</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                        </select>
                </div></div>
                <div class="form-group">
                    <label>No. Telp</label>
                    <div>
                    <input style="width:1000px" type="text" name="tlp" value="{{old('tlp')}}" required>
                </div></div>
                <div class="form-group">
                    <label>Nama Instansi</label>
                    <div>
                        <select style="width:1000px" type="text" name="namainstansi" required>
                            <option>-Pilih-</option>
                            @foreach ($instansi as $data)
                                <option value="{{$data->id_instansi}}">{{$data->nama_instansi}}</option>
                            @endforeach
                            </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <div>
                    <input style="width:1000px" type="text" name="txtjurusan" value="{{old('txtjurusan')}}" required>
                </div></div>
                <div class="form-group">
                    <label>Awal Masuk PKL</label>
                    <div>
                    <input style="width:1000px" type="date" name="awalmasuk" value="{{old('awalmasuk')}}" required>
                </div></div>
                <div class="form-group">
                    <label>Akhir Masuk PKL</label>
                    <div>
                    <input style="width:1000px" type="date" name="akhirmasuk" value="{{old('akhirmasuk')}}" required>
                </div></div>
                <div class="form-group">
                    <label>Status</label>
                    <div>
                        <select style="width:1000px" type="text" name="txtstatus" value="{{old('txtstatus')}}" required>
                        <option>-Pilih-</option>
                        <option>Aktif</option>
                        <option>Tidak Aktif</option>
                        <option>Belum Aktif</option>
                        </select>
                </div></div>
                <div class="form-group">
                    <label>Upload Foto Diri</label>
                    <div>
                    <input type="file" name="fotopeserta">
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

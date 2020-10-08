@extends('main')
@section('title', 'Dashboard')

@section('header')
Edit Biodata Peserta PKL
    
@endsection

@section('subheader')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Edit Biodata Peserta</li>
    </ol>
  </div><!-- /.col -->
    
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('biodata.index')}}"> Kembali</a>
        </div>
    </div>
</div>
<br>
<div class="card card-primary">
    <div class="card-header bg-prymary text-white">
      <h3 class="card-title">Form Peserta</h3>
    </div>
    <!-- /.card-header -->
    <form role="form" enctype="multipart/form-data" action="{{route('biodata.update',$biodata->id_peserta)}}" method="post" >
        <div class="card-body">{{method_field('PUT')}}
          <table class="table table-bordered">
            <thead>                  
                  <div class=""></div>
                  @csrf
                <div class="form-group">
                    <label>Nama Peserta</label>
                    <div >
                    <input style="width:1000px" type="text" name="namapeserta" value="{{ $biodata->nama_peserta }}">
                </div>
                </div>

                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <div>
                    <input style="width:1000px" type="text" name="tempatlahir" value=" {{ $biodata->tempat_lahir }}">
                </div></div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <div>
                    <input style="width:1000px" type="date" name="tgllahir" value="{{ $biodata->tgl_lahir }}" id="">
                </div></div>
                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <div>
                    <input style="width:1000px" type="text" name="almt" value="{{ $biodata->alamat }}" id="">
                </div></div>
                <div class="form-group">
                    <label>Agama</label>
                    <div>
                        <select style="width:1000px" type="text" name="txtagama" value="{{ $biodata->agama }}" id="">
                        <option>-Pilih-</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Protestan</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                    </select>
                </div></div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                <div class="radio">
                    <select style="width:1000px" type="radio" name="jenis_kelamin" value="{{ $biodata->jenis_kelamin }}">
                        <option>-Pilih-</option>
                        <option selected>Laki-Laki</option>
                        <option selected>Perempuan</option>
                        </select>
                </div>
                </div>
                <div class="form-group">
                    <label>No. Telp</label>
                <div>
                    <input style="width:1000px" type="text" name="no_tlp" value="{{ $biodata->no_tlp }}" id="">
                </div></div>
                <div class="form-group">
                    <label>Nama Instansi</label>
                    <div>
                        <select style="width:1000px" type="text" name="id_instansi" value="{{ $biodata->instansi->nama_instansi }}">
                            <option>-Pilih-</option>
                            @foreach ($instansi as $data)
                            <option selected value="{{$data->id_instansi}}">{{$data->nama_instansi}}</option>
                            @endforeach
                            </select>
                </div></div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <div>
                    <input style="width:1000px" type="text" name="jurusan" value="{{ $biodata->jurusan }}" id="">
                </div></div>
                <div class="form-group">
                    <label>Awal Masuk PKL</label>
                    <div>
                    <input style="width:1000px" type="date" name="awal_masuk" value="{{ $biodata->masapkl->awal_masuk }}" id="">
                </div></div>
                <div class="form-group">
                    <label>Akhir Masuk PKL</label>
                    <div>
                    <input style="width:1000px" type="date" name="akhir_masuk" value="{{ $biodata->masapkl->akhir_masuk }}" id="">
                </div></div>
                <div class="form-group">
                    <label>Status</label>
                    <div>
                        <select style="width:1000px" type="text" name="txtstatus" value="{{ $biodata->masapkl->status }}" id="">
                        <option>-Pilih-</option>
                        <option>Aktif</option>
                        <option>Tidak Aktif</option>
                        </select>
                </div></div>
                <div class="form-group">
                    <label>Upload Foto Diri</label>
                    <div>
                    <input type="file" name="foto_peserta" value="{{asset('uploads/foto/'.$biodata->foto_peserta)}}" id="">
                <p class="text-dager">{{$errors->first('update')}}</p>
                </div></div>
                    
                </select>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
            </tbody>
        </table>
    </div>
@endsection
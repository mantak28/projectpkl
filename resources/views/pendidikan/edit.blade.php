@extends('main')
@section('title', 'Dashboard')

@section('header')
Edit Instansi Pendidikan Peserta PKL
    
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
    </div>
</div>
<br>
<div class="card card-primary">
    <div class="card-header bg-prymary text-white">
      <h3 class="card-title">Form Buat Instansi Pendidikan Peserta</h3>
    </div>
    <!-- /.card-header -->
    <form role="form" enctype="multipart/form-data" action="{{route('pendidikan.update',$instansi->id_instansi)}}" method="post" >
        <div class="card-body">{{method_field('PUT')}}
          <table class="table table-bordered">
            <thead>                  
                  <div class=""></div>
                  @csrf
                <div class="form-group">
                    <label>Nama Instansi</label>
                    <div >
                    <input style="width:1000px" type="text" name="namainstansi" value="{{ $instansi->nama_instansi }}">
                </div>
                </div>
                <div class="form-group">
                    <label>Lembaga Pendidikan</label>
                    <div >
                    <input style="width:1000px" type="text" name="namalembaga" value="{{ $instansi->nama_lembaga }}">
                </div>
                </div>
                <div class="form-group">
                    <label>Alamat Instansi</label>
                    <div>
                    <input style="width:1000px" type="text" name="alamatinstansi" value=" {{ $instansi->alamat_instansi }}">
                </div></div>
                <div class="form-group">
                    <label>No. Telp</label>
                    <div>
                    <input style="width:1000px" type="text" name="tlpninstansi" value="{{ $instansi->no_tlpn_instansi }}" id="">
                </div></div>
                <div class="form-group">
                    <label>Email Instansi</label>
                    <div>
                    <input style="width:1000px" type="text" name="emailinstansi" value="{{ $instansi->email_instansi }}" id="">
                </div></div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
            </tbody>
        </table>
    </div>
@endsection
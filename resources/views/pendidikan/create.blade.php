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

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Form Insansi Pendidikan Peserta</h3>
    </div>
      <!-- /.card-header -->
      <form role="form" enctype="multipart/form-data" action="{{route('pendidikan.store')}}" method="POST">
      <div class="card-body">
        <table class="table table-bordered">
          <thead>                  
                <div class=""></div>
                @csrf
                
                <div class="form-group">
                  <label>Nama Instansi</label>
                  <div>
                  <input style="width:1000px" type="text" name="namainstansi" value="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label>Lembaga Pendidikan</label>
                  <div>
                      <select style="width:1000px" type="text" name="namalembaga" value="{{old('namalembaga')}}" required>
                        <option>-Pilih-</option>
                        @foreach ($lembaga as $data)
                                <option value="{{$data->id_lembaga}}">{{$data->nama_lembaga}}</option>
                            @endforeach
                            </select>
                        </select>
                  </div>
                </div>
                <div class="form-group">
                  <label>Alamat Instansi</label>
                  <div>
                  <input style="width:1000px" type="text" name="alamatinstansi" value="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label>No. Telp Instansi</label>
                  <div>
                  <input style="width:1000px" type="text" name="tlpninstansi" value="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <div>
                  <input style="width:1000px" type="text" name="emailinstansi" value="" required>
                  </div>
                </div>

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
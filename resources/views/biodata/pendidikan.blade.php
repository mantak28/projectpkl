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
                    <label>Nama Pendidikan</label>
                    @foreach ($lembagapendidikan as $data)
                    <input type="text" name="id_lembagapend" value="{{ $data->id_lembagapend->nama_lembaga }}">
                </div>
                <div class="form-group">
                    <label>Pendidikan</label>
                    <select type="text" name="id_lembagapend">
                    <option>-Pilih-</option>
                    <option value="{{$data->id_lembagapend}}">{{$data->jenis_lembaga}}</option>
                    </select>
                    @endfor
               
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
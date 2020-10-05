<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata;
use App\LembagaPendidikan;
use App\Masapkl;
use Illuminate\Support\Facades\file;

class BiodataController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodata=Biodata::leftjoin('lembagapendidikans','biodatas.id_lembagapend', '=', 'lembagapendidikans.id_lembagapend')->leftjoin('masapkls','biodatas.id_peserta','=','masapkls.id_peserta')->get();
        // return dd($biodata);
        return view('biodata.home',compact('biodata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lembagapendidikan=LembagaPendidikan::all();
        return view('biodata.create',compact('lembagapendidikan'));
        //return view('biodata.pendidikan',compact('lembagapendidikan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $biodata = new biodata;
        $biodata->nama_peserta = $request->nama_peserta;
        $biodata->tempat_lahir = $request->tempat_lahir;
        $biodata->tgl_lahir = $request->tgl_lahir;
        $biodata->alamat = $request->alamat;
        $biodata->agama = $request->agama;
         $biodata->jenis_kelamin = $request->jenis_kelamin;
        $biodata->no_tlp = $request->no_tlp;
        $biodata->jurusan = $request->jurusan;
        $biodata->id_lembagapend = $request->jenis_lembagapend;
        $file = $request->file('foto_peserta');
        $ext =  $request->file('foto_peserta')->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/foto',$newName);
        $biodata->foto_peserta = $newName;
        $biodata->save();

        $masapkl= new Masapkl;
        $masapkl->awal_masuk=$request->awal_masuk;
        $masapkl->akhir_masuk=$request->akhir_masuk;
        $masapkl->id_peserta=$biodata->id_peserta;
        $masapkl->save();

        $lembaga= new LembagaPendidikan;
        $lembaga->nama_lembaga=$request->nama_lembagapend;
        $lembaga->jenis_lembaga=$request->jenis_lembagapend;
        $lembaga->save();
        return redirect('/biodata');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $biodata=Biodata::find($id);
        return view('biodata.show',compact('biodata'));
    }

    /**
     * Show the form for editing the specified resource.
     
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $biodata=Biodata::find($id);
        $pendidikan=LembagaPendidikan::all();
      return view('biodata.edit',compact('biodata','pendidikan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $biodata=Biodata::find($id);
        $biodata->nama_peserta = $request->nama_peserta;
        $biodata->tempat_lahir = $request->tempat_lahir;
        $biodata->tgl_lahir = $request->tgl_lahir;
        $biodata->alamat = $request->alamat;
        $biodata->agama = $request->agama;
         $biodata->jenis_kelamin = $request->jenis_kelamin;
        $biodata->no_tlp = $request->no_tlp;
        $biodata->jurusan = $request->jurusan;
        $biodata->id_lembagapend = $request->id_lembagapend;
        $file = $request->file('foto_peserta');
        $ext =  $request->file('foto_peserta')->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/foto',$newName);
        $biodata->foto_peserta = $newName;
        $biodata->save();

        $masapkl=Masapkl::where('id_peserta', '=', $id)->first();
        $masapkl->awal_masuk=$request->awal_masuk;
        $masapkl->akhir_masuk=$request->akhir_masuk;
        $masapkl->save();
        return redirect('/biodata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

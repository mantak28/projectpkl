<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata;
use App\Instansi;
use App\Masapkl;
use App\Agama;
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
        
        $biodata=Biodata::leftjoin('instansis','biodatas.id_instansi', '=', 'instansis.id_instansi')
        ->leftjoin('masapkls','biodatas.id_peserta','=','masapkls.id_peserta')->get();
        // return response()->json($biodata);
        return view('biodata.home',compact('biodata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $instansi=Instansi::all();
        $agama=Agama::all();
        return view('biodata.create',compact('instansi','agama'));
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
        // $this->validate($request, [
		// 	'file' => 'required|file|image|mimes:jpeg,jpg|max:2048',
        // ]);
        $request->validate([
            'fotopeserta' => 'required|mimes:jpeg,png,jpg|max:2048',
        ]);
        $search = $request->search;
        $biodata = new biodata;
        $biodata->nama_peserta = $request->namapeserta;
        $biodata->tempat_lahir = $request->tempatlahir;
        $biodata->tgl_lahir = $request->tgllahir;
        $biodata->alamat = $request->almt;
        $biodata->jenis_kelamin = $request->jk;
        $biodata->no_tlp = $request->tlp;
        $biodata->jurusan = $request->txtjurusan;
        $biodata->id_instansi = $request->namainstansi;
        $biodata->id_agama = $request->namaagama;
        $file = $request->file('fotopeserta');
        $ext =  $request->file('fotopeserta')->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/foto',$newName);
        $biodata->foto_peserta = $newName;
        $biodata->save();

        $masapkl= new Masapkl;
        $masapkl->awal_masuk=$request->awalmasuk;
        $masapkl->akhir_masuk=$request->akhirmasuk;
        $masapkl->status=$request->txtstatus;
        $masapkl->id_peserta=$biodata->id_peserta;
        $masapkl->save();
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
        $instansi=Instansi::all();
        $agama=Agama::all();
        return view('biodata.edit',compact('biodata','instansi','agama'));
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
        $biodata->nama_peserta = $request->namapeserta;
        $biodata->tempat_lahir = $request->tempatlahir;
        $biodata->tgl_lahir = $request->tgllahir;
        $biodata->alamat = $request->almt;
        $biodata->jenis_kelamin = $request->jk;
        $biodata->no_tlp = $request->tlp;
        $biodata->jurusan = $request->txtjurusan;
        $biodata->id_instansi = $request->id_instansi;
        $biodata->id_agama = $request->namaagama;
        $file = $request->file('fotopeserta');
        $ext =  $request->file('fotopeserta')->getClientOriginalExtension();
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

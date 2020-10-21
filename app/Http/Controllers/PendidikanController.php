<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instansi;
use App\Lembaga;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instansi=Instansi::leftjoin('lembagas','instansis.id_lembaga','=', 'lembagas.id_lembaga')->get();
        return view('pendidikan.pendidikan',compact('instansi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lembaga=Lembaga::all();
        return view('pendidikan.create',compact('lembaga'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $instansi = new instansi;
        $instansi->nama_instansi = $request->namainstansi;
        $instansi->alamat_instansi = $request->alamatinstansi;
        $instansi->no_tlpn_instansi = $request->tlpninstansi;
        $instansi->email_instansi = $request->emailinstansi;
        $instansi->id_lembaga = $request->namalembaga;
        $instansi->save();
        return redirect('/pendidikan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $instansi=Instansi::find($id);
        return view('pendidikan.show',compact('instansi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instansi=Instansi::find($id);
        $lembaga=Lembaga::all();
        return view('pendidikan.edit',compact('instansi','lembaga'));
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
        $instansi=Instansi::find($id);
        $instansi->nama_instansi = $request->namainstansi;
        $instansi->alamat_instansi = $request->alamatinstansi;
        $instansi->no_tlpn_instansi = $request->tlpninstansi;
        $instansi->email_instansi = $request->emailinstansi;
        $instansi->id_lembaga = $request->nama_lembaga;
        $instansi->save();

        // $lembaga=Lembaga::where('id_instansi','=', $id)->first();
        // $lembaga->nama_lembaga=$request->nama_lembaga;
        // $lembaga->save();
        return redirect('/pendidikan');
        
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

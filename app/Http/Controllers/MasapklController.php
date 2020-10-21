<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masapkl;
use App\Absensi;
use App\Carbon;

class MasapklController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masapkl=Masapkl::leftjoin('biodatas','masapkls.id_peserta', '=', 'biodatas.id_peserta')
        ->leftjoin('instansis','biodatas.id_instansi', '=', 'instansis.id_instansi')
        ->orderBy('awal_masuk', 'desc')
        ->get();
        
        return view('masapkl.view',compact('masapkl'));
        

        // $now = Carbon::now();
        // DB::where('absensi(created_at)', $now); 
        // return view('');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $masapkl = new masapkl;
        $masapkl->awal_masuk = $request->awal_masuk;
        $masapkl->akhir_masuk = $request->akhir_masuk;
        $masapkl->status = $request->status;
        $masapkl->id_peserta = $request->nama_perserta;
        $masapkl->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $masapkl = Masapkl::find($id);
        return view('masapkl.edit',compact('masapkl'));
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
        $masapkl=Masapkl::find($id);
        $masapkl->status=$request->status;
        $masapkl->save();
        return redirect('/masapkl');
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
    public function filter(Request $request)
    {
        //return 'c';
        // $masapkl=Masapkl::leftjoin('biodatas','masapkls.id_peserta', '=', 'biodatas.id_peserta')->leftjoin('absensis','biodatas.id_absensi', '=', 'absensis.id_absensi')->get();
        // return view('masapkl.view',compact('masapkl'));

        $month = $request->month;
	    $year = $request->year;
		
        $masapkl = Masapkl::leftjoin('biodatas','masapkls.id_peserta', '=', 'biodatas.id_peserta')
                ->leftjoin('instansis','biodatas.id_instansi','=','instansis.id_instansi')
                ->whereYear('awal_masuk', '=', $year)
                ->whereMonth('awal_masuk', '=', $month)
                ->get();
    
        return view('masapkl.view', compact('masapkl'));

        
    }
}

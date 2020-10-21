<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Absensi;
use\App\Biodata;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absensi = Absensi::leftjoin('biodatas','absensis.id_peserta', '=', 'biodatas.id_peserta')
        ->leftjoin('instansis','biodatas.id_instansi','=','instansis.id_instansi')
        ->get();
        return view('absensi.absensi',compact('absensi'));
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
        $biodata = Biodata::where('nim');

       DD($biodata);
       
       $waktu_datang = date("Y-m-d","H:i:s");
       $waktu_plg = date("Y-m-d","H:i:s");
       $biodata = $request ->biodata;

       $absensi = new absensi;

       if (isset($request->btn_in))
       {
            $absen->create([
                'id_peserta' => $id_peserta,
                'waktu_datang' => $waktu_datang,
                'waktu_plg' => $waktu_plg,
                 ]);
            return "terima kasih sudah absen";
       } 
       elseif (isset($request->btn_in))
       {
            return "anda sudah absen";
       }

      return $request ->all(); 
      
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
        //
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
        //
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

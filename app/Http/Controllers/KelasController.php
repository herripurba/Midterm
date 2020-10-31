<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use App\Kela;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = DB::table('kelas')->get();

        return view('kelas.index', ['kelas' => $kelas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kela = new Kela;
        $kela->id_siswa = $request->id_siswa;
        $kela->id_guru = $request->id_guru;
        $kela->nama_kelas = $request->nama_kelas;
        $kela->tanggal_kelas = $request->tanggal_kelas;

        
        $kela->save();
        return redirect('/kelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kela  $kela
     * @return \Illuminate\Http\Response
     */
    public function show(Kela $kela)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kela  $kela
     * @return \Illuminate\Http\Response
     */
    public function edit(Kela $kela)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kela  $kela
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kela $kela)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kela  $kela
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kela $kela)
    {
        //
    }
}

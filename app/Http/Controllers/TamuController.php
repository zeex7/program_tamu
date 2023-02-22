<?php

namespace App\Http\Controllers;
use App\Models\Tamu;
use App\Models\Kategori;

use Illuminate\Http\Request;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $Kategori  = Kategori::all();

        $Tamu = Tamu::all();
        return view('Tamu', compact('Tamu', 'Kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Kategori = Kategori::all();
        return view("Tamu.create",compact('Kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message=[
            'required'=>':attribute harus di isi dulu',
            'min' => ':attribute minimal :min karakter',
            'max' => ':attribute maksimal :max karakter',
            'numeric' => ':attribute harus di isi angka',
            'mimes' => 'nama file harus jpg,jpeg,png,gif,svg'
        ];

        $this->validate($request, [
            'nama_tamu'=>'required',
            'id_kategori'=>'required',
            'alamat'=>'required',
            'no_tlpn'=>'required',
            'tanggal'=>'required',  
            'tujuan'=> 'required',
            'jam_kedatangan'=> 'required',  
        ],$message);

         //proses insert database
         Tamu::create([
            'nama_tamu'=>$request->nama_tamu,
            'id_kategori'=>$request->id_kategori,
            'alamat'=>$request->alamat,
            'no_tlpn'=>$request->no_tlpn,
            'tanggal'=>$request->tanggal,
            'tujuan'=>$request->tujuan,
            'jam_kedatangan'=>$request->jam_kedatangan,
        ]);

        return redirect ('/Utama');
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

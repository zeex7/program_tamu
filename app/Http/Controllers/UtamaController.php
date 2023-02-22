<?php

namespace App\Http\Controllers;
use App\Models\Utama;
use App\Models\Tamu;

use Carbon\Carbon;

use Illuminate\Http\Request;

class UtamaController extends Controller
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
        $today = Carbon::today()->isoFormat('Y-MM-D');
        $data = Tamu::all();
        $hari_ini = Tamu::where('tanggal', $today)->count();
        $seluruh = Tamu::all()->count();
        return view("Utama", compact('data','seluruh', 'hari_ini'));
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
        //
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
        $Utama=Tamu::find($id);
        return view('editjam', compact('Utama'));
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
        $massages=[
            'required'=>':attribute harus di isi dulu',
            'min' => ':attribute minimal :min karakter',
            'max' => ':attribute maksimal :max karakter',
        ];

        $this->validate($request, [
            'jam_keluar'=>'required',           
                      
        ],$massages);

        $Utama=Tamu::find($id);
                $Utama->jam_keluar = $request->jam_keluar;
                $Utama->save();
                return redirect ('Utama');
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

    public function hapus($id)
    {
        $Utama=Tamu::find($id)->delete();
        return redirect('Utama');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\t_kelurahan;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $kelurahan = t_kelurahan::all();
        return view('admin.kelurahan.index', compact('kelurahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kelurahan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        t_kelurahan::insert([
            'kode' => $request->kode,
            'nama_kelurahan' => $request->nama_kelurahan,
            'status' => $request->status,
        ]);

        return redirect()->route('index');

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
        $data = t_kelurahan::find($id);
        return view('admin.kelurahan.edit', compact('data'));
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
        $data = t_kelurahan::find($id);
        $data->kode = $request->input('kode');
        $data->nama_kelurahan = $request->input('nama_kelurahan');
        $data->status = $request->input('status');
        $data->save();

        return Redirect()->route('index.kelurahan')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        t_kelurahan::find($id)->delete();
        return redirect()->route('index.kelurahan');
    
    }
}

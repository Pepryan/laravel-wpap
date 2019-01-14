<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konfig;
use Session;

class KonfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $konfig = Konfig::first();
        return view('admin.konfig.edit')->withKonfig($konfig);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'bank' => 'required',
            'nama' => 'required',
            'norek' => 'required'
        ]);

        $konfig = Konfig::first();
        $konfig->bank = $request->input('bank');
        $konfig->nama = $request->input('nama');
        $konfig->no_rek = $request->input('norek');
        $konfig->save();

        Session::flash('success', 'Berhasil diperbarui!');
        return redirect()->route('konfig');
    }

}

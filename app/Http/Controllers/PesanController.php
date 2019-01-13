<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pesan;
use App\Models\User;
use Session;
use Image;
use Storage;

class PesanController extends Controller
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

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user()->id;
        $count = Pesan::where("user_id", $user)->count();
        return view('user.pesan.create')->withCounts($count);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //memvalidasi data
        $this->validate($request, array(
            'nama' => 'required|max:255',
            'telp' => 'required|max:15',
            'email' => 'required',
            'foto' => 'required|image'
        ));

        $pesan = new pesan;
        //kirim data ke database
        $pesan->user_id = Auth::user()->id;
        $pesan->nama = $request->nama;
        $pesan->telp = $request->telp;
        $pesan->email = $request->email;

        //save gambar
        if ($request->hasFile('foto')) {
            $user = Auth::User()->name;
            $gambar = $request->file('foto');
            $namafile = time() . '.' . $gambar->getClientOriginalExtension();
            $lokasi = public_path('images/' . $user . $namafile);

            Image::make($gambar)->save($lokasi);

            $pesan->nm_file = $user . $namafile;
        }

        $pesan->save();

        Session::flash('success', 'Foto telah berhasil disimpan!
        Terima Kasih telah melakukan pesanan! Pesanan akan dikerjakan dan akan memakan waktu paling cepat 1-2 hari (sesuai antrian).
        Untuk tahap selanjutnya, silakan transfer biaya pembuatan WPAP ke nomor rekening di bawah. Kemudian silakan kirim bukti transfer ke
        nomor ini +62 8888 024148 dengan menyertakan nama pemesan dan tunggu balasan dari FR Graphics.
        ');
        
        //mengalihkan ke halaman tertentu
        return redirect()->route('user.konfirmasi.index');
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

    }
    public function konfirmasi()
    {
        return view('user.konfirmasi.index');
    }
}

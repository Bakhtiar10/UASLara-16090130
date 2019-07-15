<?php

namespace App\Http\Controllers;

use Hash;
use Auth;
// use App\Helper\Log;
use Illuminate\Http\Request;
use App\Anggota;

class AnggotaController extends Controller
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
        $data_anggota = Anggota::all();

        // Log::instance()->log(empty(Auth::anggota()->id) ? null : Auth::anggota(), 'on data_anggota');
        return view('admin.anggota.index', ['data_anggota' => $data_anggota]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $input = $request->all();

        $this->validate($request, [
            'nama' => 'required|alpha|min:5',
            'email' => 'required|email|unique:anggota',
            'password' => 'required|min:8',
            'alamat' => 'required|alpha_num',
            'no_hp' => 'required|numeric|unique:anggota'
          ]);
        
        Anggota::create([
            'nama' => request('nama'),
            'email' => request('email'),
            'password' => request('password'),
            'alamat'  => request('alamat'),
            'no_hp' => request('no_hp')
        ]);
        
        // Log::instance()->log(empty(Auth::anggota()->id) ? null : Auth::anggota(), 'create data_anggota');
        return redirect()->route('anggota')->with('succes','data berhasil di tambahkan');
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
    public function edit (Anggota $anggota)
    {
        // Log::instance()->log(empty(Auth::anggota()->id) ? null : Auth::anggota(), 'on edit data_anggota');
        return view('admin.anggota.edit',compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Anggota $anggota)
    {
        $this->validate($request, [
            'nama' => 'required|alpha|min:5',
            'email' => 'required|email|unique:anggota',
            'password' => 'required|min:8',
            'alamat' => 'required|alpha_num',
            'no_hp' => 'required|numeric|unique:anggota'
          ]);
        
        Anggota::create([
            'nama' => request('nama'),
            'email' => request('email'),
            'password' => request('password'),
            'alamat'  => request('alamat'),
            'no_hp' => request('no_hp')
        ]);

        // Log::instance()->log(empty(Auth::anggota()->id) ? null : Auth::anggota(), 'update data_anggota');
        return redirect()->route('update')->with('succes','data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $anggota = \App\Anggota::find($id);
        $anggota->delete();
        return redirect('/anggota')->with('sukses','Data berhasil dihapus');
    }
}

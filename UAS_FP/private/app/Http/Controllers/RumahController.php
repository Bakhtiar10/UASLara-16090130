<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Strorage;
use App\Rumah;
use DB;

class RumahController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Rumah::all()->where('deleted',0);
        return view('admin.rumah.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rumah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    
    public function store(Request $request)
    {
        $this->validate($request,[
        'image' => 'image|mimes:jpeg,jpg,png',
        'luas_tanah' => 'min:5',
        'luas_bangunan' => 'min:5',
        'alamat' => 'min:5|max:50',
        'harga' => 'min:5',
        'deskripsi' => 'min:5|max:100'
        ]);
        $image = $request->file('image')->store('rumah');
        Rumah::create([
            'image' => $image,
            'luas_tanah' => $request->luas_tanah,
            'luas_bangunan' => $request->luas_bangunan,
            'alamat' => $request->alamat,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('rumah')->with('succes','data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Rumah $rumah)
    {
        // return view('rumah.show', compact('rumah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Rumah $rumah, $id)
    {
        $rumah = Rumah::findOrFail($id);
        return view('admin.rumah.edit',compact('rumah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rumah $rumah)
    {
       if ($request->image){
        $image_path = $rumah->image;
        if (Storage::exist($image_path)) {
            Storage::delete($image_path);
        }
    $image = $request->file('image')->store('rumah');
    $rumah->update([
        'image' => $image,
        'luas_tanah' => $request->luas_tanah,
        'luas_bangunan' => $request->luas_bangunan,
        'alamat'  => $request->alamat,
        'harga'  => $request->harga,
        'deskripsi'  => $request->deskripsi,
    ]);
    
    }else {
        $rumah->update([
        'luas_tanah' => $request->luas_tanah,
        'luas_bangunan' => $request->luas_bangunan,
        'alamat'  => $request->alamat,
        'harga'  => $request->harga,
        'deskripsi'  => $request->deskripsi,
        ]);
    }
    return redirect()->route('rumah')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('table_data_rumah')
        ->where('id',$id)
        ->update(['deleted'=> 1]);
        return redirect()->route('rumah')->with('success','data berhasil dihapus');
        
    }
}
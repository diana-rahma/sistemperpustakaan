<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListkategoriController extends Controller
{
    public function index(Request $request) {

        if($request->has('search')) {
            $data = ListKategori::where('kategori','LIKE','%' .$request->search.'%');
        } else {
            $data = ListKategori::all();
        }

        return view('listkategori',compact('data'));
    }

    public function tambahdata() {

        $data = ListKategori::all();
        return view('tambahdata',compact('data'));
    }

    public function insertdata(Request $request) {
        //dd($request->all());
        $data = ListKategori::create($request->all());
        if($request->hasFile('file')) {

            $request->file('file')->move('foto/', $request->file('file')->getClientOriginalName());
            $data->file = $request->file('file')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('listkategori')->with('succes',' Data Berhasil di Tambah');
    }

    public function tampilkandata($id) {

        $data = ListKategori::find($id);
        //dd($data);

        return view('edit_kategori',compact('data'));
    }
}

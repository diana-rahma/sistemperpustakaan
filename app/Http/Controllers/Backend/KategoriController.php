<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index() {

        return view('backend.listkategori');
    }

    public function tambah_kategori() {

        return view('backend.tambah_kategori');

    }

    public function insertkategori(Request $request) {
        //dd($request->all());
        $data = Kategori::create($request->all());
        if($request->hasFile('file')) {

            $request->file('file')->move('foto/', $request->file('file')->getClientOriginalName());
            $data->file = $request->file('file')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('backend.listkategori')->with('succes',' Data Berhasil di Tambah');
    }

    public function edit_kategori($id) {

        $data = Kategori::find($id);
        //dd($data);

        return view('backend.edit_kategori',compact('data'));
    }

    public function updatekategori(Request $request, $id) {

        $data = Kategori::find($id);
        $data->update($request->all());

        if($request->hasFile('file')) {

            $request->file('file')->move('foto/', $request->file('file')->getClientOriginalName());
            $data->file = $request->file('file')->getClientOriginalName();
            $data->update();
        }
        return redirect()->route('backend.listkategori')->with('success',' Data Berhasil di Update');
    }

    public function delete(Request $request, $id) {

        $data = Kategori::find($id);
        $data->delete();
        return redirect()->route('backend.listkategori')->with('success',' Data Berhasil di Hapus');
    }
}

<?php

namespace App\Http\Controllers;
use App\tag;
use App\Blog;

use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
        $tag = tag::all();
        return view('tambah_tag')->withTag($tag);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $simpan = new tag;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tambah(Request $request)
    {
        $tambah = new tag;
        $tambah->judul_tag = $request->judul_tag;
        $tambah->save();
        return redirect('/tampil');
    }

    public function getApi(){
        return tag::all();
    }

    public function tambahApi(Request $request){
        $tambah = new tag;
        $tambah->judul_tag = $request->judul_tag;
        $tambah->save();

        return "Data Berhasil Ditambah";
    }

    public function updateApi(Request $request, $id)
    {
        $judul_tag = $request->judul_tag;

        $tag = tag::find($request->id);
        $tag->judul_tag = $judul_tag;
        $tag->save();

        return "Data Berhasil Di Update";
    }

    public function deleteApi($id)
    {
        $tag = tag::find($id);
        $tag->delete();
        return "Data Berhasil Di Hapus";
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
    public function update(Request $request, Blog $blog)
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

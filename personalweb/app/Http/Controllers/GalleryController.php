<?php

namespace App\Http\Controllers;

use App\gallery;
use Illuminate\Http\Request;
use DataTables;
use Auth;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function get()
    {
        $gallery = gallery::all();
        return view('galery')->withGallery($gallery);
    }

    public function get2()
    {
        $gallery = gallery::all();
        return view('tambah_gallery')->withGallery($gallery);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $simpan = new gallery;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tambah(Request $request)
    {
        $tambah = new gallery;
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('gallery/',$newName);
        $tambah->file = $newName;

        $tambah->deskripsi = $request->deskripsi;
        $tambah->author = Auth::user()->name;
        $tambah->save();
        return redirect('/galery');
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
        $view = gallery::find($id);
        return view('edit_gallery')->withGallery($view);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gallery $gallery)
    {
        $view = gallery::find($request->id);
        if (empty($request->file('file'))){
            $view->file = $view->file;
        }
        else{
            unlink('gallery/'.$view->file); //menghapus file lama
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('gallery/',$newName);
            $view->file = $newName;
        }

        $view->deskripsi = $request->deskripsi;
        $view->author = Auth::user()->name;
        $view->save();
        return redirect('galery');
    }

    public function json(){
        return Datatables::of(gallery::all())->make(true);
    }
 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = gallery::find($id);
        $del->delete();
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use App\category;
use App\komentar;
use App\gallery;
use App\tag;
use App\User;
use Auth;

use App\Exports\BlogExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use PDF;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
        $get = Blog::all();
        $kate = category::all();
        $komen = komentar::all();
        $tag = tag::all();
        return view('tampil')->withBlog($get)
                             ->withKate($kate)
                             ->withKomen($komen)
                             ->withTag($tag);
    }

    public function get1()
    {
        $get = Blog::all();
        $kate = category::all();
        $komen = komentar::all();
        $tag = tag::all();
        return view('tampil')->withBlog($get)
                              ->withKate($kate)
                              ->withKomen($komen)
                              ->withTag($tag);
    }

    public function get2()
    {
        $get = Blog::all();
        $kate = category::all();
        $tag = tag::all();
        return view('tambah')->withBlog($get)
                             ->withKate($kate)
                             ->withTag($tag);
    }

    public function get3()
    {
        $kate = category::all();
        return view('tbh_kate')->withKate($kate);
    }

    public function get4()
    {
        $get = Blog::all();
        $kate = category::all();
        $komen = komentar::all();
        $gallery = gallery::all();
        $tag = tag::all();
        return view('index')->withBlog($get)
                              ->withKate($kate)
                              ->withKomen($komen)
                              ->withGallery($gallery)
                              ->withTag($tag);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {
        $simpan = new Blog;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tambah(Request $request)
    {
        $tambah = new blog;
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('gambar/',$newName);
        $tambah->file = $newName;
        
        $tambah->judul = $request->judul;
        $tambah->content = $request->content;
        $tambah->id_ktg = $request->id_ktg;
        $tambah->author = Auth::user()->name;
        $tambah->save();
        $tambah->tags()->sync($request->tag);
        return redirect('tampil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function isi($id)
    {
        $view = Blog::find($id);
        $view2 = komentar::orderBy('id', 'content')->where('id_kom', $id)->get();
        $view3 = DB::table('blog_tag')->select('tag_id')->where('blog_id', $id)->get();
        $namatag = DB::select("SELECT tag.judul_tag FROM tag, blog_tag WHERE blog_tag.blog_id = $id AND blog_tag.tag_id
        = tag.id");
        return view('isi')->withView($view)
                          ->withView2($view2)
                          ->withView3($view3)
                          ->withNama($namatag);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $view = Blog::find($id);
        $kate = category::all();
        $tag = tag::all();
        return view('edit')->withData($view)
                           ->withKate($kate)
                           ->withTag($tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $view = Blog::find($request->id);
        if (empty($request->file('file'))){
            $view->file = $view->file;
        }
        else{
            unlink('gambar/'.$view->file); //menghapus file lama
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('gambar/',$newName);
            $view->file = $newName;
        }

        $view->judul = $request->judul;
        $view->content = $request->content;
        $view->id_ktg = $request->id_ktg;
        $view->author = Auth::user()->name;
        $view->save();
        $view->tags()->sync($request->tag);
        return redirect('tampil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $del0 = komentar::where('id_kom', $id);
        $del0->delete();

        $del = Blog::find($id);
        $del->delete();

        $del2 = tag::where('id', $id);
        $del2->delete();
        return back();
    }

    public function export_excel()
	{
		return Excel::download(new BlogExport, 'Artikel.xlsx');
    }
    
    public function cetak_pdf()
    {
    	$blog = Blog::all();
 
        $pdf = PDF::loadview('blog_pdf',['blog'=>$blog]);
        //download
        return $pdf->download('Article.pdf');

        //langsung
        // return $pdf->stream();
    }

    //API
    public function getApi(){
        return Blog::all();
    }

    public function tambahApi(Request $request)
    {
        $tambah = new blog;
        $tambah->judul = $request->judul;
        $tambah->content = $request->content;
        $tambah->id_ktg = $request->id_ktg;
        $tambah->author = $request->author;

        $file = $request->file('file');
        $ext = $file->getClientOriginalName();
        $request->file('file')->move('gambar/'.$ext);
        $tambah->file = $ext;
        
        $tambah->save();
        $tambah->tags()->sync($request->tag);
        return "Data Berhasil Ditambah";
    }

    //Tutup
}

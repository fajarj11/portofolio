<?php

namespace App\Http\Controllers;

use App\membership;
use Illuminate\Http\Request;
use App\jnsmembership;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
        $get = membership::all();
        $jenis = jnsmembership::all();
        return view('tmpl_member')->withmembership($get)
                                  ->withjnsmembership($jenis);
    }

    public function get2()
    {
        $jenis = jnsmembership::all();
        return view('tambah_member')->withjnsmembership($jenis);
    }

    public function get3()
    {
        $get = membership::all();
        $jenis = jnsmembership::all();
        return view('tampil_member_admin')->withmembership($get)
                                  ->withjnsmembership($jenis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $simpan = new membership;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tambah_member(Request $request)
    {
        $tambah = new membership;
        $tambah->nama_member = $request->nama_member;
        $tambah->id_jenis = $request->id_jenis;
        $tambah->tanggal = $request->tanggal;
        $tambah->email = $request->email;
        $tambah->save();
        return redirect('tampil_member_admin');
    }

    public function tambah_member2(Request $request)
    {
        $tambah = new membership;
        $tambah->nama_member = $request->nama_member;
        $tambah->id_jenis = $request->id_jenis;
        $tambah->tanggal = $request->tanggal;
        $tambah->email = $request->email;
        $tambah->save();
        return redirect('tmpl_member');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function show(Membership $membership)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $view = membership::find($id);
        $jenis = jnsmembership::all();
        return view('edit_member')->withData($view)
                                  ->withjnsmembership($jenis);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Membership $membership)
    {
        $view = membership::find($request->id);
        $view->nama_member = $request->nama_member;
        $view->id_jenis = $request->id_jenis;
        $view->tanggal = $request->tanggal;
        $view->email = $request->email;
        $view->save();
        return redirect('tmpl_member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = membership::find($id);
        $del->delete();
        return back();
    }
}

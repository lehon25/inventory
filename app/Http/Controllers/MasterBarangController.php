<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterBarang;
use DB;
use Alert;

class MasterBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $page_title = 'Master Barang';
        $barangs = DB::table('master_barang')->get();
        return view('view_barang.index',compact('barangs','page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Tambah Master Barang';
        return view('view_barang.create',compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $add = new MasterBarang;
        $add->name_barang = $request->name_barang;
        $add->stok= $request->stok;
        $add->harga_pembelian=$request->harga_pembelian;
        $add->harga_penjualan = $request->harga_penjualan;
        $add->save();
        return redirect('/master-barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cus = DB::table('master_barang')->where('id',$id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title = 'Edit master Barang';
        $barangs = MasterBarang::where('id',$id)->first();
        return view('view_barang.edit',compact('barangs','page_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){

        $edit = MasterBarang::where('id',$request->id)->first();
        $edit->name_barang = $request->name_barang;
        $edit->stok= $request->stok;
        $edit->harga_pembelian=$request->harga_pembelian;
        $edit->harga_penjualan = $request->harga_penjualan;
        $edit->update();
        return redirect('/master-barang');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = MasterBarang::where('id',$id)->delete();
        return redirect('/master-barang');
    }
}

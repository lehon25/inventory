<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pembelian;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Master Pembelian';
        $pembelians = DB::table('pembelian')->get();
        return view('view_pembelian.index',compact('pembelians','page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $delete = Pembelian::where('id',$id)->delete();
        return redirect('/kupon');
    }
    public function cancel($id){
        $pending = Pembelian::where('id',$id)->update(['status' => '99']);
        if($pending){
            Alert::success('Item dinonaktifkan','sukses');
            return redirect('/penjualan');
        }else{
            Alert::error('Gagal mengirim permintaan','gagal');
            return redirect('/master-item');
        }
    }
}

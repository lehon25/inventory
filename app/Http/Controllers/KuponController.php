<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Kupon;
class KuponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $page_title = 'Kupon';
        $kupons = DB::table('kupon')->get();
        return view('view_kupon.index',compact('kupons','page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Tambah Master Kupon';
        return view('view_kupon.create',compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $add = new Kupon;
        $add->name_cupon = $request->name_cupon;
        $add->description= $request->description;
        $add->discount_harga=$request->discount_harga;
        $add->save();
        return redirect('/kupon');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cus = DB::table('kupon')->where('id',$id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title = 'Edit Kupon';
        $kupons = Kupon::where('id',$id)->first();
        return view('view_kupon.edit',compact('kupons','page_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $edit = Kupon::where('id',$request->id)->first();
        $edit->name_cupon = $request->name_cupon;
        $edit->description= $request->description;
        $edit->discount_harga=$request->discount_harga;
        $edit->update();
        return redirect('/kupon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Kupon::where('id',$id)->delete();
        return redirect('/master-barang');
    }
}

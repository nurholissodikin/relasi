<?php

namespace App\Http\Controllers;
use App\Ortu;
use App\Anak;
use Illuminate\Http\Request;

class OrangtuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $ortu = Ortu::with('anak')->get();
        return view('orangtua.index',compact('ortu','anak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('orangtua.create');
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
        $ortu = new Ortu;
        $ortu ->nama_ibu = $request ->a;
        $ortu ->nama_ayah = $request ->b;
        $ortu ->umur_ibu = $request ->c;
        $ortu ->umur_ayah = $request ->d;
        $ortu ->alamat = $request ->e;
        $ortu ->save();
        return redirect('orangtua');
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
        $ortu = Ortu::findOrFail($id);
         return view('orangtua.show',compact('ortu'));
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
          $ortu = Ortu::findOrFail($id);
         return view('orangtua.edit',compact('ortu'));
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
        $ortu = Ortu::findOrFail($id);
        $ortu ->nama_ibu = $request ->a;
        $ortu ->nama_ayah = $request ->b;
        $ortu ->umur_ibu = $request ->c;
        $ortu ->umur_ayah = $request ->d;
        $ortu ->alamat = $request ->e;
        $ortu ->save();
        return redirect('orangtua');
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
        $ortu = Ortu::findOrFail($id);
        $ortu ->delete();
        return redirect('orangtua');
    }
}

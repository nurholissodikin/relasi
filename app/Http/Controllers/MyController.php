<?php

namespace App\Http\Controllers;
use App\Ortu;
use App\Anak;
use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function index()
    {
    	$a = "Sodikin";
    	return "Nama Saya Adalah : <b>".$a."</b>";
    }
    public function tampilan()
    {
    	return view('about');
    }

      public function tampilmodel()
    {
    	$ortu = Ortu::all();
    	$anak = Anak::all();
    	return view('about',compact('ortu','anak'));
    }

        public function tampilanak()
    {
    	$anak = Anak::all();
    	return view('anak',compact('anak'));
    }

}

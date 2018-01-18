<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;
use App\Jabatan;
use App\Acara;

class AcaraController extends Controller
{
    public function index()
    {
    	$acara = Acara::all();

    	return view('acara.index', compact('acara'));
    }

    public function create()
    {
    	//
    }
}

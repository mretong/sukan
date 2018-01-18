<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;
use App\Jabatan;

class PesertaController extends Controller
{
    public function index() {

    	$peserta = Peserta::all();

    	return view('peserta.index', compact('peserta'));
    }

    public function create() {

        $jabatan = Jabatan::pluck('nama', 'id');

        // dd($jabatan);

    	return view('peserta.create', compact('jabatan'));
    }

    public function store(Request $request) {

    	$peserta = new Peserta;

    	$peserta->nama 		= $request->get('nama');
    	$peserta->no_ic 	= $request->get('no_ic');
    	$peserta->id_jabatan	= $request->get('id_jabatan');

    	$peserta->save();
    	
    	return redirect()->route('peserta.index');
    }

    public function destroy($id) {

    	$peserta = Peserta::find($id);
    	$peserta->delete();


    	return redirect()->route('peserta.index');
    }

    public function show($id) {

    	$atlet = Peserta::findOrFail($id);
        $jabatan = Jabatan::pluck('nama', 'id');

    	return view('peserta.show', compact('atlet', 'jabatan'));
    }

    public function update($id, Request $request) {

        $peserta = Peserta::find($id);

        $peserta->nama      = $request->get('nama');
        $peserta->no_ic     = $request->get('no_ic');
        $peserta->id_jabatan    = $request->get('id_jabatan');

        $peserta->save();

        return redirect()->route('peserta.index');
    }
}

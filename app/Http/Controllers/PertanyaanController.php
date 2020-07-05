<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class PertanyaanController extends Controller
{
    public function index() 
    {
        $pertanyaans = PertanyaanModel::get_all();
        return view('pages.pertanyaan', compact('pertanyaans'));
    }

    public function create()
    {
        return view('pages.form');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        unset($data["_token"]); // data _token nya dibuang
        PertanyaanModel::save($data);
        return redirect('/pertanyaan');
    }

    public function show($id)
    {
        $pertanyaan = PertanyaanModel::find_by_id($id);
        $jawabans = JawabanModel::find_by_pertanyaan_id($id);
        
        return view('pages.detail_jawaban', compact('pertanyaan', 'jawabans'));
    }
}

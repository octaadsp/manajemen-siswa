<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Siswa;

class SiswaController extends Controller
{
    //Siswa
    public function index()
    {
        $halaman = 'siswa';
        $siswa_list = Siswa::all()->sortBy('nama_siswa');
        $jumlah_siswa = $siswa_list->count();
         return view('siswa.index', compact('halaman','siswa_list','jumlah_siswa'));
    }
    //create
    public function create()
    {
        $halaman= 'siswa';
         return view('siswa.create', compact('halaman'));
    }

    //Store
    public function store(Request $request)
    {
       $input = $request->all();
       Siswa::create($input);
         return redirect('siswa');
    }

    //Show ID Siswa
    public function show($id)
    {
        $halaman = 'siswa';
        $siswa = Siswa::findOrFail($id);
         return view('siswa.show', compact('halaman', 'siswa'));
    }

    //Edit Siswa
    public function edit($id)
    {
        $halaman ='siswa';
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa', 'halaman'));
    }

    //Update Siswa
    public function update($id, Request $request)
    {
        $siswa = Siswa::findOrFail ($id);
        $siswa->update($request->all());
        return redirect ('siswa');
    }

    //Delete Siswa
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail ($id);
        $siswa->delete();
        return redirect ('siswa');
    }
}
   

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        return response()->json(Mahasiswa::with('mataKuliah')->get());
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswas',
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $mahasiswa = Mahasiswa::create($request->all());
        return response()->json($mahasiswa, 201);
    }

    public function show($id)
    {
        return response()->json(Mahasiswa::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());
        return response()->json($mahasiswa);
    }

    public function destroy($id)
    {
        Mahasiswa::destroy($id);
        return response()->json(null, 204);
    }
}

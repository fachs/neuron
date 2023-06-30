<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramKerja;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ProgramKerjaController extends Controller
{
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'nama' => ['required', 'string'],
            'deskripsi' => ['required', 'string'],
            'nama_bidang' => ['required', 'string'],
            'progress' => ['nullable','integer'],
            'tanggal_pelaksanaan' => ['required', 'string'],
            'pic_1' => ['required', 'string'],
        ]);

        $validated = $validator->validated();

        $proker = ProgramKerja::create([
            'nama' => $validated["nama"],
            "deskripsi" => $validated["deskripsi"],
            "nama_bidang" => $validated["nama_bidang"],
            'progress' => $validated["progress"],
            "tanggal_pelaksanaan" => $validated["tanggal_pelaksanaan"],
            'pic_1' => $validated["pic_1"],
        ]);

        Alert::success('Berhasil', 'Program kerja berhasil ditambahkan!');
        Alert::error('Gagal', 'Program kerja gagal ditambahkan!');

        return back();
    }

    public function update(Request $request) {

        $updateProker = ProgramKerja::findOrFail($request->id);
        $updateProker->update($request->all());

        Alert::success('Berhasil', 'Perubahan berhasil disimpan!');
        Alert::error('Gagal', 'Perubahan gagal disimpan!');

        return back();
    }

}

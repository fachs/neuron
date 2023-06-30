<?php

namespace App\Http\Controllers;
use App\Models\Desain;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\File;
use RealRashid\SweetAlert\Facades\Alert;

class DesainController extends Controller
{
    public function show()
    {
        $desains = DB::table('desains')->select('id','judul','jenis','pic_name','status', 'created_at')->paginate(10);

        return view('pages/publikasi-desain-admin')->with('desains', $desains);
    }

    public function create()
    {
        return view('pages/desain-pengajuan-buat');
    }

    public function store(Request $request) {
        
        // return $request->file('file_surat')->store('public');
        $this->validate($request, [
            'lampiran' => 'required|mimes:jpg,png,jpeg,pdf,doc,docx|max:5048',
            'status' => 'required',
            'judul' => 'required',
            'jenis' => 'required',
            'pic_kontak' => 'required',
            'pic_name' => 'required',
            'keterangan_slide' => 'nullable',
            'deskripsi' => 'nullable',
        ]);

        $lampiran = $request->file('lampiran');
        
        $nama_file = $lampiran->getClientOriginalName();

        $lampiran->move('public/file-lampiran', $lampiran->getClientOriginalName());

        $req_desain = new Desain;
        $req_desain->lampiran = $nama_file;
        $req_desain->status = $request->input('status');
        $req_desain->judul = $request->input('judul');
        $req_desain->jenis = $request->input('jenis');
        $req_desain->pic_kontak = $request->input('pic_kontak');
        $req_desain->pic_name = $request->input('pic_name');
        $req_desain->keterangan_slide = $request->input('keterangan_slide');
        $req_desain->deskripsi = $request->input('deskripsi');

        $req_desain->save();

        Alert::success('Berhasil', 'Permintaan desain berhasil diajukan!');

        $desains = DB::table('desains')->select('id','judul','jenis','pic_name','status', 'created_at')->paginate(10);

        return view('pages/publikasi-desain-admin')->with('desains', $desains);
    }
}

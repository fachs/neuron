<?php

namespace App\Http\Controllers;
use App\Models\Publikasi;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\File;
use RealRashid\SweetAlert\Facades\Alert;

class PublikasiController extends Controller
{
    public function show()
    {
        $publikasis = DB::table('publikasis')->select('id','judul','jenis','pic_name','status', 'created_at')->paginate(10);

        return view('pages/publikasi-pengajuan-admin')->with('publikasis', $publikasis);
    }

    public function create()
    {
        return view('pages/publikasi-pengajuan-buat');
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

        $req_publikasi = new Publikasi;
        $req_publikasi->lampiran = $nama_file;
        $req_publikasi->status = $request->input('status');
        $req_publikasi->judul = $request->input('judul');
        $req_publikasi->jenis = $request->input('jenis');
        $req_publikasi->pic_kontak = $request->input('pic_kontak');
        $req_publikasi->pic_name = $request->input('pic_name');
        $req_publikasi->keterangan_slide = $request->input('keterangan_slide');
        $req_publikasi->deskripsi = $request->input('deskripsi');

        $req_publikasi->save();

        Alert::success('Berhasil', 'Permintaan publikasi berhasil diajukan!');

        $publikasis = DB::table('publikasis')->select('id','judul','jenis','pic_name','status', 'created_at')->paginate(10);

        return view('pages/publikasi-pengajuan-admin')->with('publikasis', $publikasis);
    }
}

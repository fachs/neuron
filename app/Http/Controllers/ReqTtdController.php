<?php

namespace App\Http\Controllers;
use App\Models\ReqTtd;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\File;
use RealRashid\SweetAlert\Facades\Alert;

class ReqTtdController extends Controller
{
    public function show()
    {
        $req_ttds = DB::table('req_ttds')->select('id','status','pic_name','pic_kontak','file_surat', 'file_ttd', 'created_at')->paginate(10);

        return view('pages/persuratan-ttd-admin')->with('req_ttds', $req_ttds);
    }

    public function upload(Request $request) {
        
        // return $request->file('file_surat')->store('public');
        $this->validate($request, [
            'file_surat' => 'required|mimes:pdf|max:5048',
            'status' => 'required',
            'file_ttd' => 'required',
            'pic_kontak' => 'required',
            'pic_name' => 'required',
        ]);

        $file_surat = $request->file('file_surat');
        
        $nama_file = $file_surat->getClientOriginalName();

        $file_surat->move('public/file-surat', $file_surat->getClientOriginalName());

        $req_ttd = new ReqTtd;
        $req_ttd->file_surat = $nama_file;
        $req_ttd->status = $request->input('status');
        $req_ttd->file_ttd = $request->input('file_ttd');
        $req_ttd->pic_kontak = $request->input('pic_kontak');
        $req_ttd->pic_name = $request->input('pic_name');

        $req_ttd->save();

        Alert::success('Berhasil', 'Permintaan berhasil diajukan!');

        return back();
    }
}

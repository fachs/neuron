<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index()
    {

    }

    public function indexAdmin()
    {
        $bidang = \Auth::user()->bidang;
        $prokers = DB::table('program_kerjas')->where('nama_bidang', $bidang)->select('id','nama','progress','tanggal_pelaksanaan', 'deskripsi', 'pic_1','nama_bidang')->get();
        $bidangs = DB::table('bidangs')->select('id','nama')->get();

        return view('pages/index-admin')->with('prokers', $prokers)->with('bidangs', $bidangs);
    }

    public function keuangan()
    {
        $user = \Auth::user()->bidang;

        if ($user == 'Keuangan') {
            return view('pages/keuangan-admin');
        } else {
            return view('pages/keuangan');
        }
    }

    public function keuanganIn()
    {
        return view('pages/keuangan');
    }

    public function keuanganRab()
    {
        
        $rab = DB::table('rabs')->select('status','total_pengajuan', 'created_at')->paginate(10);

        return view('pages/keuangan-rab')->with('rab', $rab);
    }

    public function keuanganRabKeuangan()
    {
        return view('pages/keuangan-rab-keuangan');
    }

    public function keuanganRabAudit($id)
    {
        $rabs = DB::table('rabs')->select('id','status','rincian','proker_id','harga','kuantitas','total', 'created_at','bidang')->paginate(10);

        return view('pages/keuangan-rab-audit')->with('rabs', $rabs);
    }

    public function keuanganLaporanKeuangan()
    {
        $prokers = DB::table('program_kerjas')->select('nama','nama_bidang')->paginate(10);
        $bidang = \Auth::user()->bidang;

        if ($bidang == 'Keuangan') {

            $laporanIns = DB::table('lap_keuangan_ins')->select('id','sumber','jumlah','tanggal')->paginate(10);
            $laporanOuts = DB::table('lap_keuangan_outs')->select('id','penerima','uraian','harga_satuan', 'harga_satuan', 'kuantitas', 'total', 'tanggal')->paginate(10);

            return view('pages/keuangan-laporan-keuangan')->with('laporanOuts', $laporanOuts)->with('laporanIns', $laporanIns)->with('prokers', $prokers);
        } else {

            $laporanIns = DB::table('lap_keuangan_ins')->where('bidang',$bidang)->select('id','sumber','jumlah','tanggal')->paginate(10);
            $laporanOuts = DB::table('lap_keuangan_outs')->where('bidang',$bidang)->select('id','penerima','uraian','harga_satuan', 'harga_satuan', 'kuantitas', 'total', 'tanggal')->paginate(10);

            return view('pages/keuangan-laporan-keuangan-admin')->with('laporanOuts', $laporanOuts)->with('laporanIns', $laporanIns);
        }
        
    }

    public function keuanganLaporanKeuanganAudit($id)
    {
        
        $laporanIns = DB::table('lap_keuangan_ins')->where('bidang',$id)->select('id','sumber','jumlah','tanggal','bidang')->paginate(10);
        $laporanOuts = DB::table('lap_keuangan_outs')->where('bidang',$id)->select('id','penerima','uraian','harga_satuan', 'harga_satuan', 'kuantitas', 'total', 'tanggal','bidang')->paginate(10);

        return view('pages/keuangan-laporan-keuangan-audit')->with('laporanOuts', $laporanOuts)->with('laporanIns', $laporanIns);
 
    }

    public function keuanganSptbh()
    {
        $sptbs = DB::table('sptbs')->select('himpunan','nominal_iuk','jumlah_mhs', 'pic', 'pic_nim', 'pic_wa', 'lampiran_sptb', 'lampiran_nList')->get();

        return view('pages/keuangan-sptbh')->with('sptbs', $sptbs);
    }

    public function persuratan()
    {
        return view('pages/persuratan');
    }

    public function publikasi()
    {
        return view('pages/publikasi');
    }

    public function publikasiPengajuan()
    {
        $publikasi = DB::table('publikasis')->select('judul','pic_name','status','jenis', 'pic_kontak', 'created_at')->paginate(10);

        return view('pages/publikasi-pengajuan')->with('publikasi', $publikasi);
    }

    public function publikasiPengajuanBuat()
    {
        $publikasi = DB::table('publikasis')->select('judul','status','jenis', 'pic_kontak', 'created_at')->paginate(10);

        return view('pages/publikasi-pengajuan-buat')->with('publikasi', $publikasi);
    }

    public function publikasiPengajuanAdmin()
    {
        $publikasi = DB::table('publikasis')->select('judul','status','jenis', 'pic_kontak', 'created_at')->paginate(10);

        return view('pages/publikasi-pengajuan-admin')->with('publikasi', $publikasi);
    }

    public function publikasiDesain()
    {
        $desain = DB::table('desains')->select('judul','status','jenis', 'pic_kontak', 'created_at')->paginate(10);

        return view('pages/publikasi-desain')->with('desain', $desain);
    }

    public function publikasiDesainAdmin()
    {
        $desain = DB::table('desains')->select('judul','status','jenis', 'pic_kontak', 'created_at')->paginate(10);

        return view('pages/publikasi-desain-admin')->with('desain', $desain);
    }

    public function profil()
    {
        return view('pages/profil');
    }
    
}

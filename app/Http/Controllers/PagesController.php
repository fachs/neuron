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
        $prokers = DB::table('program_kerjas')->select('id','nama','progress','tanggal_pelaksanaan', 'deskripsi', 'pic_1','nama_bidang')->get();
        $bidangs = DB::table('bidangs')->select('id','nama')->get();

        return view('pages/index-admin')->with('prokers', $prokers)->with('bidangs', $bidangs);
    }

    public function keuangan()
    {
        return view('pages/keuangan');
    }

    public function keuanganIn()
    {
        return view('pages/keuangan');
    }

    public function keuanganRab()
    {
        $rab = DB::table('rabs')->select('status','total_pengajuan', 'created_at')->get();

        return view('pages/keuangan-rab')->with('rab', $rab);
    }

    public function keuanganRabKeuangan()
    {
        return view('pages/keuangan-rab-keuangan');
    }

    public function keuanganRabAudit()
    {
        return view('pages/keuangan-rab-audit');
    }

    public function keuanganLaporanKeuangan()
    {
        $laporanIns = DB::table('lap_keuangan_ins')->select('sumber','jumlah','tanggal')->get();
        $laporanOuts = DB::table('lap_keuangan_outs')->select('penerima','uraian','harga_satuan', 'harga_satuan', 'kuantitas', 'total', 'tanggal')->get();

        return view('pages/keuangan-laporan-keuangan')->with('laporanOuts', $laporanOuts)->with('laporanIns', $laporanIns);
    }

    public function keuanganLaporanAll()
    {
        return view('pages/keuangan-laporan-all');
    }

    public function keuanganLaporanKeuanganAdmin()
    {
        $laporanIns = DB::table('lap_keuangan_ins')->select('id','sumber','jumlah','tanggal')->paginate(10);
        $laporanOuts = DB::table('lap_keuangan_outs')->select('id','penerima','uraian','harga_satuan', 'harga_satuan', 'kuantitas', 'total', 'tanggal')->paginate(10);

        return view('pages/keuangan-laporan-keuangan-admin')->with('laporanOuts', $laporanOuts)->with('laporanIns', $laporanIns);
    }

    public function keuanganSptbh()
    {
        $sptb = DB::table('sptbs')->select('himpunan','nominal_iuk','jumlah_mhs', 'pic', 'pic_nim', 'pic_wa', 'lampiran_sptb', 'lampiran_nList')->get();

        return view('pages/keuangan-sptbh')->with('sptb', $sptb);
    }

    public function persuratan()
    {
        return view('pages/persuratan');
    }

    public function persuratanTtdAdmin()
    {
        $req_ttd = DB::table('req_ttds')->select('id','status','pic_name','pic_kontak','file_surat', 'file_ttd', 'created_at')->paginate(10);

        return view('pages/persuratan-ttd-admin')->with('req_ttd', $req_ttd);
    }

    public function publikasi()
    {
        return view('pages/publikasi');
    }

    public function publikasiPengajuan()
    {
        $publikasi = DB::table('publikasis')->select('judul','pic_name','status','jenis', 'pic_kontak', 'created_at')->get();

        return view('pages/publikasi-pengajuan')->with('publikasi', $publikasi);
    }

    public function publikasiPengajuanBuat()
    {
        $publikasi = DB::table('publikasis')->select('judul','status','jenis', 'pic_kontak', 'created_at')->get();

        return view('pages/publikasi-pengajuan-buat')->with('publikasi', $publikasi);
    }

    public function publikasiPengajuanAdmin()
    {
        $publikasi = DB::table('publikasis')->select('judul','status','jenis', 'pic_kontak', 'created_at')->get();

        return view('pages/publikasi-pengajuan-admin')->with('publikasi', $publikasi);
    }

    public function publikasiDesain()
    {
        $desain = DB::table('desains')->select('judul','status','jenis', 'pic_kontak', 'created_at')->get();

        return view('pages/publikasi-desain')->with('desain', $desain);
    }

    public function publikasiDesainAdmin()
    {
        $desain = DB::table('desains')->select('judul','status','jenis', 'pic_kontak', 'created_at')->get();

        return view('pages/publikasi-desain-admin')->with('desain', $desain);
    }

    public function profil()
    {
        return view('pages/profil');
    }
    
}

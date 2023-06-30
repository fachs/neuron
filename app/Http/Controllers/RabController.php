<?php

namespace App\Http\Controllers;
use App\Models\Rab;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class RabController extends Controller
{
    public function show() {
        $rabs = DB::table('rabs')->select('id','status','rincian','proker_id','harga','kuantitas','total', 'created_at')->paginate(10);
        $prokers = DB::table('program_kerjas')->select('id','nama')->get();

        return view('pages/keuangan-rab-admin')->with('rabs', $rabs)->with('prokers', $prokers);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'status' => ['required', 'string'],
            'rincian' => ['required', 'string'],
            'proker_id' => ['required', 'integer'],
            'harga' => ['required', 'integer'],
            'kuantitas' => ['required', 'integer'],
            'total' => ['required', 'integer'],
        ]);

        $validated = $validator->validated();

        $rab = Rab::create([
            'status' => $validated["status"],
            'rincian' => $validated["rincian"],
            "proker_id" => $validated["proker_id"],
            "harga" => $validated["harga"],
            "kuantitas" => $validated["kuantitas"],
            "total" => $validated["total"],
        ]);
        
        Alert::success('Berhasil', 'Anggaran berhasil diajukan!');

        return back();
    }
    
}

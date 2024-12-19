<?php

namespace App\Http\Controllers;

use App\Models\HKT;
use App\Models\Klasifikasi;
use App\Models\LokasiArsip;
use App\Models\NasibAkhir;
use Illuminate\Http\Request;

class HKTController extends Controller
{
    public function index()
    {
        $hkts = HKT::with(['klasifikasi', 'lokasiArsip', 'nasibAkhir'])->get();
        return view('hkt.index', compact('hkts'));
    }

    public function create()
    {
        $klasifikasis = Klasifikasi::all();
        $lokasiArsips = LokasiArsip::all();
        $nasibAkhirs = NasibAkhir::all();
        return view('hkt.create', compact('klasifikasis', 'lokasiArsips', 'nasibAkhirs'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nomor_surat' => 'required',
            'tanggal_surat' => 'required|date',
            'tahun_surat' => 'required|numeric',
            'kode_klasifikasi_id' => 'required|exists:klasifikasis,id',
            'perihal' => 'required',
            'uraian_informasi' => 'required',
            'tingkat_informasi_id' => 'required|numeric',
            'lokasi_arsip_id' => 'required|exists:lokasi_arsips,id',
            'retensi' => 'required|numeric',
            'keterangan' => 'nullable',
            'nasib_akhir_id' => 'required|exists:nasib_akhirs,id',
        ]);

        HKT::create($validated);
        return redirect()->route('hkt.index')->with('success', 'HKT berhasil ditambahkan');
    }

    public function edit(HKT $hkt)
    {
        $klasifikasis = Klasifikasi::all();
        $lokasiArsips = LokasiArsip::all();
        $nasibAkhirs = NasibAkhir::all();
        return view('hkt.edit', compact('hkt', 'klasifikasis', 'lokasiArsips', 'nasibAkhirs'));
    }

    public function update(Request $request, HKT $hkt)
    {
        $validated = $request->validate([
            'nomor_surat' => 'required',
            'tanggal_surat' => 'required|date',
            'tahun_surat' => 'required|numeric',
            'kode_klasifikasi_id' => 'required|exists:klasifikasis,id',
            'perihal' => 'required',
            'uraian_informasi' => 'required',
            'tingkat_informasi_id' => 'required|numeric',
            'lokasi_arsip_id' => 'required|exists:lokasi_arsips,id',
            'retensi' => 'required|numeric',
            'keterangan' => 'nullable',
            'nasib_akhir_id' => 'required|exists:nasib_akhirs,id',
        ]);

        $hkt->update($validated);
        return redirect()->route('hkt.index')->with('success', 'HKT berhasil diperbarui');
    }

    public function destroy(HKT $hkt)
    {
        $hkt->delete();
        return redirect()->route('hkt.index')->with('success', 'HKT berhasil dihapus');
    }
}

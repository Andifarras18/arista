@extends('layouts.app')
@section('title', 'Arsip HKT')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Arsip / HKT / Tambah</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambahkan Data HKT</h6>
        </div>
        <div class="card-body">
            <form class="user">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" name="nomorSurat" id="exampleSuratTugas"
                            placeholder="Nomor Surat">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" name="uraianInformasi" id="exampleUraianInformasi"
                            placeholder="Uraian Informasi">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" nama="exampleTglSurat"
                            id="exampleTanggalSurat" placeholder="Tanggal Surat">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" name="examLokArsip"
                            id="exampleLokasiArsip" placeholder="Lokasi Arsip">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" name=" examPenciptaKerja"
                            id="examplePenciptaArsip" placeholder="Pencipta Arsip">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" name=" exampJumlahItem"
                            id="exampleJumlahItem" placeholder="Jumlah Item">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" name="exampUnitPengolah"
                            id="exampleUnitPengelolah" placeholder="Unit Pengelolah">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" name="exampLampiran"
                            id="exampleLampiran" placeholder="Lampiran">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" name="exampKodeKlasifikasi"
                            id="exampleKodeKlasifikasi" placeholder="Kode Klasifikasi">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" name="exampTingkatPerkembangan"
                            id="exampleTingkatPerkembangan" placeholder="Tingkat Perkembangan">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" name="exampKeterangan"
                            id="exampleKeterangan" placeholder="Keterangan">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" name="exampleAksesKeamanan"
                            id="exampleAksesKeamanan" placeholder="Akses Keamanan">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" name="exampleRetensi"
                            id="exampleRetensi" placeholder="Retensi">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" name="NasibAkhir "
                            id="exampleNasibAkhir" placeholder="Nasib Akhir">
                    </div>
                </div>
                <a href="login.html" class="btn btn-primary btn-user btn-block">
                    Unggah
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')
@section('title', 'Arsip HKT')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Arsip HKT</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data HKT</h6>
            <a href="{{ route('hkt.create') }}" class="btn btn-primary btn-sm float-right" title="Tambah Data"><i class="fas fa-plus fa-sm"></i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomor Surat</th>
                            <th>Tanggal Surat</th>
                            <th>Tahun Surat</th>
                            <th>Kode Klasifikasi</th>
                            <th>Perihal</th>
                            <th>Uraian Informasi</th>
                            <th>Tingkat Informasi</th>
                            <th>Lokasi Arsip</th>
                            <th>Retensi</th>
                            <th>Keterangan</th>
                            <th>Nasib Akhir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($hkts as $hkt)
                        <tr>
                            <td>{{ $hkt->nomor_surat }}</td>
                            <td>{{ $hkt->tanggal_surat }}</td>
                            <td>{{ $hkt->tahun_surat }}</td>
                            <td>{{ $hkt->klasifikasi->nama ?? '-' }}</td>
                            <td>{{ $hkt->perihal }}</td>
                            <td>{{ $hkt->uraian_informasi }}</td>
                            <td>{{ $hkt->tingkat_informasi_id }}</td>
                            <td>{{ $hkt->lokasiArsip->nama ?? '-' }}</td>
                            <td>{{ $hkt->retensi }}</td>
                            <td>{{ $hkt->keterangan ?? '-' }}</td>
                            <td>{{ $hkt->nasibAkhir->nama ?? '-' }}</td>
                            <td>
                                <a href="{{ route('hkt.edit', $hkt->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('hkt.destroy', $hkt->id) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

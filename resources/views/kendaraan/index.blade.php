@extends('template.app')

@section('content')
<div class="section-header">
    <h1>Halaman Kendaraan</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dasbor</a></div>
        <div class="breadcrumb-item"><a href="#">Kendaraan</a></div>
        <div class="breadcrumb-item">Daftar Kendaraan</div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('kendaraan.create') }}" class="btn btn-success">Tambah Kendaraan</a>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No. Pol</th>
                            <th>No. Mesin</th>
                            <th>Jenis Mobil</th>
                            <th>Nama Mobil</th>
                            <th>Merk</th>
                            <th>Kapasitas</th>
                            <th>Tarif</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kendaraans as $kendaraan)
                            <tr>
                                <td>{{ $kendaraan->no_pol }}</td>
                                <td>{{ $kendaraan->no_mesin }}</td>
                                <td>{{ $kendaraan->jenis_mobil }}</td>
                                <td>{{ $kendaraan->nama_mobil }}</td>
                                <td>{{ $kendaraan->merk }}</td>
                                <td>{{ $kendaraan->kapasitas }}</td>
                                <td>{{ $kendaraan->tarif }}</td>
                                <td>
                                    <a href="{{ route('kendaraan.show', $kendaraan->no_pol) }}" class="btn btn-info">Lihat</a>
                                    <a href="{{ route('kendaraan.edit', $kendaraan->no_pol) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('kendaraan.destroy', $kendaraan->no_pol) }}" method="POST" style="display:inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
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

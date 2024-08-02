@extends('template.app')

@section('content')
<div class="section-header">
    <h1>Tambah Invoice</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body p-0">
                <form action="{{ route('invoices.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id_kwitansi">Kwitansi:</label>
                        <select id="id_kwitansi" name="id_kwitansi" class="form-control">
                            @foreach ($kwitansis as $kwitansi)
                                <option value="{{ $kwitansi->id }}">{{ $kwitansi->nomor_kwitansi }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_penyewa">Penyewa:</label>
                        <select id="id_penyewa" name="id_penyewa" class="form-control">
                            @foreach ($penyewas as $penyewa)
                                <option value="{{ $penyewa->id }}">{{ $penyewa->nama_penyewa }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no_pol">No. Pol:</label>
                        <select id="no_pol" name="no_pol" class="form-control">
                            @foreach ($kendaraans as $kendaraan)
                                <option value="{{ $kendaraan->no_pol }}">{{ $kendaraan->no_pol }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

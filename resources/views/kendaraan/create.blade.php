@extends('template.app')

@section('content')
<div class="section-header">
    <h1>Tambah Kendaraan</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Kendaraan</a></div>
        <div class="breadcrumb-item">Tambah Kendaraan</div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('kendaraan.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="no_pol">No. Pol:</label>
                        <input type="text" id="no_pol" name="no_pol" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="no_mesin">No. Mesin:</label>
                        <input type="text" id="no_mesin" name="no_mesin" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jenis_mobil">Jenis Mobil:</label>
                        <select id="jenis_mobil" name="jenis_mobil" class="form-control">
                            <option value="mpv">MPV</option>
                            <option value="city">City Car</option>
                            <option value="suv">SUV</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_mobil">Nama Mobil:</label>
                        <input type="text" id="nama_mobil" name="nama_mobil" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="merk">Merk:</label>
                        <select id="merk" name="merk" class="form-control">
                            <option value="honda">Honda</option>
                            <option value="toyota">Toyota</option>
                            <option value="daihatsu">Daihatsu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kapasitas">Kapasitas:</label>
                        <input type="text" id="kapasitas" name="kapasitas" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tarif">Tarif:</label>
                        <input type="number" id="tarif" name="tarif" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

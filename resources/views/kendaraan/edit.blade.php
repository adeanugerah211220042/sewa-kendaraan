@extends('template.app')

@section('content')
<div class="section-header">
    <h1>Edit Kendaraan</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Kendaraan</a></div>
        <div class="breadcrumb-item">Edit Kendaraan</div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('kendaraan.update', $kendaraan->no_pol) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                        <label for="no_mesin">No. Mesin:</label>
                        <input type="text" id="no_mesin" name="no_mesin" class="form-control" value="{{ $kendaraan->no_mesin }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="jenis_mobil">Jenis Mobil:</label>
                        <select id="jenis_mobil" name="jenis_mobil" class="form-control">
                            <option value="mpv" {{ $kendaraan->jenis_mobil == 'mpv' ? 'selected' : '' }}>MPV</option>
                            <option value="city" {{ $kendaraan->jenis_mobil == 'city' ? 'selected' : '' }}>City Car</option>
                            <option value="suv" {{ $kendaraan->jenis_mobil == 'suv' ? 'selected' : '' }}>SUV</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="nama_mobil">Nama Mobil:</label>
                        <input type="text" id="nama_mobil" name="nama_mobil" class="form-control" value="{{ $kendaraan->nama_mobil }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="merk">Merk:</label>
                        <select id="merk" name="merk" class="form-control">
                            <option value="honda" {{ $kendaraan->merk == 'honda' ? 'selected' : '' }}>Honda</option>
                            <option value="toyota" {{ $kendaraan->merk == 'toyota' ? 'selected' : '' }}>Toyota</option>
                            <option value="daihatsu" {{ $kendaraan->merk == 'daihatsu' ? 'selected' : '' }}>Daihatsu</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="kapasitas">Kapasitas:</label>
                        <input type="text" id="kapasitas" name="kapasitas" class="form-control" value="{{ $kendaraan->kapasitas }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="tarif">Tarif:</label>
                        <input type="number" id="tarif" name="tarif" class="form-control" value="{{ $kendaraan->tarif }}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

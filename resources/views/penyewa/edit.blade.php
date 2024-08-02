@extends('template.app')

@section('content')
<div class="section-header">
    <h1>Edit Penyewa</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Penyewa</a></div>
        <div class="breadcrumb-item">Tambah Penyewa</div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('penyewa.update', $penyewa->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_penyewa">Nama Penyewa:</label>
                        <input type="text" id="nama_penyewa" name="nama_penyewa" class="form-control" value="{{ $penyewa->nama_penyewa }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <textarea id="alamat" name="alamat" class="form-control">{{ $penyewa->alamat }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No HP:</label>
                        <input type="text" id="no_hp" name="no_hp" class="form-control" value="{{ $penyewa->no_hp }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

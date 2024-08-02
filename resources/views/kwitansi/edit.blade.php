@extends('template.app')

@section('content')
<div class="section-header">
    <h1>Edit Kwitansi</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Kwitansi</a></div>
        <div class="breadcrumb-item">Tambah Kwitansi</div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('kwitansi.update', $kwitansi->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="tgl_kwitansi">Tanggal Kwitansi:</label>
                        <input type="date" id="tgl_kwitansi" name="tgl_kwitansi" class="form-control" value="{{ $kwitansi->tgl_kwitansi }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

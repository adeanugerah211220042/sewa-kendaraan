@extends('template.app')

@section('content')
<div class="section-header">
    <h1>Halaman Kwitansi</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dasbor</a></div>
        <div class="breadcrumb-item"><a href="#">Tata Letak</a></div>
        <div class="breadcrumb-item">Tata Letak Default</div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('kwitansi.create') }}" class="btn btn-success">Tambah Kwitansi</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tanggal Kwitansi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kwitansis as $kwitansi)
                            <tr>
                                <td>{{ $kwitansi->id }}</td>
                                <td>{{ $kwitansi->tgl_kwitansi }}</td>
                                <td>
                                    <a href="{{ route('kwitansi.show', $kwitansi->id) }}" class="btn btn-info">Lihat</a>
                                    <a href="{{ route('kwitansi.edit', $kwitansi->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('kwitansi.destroy', $kwitansi->id) }}" method="POST" style="display:inline-block">
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

@extends('template.app')

@section('content')
<div class="section-header">
    <h1>Halaman Penyewa</h1>
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
                <a href="{{ route('penyewa.create') }}" class="btn btn-success">Tambah Penyewa</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama Penyewa</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penyewas as $penyewa)
                            <tr>
                                <td>{{ $penyewa->nama_penyewa }}</td>
                                <td>{{ $penyewa->alamat }}</td>
                                <td>{{ $penyewa->no_hp }}</td>
                                <td>
                                    <a href="{{ route('penyewa.show', $penyewa->id) }}" class="btn btn-info">Lihat</a>
                                    <a href="{{ route('penyewa.edit', $penyewa->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('penyewa.destroy', $penyewa->id) }}" method="POST" style="display:inline-block">
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

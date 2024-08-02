@extends('template.app')

@section('content')
<div class="section-header">
    <h1>Halaman Invoice</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dasbor</a></div>
        <div class="breadcrumb-item"><a href="#">Invoice</a></div>
        <div class="breadcrumb-item">Daftar Invoice</div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('invoices.create') }}" class="btn btn-success">Tambah Invoice</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kwitansi</th>
                            <th>Penyewa</th>
                            <th>No. Pol</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoices as $invoice)
                            <tr>
                                <td>{{ $invoice->id }}</td>
                                <td>{{ $invoice->kwitansi->nomor_kwitansi }}</td>
                                <td>{{ $invoice->penyewa->nama_penyewa }}</td>
                                <td>{{ $invoice->kendaraan->no_pol }}</td>
                                <td>
                                    <a href="{{ route('invoices.show', $invoice->id) }}" class="btn btn-info">Lihat</a>
                                    <a href="{{ route('invoices.edit', $invoice->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST" style="display:inline-block">
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

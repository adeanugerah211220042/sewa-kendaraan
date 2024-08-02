<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Detail Invoice</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <p><strong>ID:</strong> {{ $invoice->id }}</p>
                        <p><strong>Kwitansi:</strong> {{ $invoice->kwitansi->nomor_kwitansi }}</p>
                        <p><strong>Penyewa:</strong> {{ $invoice->penyewa->nama_penyewa }}</p>
                        <p><strong>No. Pol:</strong> {{ $invoice->kendaraan->no_pol }}</p>
                        <a href="{{ route('invoices.edit', $invoice->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

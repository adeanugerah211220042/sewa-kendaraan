<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Kendaraan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Detail Kendaraan</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <p><strong>No. Pol:</strong> {{ $kendaraan->no_pol }}</p>
                        <p><strong>No. Mesin:</strong> {{ $kendaraan->no_mesin }}</p>
                        <p><strong>Jenis Mobil:</strong> {{ $kendaraan->jenis_mobil }}</p>
                        <p><strong>Nama Mobil:</strong> {{ $kendaraan->nama_mobil }}</p>
                        <p><strong>Merk:</strong> {{ $kendaraan->merk }}</p>
                        <p><strong>Kapasitas:</strong> {{ $kendaraan->kapasitas }}</p>
                        <p><strong>Tarif:</strong> {{ $kendaraan->tarif }}</p>
                        <a href="{{ route('kendaraan.index') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

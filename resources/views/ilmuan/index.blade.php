<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ilmuan Matematika Dunia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Data Ilmuan Matematika Dunia</h1>
        <a href="{{ route('ilmuan.create') }}" class="btn btn-info mb-3">Tambah Data</a>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                <div class="d-flex justify-content-between">
                    <p>
                        {{ session('success') }}
                    </p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                <div class="d-flex justify-content-between">
                    <p>
                        {{ session('error') }}
                    </p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <table class="table text-center">
                    <thead>
                        <th>No</th>
                        <th>Nama Ilmuan</th>
                        <th>Deskripsi ilmuan</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @if ($ilmuan->count() > 0)
                            @foreach ($ilmuan as $no => $hasil)
                                <tr>
                                    <td>{{ $no + 1 }}</td>
                                    <td>{{ $hasil->nama_ilmuan }}</td>
                                    <td>{{ $hasil->biografi_singkat }}</td>
                                    <td>
                                        <form action="{{ route('ilmuan.destroy', $hasil->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('ilmuan.show', $hasil->id) }}"
                                                class="btn btn-success btn-info" type="submit">Detail</a>
                                            <a href="{{ route('ilmuan.edit', $hasil->id) }}"
                                                class="btn btn-success btn-sm" type="submit">Edit</a>
                                            <button class="btn btn-danger btn-sm" type="submit"
                                                onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="10" align="center">Tidak ada Data</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>

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
        <h1 class="text-center mb-5">Form Detail Data Ilmuan Matematika Dunia</h1>
        <a href="{{ route('ilmuan.index') }}" class="btn btn-primary mb-3">Data Ilmuan Matematika Dunia</a>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('ilmuan.update', $ilmuan->id) }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Ilmuan</label>
                        <input type="text" class="form-control" name="nama_ilmuan" value="{{ $ilmuan->nama_ilmuan }}"
                            id="nama" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="biografi_singkat" class="form-label">Biografi Singkat</label>
                        <input type="text" class="form-control" name="biografi_singkat"
                            value="{{ $ilmuan->biografi_singkat }}" id="biografi_singkat" disabled>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>List</title>
</head>

<body>
    @include('uts.components.navbar')
    <div class="d-flex justify-content-center mt-5 mb-5">
        <h1>List Mahasiswa</h1>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($mahasiswa as $key => $value)
                <div class="col">
                    {{-- <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $value->nama_lengkap }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $value->nim }}</h6>
                            <p class="card-text">{{ $value->jurusan }}</p>
                            <p class="card-text">Semester {{ $value->semester }}</p>
                        </div>
                    </div> --}}
                    <div class="card">
                        <div class="card-header">
                            Mahasiswa
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $value->nama_lengkap }}</h5>
                            <p class="card-text">{{ $value->nim }}</p>
                            <p class="card-text">{{ $value->jurusan }}</p>
                            <p class="card-text">{{ $value->semester }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- JS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>

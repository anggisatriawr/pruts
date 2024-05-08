<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Create</title>
</head>

<body>
    @include('uts.components.navbar')
    <div class="container d-flex justify-content-center mt-5 mb-5">
        <h1>Form Pengisian Data Mahasiswa</h1>
    </div>
    <div class="container">
        <form method="POST">
            @csrf
            @if (Session::has('pass-key'))
                <div class="alert alert-success" role="alert">
                    {{ session('pass-key') }}
                </div>
            @endif
            <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                    aria-describedby="emailHelp" value="Windah Basudara">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" value="221044199999999">
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="Teknik Informatika">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="Sydney">
            </div>
            <div class="mb-3">
                <label for="telp" class="form-label">No Telp.</label>
                <input type="text" class="form-control" id="telp" name="telp" value="0815555555">
            </div>
            <div class="mb-3">
                <label for="semester" class="form-label">Semester</label>
                <input type="text" class="form-control" id="semester" name="semester" value="8">
            </div>
            <div class="mb-3 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="container d-flex justify-content-center">
            <h1>Data Baru Mahasiswa</h1>
        </div>
        @if (Session::has('mahasiswa'))
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ session('mahasiswa')->nama_lengkap }}</h5>
                    <p class="card-text">{{ session('mahasiswa')->nim }}</p>
                    <p class="card-text">{{ session('mahasiswa')->jurusan }}</p>
                    <p class="card-text">{{ session('mahasiswa')->alamat }}</p>
                    <p class="card-text">Jurusan {{ session('mahasiswa')->telp }}</p>
                    <p class="card-text">Semester {{ session('mahasiswa')->semester }}</p>
                </div>
            </div>
            @else
            <div class="alert alert-primary" role="alert">
                Tidak Ada Data Mahasiswa
              </div>
        @endif
    </div>
    {{-- JS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>

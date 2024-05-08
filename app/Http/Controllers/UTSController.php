<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UTSController extends Controller
{
    public function index()
    {
        return view('uts.index');
    }
    public function create()
    {
        return view('uts.create');
    }
    public function list()
    {
        $mahasiswa = [
            [
                "id" => "1",
                "nama_lengkap" => "Muhammad Firza Khoirudin",
                "nim" => "22104410067",
                "jurusan" => "Teknik Informatika",
                "semester" => "4",
            ],
            [
                "id" => "2",
                "nama_lengkap" => "Boby Hendrawan",
                "nim" => "22104410078",
                "jurusan" => "Teknik Informatika",
                "semester" => "4",
            ],
            [
                "id" => "3",
                "nama_lengkap" => "Muhammad Fadel Mas'an",
                "nim" => "22104410117",
                "jurusan" => "Teknik Informatika",
                "semester" => "4",
            ],
            [
                "id" => "4",
                "nama_lengkap" => "Anggi Satria Wiranata",
                "nim" => "22104410091",
                "jurusan" => "Teknik Informatika",
                "semester" => "4",
            ],
        ];
        $mahasiswa = json_decode(json_encode($mahasiswa));
        return view('uts.list', [
            "mahasiswa" => ($mahasiswa)
        ]);
    }
    public function store(Request $request)
    {
        $mahasiswa = [
            "nama_lengkap" => $request->nama_lengkap,
            "nim" => $request->nim,
            "jurusan" => $request->jurusan,
            "alamat" => $request->alamat,
            "telp" => $request->telp,
            "semester" => $request->semester,
        ];
        $mahasiswa = json_decode(json_encode($mahasiswa));
        return redirect('/uts/create')->with('pass-key', 'Data Mahasiswa Berhasil Disimpan')->with("mahasiswa", $mahasiswa);
    }
}

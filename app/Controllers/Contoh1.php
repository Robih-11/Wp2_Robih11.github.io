<?php

namespace App\Controllers;

class Contoh1 extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo "<h1>Perkenalkan Nama saya Robih <h1><br>";
        echo "Mahasiswa Universitas Bina Sarana Informatika<br>";
        echo "Kelas 12.3B.37<br>";
        echo "Jurusan Sistem informasi";
    }
}

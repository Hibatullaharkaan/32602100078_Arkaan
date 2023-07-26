<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class FormController extends Controller
{
    public function index()
    {
        //Tampilan view form
        return view('form');
    }
    
    public function processForm()
    {

        //Mengambil data yang dikirim melalui form
        $nama = $this->request->getPost('nama');
        $nim = $this->request->getPost('nim');
        $kelas = $this->request->getPost('kelas');
        $matakuliah = $this->request->getPost('matakuliah');
        $dosen = $this->request->getPost('dosen');
        $asisten = $this->request->getPost('asisten');

        //Menyiapkan data yang akan dikirim ke view

        $data = [
            'nama' => $nama,
            'nim' => $nim,
            'kelas' => $kelas,
            'matakuliah' => $matakuliah,
            'dosen' => $dosen,
            'asisten' => $asisten,
        ];

        return view('result', $data);
    }
}

<?php

namespace App\Controllers;

use App\Models\IbuModel; // Pastikan model diimport

class Ibu extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new IbuModel(); // Inisialisasi model
    }

    public function index()
    {
        $data['ibu'] = $this->model->findAll();
        return view('ibu/index', $data); // Pastikan view ada
    
    
    // Debug apakah model terinisialisasi
    if (!$this->model) {
        echo "Model tidak diinisialisasi dengan benar.";
        exit; // Berhenti di sini jika model belum diinisialisasi
    }

    // Ambil data dari database
    $data['ibu'] = $this->model->findAll();

    // Debug data yang diambil dari database
    dd($data); // Menampilkan isi data dan menghentikan eksekusi

    // Kirim data ke view
    return view('ibu/index', $data);
}
}


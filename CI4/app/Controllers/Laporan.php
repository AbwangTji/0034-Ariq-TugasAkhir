<?php
namespace App\Controllers;
use App\Models\LaporanModel;
class Laporan extends BaseController {
    protected $model;
    public function __construct() {
        $this->model = new LaporanModel();
    }

    public function index() {
        $data['laporan'] = $this->model->findAll();
        return view('laporan/index', $data);
    }
}

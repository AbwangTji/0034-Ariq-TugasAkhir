<?php
namespace App\Controllers;
use App\Models\ImunisasiModel;

class Imunisasi extends BaseController {
    protected $model;
    public function __construct() {
        $this->model = new ImunisasiModel();
    }

    public function index() {
        $data['imunisasi'] = $this->model->findAll();
        return view('imunisasi/index', $data);
    }
}
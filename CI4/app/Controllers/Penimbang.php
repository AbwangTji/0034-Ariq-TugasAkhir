<?php
namespace App\Controllers;
use App\Models\PenimbangModel;
class Penimbang extends BaseController {
    protected $model;
    public function __construct() {
        $this->model = new PenimbangModel();
    }

    public function index() {
        $data['penimbang'] = $this->model->findAll();
        return view('penimbang/index', $data);
    }
}
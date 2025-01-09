<?php
namespace App\Controllers;
use App\Models\PetugasModel;
class Petugas extends BaseController {
    protected $model;
    public function __construct() {
        $this->model = new PetugasModel();
    }

    public function index() {
        $data['petugas'] = $this->model->findAll();
        return view('petugas/index', $data);
    }
}
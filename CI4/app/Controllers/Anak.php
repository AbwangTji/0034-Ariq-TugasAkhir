<?php
namespace App\Controllers;
use App\Models\AnakModel;
class Anak extends BaseController {
    protected $model;
    public function __construct() {
        $this->model = new AnakModel();
    }

    public function index() {
        $data['anak'] = $this->model->findAll();
        return view('anak/index', $data);
    }
}
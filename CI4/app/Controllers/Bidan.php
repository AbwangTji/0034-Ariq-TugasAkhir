<?php
namespace App\Controllers;
use App\Models\BidanModel;
class Bidan extends BaseController {
    protected $model;
    public function __construct() {
        $this->model = new BidanModel();
    }

    public function index() {
        $data['bidan'] = $this->model->findAll();
        return view('bidan/index', $data);
    }
}
<?php

namespace App\Controllers;

use App\Core\Controller;

class User extends Controller
{

    public object $model;

    public function __construct()
    {

        $this->model = new \App\Models\User();
    }

    public function index()
    {

        $data['rows'] = $this->model->tampil();
        $this->dashboard('user/index', $data);
    }

    public function input()
    {
        $this->dashboard('user/input');
    }

    public function simpan()
    {
        $this->model->simpan();
        header('location:' . URL . '/user');
    }

    public function edit($id)
    {
        $data = $this->model->edit($id);
        $this->dashboard('user/edit', $data);
    }

    public function update()
    {
        $this->model->update();
        header('location:' . URL . '/user');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('location:' . URL . '/user');
    }
}

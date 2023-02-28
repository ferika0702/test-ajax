<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;
class Home extends BaseController
{
    public function index()
    {
        {
            $model = new MahasiswaModel();
            $data['mahasiswa'] = $model->findAll();
            // return $this->response->setJSON($data);
            return view('mahasiswa/index', $data);
        }
    }
}

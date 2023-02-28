<?php

namespace App\Controllers;
use App\Models\DosenModel;

use App\Controllers\BaseController;

class DosenController extends BaseController
{
    public function index()
    {
        $model = new DosenModel();
        $data['dosen'] = $model->findAll();
        return view('dosen/index', $data);
    }
    public function store(){
        $dsn = new DosenModel();
        $data = [
            'nama_dosen' => $this->request->getPost('nama_dosen'),
            'nip' => $this->request->getPost('nip'),
            'no_telepon' => $this->request->getPost('no_telepon'),
            'email' => $this->request->getPost('email'),
        ];
        $dsn->save($data);
        $data = ['status'=>'Data Berhasil Di input'];
        return $this->response->setJSON($data);
        // return view('mahasiswa/index', $data);
    }
    public function update($id = null)
{
    $model = new DosenModel();
    $data = [     
        'nama_dosen' => $this->request->getPost('nama_dosen'),
        'nip' => $this->request->getPost('nip'),
        'email' => $this->request->getPost('email'),
        'no_telepon' => $this->request->getPost('no_telepon')
    ];

    $model->update($id, $data);
    echo json_encode($model);
}
    public function delete($id){
        $model = new DosenModel();
        $model->delete($id);
        return redirect()->to(base_url().'dosen');

    }
}

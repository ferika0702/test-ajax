<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use CodeIgniter\Controller;

class MahasiswaController extends Controller
{
    public function index()
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->findAll();
        // return $this->response->setJSON($data);
        return view('mahasiswa/index', $data);
    }
    public function store()
{
    $mhs = new MahasiswaModel();
    $data = [
        'nama_mhs' => $this->request->getPost('nama_mhs'),
        'tgl_lahir' => $this->request->getPost('tgl_lahir'),
        'nim' => $this->request->getPost('nim'),
        'no_telepon' => $this->request->getPost('no_telepon'),
        'email' => $this->request->getPost('email'),
    ];
    $mhs->save($data);
    $data = ['status' => 'Data Berhasil Diinput'];
    return $this->response->setJSON($data);
}

    public function update($id = null)
{
    $model = new MahasiswaModel();
    $data = [     
        'nama_mhs' => $this->request->getPost('nama_mhs'),
        'tgl_lahir' => $this->request->getPost('tgl_lahir'),
        'nim' => $this->request->getPost('nim'),
        'email' => $this->request->getPost('email'),
        'no_telepon' => $this->request->getPost('no_telepon')
    ];

    $model->update($id, $data);
    echo json_encode($model);
}

    public function delete($id)
    {
        $model = new MahasiswaModel();
        $model->delete($id);
        return redirect()->to(base_url() . 'mahasiswa');
    }
}

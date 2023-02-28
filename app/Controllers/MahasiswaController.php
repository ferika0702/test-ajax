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

    $rules = [
        'nama_mhs' => 'required',
        'tgl_lahir' => 'required|valid_date',
        'nim' => 'required|numeric',
        'no_telepon' => 'required|min_length[12]|max_length[13]',
        'email' => 'required|valid_email'
    ];
    

    if (!$this->validate($rules)) {
        $errors = $this->validator->getErrors();
        return $this->response->setJSON($errors);
    }

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

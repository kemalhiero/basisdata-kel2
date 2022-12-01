<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class CustomerController extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new CustomerModel();
    }

    public function index()
    {
        $data = $this->model->findAll();
        $fetcheddata['items'] = $data;
        // dd($data);
        return view('customer', $fetcheddata);
    }

    public function store()
    {

        $this->model->save([
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('/customer'));
    }
    
    public function delete($id)
    {
        $this->model->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to(base_url('/customer'));
    }

}

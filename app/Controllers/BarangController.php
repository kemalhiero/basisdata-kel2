<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class BarangController extends BaseController
{
    protected $modelcustomer;
    public function __construct()
    {
        $this->modelcustomer = new CustomerModel();
    }

    public function index()
    {
        $nama = $this->modelcustomer->findColumn('nama');
        // dd($data);
        $datacunsomer['items'] = $nama;
        return view('barang', $datacunsomer);
    }

}

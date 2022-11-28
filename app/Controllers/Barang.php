<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Barang extends BaseController
{
    protected $modelcustomer;
    public function __construct()
    {
        $this->modelcustomer = new CustomerModel();
    }

    public function index()
    {
        $data = $this->modelcustomer->findColumn('nama');
        $datacunsomer['items'] = $data;
        return view('barang', $datacunsomer);
    }

}

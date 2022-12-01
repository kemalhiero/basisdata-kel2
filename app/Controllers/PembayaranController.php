<?php

namespace App\Controllers;

class PembayaranController extends BaseController
{
    public function index()
    {
        return view('pembayaran');
    }

    public function store()
    {
        $this->request->getPost();
    }

}

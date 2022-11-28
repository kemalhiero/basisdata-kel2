<?php

namespace App\Controllers;

class Pembayaran extends BaseController
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

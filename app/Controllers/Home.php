<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function barang()
    {
        return view('barang');
    }

}

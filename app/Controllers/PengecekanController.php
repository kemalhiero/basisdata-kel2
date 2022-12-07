<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PengecekanController extends BaseController
{
    public function index()
    {
        return view('pengecekan');
    }

    public function create()
    {
        return view('pengecekan-tambah');
    }
    
    public function store()
    {
        //
    }
    
    public function show()
    {
        return view('pengecekan-detail');
    }
    
    public function edit()
    {
        return view('pengecekan-edit');
    }

    public function update($id)
    {
        //
    }
}

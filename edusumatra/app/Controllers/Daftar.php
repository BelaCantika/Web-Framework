<?php

namespace App\Controllers;

class Daftar extends BaseController
{
    public function daftar(): string
    {
        $ptnModel = new \App\Models\PTNModel();
        $data = $ptnModel->getAllPTN();

        // return json_encode($data);
        return view('daftar', ['datas' => $data]);
    }
}
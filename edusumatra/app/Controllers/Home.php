<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $ptnModel = new \App\Models\PTNModel();
        $data = $ptnModel->getTopPTN();

        // return json_encode($data);
        return view('home', ['datas' => $data]);
    }
}
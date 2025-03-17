<?php

namespace App\Controllers;

class Detail extends BaseController
{
    public function detail($id): string
    {
        $ptnModel = new \App\Models\PTNModel();
        $data = $ptnModel->getPTNById($id);
        return view('detail',['data'=>$data]);
    }
}
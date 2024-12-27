<?php

namespace App\Controllers;

// use CodeIgnitor\Controller;
use App\Models\WebModel;

class Home extends BaseController
{
    public function index(){
        $company = new WebModel();
        $details = $company->company_info();
        $data['company_details'] = $details;
        return view('templates/header',$data)
                .view('templates/index')
                .view('templates/footer');
    }

  public function login(){
        echo "loged in";
    }

}
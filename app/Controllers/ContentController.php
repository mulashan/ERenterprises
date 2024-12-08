<?php

namespace App\Controllers;
use App\Models\LoginModel;

class ContentController extends BaseController
{
   
    public function __construct(){
        if(session()->get('logged_in') !=true){
            header("Location: " . base_url());
      exit;
      }
        $this->loginModel = new LoginModel;
        $this->session = \Config\Services::session();
    }

    function dashboard_details(){
        return view('admin/header')
            .view('admin/contents')
            .view('admin/footer'); 
    }

}
<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('templates/header')
                .view('templates/index')
                .view('templates/footer');
    }

  public function login(){
        echo "loged in";
    }

}
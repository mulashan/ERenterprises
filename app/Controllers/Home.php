<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('templates/index');
    }

  public function login(){
        echo "loged in";
    }

}
<?php

namespace App\Controllers;
use App\Models\ProductsModel;

class Home extends BaseController
{

     public function __construct(){
        
        $this->pmodel = new ProductsModel;
        $this->validation =  \Config\Services::validation();
    }

    public function index()
    {
        return view('templates/header')
                .view('templates/index')
                .view('templates/footer');
    }

  public function login(){
        echo "loged in";
    }

    public function contact(){
      return view('templates/header')
                .view('templates/contact')
                .view('templates/footer');
    }

    function get_message(){
          
           $validate_data = [
            'fname' => 'required|min_length[3]|max_length[255]',
            'phone' => 'required|min_length[8]|max_length[13]',
            'country' => 'required',
            'email' => 'required|valid_email',
            'subject' => 'required|min_length[3]|max_length[255]',
            'message' => 'required|min_length[3]|max_length[255]',
            ];

             if ($this->validate($validate_data)){
            $data = [
                    'name' => $this->request->getPost('fname'),
                    'phone' => $this->request->getPost('phone'),
                    'country' => $this->request->getPost('country'),
                    'email' => $this->request->getPost('email'),
                    'subject' => $this->request->getPost('subject'),
                    'message' => $this->request->getPost('message'),
                    'created_date' => date('Y-m-d H:i:s'),
                  
                ];
                $this->pmodel->SaveDetails('contactus_tbl',$data);
                return '<div class="alert alert-success alert-dismissible" role="alert"><strong>Message sent successfuly.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';
                 }else{
                return "<div class='alert alert-warning'>".$this->validation->listErrors()."</div>";
                }
    }



}
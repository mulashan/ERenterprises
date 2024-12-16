<?php

namespace App\Controllers;
use App\Models\LoginModel;
use App\Models\ProductsModel;

class ContentController extends BaseController
{
   
    public function __construct(){
        if(session()->get('logged_in') !=true){
            header("Location: " . base_url());
      exit;
      }
        $this->loginModel = new LoginModel;
        $this->pmodel = new ProductsModel;
        $this->session = \Config\Services::session();

        $this->validation =  \Config\Services::validation();
    }

    function dashboard_details(){
        return view('admin/header')
            .view('admin/contents')
            .view('admin/footer'); 
    }

    function categories(){
   
        $data=array(
            'view'=>'Categories',
            'result'=>$this->pmodel->gettable_data('categories_tbl',$where=array('id >'=>0),),
          );
        return view('admin/header')
        .view('products/categories',$data)
        .view('admin/footer'); 
    }

    function addCategory(){
      
        $validate_data = [
            'c_name' => 'required|min_length[3]|max_length[255]',
            'desc' => 'required|min_length[3]',
            ];
           
            if ($this->validate($validate_data)){
              
                $data = [
                    'category_name' => ucfirst($this->request->getPost('c_name')),
                    'description' => ucfirst($this->request->getPost('desc')),
                    'created_by' => session()->get('user_id'),
                    'created_date' => date('Y-m-d H:i:s'),
                  
                ];
                $this->pmodel->SaveDetails('categories_tbl',$data);
                return '<div class="alert alert-success alert-dismissible" role="alert"><strong>Saved successfuly.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';
            }else{
                return "<div class='alert alert-warning'>".$validation->listErrors()."</div>";
            }
            
    }

}
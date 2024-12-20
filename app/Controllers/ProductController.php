<?php

namespace App\Controllers;
use App\Models\LoginModel;
use App\Models\ProductsModel;

class ProductController extends BaseController
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
        helper('Query');
    }


    function product(){
   
        $data=array(
            'view'=>'Products',
            'result'=>$this->pmodel->gettable_data('products_tbl',$where=array('id >'=>0),),
          );
        return view('admin/header')
        .view('products/product',$data)
        .view('admin/footer'); 
    }

    function addproduct(){
      
        $validate_data = [
            'p_name' => 'required|min_length[3]|max_length[255]',
            'c_type' => 'required',
           
            ];
           
            if ($this->validate($validate_data)){
              
                $img = $this->request->getFile('img');
                $img_name = "";
                if($img->isValid() && !$img->hasMoved()){
                    $img_name = $img->getName();
                    $img->move(ROOTPATH.'public/web/img/',$img_name);

                $data = [
                    'product_name' => ucfirst($this->request->getPost('p_name')),
                    'category_type' => $this->request->getPost('c_type'),
                    'description' => ucfirst($this->request->getPost('desc')),
                    'image' =>$img_name,
                    'created_by' => session()->get('user_id'),
                    'created_date' => date('Y-m-d H:i:s'),
                  
                ];
                $this->pmodel->SaveDetails('products_tbl',$data);
                return '<div class="alert alert-success alert-dismissible" role="alert"><strong>Saved successfuly.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';
            }else{
                return '<div class="alert alert-warning alert-dismissible" role="alert"><strong>Invalid Image.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';    
            }
            }else{
                return "<div class='alert alert-warning'>".$this->validation->listErrors()."</div>";
            }
            
    }

function company(){
   $data=array(
            'view'=>'Company',
            'result'=>$this->pmodel->gettable_data('company_tbl',$where=array('id >'=>0),),
          );
        return view('admin/header')
        .view('products/company',$data)
        .view('admin/footer');  
}

function addCompany(){
      
        $validate_data = [
            'c_name' => 'required|min_length[3]|max_length[255]',
            'phone1' => 'required|min_length[9]|max_length[14]',
            'phone2' => 'required|min_length[9]|max_length[14]',
            'email' => 'required|valid_email',
           
            ];
           
            if ($this->validate($validate_data)){
              
                $img = $this->request->getFile('img');
                $img_name = "";
                if($img->isValid() && !$img->hasMoved()){
                    $img_name = $img->getName();
                    $img->move(ROOTPATH.'public/web/img/',$img_name);

                $data = [
                    'name' => ucfirst($this->request->getPost('c_name')),
                    'phone1' => $this->request->getPost('phone1'),
                    'phone2' => $this->request->getPost('phone2'),
                    'email' => $this->request->getPost('email'),
                    'logo' =>$img_name,
                  
                ];
                $results=get_data('company_tbl',$where=array('id >'=>0));
                if(count($results)>0){
                  return 1;  
                }
                $this->pmodel->SaveDetails('company_tbl',$data);
                return '<div class="alert alert-success alert-dismissible" role="alert"><strong>Saved successfuly.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';
            }else{
                return '<div class="alert alert-warning alert-dismissible" role="alert"><strong>Invalid Image.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';    
            }
            }else{
                return "<div class='alert alert-warning'>".$this->validation->listErrors()."</div>";
            }
            
    }

   
//>>>end here >>>>>
}
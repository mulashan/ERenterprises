<?php

namespace App\Controllers;
use App\Models\ProductsModel;

// use CodeIgnitor\Controller;
use App\Models\WebModel;

class Home extends BaseController
{

     public function __construct(){
        
        $this->pmodel = new ProductsModel;
        $this->validation =  \Config\Services::validation();
    }

    public function index()
    {
    
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

    public function contact(){
         $company = new WebModel();
        $details = $company->company_info();
        $data['company_details'] = $details;
      return view('templates/header',$data)
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
            'message' => 'required|min_length[3]|max_length[2000]',
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

    function category_items($id){
        // $data['category_id'] = $id;
        // $company = new WebModel();
        // $details = $company->company_info();
        // $data['company_details'] = $details;
        // return view('templates/header',$data)
        //         .view('templates/furniture_home_page')
        //         .view('templates/footer');

        $data['category_id'] = $id;
        $company = new WebModel();
        $data['category_details'] = $company->getCategoryDetails($id);
        $details = $company->company_info();
        $data['company_details'] = $details;

        $perPage = 6; 
        $currentPage = $this->request->getVar('page') ?? 1; 
        $totalProducts = $company->countCategoryProducts($id);

        $data['products'] = $company->getPaginatedCategoryProducts($id, $perPage, $currentPage);

        $pager = \Config\Services::pager();
        $data['pager'] = $pager->makeLinks($currentPage, $perPage, $totalProducts, 'default_full');

        return view('templates/header', $data)
            . view('templates/furniture_home_page', $data)
            . view('templates/footer');
    }



}
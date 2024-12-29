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
            'route' => 'required',
            'menu' => 'required',
            ];
           
            if ($this->validate($validate_data)){

                $img = $this->request->getFile('img');
                $img_name = "";
                if($img->isValid() && !$img->hasMoved()){
                    $img_name = $img->getName();
                    $img->move(ROOTPATH.'public/web/img/',$img_name);
              
                $data = [
                    'category_name' => ucfirst($this->request->getPost('c_name')),
                    'description' => ucfirst($this->request->getPost('desc')),
                    'menu_id' => $this->request->getPost('menu'),
                    'route' => $this->request->getPost('route'),
                    'image' =>$img_name,
                    'created_by' => session()->get('user_id'),
                    'created_date' => date('Y-m-d H:i:s'),
                  
                ];
                $this->pmodel->SaveDetails('categories_tbl',$data);
                return '<div class="alert alert-success alert-dismissible" role="alert"><strong>Saved successfuly.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';
                }else{
                return '<div class="alert alert-warning alert-dismissible" role="alert"><strong>Invalid Image Input.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';    
            }
            }else{
                return "<div class='alert alert-warning'>".$this->validation->listErrors()."</div>";
            }
            
    }

     function faqs(){
   $data=array(
            'view'=>'Faqs',
            'result'=>$this->pmodel->gettable_data('faqs_tbl',$where=array('id >'=>0),),
          );
        return view('admin/header')
        .view('products/faqs',$data)
        .view('admin/footer');  
}

function addQuestion(){
      
        $validate_data = [
            'ques' => 'required|min_length[3]|max_length[255]',
            'answ' => 'required|min_length[3]',
            ];
           
            if ($this->validate($validate_data)){
              
                $data = [
                    'question' => ucfirst($this->request->getPost('ques')),
                    'answer' => ucfirst($this->request->getPost('answ')),
                    'created_by' => session()->get('user_id'),
                    'created_date' => date('Y-m-d H:i:s'),
                  
                ];
                $this->pmodel->SaveDetails('faqs_tbl',$data);
                return '<div class="alert alert-success alert-dismissible" role="alert"><strong>Saved successfuly.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';
            }else{
                return "<div class='alert alert-warning'>".$this->validation->listErrors()."</div>";
            }
            
    }

    function patners(){
   $data=array(
            'view'=>'Patners',
            'result'=>$this->pmodel->gettable_data('partners_tbl',$where=array('id >'=>0),),
          );
        return view('admin/header')
        .view('products/patners',$data)
        .view('admin/footer');  
}

function addPatners(){
      
        $validate_data = [
            'fname' => 'required|min_length[3]|max_length[255]',
            'email' => 'required|valid_email',
            ];
           
            if ($this->validate($validate_data)){
                $img = $this->request->getFile('img');
                $img_name = "";
                if($img->isValid() && !$img->hasMoved()){
                    $img_name = $img->getName();
                    $img->move(ROOTPATH.'public/web/img/',$img_name);

                $data = [
                    'name' => ucfirst($this->request->getPost('fname')),
                    'email' => $this->request->getPost('email'),
                    'logo' =>$img_name,
                    'created_by' => session()->get('user_id'),
                    'created_date' => date('Y-m-d H:i:s'),
                  
                ];
                $this->pmodel->SaveDetails('partners_tbl',$data);
                return '<div class="alert alert-success alert-dismissible" role="alert"><strong>Saved successfuly.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';
            }else{
                return "<div class='alert alert-warning'>".$this->validation->listErrors()."</div>";
            }
            
    }
}

function testimonials(){
   $data=array(
            'view'=>'Testimonials',
            'result'=>$this->pmodel->gettable_data('testmonials ',$where=array('id >'=>0),),
          );
        return view('admin/header')
        .view('products/testmonials',$data)
        .view('admin/footer');  
}

function addTestimonial(){
      
        $validate_data = [
            'person_name' => 'required|min_length[3]|max_length[255]',
            'message' => 'required',
            ];
           
            if ($this->validate($validate_data)){
                
                $data = [
                    'person_name' => ucfirst($this->request->getPost('person_name')),
                    'message' => $this->request->getPost('message'),
                    'company_name' =>$this->request->getPost('company_name'),
                    'created_by' => session()->get('user_id'),
                    'created_date' => date('Y-m-d H:i:s'),
                  
                ];
                $this->pmodel->SaveDetails('testmonials',$data);
                return '<div class="alert alert-success alert-dismissible" role="alert"><strong>Saved successfuly.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';
            }else{
                return "<div class='alert alert-warning'>".$this->validation->listErrors()."</div>";
            }
            
    }

    function contactus_msg(){
   $data=array(
            'view'=>'Contact us Messages',
            'result'=>$this->pmodel->gettable_data('contactus_tbl ',$where=array('id >'=>0),),
          );
        return view('admin/header')
        .view('products/contactus_msg',$data)
        .view('admin/footer');  
}

function users_list(){
   $data=array(
            'view'=>'Users',
            'result'=>$this->pmodel->gettable_data('users ',$where=array('id >'=>0),),
          );
        return view('admin/header')
        .view('products/users_list',$data)
        .view('admin/footer');  
}

function addUsers(){

        $validate_data = [
            'full_name' => 'required|min_length[3]|max_length[255]',
            'username' => 'required|min_length[3]|max_length[255]',
            'password' => 'required|min_length[3]|max_length[255]',
            'cpassword' => 'required|min_length[3]|max_length[255]',
            ];
           
            if ($this->validate($validate_data)){
                $user=$this->pmodel->gettable_data('users ',$where=array('username'=>$this->request->getPost('username')),);
            if(count($user)>0){
            echo  1; 
              return;
                }
               if($this->request->getPost('password')!=$this->request->getPost('cpassword')){
              echo  2; 
               return;
               } 

                $data = [
                    'full_name' => $this->request->getPost('full_name'),
                    'username' => $this->request->getPost('username'),
                    'password' =>$this->request->getPost('password'),
                    
                     ];
                $this->pmodel->SaveDetails('users',$data);
                return '<div class="alert alert-success alert-dismissible" role="alert"><strong>Saved successfuly.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';
            }else{
                return "<div class='alert alert-warning'>".$this->validation->listErrors()."</div>";
            }
            
    }

    function itemToDelete(){
        $id=$this->request->getPost('id');
        $tbl=$this->request->getPost('tbl');
        $this->pmodel->deleteDetails($tbl,$id);
    }

    function edit_company($id){
 $data['item']=$this->pmodel->gettable_data('company_tbl',$where=array('id'=>$id));
  return view('products/forms/company_edit',$data);
    }

    function update_company(){
      
        $validate_data = [
            'name' => 'required|min_length[3]|max_length[255]',
            'phone1' => 'required|min_length[13]|max_length[13]',
            'phone2' => 'required|min_length[13]|max_length[13]',
            'email' => 'required|valid_email',
           
            ];
           
            if ($this->validate($validate_data)){
              
                $img = $this->request->getFile('logo');
                $img1 = $this->request->getPost('logo1');
                $img_name = "";

             if($img!=""){
                if($img->isValid() && !$img->hasMoved()){
                    $img_name = $img->getName();
                    $img->move(ROOTPATH.'public/web/img/',$img_name);
                }else{
             return '<div class="alert alert-warning alert-dismissible" role="alert"><strong>Invalid Image.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>'; 
                }
            }else{
              $img_name=$img1; 
            }

                $data = [
                    'name' => ucfirst($this->request->getPost('name')),
                    'phone1' => $this->request->getPost('phone1'),
                    'phone2' => $this->request->getPost('phone2'),
                    'email' => $this->request->getPost('email'),
                    'logo' =>$img_name,
                  
                ];
               $id=$this->request->getPost('id');
                $this->pmodel->editDetails('company_tbl',$data,$id);
                return '<div class="alert alert-success alert-dismissible" role="alert"><strong>Updated successfuly.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';
            
              }else{
                return "<div class='alert alert-warning'>".$this->validation->listErrors()."</div>";
            }
    }

    function edit_category($id){
        $data['item']=$this->pmodel->gettable_data('categories_tbl',$where=array('id'=>$id));
  return view('products/forms/category_edit',$data);
    }

    function update_category(){
      
        $validate_data = [
            'category_name' => 'required|min_length[3]|max_length[255]',
            'description' => 'required|min_length[3]',
            'route' => 'required',
            'menu' => 'required',
           
            ];
           
            if ($this->validate($validate_data)){

                 $img = $this->request->getFile('image');
                $img1 = $this->request->getPost('image1');
                $img_name = "";

              if($img!=""){
                if($img->isValid() && !$img->hasMoved()){
                    $img_name = $img->getName();
                    $img->move(ROOTPATH.'public/web/img/',$img_name);
                }else{
             return '<div class="alert alert-warning alert-dismissible" role="alert"><strong>Invalid Image.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>'; 
                }
            }else{
              $img_name=$img1; 
            }

            $data = [
                    'category_name' => ucfirst($this->request->getPost('category_name')),
                    'menu_id' => $this->request->getPost('menu'),
                    'route' => $this->request->getPost('route'),
                    'description' => ucfirst($this->request->getPost('description')),
                    'image' =>$img_name,
                    
                  
                     ];
               $id=$this->request->getPost('id');
                $this->pmodel->editDetails('categories_tbl',$data,$id);
                return '<div class="alert alert-success alert-dismissible" role="alert"><strong>Updated successfuly.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';
            
              }else{
                return "<div class='alert alert-warning'>".$this->validation->listErrors()."</div>";
            }
    }

   function edit_testimonial($id){
    $data['item']=$this->pmodel->gettable_data('testmonials',$where=array('id'=>$id));
  return view('products/forms/testimonial_edit',$data);
   }

    function update_testimonial(){
      
        $validate_data = [
            'person_name' => 'required|min_length[3]|max_length[255]',
            'message' => 'required',
           
            ];
           
            if ($this->validate($validate_data)){
              
            $data = [
                     'person_name' => ucfirst($this->request->getPost('person_name')),
                    'message' => $this->request->getPost('message'),
                    'company_name' =>$this->request->getPost('company_name'),
                   
                    ];
               $id=$this->request->getPost('id');
                $this->pmodel->editDetails('testmonials',$data,$id);
                return '<div class="alert alert-success alert-dismissible" role="alert"><strong>Updated successfuly.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';
            
              }else{
                return "<div class='alert alert-warning'>".$this->validation->listErrors()."</div>";
            }
    }

     function edit_faq($id){
    $data['item']=$this->pmodel->gettable_data('faqs_tbl',$where=array('id'=>$id));
  return view('products/forms/faq_edit',$data);
   }

    function update_faq(){
      
        $validate_data = [
            'question' => 'required|min_length[3]|max_length[255]',
            'answer' => 'required|min_length[3]',
           
            ];
           
            if ($this->validate($validate_data)){
              
            $data = [
                    'question' => ucfirst($this->request->getPost('question')),
                    'answer' => ucfirst($this->request->getPost('answer')),
                   
                    ];
               $id=$this->request->getPost('id');
                $this->pmodel->editDetails('faqs_tbl',$data,$id);
                return '<div class="alert alert-success alert-dismissible" role="alert"><strong>Updated successfuly.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';
            
              }else{
                return "<div class='alert alert-warning'>".$this->validation->listErrors()."</div>";
            }
    }

    function edit_patner($id){
 $data['item']=$this->pmodel->gettable_data('partners_tbl',$where=array('id'=>$id));
  return view('products/forms/patner_edit',$data);
    }

    function update_patner(){
      
        $validate_data = [
            'name' => 'required|min_length[3]|max_length[255]',
            'email' => 'required|valid_email',
           
            ];
           
            if ($this->validate($validate_data)){
              
                $img = $this->request->getFile('logo');
                $img1 = $this->request->getPost('logo1');
                $img_name = "";

             if($img!=""){
                if($img->isValid() && !$img->hasMoved()){
                    $img_name = $img->getName();
                    $img->move(ROOTPATH.'public/web/img/',$img_name);
                }else{
             return '<div class="alert alert-warning alert-dismissible" role="alert"><strong>Invalid Image.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>'; 
                }
            }else{
              $img_name=$img1; 
            }

                $data = [
                     'name' => ucfirst($this->request->getPost('name')),
                    'email' => $this->request->getPost('email'),
                    'logo' =>$img_name,
                  
                ];
               $id=$this->request->getPost('id');
                $this->pmodel->editDetails('partners_tbl',$data,$id);
                return '<div class="alert alert-success alert-dismissible" role="alert"><strong>Updated successfuly.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';
            
              }else{
                return "<div class='alert alert-warning'>".$this->validation->listErrors()."</div>";
            }
    }

    function edit_user($id){
 $data['item']=$this->pmodel->gettable_data('users',$where=array('id'=>$id));
  return view('products/forms/user_edit',$data);
    }

     function update_user(){
      
        $validate_data = [
            'full_name' => 'required|min_length[3]|max_length[255]',
            'username' => 'required|min_length[3]|max_length[255]',
            'password' => 'required|min_length[3]|max_length[255]',
            'cpassword' => 'required|min_length[3]|max_length[255]',
           
            ];
           
            if ($this->validate($validate_data)){

             $id=$this->request->getPost('id'); 
            $user=$this->pmodel->gettable_data('users ',$where=array('username'=>$this->request->getPost('username'),'id !='=>$id),);
            if(count($user)>0){
             return '<div class="alert alert-warning alert-dismissible" role="alert"><strong>This username is arleady taken.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';
                }
               if($this->request->getPost('password')!=$this->request->getPost('cpassword')){
              return '<div class="alert alert-warning alert-dismissible" role="alert"><strong>Password mismatch!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';
               } 

                $data = [
                    'full_name' => $this->request->getPost('full_name'),
                    'username' => $this->request->getPost('username'),
                    'password' =>$this->request->getPost('password'),
                    
                     ];
                $this->pmodel->editDetails('users',$data,$id);
                return '<div class="alert alert-success alert-dismissible" role="alert"><strong>Updated successfuly.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>';
            
              }else{
                return "<div class='alert alert-warning'>".$this->validation->listErrors()."</div>";
            }
    }
//>>>end here >>>>>

}
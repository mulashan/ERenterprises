<?php

namespace App\Controllers;
use App\Models\LoginModel;

class LoginController extends BaseController
{
   
    public function __construct(){
        $this->loginModel = new LoginModel;
        $this->session = \Config\Services::session();
    }
  public function login(){
    $validation =  \Config\Services::validation();
    $login_data = [
        'userName' => 'required|min_length[3]|max_length[255]',
        'password' => 'required',
        ];

        if ($this->validate($login_data)){
      
        $result =  $this->loginModel->verfy_user($this->request->getPost('userName'),$this->request->getPost('password')); 
       // print_r($result);
        if(count($result)>0){
        $session_data = [
            'user_id' => $result[0]->id,
            'full_name' => $result[0]->full_name,
            'username' => $result[0]->username,
            'user_photo' => "",
            'logged_in' => true
        ];
        $this->session->set($session_data);
         echo 200;
        
    }else{
        echo "<div class='alert alert-warning'>Incorrect Username or Password!!</div>";
    }
        // echo "loged in";
        }else{
           return "<div class='alert alert-warning'>".$validation->listErrors()."</div>"; 
        }
    }

    public function Logout()
    {
		
		unset($_SESSION['logged_in']);
        session_destroy();
        return redirect()->to(base_url());
        
       
    }

}
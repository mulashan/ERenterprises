<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{

  public function verfy_user($username,$pass){
        $builder = $this->db->table('users');
        $builder->SELECT('*');
        $builder->where('username',$username);
        $builder->where('password', $pass);
      
        $result = $builder->get()->getResult();
        $this->db->close();
        return $result;
    }

//end end
}
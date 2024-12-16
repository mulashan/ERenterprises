<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{

  public function gettable_data($tbl, $condition){
        $builder = $this->db->table($tbl);
        $builder->SELECT('*');
        $builder->where($condition);
      
        $result = $builder->get()->getResult();
        $this->db->close();
        return $result;
    }

    function SaveDetails($tbl,$data){
        $builder = $this->db->table($tbl)->insert($data);
        $this->db->close();
        return $builder;
    }
//end end
}
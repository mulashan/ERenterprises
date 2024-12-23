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

    function deleteDetails($tbl,$id){
    $builder=$this->db->table($tbl);
    $builder->where('id',$id);
    $builder->delete();
    }

   function editDetails($tbl,$data,$id){
      $builder = $this->db->table($tbl);
            $builder->where('id',$id);
            $builder->update($data);
            $this->db->close();
   }

function get_max_update($tbl,$col){
     $builder = $this->db->table($tbl);
    $builder->select('MAX(CAST('.$col.' AS UNSIGNED)) AS max_id');
    return $builder->get()->getResult();
  }
//end end
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class WebModel extends Model
{

	function company_info(){
		return $this->db->table('company_tbl')->select('*')->get()->getRow();
	}

	function getCategories(){
		return $this->db->table('categories_tbl')->select('*')->get()->getResult();
	}

}

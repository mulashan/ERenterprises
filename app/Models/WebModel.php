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

	function getAllTestimonies(){
		return $this->db->table('testmonials')->select('*')->get()->getResult();
	}

	function getAllFaqs(){
		return $this->db->table('faqs_tbl')->select('*')->get()->getResult();
	}

}

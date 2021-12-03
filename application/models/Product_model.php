<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	/*View*/
	function display_web()
	{
        $query=$this->db->query("select * from nuinfra_product where product_type != 3");
        return $query->result();
	}

    function display_mobile()
	{
        $query=$this->db->query("select * from nuinfra_product where product_type = 3");
        return $query->result();
	}
	
}

// class Product_Mobile_model extends CI_Model {

// 	/*View*/
// 	function display_records()
// 	{
//         $query=$this->db->query("select * from nuinfra_product");
//         return $query->result();
// 	}
	
// }
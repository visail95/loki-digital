<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Track_model extends CI_Model {

	/*View*/
	function display_records()
	{
        $query=$this->db->query("select * from track_record");
        return $query->result();
	}
	
}
<?php

class Product_model extends CI_Model
{

	function get_categories()
	{
		return $this->db->get('categories')->result();
	}
	function save_categories($data)
	{
		$this->db->insert('categories', $data);
	}
}

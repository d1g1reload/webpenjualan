<?php

class Product extends CI_Controller
{

	function index()
	{

		$data['content'] = "app/product/list";
		$this->load->view('layout/main', $data);
	}
}

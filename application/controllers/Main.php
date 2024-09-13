<?php

class Main extends CI_Controller
{

	function index()
	{

		$data['content'] = "app/home.php";
		$this->load->view('layout/main', $data);
	}
}

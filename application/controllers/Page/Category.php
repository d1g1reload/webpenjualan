<?php

class Category extends CI_Controller
{

	function index()
	{
		$data['categories'] = $this->Product_model->get_categories();
		$data['content'] = "app/category/list";
		$this->load->view('layout/main', $data);
	}

	function add()
	{
		$name = $this->input->post('name');
		$description = $this->input->post('description');

		$data = array(
			'name' => $name,
			'description' => $description
		);

		$save = $this->Product_model->save_categories($data);
		$this->session->set_flashdata('success', 'Tambah kategori berhasil');
		redirect('categories');
	}
}

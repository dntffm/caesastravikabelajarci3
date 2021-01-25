<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Book_model');

		$data["book"] = $this->Book_model->getAll();

		$this->load->view('layouts/header');
		$this->load->view('book/index',$data);
		$this->load->view('layouts/footer');
		
	}

	public function create()
	{
		$this->load->view('layouts/header');
		$this->load->view('book/create');
		$this->load->view('layouts/footer');
	}

	public function edit($id)
	{
		$this->load->model('Book_model');
		$data['book'] = $this->Book_model->getById($id);
		$this->load->view('layouts/header');
		$this->load->view('book/edit',$data);
		$this->load->view('layouts/footer');
	}

	public function update()
	{
		$data = [
			"title" => $this->input->post('title'),
			"price" => $this->input->post('price'),
			"author" => $this->input->post('author'),
			"publisher" => $this->input->post('publisher'),
			"stock" => $this->input->post('stock'),
			"images" => 'default',
			"id" => $this->input->post('id'),
		];

		$this->load->model('Book_model');
		if($this->Book_model->updateData($data))
		{
			redirect('/book');
		}
		
	}

	public function delete($id)
	{
		$this->load->model('Book_model');
		if($this->Book_model->deleteData($id))
		{
			redirect('/book');
		}
	}
	public function store()
	{
		$data = [
			"title" => $this->input->post('title'),
			"price" => $this->input->post('price'),
			"author" => $this->input->post('author'),
			"publisher" => $this->input->post('publisher'),
			"stock" => $this->input->post('stock'),
			"images" => 'default'
		];
		

		if($this->db->insert('books',$data))
		{
			redirect('/book/create');
		}
		

	}
}

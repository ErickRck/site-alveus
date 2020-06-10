<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	
	public function index()
	{
		$this->load->helper('url');

		$data['title'] = "Acceuil";
		$this->load->view('module/header', $data);
		$this->load->view('acceuil', $data);
		$this->load->view('module/footer', $data);
	}

	public function service()
	{
		$this->load->helper('url');
		$data['title'] = "Service";
		$this->load->model('Main_model');
		$data['result'] = $this->Main_model->get_service();

		$this->load->view('module/header', $data);
		$this->load->view('service', $data);
		$this->load->view('module/footer');
	}

	public function projet()
	{
		$this->load->helper('url');
		$data['title'] = "Projet";
		$this->load->model('Main_model');
		$data['result'] = $this->Main_model->get_projet();

		$this->load->view('module/header', $data);
		$this->load->view('projet', $data);
		$this->load->view('module/footer');
	}
	 

	public function blog()
	{
		$this->load->helper('url');
		$data['title'] = "Blog";

		$this->load->model('Main_model');
		$data['result'] = $this->Main_model->get_blog();

		$this->load->view('module/header', $data);
		$this->load->view('blog', $data);
		$this->load->view('module/footer');
	}

	public function blog_detail()
	{
		$this->load->helper('url');
		$data['title'] = "Blog-detail";
		$this->load->view('module/header', $data);
		$this->load->view('blog_detail');
		$this->load->view('module/footer');
	}

	public function forum()
	{
		$this->load->helper('url');
		$data['title'] = "Forum";
		$this->load->view('module/header', $data);
		$this->load->view('forum');
		$this->load->view('module/footer');
	}

	public function about()
	{
		$this->load->helper('url');
		$data['title'] = "About";

		$this->load->model('Main_model');
		$data['result'] = $this->Main_model->get_about();

		$this->load->view('module/header', $data);
		$this->load->view('about', $data);
		$this->load->view('module/footer');
	}

	public function contact()
	{
		$this->load->helper('url');
		$this->load->helper('form');

		$data['title'] = "Contact";
		$this->load->view('module/header', $data);
		$this->load->view('contact');
		$this->load->view('module/footer');
	}
}

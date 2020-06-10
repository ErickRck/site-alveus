<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	

	
	public function index()
	{
		if ($this->session->userdata('username') != '') {
			# code...
		
		$this->load->helper('url');
		//$this->load->library('session');

		$data['title'] = "AdminLT";

		$this->load->view('admin/module/header', $data);
		$this->load->view('admin/module/aside', $data);
		$this->load->view('admin/index');
		$this->load->view('admin/module/footer');

	}
	else
	{
		redirect(base_url(). 'Auth');
	}
	}

	public function service()
	{
		if ($this->session->userdata('username') != '') {



		$this->load->helper('url');

		$data['title'] = "AdminLT";
		$this->load->model('Main_model');
		$data['result'] = $this->Main_model->get_service();

		$this->load->view('admin/module/header', $data);
		$this->load->view('admin/module/aside', $data);
		$this->load->view('admin/services', $data);
		$this->load->view('admin/module/footer');

		}
		else
		{
			redirect(base_url() . 'Auth');
		}
	}

	public function projet()
	{
		if ($this->session->userdata('username') != ''){


		$this->load->helper('url');

		$data['title'] = "AdminLT";
		$this->load->model('Main_model');
		$data['result'] = $this->Main_model->get_projet();

		$this->load->view('admin/module/header', $data);
		$this->load->view('admin/module/aside', $data);
		$this->load->view('admin/projet', $data);
		$this->load->view('admin/module/footer');
		}
		else
		{
			redirect(base_url() . 'Auth');
		}
	}

	public function blog()
	{
		if ($this->session->userdata('username') != ''){


		$this->load->helper('url');

		$data['title'] = "AdminLT";
		$this->load->model('Main_model');

        $data['result'] = $this->Main_model->get_blog();

		$this->load->view('admin/module/header', $data);
		$this->load->view('admin/module/aside', $data);
		$this->load->view('admin/blog', $data);
		$this->load->view('admin/module/footer');
		}
		else
		{
			redirect(base_url() . 'Auth');
		}
	}

	public function forum()
	{
		if ($this->session->userdata('username') != ''){



		$this->load->helper('url');

		$data['title'] = "AdminLT";

		$this->load->view('admin/module/header', $data);
		$this->load->view('admin/module/aside', $data);
		$this->load->view('admin/forum');
		$this->load->view('admin/module/footer');
		}
		else
		{
			redirect(base_url() . 'Auth');
		}
	}


	public function about()
	{
		if ($this->session->userdata('username') != ''){


		$this->load->helper('url');

		$data['title'] = "AdminLT";
		$this->load->model('Main_model');
		$data['result'] = $this->Main_model->get_about();

		$this->load->view('admin/module/header', $data);
		$this->load->view('admin/module/aside', $data);
		$this->load->view('admin/about', $data);
		$this->load->view('admin/module/footer');
		}
		else
		{
			redirect(base_url() . 'Auth');
		}
	}

	public function contact()
	{
		if ($this->session->userdata('username') != ''){


		$this->load->helper('url');

		$data['title'] = "AdminLT";

		$this->load->view('admin/module/header', $data);
		$this->load->view('admin/module/aside', $data);
		$this->load->view('admin/contact');
		$this->load->view('admin/module/footer');
		}
		else
		{
			redirect(base_url() . 'Auth');
		}
	}


	public function profile()
	{
		if ($this->session->userdata('username') != ''){


		$this->load->helper('url');

		$data['title'] = "AdminLT";

		$this->load->view('admin/module/header', $data);
		$this->load->view('admin/module/aside', $data);
		$this->load->view('admin/profile', $data);
		$this->load->view('admin/module/footer');
		}
		else
		{
			redirect(base_url() . 'Auth');
		}

	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Auth extends CI_Controller {

    public function index()
    {
        $this->load->helper('url');

        $data['title'] = "AdminLT";

        $this->load->view('admin/module/headerAuth', $data);
        $this->load->view('admin/login');
        $this->load->view('admin/module/footerAuth');
    }

     function login_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run()) {
            //vrai
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->load->model('main_model');
            if ($this->main_model->can_login($username, $password)) {
                
                $session_data = array(
                    'username' => $username
                    );
                $this->session->set_userdata($session_data);
                redirect(base_url() . 'Auth/enter');
            }

            $this->session->set_flashdata('error' , 'Invalide username and password');
            redirect(base_url() . 'Auth');
        }
        else{
            //faux
            $this->index();
        }
    }

    function enter()
    {
        if ($this->session->userdata('username') != '') {

            //echo '<h2> Welcome - '.$this->session->userdata('username').' </h2>';
            //echo '<label><a href="'.base_url().'Auth/logout">Logout</a></label>';
            //$this->session->set_userdata('username');
            redirect(base_url() . 'Admin/Admin');
            
        }
        else
        {
            redirect(base_url() . 'Auth');
        }
    }

    function logout() 
    {
        $this->session->unset_userdata('username');
        redirect(base_url() . 'Auth');
    }

     function register()
    {
        $this->load->helper('url');

        $data['title'] = "AdminLT";

        $this->load->view('admin/module/headerAuth', $data);
        $this->load->view('admin/register');
        $this->load->view('admin/module/footerAuth');

    }

    function register_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Nom', 'trim|required|min_length[4]|max_length[12]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Mot de passe', 'trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('password1', 'Mot de passe', 'trim|required|matches[password]');

        if ($this->form_validation->run()) {
            //vrai
            $this->load->model('main_model');

            $data = array(
                'username' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
                );
            $this->main_model->insert_data($data); 
            redirect(base_url() . 'Auth/inserted');
        }
        else
        {
            //faux
            $this->index();
        }
        
    }

    function inserted()
    {
        $this->session->set_flashdata('success' , 'Inscription effctuée, connectez-vous!');
        redirect(base_url() . 'Auth');
        
    }


}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
/* content for about*/
	function insert_validation(){
        $this->load->helper('file');

		$this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[4]|max_length[128]');
        $this->form_validation->set_rules('content', 'Content', 'trim|required');
        $this->form_validation->set_rules('attachment', 'Attachment');

        if ($this->form_validation->run()) {
            # code...
            $title = $this->input->post('title');
            $content = $this->input->post('content');
            $attachment = $_FILES['attachment']['name'];

            if ($attachment ='') {
                # code...
            }else{
                $config['upload_path'] = 'assets/images/uploads';
                $config['allowed_types'] = 'gif|jpg|png';

                 $this->load->library('upload', $config);
                 if(!$this->upload->do_upload('attachment')){

                    echo "no upload";
                 }else{
                    $attachment = $this->upload->data('file_name');
                 }

                 $this->load->model('main_model');

                 $data = array(

                    'title' => $title,
                    'content' => $content,
                    'image' => $attachment
                    );
            $this->main_model->insert_about($data, 'attachment'); 
            $this->session->set_flashdata('success', 'données inserer!');
            redirect(base_url() . 'Admin/Admin/about');
            }
        }
          
	}

	
	function edit_about($id)
	{
		$this->load->model('main_model');
		$data['title'] = "AdminLT";
		$data['row'] = $this->main_model->get_about_edit($id);

		$this->load->view('admin/module/header', $data);
		$this->load->view('admin/module/aside', $data);
		$this->load->view('admin/crud/editabout', $data);
		$this->load->view('admin/module/footer');
	}

	function update_about($id)
	{
		$this->load->helper('file');
		$this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[4]|max_length[128]');
        $this->form_validation->set_rules('content', 'Content', 'trim|required');
        $this->form_validation->set_rules('attachment', 'Attachment');
         
        if ($this->form_validation->run()) {
            # code...
            $title = $this->input->post('title');
            $content = $this->input->post('content');
            $attachment = $_FILES['attachment']['name'];

            if ($attachment ='') {
                # code...
            }else{
                $config['upload_path'] = 'assets/images/uploads';
                $config['allowed_types'] = 'gif|jpg|png';

                 $this->load->library('upload', $config);
                 if(!$this->upload->do_upload('attachment')){

                    
                 }else{
                    $attachment = $this->upload->data('file_name');
                 }

                 $this->load->model('main_model');

                 $data = array(

                    'title' => $title,
                    'content' => $content,
                    'image' => $attachment 
                    );
        
            
        $this->main_model->update_about_edit($id, $data, 'attachment');
                 
        redirect(base_url() . 'Admin/Admin/about');
            }
        }     	
		
	}

	function delete_about($id)
	{
		$this->load->model('main_model');
		$this->main_model->delete_about($id);
		redirect(base_url() . 'Admin/Admin/about');
	}
    /* end content for about*/

    /* open content for service*/
    function insert_validation_service()
    {
        $this->load->helper('file');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[4]|max_length[128]');
        $this->form_validation->set_rules('description', 'Decription', 'trim|required');
        $this->form_validation->set_rules('attachment', 'Attachment');

        if ($this->form_validation->run()) {
            # code...
            $title = $this->input->post('title');
            $description = $this->input->post('description');
            $attachment = $_FILES['attachment']['name'];

            if ($attachment ='') {
                # code...
            }else{
                $config['upload_path'] = 'assets/images/uploads';
                $config['allowed_types'] = 'gif|jpg|png';

                 $this->load->library('upload', $config);
                 if(!$this->upload->do_upload('attachment')){

                    echo "no upload";
                 }else{
                    $attachment = $this->upload->data('file_name');
                 }

                 $this->load->model('main_model');

                 $data = array(

                    'title' => $title,
                    'description' => $description,
                    'image' => $attachment 
                    );
            $this->main_model->insert_service($data, 'attachment'); 
            $this->session->set_flashdata('success', 'données inserer!');
            redirect(base_url() . 'Admin/Admin/service');
            }
        }
    }
    function edit_service($id)
    {
        $this->load->model('main_model');
        $data['title'] = "AdminLT";
        $data['row'] = $this->main_model->get_service_edit($id);

        $this->load->view('admin/module/header', $data);
        $this->load->view('admin/module/aside', $data);
        $this->load->view('admin/crud/editservice', $data);
        $this->load->view('admin/module/footer');
    }

    function update_service($id)
    {
        $this->load->helper('file');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[4]|max_length[128]');
        $this->form_validation->set_rules('description', 'description', 'trim|required');
        $this->form_validation->set_rules('attachment', 'Attachment');
         
        if ($this->form_validation->run()) {
            # code...
            $title = $this->input->post('title');
            $description = $this->input->post('description');
            $attachment = $_FILES['attachment']['name'];

            if ($attachment ='') {
                # code...
            }else{
                $config['upload_path'] = 'assets/images/uploads';
                $config['allowed_types'] = 'gif|jpg|png';

                 $this->load->library('upload', $config);
                 if(!$this->upload->do_upload('attachment')){

                    
                 }else{
                    $attachment = $this->upload->data('file_name');
                 }

                 $this->load->model('main_model');

                 $data = array(

                    'title' => $title,
                    'description' => $description,
                    'image' => $attachment 
                    );
        
            
        $this->main_model->update_service_edit($id, $data, 'attachment');
        $this->session->set_flashdata('success', 'données mise a jour avec success!');        
        redirect(base_url() . 'Admin/Admin/service');
            }
        }       
        
    }

    function delete_service($id)
    {
        $this->load->model('main_model');
        $this->main_model->delete_service($id);
        redirect(base_url() . 'Admin/Admin/service');
    }

    /*end service*/

    /*open project*/

   function insert_validation_projet()
    {
        $this->load->helper('file');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[4]|max_length[128]');
        $this->form_validation->set_rules('description', 'Decription', 'trim|required');
        $this->form_validation->set_rules('content', 'Content', 'trim|required');
        $this->form_validation->set_rules('attachment', 'Attachment');

        if ($this->form_validation->run()) {
            # code...
            $title = $this->input->post('title');
            $description = $this->input->post('description');
            $content = $this->input->post('content');
            $attachment = $_FILES['attachment']['name'];

            if ($attachment ='') {
                # code...
            }else{
                $config['upload_path'] = 'assets/images/uploads';
                $config['allowed_types'] = 'gif|jpg|png';

                 $this->load->library('upload', $config);
                 if(!$this->upload->do_upload('attachment')){

                    echo "no upload";
                 }else{
                    $attachment = $this->upload->data('file_name');
                 }

                 $this->load->model('main_model');

                 $data = array(

                    'title' => $title,
                    'description' => $description,
                    'content' => $content,
                    'image' => $attachment 
                    );
            $this->main_model->insert_projet($data, 'attachment'); 
            $this->session->set_flashdata('success', 'données inserer!');
            redirect(base_url() . 'Admin/Admin/projet');
            }
        }
    }
    function edit_projet($id)
    {
        $this->load->model('main_model');
        $data['title'] = "AdminLT";
        $data['row'] = $this->main_model->get_projet_edit($id);

        $this->load->view('admin/module/header', $data);
        $this->load->view('admin/module/aside', $data);
        $this->load->view('admin/crud/editprojet', $data);
        $this->load->view('admin/module/footer');
    }

    function update_projet($id)
    {
        $this->load->helper('file');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[4]|max_length[128]');
        $this->form_validation->set_rules('description', 'description', 'trim|required');
        $this->form_validation->set_rules('content', 'content', 'trim|required');
        $this->form_validation->set_rules('attachment', 'Attachment');
         
        if ($this->form_validation->run()) {
            # code...
            $title = $this->input->post('title');
            $description = $this->input->post('description');
            $content = $this->input->post('content');
            $attachment = $_FILES['attachment']['name'];

            if ($attachment ='') {
                # code...
            }else{
                $config['upload_path'] = 'assets/images/uploads';
                $config['allowed_types'] = 'gif|jpg|png';

                 $this->load->library('upload', $config);
                 if(!$this->upload->do_upload('attachment')){

                    
                 }else{
                    $attachment = $this->upload->data('file_name');
                 }

                 $this->load->model('main_model');

                 $data = array(

                    'title' => $title,
                    'description' => $description,
                    'content' => $content,
                    'image' => $attachment 
                    );
        
            
        $this->main_model->update_projet_edit($id, $data, 'attachment');
        $this->session->set_flashdata('success', 'données mise a jour avec success!');        
        redirect(base_url() . 'Admin/Admin/projet');
            }
        }       
        
    }

    function delete_projet($id)
    {
        $this->load->model('main_model');
        $this->main_model->delete_projet($id);
        $this->session->set_flashdata('success', 'données supprimer avec success!');
        redirect(base_url() . 'Admin/Admin/projet');
    }
        /*cote user*/
    function projet_detail($id)
    {
       
        $this->load->helper('url');
        $data['title'] = "Projet";
        $this->load->model('Main_model');
        $data['row'] = $this->Main_model->get_projet_detail($id);

        $this->load->view('module/header', $data);
        $this->load->view('projet1', $data);
        $this->load->view('module/footer');
        
    
    } 
    /*end projet*/

    /*blog open*/

    function insert_validation_blog()
    {

        $this->load->helper('file');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('auteur', 'Auteur', 'trim|required');
        $this->form_validation->set_rules('domaine', 'Domaine', 'trim|required');
        $this->form_validation->set_rules('categorie', 'Categorie', 'trim|required');
        $this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[4]|max_length[128]');
        $this->form_validation->set_rules('description', 'Decription', 'trim|required');
        $this->form_validation->set_rules('content', 'Content', 'trim|required');
        $this->form_validation->set_rules('attachment', 'Attachment');

        if ($this->form_validation->run()) {
            # code...
            $auteur = $this->input->post('auteur');
            $domaine = $this->input->post('domaine');
            $categorie = $this->input->post('categorie');
            $title = $this->input->post('title');
            $description = $this->input->post('description');
            $content = $this->input->post('content');
            $attachment = $_FILES['attachment']['name'];

            if ($attachment ='') {
                # code...
            }else{
                $config['upload_path'] = 'assets/images/uploads';
                $config['allowed_types'] = 'gif|jpg|png';

                 $this->load->library('upload', $config);
                 if(!$this->upload->do_upload('attachment')){

                    echo "no upload";
                 }else{
                    $attachment = $this->upload->data('file_name');
                 }

                 $this->load->model('main_model');

                 $data = array(
                    'auteur' => $auteur,
                    'gradeAuteur' => $domaine,
                    'categorie' => $categorie,
                    'title' => $title,
                    'description' => $description,
                    'content' => $content,
                    'image' => $attachment,
                    'datepub' => date("Y-m-d H:i:s")

                    );
            $this->main_model->insert_blog($data, 'attachment'); 
            $this->session->set_flashdata('success', 'données inserer!');
            redirect(base_url() . 'Admin/Admin/blog');
            }
        }
        echo'ererere';
    }

    function blog_detail($id)
    {
        $this->load->model('main_model');
        $data['title'] = "AdminLT";
        $data['row'] = $this->main_model->get_blog_detail($id);

        $this->load->view('admin/module/header', $data);
        $this->load->view('admin/module/aside', $data);
        $this->load->view('admin/blog_detail', $data);
        $this->load->view('admin/module/footer');
    }

    function edit_blog($id)
    {
        $this->load->model('main_model');
        $data['title'] = "AdminLT";
        $data['row'] = $this->main_model->get_blog_edit($id);

        $this->load->view('admin/module/header', $data);
        $this->load->view('admin/module/aside', $data);
        $this->load->view('admin/crud/blogedit', $data);
        $this->load->view('admin/module/footer');
    }

    function update_blog($id)
    {

        $this->load->helper('file');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('auteur', 'Auteur', 'trim|required');
        $this->form_validation->set_rules('domaine', 'Domaine', 'trim|required');
        $this->form_validation->set_rules('categorie', 'Categorie', 'trim|required');
        $this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[4]|max_length[128]');
        $this->form_validation->set_rules('description', 'Decription', 'trim|required');
        $this->form_validation->set_rules('content', 'Content', 'trim|required');
        $this->form_validation->set_rules('attachment', 'Attachment');

        if ($this->form_validation->run()) {
            # code...
            $auteur = $this->input->post('auteur');
            $domaine = $this->input->post('domaine');
            $categorie = $this->input->post('categorie');
            $title = $this->input->post('title');
            $description = $this->input->post('description');
            $content = $this->input->post('content');
            $attachment = $_FILES['attachment']['name'];

            if ($attachment ='') {
                # code...
            }else{
                $config['upload_path'] = 'assets/images/uploads';
                $config['allowed_types'] = 'gif|jpg|png';

                 $this->load->library('upload', $config);
                 if(!$this->upload->do_upload('attachment')){

                    echo "no upload";
                 }else{
                    $attachment = $this->upload->data('file_name');
                 }

                 $this->load->model('main_model');

                 $data = array(
                    'auteur' => $auteur,
                    'gradeAuteur' => $domaine,
                    'categorie' => $categorie,
                    'title' => $title,
                    'description' => $description,
                    'content' => $content,
                    'image' => $attachment,
                    'datepub' => date("Y-m-d H:i:s")

                    );
            $this->main_model->update_blog_edit($id,$data, 'attachment'); 
            $this->session->set_flashdata('success', 'données mise a jour!');
            redirect(base_url() . 'Admin/Admin/blog');
            }
        }
        echo'ererere';
    }

    function delete_blog($id)
    {
        $this->load->model('main_model');
        $this->main_model->delete_blog($id);
        $this->session->set_flashdata('success', 'données supprimer avec success!');
        redirect(base_url() . 'Admin/Admin/blog');
    }

}
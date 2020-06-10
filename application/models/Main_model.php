<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model
{
	function insert_data($data)
	{
		$this->db->insert('users', $data);
	}

	function can_login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('users');

		if ($query->num_rows() > 0) {
			
			return true;
		} 
		else
		{
			return false;
		}

	}
/* for about*/
	function insert_about($data)
	{
		$this->db->insert('about', $data);
	}

	function get_about()
	{
		$query = $this->db->query('SELECT * FROM about');
		return $query->result();
	}

	function get_about_edit($id)
	{
		$query = $this->db->query('SELECT * FROM about WHERE `id` =' .$id);
		return $query->row();
	}

	function update_about_edit($id, $data)
	{
		
		//$data = $attachment;
		$where = "id = $id";

 		$str = $this->db->update('about', $data, $where);
 		//$this->db->update('about', $data, 'id' = $id);
		
	}

	function delete_about($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('about');
	}
/* end about*/
	function insert_service($data)
	{
		$this->db->insert('service', $data);
	}

	function get_service()
	{
		$query = $this->db->query('SELECT * FROM service'); 
		return $query->result();
	}

	function get_service_edit($id)
	{
		$query = $this->db->query('SELECT * FROM service WHERE `id` =' .$id);
		return $query->row();
	}

	function update_service_edit($id, $data)
	{
	
		$where = "id = $id";

 		$str = $this->db->update('service', $data, $where);
		
	}

	function delete_service($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('service');
	}

	/*end service*/

	/*open projet*/

	function insert_projet($data)
	{
		$this->db->insert('projet', $data);
	}

	function get_projet()
	{
		$query = $this->db->query('SELECT * FROM projet'); 
		return $query->result();
	}
	function get_projet_detail($id)
	{
		$query = $this->db->query('SELECT * FROM projet WHERE `id` =' .$id);
		return $query->row();
	}

	function get_projet_edit($id)
	{
		$query = $this->db->query('SELECT * FROM projet WHERE `id` =' .$id);
		return $query->row();
	}

	function update_projet_edit($id, $data)
	{
	
		$where = "id = $id";

 		$str = $this->db->update('projet', $data, $where);
		
	}

	function delete_projet($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('projet');
	}
	/*end projet*/

	/*open blog*/

	function insert_blog($data)
	{
		$this->db->insert('blog', $data);
	}

	function get_blog()
	{
		$query = $this->db->query('SELECT * FROM blog'); 
		return $query->result();

	}
	function get_blog_detail($id)
	{
		$query = $this->db->query('SELECT * FROM blog WHERE `id` =' .$id);
		return $query->row();
	}

	function get_blog_edit($id)
	{
		$query = $this->db->query('SELECT * FROM blog WHERE `id` =' .$id);
		return $query->row();
	}

	function update_blog_edit($id, $data)
	{
		$where = "id = $id";

 		$str = $this->db->update('blog', $data, $where);
	}

	function delete_blog($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('blog');
	}

}
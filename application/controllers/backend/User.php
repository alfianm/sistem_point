<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['user'] 			= $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['title'] 			= 'User';
		$data['js']				= 'user';
		$this->template->load('templates','mod/user/view_index',$data);
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
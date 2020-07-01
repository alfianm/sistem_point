<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hadiah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['user'] 			= $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['title'] 			= 'Hadiah';
		$data['js']				= 'hadiah';
		$this->template->load('templates','mod/hadiah/view_index',$data);
	}

}

/* End of file Hadiah.php */
/* Location: ./application/controllers/Hadiah.php */
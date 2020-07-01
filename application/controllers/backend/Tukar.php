<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tukar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['user'] 			= $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['title'] 			= 'Tukar';
		$data['js']				= 'tukar';
		$this->template->load('templates','mod/tukar/view_index',$data);
	}

}

/* End of file Tukar.php */
/* Location: ./application/controllers/Tukar.php */
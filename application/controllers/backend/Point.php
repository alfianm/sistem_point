<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Point extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['user'] 			= $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['title'] 			= 'Point';
		$data['js']				= 'point';
		$this->template->load('templates','mod/point/view_index',$data);
	}

}

/* End of file Point.php */
/* Location: ./application/controllers/Point.php */
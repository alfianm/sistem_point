<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['user'] 			= $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['title'] 			= 'Customer';
		$data['js']				= 'customer';
		$this->template->load('templates','mod/customer/view_index',$data);
	}

}

/* End of file Customer.php */
/* Location: ./application/controllers/Customer.php */
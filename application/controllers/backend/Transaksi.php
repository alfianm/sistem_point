<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['user'] 			= $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['title'] 			= 'Transaksi';
		$data['js']				= 'transaksi';
		$this->template->load('templates','mod/transaksi/view_index',$data);
	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */
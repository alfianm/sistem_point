<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['user'] 			= $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['title'] 			= 'Produk';
		$data['js']				= 'produk';
		$this->template->load('templates','mod/produk/view_index',$data);
	}

}

/* End of file Produk.php */
/* Location: ./application/controllers/Produk.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penukaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (!$this->session->userdata('username')) {
            redirect('login','refresh');
        }
		$data = [
			'users' => $this->global->getPenukaran(),
			'user' => $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array(),
			'title' => 'Penukaran Hadiah',
		];
		$this->template->load('templates','mod/penukaran/view_index',$data);
	}

}

/* End of file Penukaran.php */
/* Location: ./application/controllers/Penukaran.php */
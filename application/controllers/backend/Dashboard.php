<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
			'user' => $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array(),
			'title' => 'Dashboard',
			'total_user' => $this->db->get('t_user')->num_rows(),
			'total_transaksi' => $this->db->get('t_transaksi')->num_rows(),
			'total_hadiah' => $this->db->get('t_hadiah')->num_rows(),
			'total_transaksi_peruser' => $this->db->get_where('t_transaksi',['id_user' => $this->session->userdata('id_user')])->num_rows(),
		];
		$this->template->load('templates','mod/dashboard/view_index',$data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
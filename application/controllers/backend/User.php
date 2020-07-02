<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = [
			'users' => $this->db->get_where('t_user', ['level' => 'customer'])->result_array(),
			'user' => $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array(),
			'title' => 'User'
		];
		$this->template->load('templates','mod/user/view_index',$data);
	}

	public function add()
	{
		$post = $this->input->post();

		$data = [
			'username' => $post['username'],
			'password' => $post['password'],
			'full_name' => $post['nama'],
			'level' => $post['level']
		];

		$success = $this->global->insert('t_user',$data);
		if ($success) {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Sukses</strong> Data berhasil disimpan.</div>');
			redirect('user','refresh');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Maaf!</strong> Data gagal disimpan.</div>');
			redirect('user','refresh');
		}
	}

	public function edit()
	{
		$post = $this->input->post();

		$data = [
			'username' => $post['username'],
			'password' => $post['password'],
			'full_name' => $post['nama'],
			'level' => $post['level']
		];

		$success = $this->global->update('t_user', $data, ['id' => $post['id']]);
		if ($success) {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Sukses</strong> Data berhasil diubah.</div>');
			redirect('user','refresh');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Maaf!</strong> Data gagal diubah.</div>');
			redirect('user','refresh');
		}
	}

	public function delete()
	{
		$post = $this->input->post();
		$success = $this->global->delete('t_user', ['id' => $post['id']]);
		$this->db->where('id', $post['id']);
		$this->db->delete('t_transaksi');
		if ($success) {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Sukses</strong> Data berhasil dihapus.</div>');
			redirect('user','refresh');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Maaf!</strong> Data gagal dihapus.</div>');
			redirect('user','refresh');
		}
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
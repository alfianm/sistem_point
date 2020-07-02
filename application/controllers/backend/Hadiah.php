<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hadiah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')) {
            redirect('login','refresh');
        }
	}

	public function index()
	{
		$data = [
			'hadiah' => $this->global->getHadiah(),
			'user' => $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array(),
			'title' => 'Hadiah'
		];
		$this->template->load('templates','mod/hadiah/view_index',$data);
	}

	public function add()
	{
		$post = $this->input->post();

		$data = [
			'nama_hadiah' => $post['hadiah'],
			'point' => $post['point']
		];

		$success = $this->global->insert('t_hadiah',$data);
		if ($success) {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Sukses</strong> Data berhasil disimpan.</div>');
			redirect('hadiah','refresh');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Maaf!</strong> Data gagal disimpan.</div>');
			redirect('hadiah','refresh');
		}
	}

	public function edit()
	{
		$post = $this->input->post();

		$data = [
			'nama_hadiah' => $post['hadiah'],
			'point' => $post['point']
		];

		$success = $this->global->update('t_hadiah', $data, ['id' => $post['id']]);
		if ($success) {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Sukses</strong> Data berhasil diubah.</div>');
			redirect('hadiah','refresh');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Maaf!</strong> Data gagal diubah.</div>');
			redirect('hadiah','refresh');
		}
	}

	public function delete()
	{
		$post = $this->input->post();
		$success = $this->global->delete('t_hadiah', ['id' => $post['id']]);
		if ($success) {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Sukses</strong> Data berhasil dihapus.</div>');
			redirect('hadiah','refresh');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Maaf!</strong> Data gagal dihapus.</div>');
			redirect('hadiah','refresh');
		}
	}

}

/* End of file Hadiah.php */
/* Location: ./application/controllers/Hadiah.php */
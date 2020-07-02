<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaksi extends CI_Controller {

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
			'transaksi' => $this->global->getTransaksi(),
			'users' => $this->db->get_where('t_user', ['level' => 'customer'])->result_array(),
			'user' => $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array(),
			'title' => 'Transaksi'
		];
		$this->template->load('templates','mod/transaksi/view_index',$data);
	}

	public function add()
	{
		$post = $this->input->post();

		$data = [
			'id_user' => $post['customer'],
			'nama_produk' => $post['produk'],
			'harga' => $post['harga']
		];

		$success = $this->global->insert('t_transaksi',$data);
		$cust = $this->global->getCust($post['customer']);

		$point = $cust->point + 5;

		$update = $this->global->plusPoint($point,$cust->id);


		if ($success) {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Sukses</strong> Data berhasil disimpan.</div>');
			redirect('transaksi','refresh');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Maaf!</strong> Data gagal disimpan.</div>');
			redirect('transaksi','refresh');
		}
	}

	public function edit()
	{
		$post = $this->input->post();

		$data = [
			'id_user' => $post['customer'],
			'nama_produk' => $post['produk'],
			'harga' => $post['harga']
		];

		$success = $this->global->update('t_transaksi', $data, ['id' => $post['id']]);
		if ($success) {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Sukses</strong> Data berhasil diubah.</div>');
			redirect('transaksi','refresh');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Maaf!</strong> Data gagal diubah.</div>');
			redirect('transaksi','refresh');
		}
	}

	public function delete()
	{
		$post = $this->input->post();
		$success = $this->global->delete('t_transaksi', ['id' => $post['id']]);
		if ($success) {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Sukses</strong> Data berhasil dihapus.</div>');
			redirect('transaksi','refresh');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Maaf!</strong> Data gagal dihapus.</div>');
			redirect('transaksi','refresh');
		}
	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */
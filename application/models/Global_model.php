<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Global_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function insert($table,$data)
	{
		return $this->db->insert($table, $data);
	}

	public function update($table,$data,$where=array())
	{
		$this->db->set($data);
		$this->db->where($where);
		return $this->db->update($table);
	}

	public function delete($table,$where)
	{
		$this->db->where($where);
		return $this->db->delete($table);
	}

	public function get($table)
	{
		return $this->db->get($table)->result();
	}

	public function getOneSpesificWhere($select,$where,$table){
		return $this->db->select($select)->where($where)->get($table)->row();
	}

	public function getOneWhere($where,$table){
		return $this->db->where($where)->get($table)->row();
	}

	public function getTransaksi()
	{
		$this->db->select('*,t_transaksi.id as id_transaksi');
		$this->db->join('t_user', 't_user.id = t_transaksi.id_user', 'left');
		return $this->db->get('t_transaksi')->result_array();
	}

	public function getCust($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('t_user')->row();
	}

	public function plusPoint($point,$id)
	{
		$this->db->set('point', $point);
		$this->db->where('id', $id);
		$this->db->update('t_user');
	}

	public function getHadiah()
	{
		return $this->db->get('t_hadiah')->result_array();
	}

	public function getPenukaran()
	{
		$this->db->select('t_user.full_name as nama_lengkap, t_hadiah.nama_hadiah as nama_hadiah,t_hadiah.point as point_hadiah, ');
		$this->db->join('t_user', 't_user.id = t_penukaran.id_user', 'left');
		$this->db->join('t_hadiah', 't_hadiah.id = t_penukaran.id_hadiah', 'left');
		$this->db->where('id_user', $this->session->userdata('id_user'));
		return $this->db->get('t_penukaran')->result_array();
	}

}

/* End of file Global_model.php */
/* Location: ./application/models/Global_model.php */
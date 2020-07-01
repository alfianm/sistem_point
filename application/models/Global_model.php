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

	public function delete($table,$id)
	{
		$this->db->where($where, $id);
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

}

/* End of file Global_model.php */
/* Location: ./application/models/Global_model.php */
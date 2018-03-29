<?php

class Siswa_model extends CI_Model {

	public function get_siswa()
	{
        $query = $this->db->query(" SELECT * FROM tbl_siswa ");
        return $query->result_array();
	}

	public function insert_siswa(){
		$nis = $this->input->post('nis');
		$nm_siswa = $this->input->post('nm_siswa');
		$alamat = $this->input->post('alamat');

		$query = $this->db->query(" INSERT INTO tbl_siswa (nis, nm_siswa, alamat) 
									VALUES
									('$nis', '$nm_siswa', '$alamat') ");
		return $query;
	}
	
}

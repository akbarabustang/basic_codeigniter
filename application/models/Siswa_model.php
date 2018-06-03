<?php

class Siswa_model extends CI_Model {

	public function get_siswa()
	{
        // $query = $this->db->query(" SELECT * FROM tbl_siswa ");
		// return $query->result_array();
		
		return $this->db->get('tbl_siswa')->result_array();
	}

	public function insert_siswa(){
		$nis = $this->input->post('nis');
		$nm_siswa = $this->input->post('nm_siswa');
		$alamat = $this->input->post('alamat');

		// $query = $this->db->query(" INSERT INTO tbl_siswa (nis, nm_siswa, alamat) 
		// 							VALUES
		// 							('$nis', '$nm_siswa', '$alamat') ");
		// return $query;

		$data = array(
						'nis'=>$nis,
						'nm_siswa'=>$nm_siswa,
						'alamat'=>$alamat,
		);
		$this->db->insert('tbl_siswa', $data);
	}
	
	public function getById($id){
		return $query = $this->db->query(" SELECT * FROM tbl_siswa WHERE id='$id' ")->row_array();
	}

	public function edit_siswa(){
		$id = $this->input->post('id');
		$nis = $this->input->post('nis');
		$nm_siswa = $this->input->post('nm_siswa');
		$alamat = $this->input->post('alamat');

		// $query = $this->db->query(" UPDATE tbl_siswa SET nis='$nis', nm_siswa= '$nm_siswa', alamat='$alamat' 
		// 							WHERE id='$id' ");
		// return $query;

		$data = array(
			'nis'=>$nis,
			'nm_siswa'=>$nm_siswa,
			'alamat'=>$alamat,
		);
		$this->db->where('id', $id);
		$this->db->update('tbl_siswa', $data);
	}

	public function hapus_siswa($id){
		// $query = $this->db->query(" DELETE FROM tbl_siswa WHERE id='$id' ");
		// return $query;

		$this->db->where('id', $id);
		$this->db->delete('tbl_siswa');
	}

}

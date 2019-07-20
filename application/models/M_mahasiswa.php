<?php
/**
 * 
 */
class M_mahasiswa extends CI_Model
{
	public function mahasiswa()
	{
		return $this->db->get('mahasiswa');
	}
	

}
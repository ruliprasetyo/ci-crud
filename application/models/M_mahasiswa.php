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

	public function mahasiswa_aktif_db()
	{
		return $this->db->query("SELECT * FROM mahasiswa WHERE status='aktif' ");	
	}
	
	public function new_post($data)
	{
		$nim        = $this->input->post('nim');
		$name       = $this->input->post('name');
		$gender     = $this->input->post('gender');
		$address    = $this->input->post('address');
		$created_at = strtotime(date('d-m-Y H:m'))*1000;
		$data = array(
			'nim'        =>$nim ,
			'name'       =>$name,
			'gender'     =>$gender,
			'address'    =>$address,
			'created_at' =>$created_at,
			'update_at'  =>$created_at );
		$this->db->insert('mahasiswa',$data);
	}

	public function edit($mahasiswa_id)
	{
		$data= array ('mahasiswa_id'=>$mahasiswa_id);
		return $this->db->get_where('mahasiswa',$data);
	}

	public function edit_process()
	{
		$nim        = $this->input->post('nim');
		$name       = $this->input->post('name');
		$gender     = $this->input->post('gender');
		$address    = $this->input->post('address');
		$created_at = strtotime(date('d-m-Y H:m'))*1000;
		$data = array(
			'nim'        =>$nim ,
			'name'       =>$name,
			'gender'     =>$gender,
			'address'    =>$address,
			'created_at' =>$created_at,
			'update_at'  =>$created_at );
		$this->db->where('mahasiswa_id',$this->input->post('mahasiswa_id'));
		$this->db->update('mahasiswa',$data);
	}

	public function delete_process($mahasiswa_id)
	{
       $this->db->query("UPDATE `mahasiswa` SET `status` = 'non-aktif' WHERE `mahasiswa`.`mahasiswa_id` = $mahasiswa_id");
	}

}
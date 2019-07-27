<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Mahasiswa extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
        $this->load->model('M_mahasiswa');
	}

	public function index()
	{
		$data['record']=$this->M_mahasiswa->mahasiswa();
		$this->load->view('v_mahasiswa',$data);
	}

	public function mahasiswa_aktif()
	{
		$data['record']=$this->M_mahasiswa->mahasiswa_aktif_db();
		$this->load->view('v_mahasiswa_aktif',$data);
	}

	public function new()
	{
		if (isset($_POST['submit']))
	    {

	    	$this->M_mahasiswa->new_post('$data');
	    	redirect('mahasiswa');
			
		}else
		{
			$this->load->view('v_new_mahasiswa');
		}
	}

	public function edit()
	{
		if (isset($_POST['submit']))
	    {
	    	$this->M_mahasiswa->edit_process();
	    	redirect('mahasiswa');
			
		}else
		{
			$mahasiswa_id=$this->uri->segment(3);
			$data['record']=$this->M_mahasiswa->edit($mahasiswa_id)->row_array();
			$this->load->view('v_edit_mahasiswa',$data);
		}
	}

	public function delete()
	{
		$mahasiswa_id=$this->uri->segment(3);
		$this->M_mahasiswa->delete_process($mahasiswa_id);
		redirect('mahasiswa');
	}
}
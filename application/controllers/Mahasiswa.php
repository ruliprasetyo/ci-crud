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

	public function new()
	{
		if (isset($_POST['submit']))
	    {
			
		}else
		{
			$this->load->view('v_new_mahasiswa');
		}
	}

	public function edit()
	{
		if (isset($_POST['submit']))
	    {
			
		}else
		{
			$this->load->view('v_edit_mahasiswa');
		}
	}
}
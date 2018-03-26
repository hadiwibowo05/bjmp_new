<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->helper(['form', 'url', 'security']);
        $this->load->library('session','form_validation');
        $this->load->model('admin');

    }

	public function index()
	{
		if($this->admin->logged_id())
			
		{

			$this->load->view("admin/dashboard");			

		}else{

			//jika session belum terdaftar, maka redirect ke halaman login
			$this->load->view("admin/login");
			// redirect("login");

		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
	public function login()
	{
		$this->load->view('admin/login');
	}
	/* public function h_jenis()
	{
		$this->load->view('admin/h_jenis');
	} */
	public function Team()
	{
		$this->load->view('admin/team');
	}
	public function katpro()
	{
		$this->load->view('admin/katpro');
	}
	public function h_jenis()
	{
		$this->load->view('admin/h_jenis');
	}
	public function jobpos()
	{
		if($this->admin->logged_id())	
		{
			$this->load->view("admin/jobpos");			
		}else{
			//jika session belum terdaftar, maka redirect ke halaman login
			$this->load->view("admin/login");
			// redirect("login");
		}
	}
	public function poslow()
	{
		$this->load->view('admin/poslow');
	}
}




<?php
/**
 * 
 */
class AdminLogin extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("AdminAuthModel");
		if($this->session->userdata("UserAdmin")){
			return redirect("admin/dashboard");
		}
		
		
	}

	function index()
	{
		//$this->load->view("admin/AdminLogin");
		$this->session->set_userdata("UserAdmin","1");
		return redirect('admin');
	}
}
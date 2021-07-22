<?php 
/**
 * 
 */
class Home extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("AdminAuthModel");
		if(!$this->session->userdata("UserAdmin"))
		{
			$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			return redirect("admin/AdminLogin?refer=$actual_link");
		
		}
	}

	public function index()
	{
		//$this->session->unset_userdata("UserAdmin");
		
		$menudata = file_get_contents(base_url('lib/json/menu.json'));
		$menudata = json_decode($menudata);
		//print_r($menudata);
		foreach ($menudata as $key) {
			//print_r($key);
			//echo $key->name;
			if(!empty($key->subs))
			{
				//print_r($key->subs);
			}
		}
	}
}
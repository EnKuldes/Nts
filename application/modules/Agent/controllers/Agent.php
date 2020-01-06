<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Attendance Class
 */
class Agent extends MX_Controller
{
	
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		//$this->load->model('Site_model');
	}

	function index()
    {
    	$data['main_content'] = 'site';
    	$data['main_menu'] = "";
		$data['page_title'] = "CRUD Web 2 UAS";

    	$this->load->view('includes/template',$data);
    }
    
}

?>
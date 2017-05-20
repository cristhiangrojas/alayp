<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class work_employability extends CI_Controller 
{
	function __construct()
	{
		parent::__construct(); 

	}

	function index()
	{
		$this->load->view('template/index',$data);
	}
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('get_email_status')){
	function is_logued(){
		$r = false;
		if(isset($_SESSION['is_logued_in'])){
			$r = true;
		}
		return $r;
	}
}

 ?>
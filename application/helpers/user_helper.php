<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('is_logued')){
	function is_logued(){
		$r = false;
		if(isset($_SESSION['is_logued_in'])){
			$r = true;
		}
		return $r;
	}
}
if(!function_exists('date_forum')){
	function date_forum($date){
		$mes = date('F d m \a\t g:i a',strtotime($date));
		return $mes;
	}
}
 ?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
	}
	
	function index(){
		
		$sql = "SELECT
		*
		FROM
		chop
		
		";
		$result = $this->db->query($sql)->result_array();
		
		print_r( $result);
		
	}
}


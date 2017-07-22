<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestCon extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function api_num(){
		$this->load->helper('url');
		$this->load->helper('file');
		$this->load->helper('writefile_helper');
	
		$num1 = $this->input->post('num1');
		$num2 = $this->input->post('num2');
	
		$result = array();
		error_reporting(E_ALL);

		for( $j = $num1; $j <= $num2; $j++ )
		{
		for( $k = 2; $k < $j; $k++ )
		{
		if( $j % $k == 0 )
		{
		break;
		}
		
		}
		if( $k == $j )
		//echo $j ;
	
		$result[$k] = $j;
	
		}
		$amount = count($result);
		
		write_log(FCPATH.'assets\logs\20170722.log', 'First: '.$num1.' Second: '.$num2.' Result: ');
		foreach($result as $row){
			write_log(FCPATH.'assets\logs\20170722.log', $row.', ');
		}
		write_log(FCPATH.'assets\logs\20170722.log', "\n");

		 //echo json_encode($result);
		 
		 $data['get_number'] = $result;
		$this->load->view('welcome_message',$data);

		}
}


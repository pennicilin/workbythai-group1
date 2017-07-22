<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once('TestCon.php');
class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if(empty($this->input->post('num1'))) {
		$this->load->view('welcome_message');
		}else{
		
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
}

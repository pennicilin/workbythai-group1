<?php


public function write_log($path="20170722.log",$data=NULL)
{
	// if( !$data) 
	// 	echo "No data."; exit;
	// // body
		
	// // end

	if(!$data){
		echo "No Data.";
		exit;
	} else {
		write_file($path,$data);
		print_r("Path : ".$path." Data : ".$data);
	}

}
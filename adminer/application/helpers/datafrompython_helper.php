<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function get_data_from_logs(){
		$result =[];

		$log_file = $_SERVER['DOCUMENT_ROOT']. '/logs/' . date('Y-m-d') . '.txt';

		if(file_exists($log_file)){
			$file = fopen($log_file, 'r');
			$contents = fread($file, filesize($log_file));
			$str = explode('@#@', $contents);
			foreach($str as $val){
				preg_match('/index=>(?P<index>[0-9]*),time=>(?P<time>[0-9:]*),command=>(?P<command>[a-zA-Z]*),aimId=>(?P<aimId>[0-9]*),flag=>(?P<flag>[a-zA-Z]*),result=>(?P<result>[a-zA-Z0-9:\s]*)/', $val, $matches);
				$result[] = $matches;
			}
		}

		return $result;
	}
?>
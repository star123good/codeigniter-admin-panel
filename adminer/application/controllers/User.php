<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->get_user(0);
	}

	public function get_user($user_id)
	{
		$this->load->helper('url');
		$this->load->library('session');
		
		if(!(isset($this->session->user_login) && $this->session->user_login == true)){
			redirect('/login', 'refresh');
		}

		if($user_id == 0){
			$data = [
				'page_select' => 'user',
				'page_title' => 'Admin | Users',
				'header_class' => 'vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns',
				'header_cols' => '2-columns',
				'css_array' => ['css/pages/page-search.css'],
				'js_array' => ['vendors/chartist-js/chartist.min.js', 'vendors/chartjs/chart.min.js', 'fonts/fontawesome/js/all.min.js', 'vendors/chartjs/chart.min.js', 'js/scripts/screen-users.js']
			];
		}
		else{
			$data = [
				'page_select' => 'user',
				'page_title' => 'Admin | User - '.$user_id,
				'header_class' => 'vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns',
				'header_cols' => '2-columns',
				'css_array' => ['css/pages/dashboard-modern.css'],
				'js_array' => ['vendors/chartjs/chart.min.js', 'js/scripts/screen-user.js'],
				'uin' => $user_id
			];
		}

		$this->load->view('templates/layout/header', $data);
		$this->load->view('templates/layout/sidebar', $data);
		if($user_id == 0) $this->load->view('templates/pages/users', $data);
		else $this->load->view('templates/pages/user', $data);
		$this->load->view('templates/layout/righter', $data);
		$this->load->view('templates/layout/footer', $data);
	}
}

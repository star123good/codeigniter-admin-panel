<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {

	public function login()
	{
		$this->load->helper('url');

		$data = [
			'page_select' => 'login',
			'page_title' => 'Admin | Log In',
			'header_class' => 'vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 1-column login-bg  blank-page blank-page',
			'header_cols' => '1-column',
			'css_array' => ['css/pages/login.css'],
			'js_array' => []
		];

		$this->load->view('templates/layout/header', $data);
		$this->load->view('templates/pages/login', $data);
		$this->load->view('templates/layout/footer', $data);
	}
	
	public function lock()
	{
		$this->load->helper('url');

		$data = [
			'page_select' => 'lock',
			'page_title' => 'Admin | Lock',
			'header_class' => 'vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 1-column login-bg  blank-page blank-page',
			'header_cols' => '1-column',
			'css_array' => ['css/pages/lock.css'],
			'js_array' => []
		];

		$this->load->view('templates/layout/header', $data);
		$this->load->view('templates/pages/lock', $data);
		$this->load->view('templates/layout/footer', $data);
    }
    
    public function profile()
	{
		$this->load->helper('url');

		$data = [
			'page_select' => 'profile',
			'page_title' => 'Admin | Profile',
			'header_class' => 'vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns',
			'header_cols' => '1-column',
			'css_array' => ['css/pages/user-profile-page.css'],
			'js_array' => []
		];

		$this->load->view('templates/layout/header', $data);
		$this->load->view('templates/layout/sidebar', $data);
		$this->load->view('templates/pages/profile', $data);
		$this->load->view('templates/layout/righter', $data);
		$this->load->view('templates/layout/footer', $data);
	}
    
    public function logout()
	{
		$this->load->helper('url');
		$this->load->library('session');

		$this->session->user_login = false;
		
		redirect('/', 'refresh');
	}

	public function user_check()
	{
		$this->load->helper('url');
		$this->load->library('session');

		define('USER_NAME', 'administrator');
		define('USER_PASSWORD', 'F00tball123!');

		if($this->input->get('username') == USER_NAME && $this->input->get('password') == USER_PASSWORD){
			$this->session->user_login = true;
			redirect('/', 'refresh');
		}
		else{
			$this->session->user_login = false;
			redirect('/login', 'refresh');
		}

	}
}

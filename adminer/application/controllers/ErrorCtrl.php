<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ErrorCtrl extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');

		$data = [
			'page_select' => 'error',
			'page_title' => 'Admin | Error',
			'header_class' => 'vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 1-column  bg-full-screen-image blank-page blank-page',
			'header_cols' => '1-column',
			'css_array' => ['css/pages/page-404.css'],
			'js_array' => []
		];

		$this->load->view('templates/layout/header', $data);
		$this->load->view('templates/pages/page-404', $data);
		$this->load->view('templates/layout/footer', $data);
	}
}

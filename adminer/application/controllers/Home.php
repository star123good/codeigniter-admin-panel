<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->helper('url');
		$this->load->library('session');
		
		if(!(isset($this->session->user_login) && $this->session->user_login == true)){
			redirect('/login', 'refresh');
		}
		// $this->load->helper('datafrompython_helper');

		$data = [
			'page_select' => 'home',
			'page_title' => 'Admin | Dashboard',
			'header_class' => 'vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns',
			'header_cols' => '2-columns',
			'css_array' => ['css/pages/dashboard-modern.css', 'vendors/chartist-js/chartist.css'],
			'js_array' => ['vendors/chartjs/chart.min.js', 'vendors/chartist-js/chartist.min.js', 'vendors/chartist-js/chartist-plugin-tooltip.js', 'vendors/chartist-js/chartist-plugin-fill-donut.min.js', 'js/scripts/screen-home.js']
		];

		$this->load->view('templates/layout/header', $data);
		$this->load->view('templates/layout/sidebar', $data);
		$this->load->view('templates/pages/home', $data);
		$this->load->view('templates/layout/righter', $data);
		$this->load->view('templates/layout/footer', $data);
	}
}

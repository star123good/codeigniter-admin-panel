<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function index()
	{
		$this->get_order(0, '');
	}

	public function get_order($order_id, $order_type)
	{
		$this->load->helper('url');
		$this->load->library('session');
		
		if(!(isset($this->session->user_login) && $this->session->user_login == true)){
			redirect('/login', 'refresh');
		}

		if($order_type == 'uin') $search_params = 'UIN = ' . $order_id;
		if($order_type == 'pid') $search_params = 'Product ID = ' . $order_id;
		if($order_type == 'oid') $search_params = 'Order ID = ' . $order_id;
		else $search_params = 'All Order List';

		$data = [
			'page_select' => 'order',
			'page_title' => 'Admin | Orders',
			'header_class' => 'vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns',
			'header_cols' => '2-columns',
			'css_array' => ['vendors/data-tables/css/jquery.dataTables.min.css', 'vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css', 'vendors/data-tables/css/select.dataTables.min.css', 'css/pages/data-tables.css'],
			'js_array' => ['vendors/data-tables/js/jquery.dataTables.min.js', 'vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js', 'vendors/data-tables/js/dataTables.select.min.js', 'js/scripts/screen-orders.js'],
			'search_params' => $search_params
		];

		$this->load->view('templates/layout/header', $data);
		$this->load->view('templates/layout/sidebar', $data);
		$this->load->view('templates/pages/orders', $data);
		$this->load->view('templates/layout/righter', $data);
		$this->load->view('templates/layout/footer', $data);
	}
}

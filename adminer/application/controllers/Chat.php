<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

	public function index()
	{
		$this->get_chat(0);
	}

	public function get_chat($chat_id)
	{
		$this->load->helper('url');
		$this->load->library('session');
		
		if(!(isset($this->session->user_login) && $this->session->user_login == true)){
			redirect('/login', 'refresh');
		}

		$data = [
			'page_select' => 'chat',
			'page_title' => 'Admin | Chats',
			'header_class' => 'vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns  app-page',
			'header_cols' => '2-columns',
			'css_array' => ['css/pages/app-chat.css'],
			'js_array' => ['js/scripts/app-chat.js', 'js/scripts/screen-chat.js'],
			'chat_id' => $chat_id
		];

		$this->load->view('templates/layout/header', $data);
		$this->load->view('templates/layout/sidebar', $data);
		$this->load->view('templates/pages/chat', $data);
		$this->load->view('templates/layout/righter', $data);
		$this->load->view('templates/layout/footer', $data);
	}
}

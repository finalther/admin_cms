<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {
	var $content = "";    
	function __construct()
	{
		parent::__construct();
	}

	function index(){
		$data['_title_']	= "Admin | Dashboard";
		$this->content = (!$this->content) ? $this->load->view('v_home', $data, true) : $this->content;
		$data['_content_'] 	= $this->content ;
		$this->parser->parse('backend/master', $data);
	}

	
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function index()
	{
		$data = array(
			'page' => 'About Us',
			'canonicalURI' => 'about',
			'amp_list' => false,
			'amp_bind' => false,
			'amp_mustache' => false
		);
		$this->load->view('templates/header.php', $data);
		$this->load->view('about_us', $data);
		$this->load->view('templates/footer.php', $data);
	}
}

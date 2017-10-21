<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
		$data = array(
			'page' => 'Contact Us',
			'canonicalURI' => 'contact'
		);
		$this->load->view('templates/header.php', $data);
		$this->load->view('contact_us', $data);
		$this->load->view('templates/footer.php', $data);
	}
}

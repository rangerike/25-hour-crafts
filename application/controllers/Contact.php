<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
		$data = array(
			'page' => 'Contact Us',
			'canonicalURI' => 'contact',
			'meta_description' => 'Are you looking for a specific nerdy or geeky handmade item? How about you need another vendor? In either case, Email us at craftyhobbitshop@gmail.com!'
		);
		$this->load->view('templates/header.php', $data);
		$this->load->view('contact_us', $data);
		$this->load->view('templates/footer.php', $data);
	}
}

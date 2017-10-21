<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
	public function index()
	{
		$data = array(
			'page' => 'Events',
			'canonicalURI' => 'events'
		);
		$this->load->view('templates/header.php', $data);
		$this->load->view('events', $data);
		$this->load->view('templates/footer.php', $data);
	}
}

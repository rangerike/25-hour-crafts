<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
	public function index()
	{
		$data = array(
			'page' => 'Events',
			'canonicalURI' => 'events',
			'meta_description' => 'Would you rather meet Kayla and Scott in person? Well, we might be coming to a city near you and we would love to show you everything we have to offer'
		);
		$this->load->view('templates/header', $data);
		$this->load->view('events', $data);
		$this->load->view('templates/footer', $data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function index()
	{
		$data = array(
			'page' => 'About Us',
			'canonicalURI' => 'about',
			'meta_description' => 'We travel the upper midwest to conventions, comic cons, and geeky craft fairs to spread our crafts to fellow nerds and geeks'
		);
		$this->load->view('templates/header', $data);
		$this->load->view('about_us', $data);
		$this->load->view('templates/footer', $data);
	}
}

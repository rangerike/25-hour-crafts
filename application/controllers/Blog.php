<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function index()
	{
		$data = array(
			'page' => 'Blog Listing',
			'canonicalURI' => 'blog',
			'meta_description' => 'Learn how to make some of the things we do and how we stumbled into a fun and enjoyable side business.'
		);
		$this->load->view('templates/header.php', $data);
		$this->load->view('blog_landing', $data);
		$this->load->view('templates/footer.php', $data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function index()
	{
		$data = array(
			'page' => 'Featured Blog Articles',
			'canonicalURI' => 'blog',
			'meta_description' => 'Learn how to make some of the things we do and how we stumbled into a fun and enjoyable side business.'
		);
		$this->load->view('templates/header', $data);
		$this->load->view('blog_landing', $data);
		$this->load->view('templates/footer', $data);
	}

	public function article($number) {
		$data = array(
			'page' => 'Article',
			'canonicalURI' => 'article/'.$number
		);
		switch($number) {
			case 1:
				$data['meta_description'] = 'Learn about the importance of good displays to attract prospective customers and keep them from putting your product "back on the shelf."';
				break;
		}
		$this->load->view('templates/header', $data);
		$this->load->view('articles/article-'.$number, $data);
		$this->load->view('templates/footer', $data);
	}
}

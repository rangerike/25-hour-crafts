<?php
class Shop extends CI_Controller {

	public function index()
	{}

  public function product($page = 'product_list')
  {

		$data = array(
			'page' => ucfirst(($page==='product_list'?'products':$page)),
			'canonicalURI' => 'shop/product'.($page==='product_list'?'':'/'.$page),
			'amp_list' => TRUE,
			'amp_bind' => TRUE,
			'amp_mustache' => TRUE
		);

    $this->load->view('templates/header', $data);
    $this->load->view('shop/'.$page, $data);
    $this->load->view('templates/footer', $data);
  }
}

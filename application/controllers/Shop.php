<?php
class Shop extends CI_Controller {

	public function index($page = 'products')
	{
		$data = array(
			'page' => ucfirst($page),
			'canonicalURI' => 'shop/',
			'amp_list' => TRUE,
			'amp_bind' => TRUE,
			'amp_mustache' => TRUE,
			'meta_description' =>''
		);

		$this->load->view('templates/header', $data);
    $this->load->view('shop/product_list', $data);
    $this->load->view('templates/footer', $data);
	}

  public function product($productID)
  {

		$data = array(
			'page' => ucfirst(($page==='product_list'?'products':$page)),
			'canonicalURI' => 'shop/product'.($page==='product_list'?'':'/'.$page),
			'amp_list' => TRUE,
			'amp_bind' => TRUE,
			'amp_mustache' => TRUE,
			'meta_description' =>''
		);

    $this->load->view('templates/header', $data);
    $this->load->view('shop/'.$page, $data);
    $this->load->view('templates/footer', $data);
  }
}

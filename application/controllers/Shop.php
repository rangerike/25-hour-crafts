<?php
class Shop extends CI_Controller {

	public function index()
	{}

  public function product($page = 'home')
  {
    if (!file_exists(APPPATH.'views/shop/'.$page.'.php')) {
      show_404();
    }
    $data['title'] = ucfirst($page);

    $this->load->view('templates/header', $data);
    $this->load->view('shop/'.$page, $data);
    $this->load->view('templates/footer', $data);
  }
}

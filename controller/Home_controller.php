<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('user_model');
		$this->load->library('session');
		$res=$this->user_model->get_products();
		$products['recent_items']=$res;
		$this->load->view('index_view',$products);
	}
	public function blog()
	{
		$this->load->view('blog_view');
	}
	public function blog_single()
	{
		$this->load->view('blog_single_view');
	}
	public function cart()
	{
		$this->load->view('cart_view');
	}
	public function checkout()
	{
		$this->load->view('checkout_view');
	}
	public function contact()
	{
		$this->load->view('contact_view');
	}
	public function login()
	{
		$this->load->view('login_view');
	}
	public function product_details()
	{
		$this->load->view('product_details_view');
	}
	public function shop()
	{
		$this->load->view('shop_view');
	}
	public function page_not_found()
	{
		$this->load->view('404');
	}
}

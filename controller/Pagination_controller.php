<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagination_controller extends CI_Controller {
	public function paging()
	{
		$this->load->library('pagination');
		$this->load->model('pagination_model');
		$config['total_rows']=$this->pagination_model->get_total_recs();
		$config['per_page']=2;
		$config['base_url']=base_url()."index.php/pagination_controller/paging";
		$config['use_page_numbers']=true;
		$this->pagination->initialize($config);
		$data['plinks']=$this->pagination->create_links();
		$seg=$this->uri->segment(3);
		if(empty($seg))
			$si=0;
		else
			$si=($seg-1)*$config['per_page'];
		$data['resultset']=$this->pagination_model->get_limit_users($config['per_page'],$si);
		$this->load->view('pagination_view',$data);
	}
	
}

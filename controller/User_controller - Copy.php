<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller {
	public function register_load_view()
	{
		$this->load->view('login_view');
	}
	public function register_now()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('email','email','required');
		if($this->form_validation->run())
		{
				extract($_POST);
		if(isset($register))
		{
		$data=array(
			'name'=>$name,
			'email'=>$email,
			'mobile'=>$mobile,
			'password'=>$password
			);
		$this->load->model('user_model');
		$this->user_model->user_register($data);
		}
		else
			echo "invalid request";
		}
		else
			echo "registration failed";
	}
}

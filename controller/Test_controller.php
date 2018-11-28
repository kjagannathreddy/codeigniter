<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_controller extends CI_Controller {
	public function test()
	{
		$this->load->model('test_model');
		$this->test_model->f1();
	}
}

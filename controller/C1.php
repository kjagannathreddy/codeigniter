<?php
class C1 extends CI_controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('test_lib');
	}
	public function f1()
	{
		$this->load->helper('test');
		$str="Welcome to php";
		echo reverse($str);
	}
	public function f2()
	{

		$lstr="Welcome to CI";
		echo $this->test_lib->reverse_words($lstr);
	}
	public function f3()
	{
		$lstr="Welcome to Framework";
		echo $this->test_lib->reverse_words($lstr);
	}
	public function f5()
	{
		$this->load->model('test_model');
		$this->test_model->f5();
	}
	public function f6()
	{
		//$config['enable_hooks'] = FALSE;
		echo "php,";
	}
	public function f7()
	{
		echo "codeigniter,";
	}
}

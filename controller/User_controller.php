<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('test_model');
		$this->load->library('form_validation');
	}
	public function register_load_view()
	{
	$data=array();
	$data['msg']="";
	$this->load->view('register_view',$data);
	}
	public function register_now()
	{
		$this->form_validation->set_rules('name','Username','required|alpha',array('required'=>'Name is required','alpha'=>'Invalid name'));
		$this->form_validation->set_rules('email','Useremail','required|valid_email',array('required'=>'Email is required','valid_email'=>'Invalid name'));
		$this->form_validation->set_error_delimiters('<span class="err">','</span>');
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

			$resp=$this->user_model->user_register($data);
			$view_data=array();
			if($resp==1)
			$view_data['msg']="Registration success";
			if($resp==2)
			$view_data['msg']="Registration failed";
			if($resp==3)
			$view_data['msg']="Email already exists";
			$this->load->view('register_view',$view_data);
			}
			else
			echo "Invalid request";
		}
		else
			{
			$data=array();
			$data['msg']="";
			$this->load->view('register_view',$data);
			}
	}
	public function login_load()
	{
		$data['msg']="";
		$this->load->view('login_view');
	}
	public function login_user()
	{
		$this->load->library('session');
		$user_id=$this->session->userdata('user_id');
		if(!empty($user_id))
		redirect('home_controller');
		extract($_POST);
		$data['msg']="";
		if(isset($login))
		{
			$this->form_validation->set_rules('email','Useremail','required|valid_email',array('required'=>'Email is required','valid_email'=>'Invalid email'));
			$this->form_validation->set_error_delimiters('<span class="err">','</span>');
			if($this->form_validation->run())
			{

				$data=array(
					'email'=>$email,
					'password'=>$password
				);
				$res=$this->user_model->user_login($data);
				$count=$res->num_rows();
				if($count==1)
				{
					$row=$res->row();

					$sess_data=array(
						'user_id'=>$row->user_id,
						'name'=>$row->name,
						'email'=>$row->email,
						'profile_pic'=>$row->profile_pic,
						'mobile'=>$row->mobile
					);
					$this->session->set_userdata($sess_data);
					redirect('home_controller');
				}
				else
				{
					$data['msg']="Login failed";
				}
			}
		}
		$this->load->view('login_view',$data);

	}
	public function read_users()
	{
		$details=array();
		$res=$this->test_model->get_users();
		$details['resultset']=$res;
		$this->load->view('display_view',$details);
	}
	public function add_product()
	{
		$resp_data['msg']="";
		$this->load->view('add_view',$resp_data);
	}
	public function add_now()
	{
		$this->form_validation->set_rules('pro_name','ProductName','required|alpha_numeric_spaces',array('required'=>'Product Name is required','alpha_numeric_spaces'=>'Invalid product name'));
		$this->form_validation->set_rules('pro_brand','ProductBrand','alpha_numeric',array('alpha_numeric'=>'Invalid brand name'));
		$this->form_validation->set_rules('pro_mrp','ProductMRP','required|numeric',array('required'=>'MRP is required','numeric'=>'Invalid product MRP'));
		$this->form_validation->set_rules('pro_sp','ProductSP','required|numeric',array('required'=>'SP is required','numeric'=>'Invalid product SP'));
		$this->form_validation->set_rules('pro_qty','ProductQuantity','required|numeric',array('required'=>'Quantity is required','numeric'=>'Invalid quantity'));
		$this->form_validation->set_rules('pro_desc','ProductDescription','required',array('required'=>'Description is required'));
		$this->form_validation->set_error_delimiters('<span class="err">','</span>');
		if($this->form_validation->run())
		{
			extract($_POST);
			if(isset($add))
			{
					$this->load->library('upload');
					$config['allowed_types']="jpg|png|gif|jpeg";
					$config['upload_path']='uploads/';
					$this->upload->initialize($config);
					$status=$this->upload->do_upload('pro_img');
					$upload_data=$this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
					$file_name=$upload_data['file_name'];
					if($status)
					{
						$product_data=array(
						'product_name'=>$pro_name,
						'product_brand'=>$pro_brand,
						'product_mrp'=>$pro_mrp,
						'product_sp'=>$pro_sp,
						'product_qty'=>$pro_qty,
						'product_img'=>$file_name,
						'product_desc'=>$pro_desc
						);
					$resp=$this->user_model->product_add($product_data);
					$resp_data['msg']="";
					if($resp==1)
						$resp_data['msg']="Product already exists";
					if($resp==2)
						$resp_data['msg']="Product added succesfully";
					if($resp==3)
						$resp_data['msg']="Product adding failed";
					$this->load->view('add_view',$resp_data);
					}
					else {
						echo $this->upload->display_errors();
					}

			}
			else
				echo "Invalid request";
		}
		else
			{
			$resp_data['msg']="";
			$this->load->view('add_view',$resp_data);
			}
	}
	public function delete_user()
	{
		$uid=$this->uri->segment(3);
		$res=$this->user_model->user_delete($uid);
		if($res)
			redirect('user_controller/read_users');
	}
	public function get_user_info()
	{
		$uid=$this->uri->segment(3);
		$res=$this->user_model->get_db_user_info($uid);
		$data['resultset']=$res;
		$this->load->view('update_view',$data);
	}
	public function read_update_info()
	{
		$uid=$this->uri->segment(3);
		extract($_POST);
		$update_data=array(
			'name'=>$name,
			'email'=>$email,
			'mobile'=>$mobile
			);
		$resp=$this->user_model->update_user_data($update_data,$uid);
		if($resp)
			redirect('user_controller/read_users');
	}
	public function logout()
  {
    $this->load->library('session');
    session_destroy();
		echo "You are successfully logged out";
		$this->output->set_header('refresh:5;url=http://localhost/newfk/index.php/user_controller/login_user');
  }
}

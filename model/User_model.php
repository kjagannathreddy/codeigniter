<?php
class User_model extends CI_model
{
	public function user_register($pdata)
	{
		//manual loading
		//$this->load->database();
		$this->db->select('email');
		$this->db->from('users_tbl');
		$this->db->where('email',$pdata['email']);
		$res=$this->db->get();
		$count=$res->num_rows();
		if($count>0)
		{
		return 3;
		}
		else
		{
		$resp=$this->db->insert('users_tbl',$pdata);
		if($resp)
		return 1;
		else
		return 2;
		}
	}
	public function user_login($pdata)
	{
		//$this->db->select('*');
		//$this->db->from('users_tbl');
		$this->db->where($pdata);
		$res=$this->db->get('users_tbl');
		return $res;
	}
	public function product_add($pro_data)
	{
		$this->db->select('product_name');
		$this->db->from('products_tbl');
		$this->db->where('product_name',$pro_data['product_name']);
		$res=$this->db->get();
		$count=$res->num_rows();
		if($count>0)
		{
			return 1;
		}
		else
		{
			$resp=$this->db->insert('products_tbl',$pro_data);
			if($resp)
				return 2;
			else
				return 3;
		}
	}
	public function get_products()
	{
		$this->db->select('*');
		$this->db->from('products_tbl');
		$res=$this->db->get();
		return $res;
	}
	public function user_delete($uid)
	{
		$this->db->where('user_id',$uid);
		$resp=$this->db->delete('users_tbl');
		if($resp)
			return true;
		else
			return false;

	}
	public function get_db_user_info($uid)
	{
		//select existing informatin
		$this->db->select('name,email,mobile');
		$this->db->from('users_tbl');
		$this->db->where('user_id',$uid);
		$res=$this->db->get();
		return $res;
	}
	public function update_user_data($udata,$uid)
	{
		$this->db->where('user_id',$uid);
		$resp=$this->db->update('users_tbl',$udata);
		if($resp)
			return true;
		else
			return false;
	}
}
?>

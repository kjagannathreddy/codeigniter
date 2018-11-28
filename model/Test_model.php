<?php
class Test_model extends CI_model
{
	public function f1()
	{
		echo "Welcome to Model";
	}
	public function f5()
	{
		$sql_qry="insert into users_tbl(name,mobile) values('xyz','8946498799')";
		$resp=$this->db->query($sql_qry);
		if($resp)
		{
			echo "inserted"."<br/>";
			echo $this->db->insert_id()."<br/>";
			echo $this->db->affected_rows()."<br/>";
		}
			
		else
			echo "not interested";
	}
	public function get_users()
	{
		//$this->db->select('*');
		//$this->db->from('users_tbl');
		//$this->db->where('user_id',1);
		$result_set=$this->db->get('users_tbl');
		return $result_set;
	}
}
?>
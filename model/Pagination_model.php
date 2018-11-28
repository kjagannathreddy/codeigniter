<?php
class Pagination_model extends CI_model
{
	public function get_total_recs()
	{
		$count=$this->db->count_all('users_tbl');
		return $count;
	}
	public function get_limit_users($nr,$si)
	{
		$this->db->limit($nr,$si);
		$res=$this->db->get('users_tbl');
		return $res;
	}
}
?>
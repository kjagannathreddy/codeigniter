<?php
class Search_model extends CI_model
{
  public function get_search($pstr)
  {
    $this->db->select('*');
    $this->db->from('users_tbl');
    $this->db->like('name',$pstr,'after');
    $res=$this->db->get();
    return $res;
  }
}
 ?>

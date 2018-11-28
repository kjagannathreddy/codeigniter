<?php
class Country extends CI_model
{
  public function get()
  {
    $this->db->select('u.name,u.email,u.mobile,c.country_name');
    $this->db->from('users_tbl u');
    $this->db->where('u.country_id',1);
    $this->db->join('country_tbl c','u.country_id=c.country_id','inner');
    $res=$this->db->get();
    foreach($res->result() as $row)
    {
      echo $row->name."<br/>";
      echo $row->email."<br/>";
      echo $row->mobile."<br/>";
      echo $row->country_name."<br/>";
    }
  }
}
 ?>

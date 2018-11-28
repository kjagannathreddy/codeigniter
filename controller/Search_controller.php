<?php
class Search_controller extends CI_controller
{
  public function search()
  {
    extract($_POST);
    if(isset($search))
    {
      $this->load->model('search_model');
      $data['resultset']=$this->search_model->get_search($searchstr);
    }
    else {
      $data['resultset']="";
    }
    $this->load->view('search_view',$data);
  }
}
 ?>

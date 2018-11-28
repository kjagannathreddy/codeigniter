<?php
class Template extends CI_controller
{
  public function register()
  {
    $color=$this->uri->segment(3);
    $data['body']='my_register_view';
    $data['title']='Register';
    if(empty($color))
    $this->load->view('template',$data);
    if($color=='green')
    $this->load->view('template_green',$data);
  }
}
 ?>

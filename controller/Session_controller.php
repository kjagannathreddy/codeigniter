<?php
class Session_controller extends CI_Controller
{
  public function start_session()
  {
    $this->load->library('session');
    $sess_data=array(
      'name'=>'jagan',
      'user_id'=>7,
      'email'=>'jaganci@gmail.com'
    );
    $this->session->set_userdata($sess_data);
    //redirect('session_controller/load_session');
  }
  public function load_session()
  {
    $this->load->library('session');
    echo "Name is ".$this->session->userdata('name');
    echo "User ID is ".$this->session->userdata('user_id');
    echo "Email is ".$this->session->userdata('email');
  }
  public function delete_session()
  {
    $this->load->library('session');
    session_destroy();
  }
}
 ?>

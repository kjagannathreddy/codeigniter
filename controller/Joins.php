<?php
class Joins extends CI_controller
{
  public function country()
  {
    $this->load->model('country');
    $this->country->get();
  }
}
 ?>

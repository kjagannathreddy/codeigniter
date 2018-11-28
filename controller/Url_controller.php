<?php
class Url_controller extends CI_controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('string');
  }
  public function index()
  {
    echo site_url()."<br/>";
    echo current_url()."<br/>";
    echo uri_string();
  }
  public function string_helper()
  {
    echo random_string('alpha',32)."<br/>";
    echo random_string('alnum',12)."<br/>";
    echo random_string('numeric',12)."<br/>";
    echo random_string('nozero',12);
  }
  public function repeater()
  {
    echo repeater('hello dude<br/>',7);
  }
  public function slashes()
  {
    $url="http:///localhost//newfk///index.php/c1//test//";
    echo reduce_double_slashes($url);
  }
  public function remove()
  {
    $url="http:///localhost//newfk///index.php/c1//test//";
    $url=str_replace("//","/",$url);
    echo $url;
  }

}
?>

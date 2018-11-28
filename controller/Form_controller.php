<?php
class Form_controller extends CI_controller
{
  public function form()
  {
    $attr=array('method'=>'get','enctype'=>'multipart/form-data');
    echo form_open('home_controller',$attr);
    $inp1=array('name'=>'name','value'=>'jagan','class'=>'btn');
    echo form_input($inp1);
    echo form_close();
  }
}
 ?>

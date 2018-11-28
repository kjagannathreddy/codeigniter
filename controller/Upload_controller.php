<?php
class Upload_controller extends CI_controller
{
  public function upload_view()
  {
    $this->load->view('upload_view');
  }
  public function upload_file()
  {
    extract($_POST);
    $this->load->library('upload');
    $config['upload_path']="uploads/";
    $config['allowed_types']="jpg|png";
    $this->upload->initialize($config);
    $status=$this->upload->do_upload('image');
    if($status)
    {
      $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
      $file_name = $upload_data['file_name'];
      echo $file_name."<br/> success";
    }
    else {
      echo "failed";
    }
  }
}
 ?>

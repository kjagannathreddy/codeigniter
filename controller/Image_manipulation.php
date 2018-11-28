<?php
class Image_manipulation extends CI_controller
{
  public function text_watermark()
  {
    $config['source_image']="uploads/jagannath.jpg";
    $config['wm_type']='text';
    $config['wm_text']='Jagannath';
    $config['wm_font_size']=22;
    $config['wm_font_color']="800080";
    $config['wm_vrt_alignment']='bottom';
    $config['wm_hor_alignment']='right';
    $config['wm_font_path']='system/fonts/texb.ttf';
    $this->load->library('image_lib');
    $this->image_lib->initialize($config);
    $res=$this->image_lib->watermark();
    if($res)
    echo "success";
    else
    echo "failed";
  }
  public function image_watermark()
  {
    $config['source_image']="uploads/jagannath.jpg";
    $config['wm_type']='overlay';
    $config['wm_vrt_alignment']='bottom';
    $config['wm_hor_alignment']='right';
    $config['wm_overlay_path']='uploads/logo.png';
    $this->load->library('image_lib');
    $this->image_lib->initialize($config);
    $res=$this->image_lib->watermark();
    if($res)
    echo "success";
    else
    echo "failed";
  }
  public function image_resize()
  {
    $config['source_image']="uploads/jagannath.jpg";
    $config['width']=500;
    $config['height']=500;
    $config['create_thumb']=true;
    $config['maintain_ratio'] = TRUE;
    $this->load->library('image_lib');
    $this->image_lib->initialize($config);
    $res=$this->image_lib->resize();
    if($res)
    echo "success";
    else
    echo "failed";
  }
  public function image_rotate()
  {
    $config['source_image']="uploads/jagannath.jpg";
    $config['image_library']='gd2';
    $config['rotation_angle']='vrt';
    $this->load->library('image_lib');
    $this->image_lib->initialize($config);
    $res=$this->image_lib->rotate();
    if($res)
    echo "success";
    else
    echo "failed";
  }
  public function image_crop()
  {
    $config['source_image']="uploads/jagannath.jpg";
    $config['image_library']='gd2';
    $config['x_axis']='center';
    $config['y_axis']='center';
    $config['width']=500;
    $config['height']=500;
    $this->load->library('image_lib');
    $this->image_lib->initialize($config);
    $res=$this->image_lib->crop();
    if($res)
    echo "success";
    else
    echo "failed";
  }
}
 ?>

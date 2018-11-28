<?php
class Calendar_controller extends CI_controller
{
  public function calendar()
  {
    $config['show_next_prev']=true;
    $config['next_prev_url']=base_url()."calendar_controller/calendar/";
    $config['month_type']='short';
    $config['day_type']='short';
    $config['start_day']='monday';
    $this->load->library('calendar',$config);
    $year=$this->uri->segment(3);
    $month=$this->uri->segment(4);
    if(empty($year))
    $year=date('Y');
    if(empty($month))
    $month=date('m');
    $date=array();
        for($i=1;$i<=31;$i++)
        {
          $date[$i]=$i;
        }
    echo $this->calendar->generate($year,$month,$date);
  }
}
 ?>

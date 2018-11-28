<?php
$row=$resultset->row();
$uid=$this->uri->segment(3);
?>
<form action="<?php echo base_url();?>index.php/user_controller/read_update_info/<?php echo $uid; ?>" method="post">
	Name: <input type="text" name="name" value="<?php echo $row->name; ?>"/>
	Email: <input type="text" name="email" value="<?php echo $row->email; ?>"/>
	Mobile: <input type="text" name="mobile" value="<?php echo $row->mobile; ?>"/>
	<input type="submit" name="update" value="Update"/>
</form>
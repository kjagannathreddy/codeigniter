<style>
.err
{
color:red;
}
</style>
<a href="<?php echo base_url();?>template/register/green" >Green</a>
<?php //echo validation_errors();?>
<form method="post" action="<?php echo base_url();?>index.php/user_controller/register_now">
Name : <input type="text" name="name" value="<?php echo set_value('name');?>">
<?php echo form_error('name');?>
<br/><br/>
Email : <input type="text" name="email">
<?php echo form_error('email');?>

<br/><br/>
Mobile : <input type="text" name="mobile"><br/><br/>
Password : <input type="password" name="password"><br/><br/>
<input type="submit" name="register" value="Register"><br/><br/>
</form>

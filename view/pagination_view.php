<table border="1">
	<tr><th>Name</th><th>Email</th><th>Action</th></tr>
	<?php
	$count=$resultset->num_rows();
	if($count>0)
	{
		foreach($resultset->result() as $row)
		{
			?>
			<tr>
				<td><?php echo $row->name; ?></td>
				<td><?php echo $row->email; ?></td>
				<td><a href="<?php echo base_url();?>index.php/user_controller/delete_user/<?php echo $row->user_id;?>" onclick="return window.confirm('Are you sure to delete?')">Delete</a> <a href="<?php echo base_url();?>index.php/user_controller/get_user_info/<?php echo $row->user_id;?>">Update</a></td>
			</tr>
			<?php
		}
	}
	else
	{
		echo "<tr><td colspan='3'>No records found</td></tr>";
	}

?>
</table>
<?php
echo $plinks;
?>
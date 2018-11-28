<form action="<?php echo base_url();?>index.php/search_controller/search/" method="post">
	<input type="text" name="searchstr" placeholder="Search for..."/>
	<input type="submit" name="search" value="Search"/>
</form>
<?php
if(!empty($resultset))
{
	$count=$resultset->num_rows();
	if($count>0)
	{
		foreach ($resultset->result() as $row) {
			echo $row->name."<br/>";
		}
	}
	else {
		echo "No records found...";
	}
}
?>

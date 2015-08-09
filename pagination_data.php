<?php

include('config.php');

$per_page = 9; 

if($_GET)
{
$page=$_GET['page'];
}



//get table contents
$start = ($page-1)*$per_page;
$sql = "select * from WebsiteUsers order by userID limit $start,$per_page";
$rsd = mysql_query($sql);
?>


	<table width="800px">
		
		<?php
		//Print the contents
		
		while($row = mysql_fetch_array($rsd))
		{
			
			$id=$row['userID'];
			$msg=$row['fullName'];
			$uname=$row['userName'];
			$email=$row['email'];
			$pass=$row['pass'];


		?>
		<tr>
			<td style="color:#B2b2b2; padding-left:4px" width="30px"><?php echo $id; ?></td>
			<td><?php echo $msg; ?></td>
			<td><?php echo $uname; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $pass; ?></td>
		</tr>
		
		<?php
		} //while
		?>
	</table>


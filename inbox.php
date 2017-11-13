
<br><br>
     <p style="text-align:center;color:red;font-size:20px">See Message Here</p><br><br>
    <div>
	  <?php
	session_start();
	/*	$mysql_host = "mysql6.000webhost.com";
		$mysql_database = "a5371345_college";
		$mysql_user = "a5371345_ved";
		$mysql_password = "vparya12";
	mysql_connect($mysql_host,$mysql_user,$mysql_password) or die(mysql_error());
	mysql_select_db($mysql_database) or die(mysql_error());*/
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("college") or die(mysql_error());
	$email= $_SESSION['name'];
	$query = "SELECT * FROM inbox WHERE Email='$email'";
	$result=mysql_query($query);//show numbers of column Name
	
	/*
	{
		echo $arr['Date']."<br>";
	}*/
	?> 
	</div>
	<span> 
	<table width="100%">
		<tr >
			<td>ComplainID</td>
			<td>Data</td>
			<td>Date</td>
		</tr>
	</table>
	<table width="100%" border="1px">
		<?php
			$DATA = mysql_num_rows($result);//Show number of row in the table for specific query;
			
			while($row = mysql_fetch_assoc($result)){
				$ID[] = $row['ComplainID'];
				$Data[] =$row['Data'];
				$Date[] = $row['Date'];
			}
			
			for($i=0;$i<$DATA;$i++)
			{	echo "<tr>";
				echo "<td>".$ID[$i]."</td><td>".$Data[$i]."</td><td>".$Date[$i]."</td>";
				echo "</tr>";
			}
		?>
	</table>		
	</span>
	
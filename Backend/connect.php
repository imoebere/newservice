<?php
$sql = mysql_connect('localhost','root','')
	or die('Unable to connect to server'.mysql_error());
	//if($sql)
	//{
		//echo "successfully connected to database <br/>";
	//}
	
	$select_database = mysql_select_db('track_db',$sql);
?>
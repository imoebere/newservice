<?php
include('connect.php');

	$create_login_table = mysql_query('create table if not exists admin_table(admin_id int not null primary key auto_increment,
                                  username varchar(70) not null,
                                  password varchar(70) not null,
                                  datess datetime)')or die('could not create login table'.mysql_error());
	
	
	if($create_login_table)
  {
	echo 'Login table successfully created <br/>';
	}
	$abba = mysql_query("select * from admin_table where
	                    username = 'admin' and password ='admin'")or die('could not select from login table'.mysql_error());
	$checker = mysql_num_rows($abba);
	if($checker<1)
	{
		$admin_insert = mysql_query("insert into admin_table values('','admin','admin',now())")or die ('could not insert into admin                         table'.mysql_error());
	}
	
		$contact_table = mysql_query("create table if not exists contact_table(con_id  int not null primary key auto_increment,
	                           Name varchar(30) not null,
							   email varchar(200) not null,
							   Address varchar(20) not null,
							   phone varchar(20) not null,
							   message varchar(200) not null,
							   datess datetime)")or die("could not create table".mysql_error());
		if($contact_table)
		{
			echo 'contact table successfuly created <br/>';	
		}
$track_table = mysql_query("create table if not exists track_table(id int not null primary key auto_increment,
	                           pin varchar(25) not null,
							   datess datetime)")or die("could not create trackingId table".mysql_error());
		if($track_table)
		{
			echo 'track table successfuly created <br/>';	
		}
$used_Id = mysql_query("create table if not exists used_Id(use_id int not null primary key auto_increment,
	                           pin varchar(25) not null,
							   datess datetime)")or die("could not create used pin table".mysql_error());
		if($used_Id)
		{
			echo 'used Id table successfuly created <br/>';	
		}
		
		
		
?>
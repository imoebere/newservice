<?php
 mysql_connect('localhost','root','')
	or die('Unable to connect to server'.mysql_error());
	$create_database = mysql_query('CREATE DATABASE IF NOT EXISTS track_db') or die('Unable to create database'.mysql_error()); 
?>
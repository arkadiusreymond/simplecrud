<?php
	/*
		author: Belal Khan 
		website: https://www.simplifiedcoding.net
		
		My Database is androiddb 
		you need to change the database name rest the things are default if you are using wamp or xampp server
		You may need to change the host user name or password if you have changed the defaults in your server
	*/
	
	//Defining Constants
	define('HOST','mysql.idhostinger.com');
	define('USER','u343812703_root');
	define('PASS','qwerty');
	define('DB','u343812703_teman');
	//Connecting to Database
	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
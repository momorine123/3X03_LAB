<?php
function checkpassword($password) {
	$array = explode("\n", file_get_contents('password.txt') );
	if ( in_array($password, $array) ) 
	{
		echo "Bad Password";
	}
	else
	{
		echo "Good Password";
	}
}
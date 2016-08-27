<?php

function checkEmail($str)
{
	return preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/", $str);
}


if(!checkEmail($_POST['email']))
	{
		$err[]='Your email is not valid!';
	}


?>
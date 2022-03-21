<?php
function spamcheck($mail)
{
	//The FILTER_SANITIZE_EMAIL filter removes all illegal e-mail characters from a string.
	//This filter allows all letters, digits and $-_.+!*'{}|^~[]`#%/?@&=
	$mail=filter_var($mail,FILTER_SANITIZE_EMAIL);
	if(filter_var($mail,FILTER_VALIDATE_EMAIL))
	{
		return true;	
	}
	else
	{
		return false;	
	}
}
?>
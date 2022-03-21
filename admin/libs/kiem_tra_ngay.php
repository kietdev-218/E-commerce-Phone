<?php
function nhuan($x){
	if($x%100==0)
	{
		if($x%400==0)
		return true;
		else
		return false;	
	}
	else if($x%4==0)
	return true;
	else
	return false;
}

function kiem_tra_ngay($x,$y,$z)
{
	if($x =='' ||$y =='' || $z =='')
	{
		return false;
	}
	else
	{
		switch($y)
		{
			case 4:
			case 6:
			case 9:
			case 11:
				if($x>30)
				return false;
				else
				return true;
				
				break;
			case 2:
				if(nhuan($z))
				{
					if($x>29)
					return false;
					else
					return true;	
				}
				else
				{
					if($x>28)
					return false;
					else
					return true;	
				}
				break;
			default: 
				return true;
				break;
				
		}
	}
}

?>
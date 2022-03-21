<?php
session_start();
class M_sess_cook{
	function exist_sess(){
		if(isset($_SESSION['ad_login'])&& $_SESSION['ad_login'] == true)
			return true;
		else
			return false;
	}
	function ten_file(){
		$link=$_SERVER['PHP_SELF'];
		$tach_link = explode('/',$link);
		$link2 = end($tach_link);
		$file = explode('.',$link2);
		return $file[0];
	}
	
	function sess_cook_chuyen_trang(){
		if($this->ten_file()=='login')
		{
			header('location: home_page.php');
		}
	}
	
	function setlogin($data){
		foreach($data as $k=>$val)
		{
			$_SESSION[$k] = $val;
		}
	}
	
	function exist_cook(){
		$this->setlogin($_COOKIE);
		$this->sess_cook_chuyen_trang();
	}
	
	function logout(){
		unset($_SESSION['ad_login']);
		unset($_SESSION['ad_name']);
		if(isset($_COOKIE))
		{
			foreach($_COOKIE as $k => $val)
			{
				setcookie($k,'',time()-1);
			}
		}
		header('location: login.php');
	}
}
?>
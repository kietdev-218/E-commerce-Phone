<?php
session_start();
class M_session_cookie{
	
	function get_link_page(){
	
	$link_self = $_SERVER['PHP_SELF'];
	if(!empty($_SERVER['QUERY_STRING']))
		return $link_self.'?'.$_SERVER['QUERY_STRING'];
	else
		return $link_self;
	}
	
	function exist_sess(){
		if(isset($_SESSION,$_SESSION['login'])&& $_SESSION['login'] == true)
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
		if($this->ten_file()=='login_register' || $this->ten_file()=='forget_pass')
		{
			header('location: .');
		}
	}
	
	function chuyen_trang(){
		
		if($this->ten_file()=='login_register' || $this->ten_file()=='index')
		{
			header('location: .');
		}
		else
		{
			header('location: '.$_SERVER['PHP_SELF'].$_SERVER['QUERY_STRING']);
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

	function logout($tro_ve){
		unset($_SESSION['login']);
		unset($_SESSION['name']);
		if(isset($_COOKIE))
		{
			foreach($_COOKIE as $k => $val)
			{
				setcookie($k,'',time()-1);
			}
		}
		header('location: '.$tro_ve);
	}
	
}
?>
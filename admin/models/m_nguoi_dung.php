<?php
include_once 'database.php';

class M_nguoi_dung extends database{
	public function kiem_tra_dang_nhap(){
		if(isset($_POST["btn_login"]))
		{
			$sql = "select * from nguoi_dung where ten_dang_nhap =? and mat_khau = ? and (ma_loai_nguoi_dung =1 or ma_loai_nguoi_dung = 3)";
			$param = array($_POST["ten_dang_nhap"],md5($_POST["mat_khau"]));
			$this->setQuery($sql);
			$user = $this->loadRow($param);
			if(!empty($user))
			{
				$_SESSION["ad_login"] = true;
				$_SESSION["ad_name"] = $_POST["ten_dang_nhap"];
				if(isset($_POST["remember"]) && $_POST["remember"] =="Có")
				{
					setcookie('ad_login',true, time() +60*20);
					setcookie('ad_name',$user->ten_dang_nhap, time() +60*20);
				}
				
				$time_login = date('Y-m-d');
				$sql_last_login = "UPDATE nguoi_dung set ngay_dang_nhap_cuoi = ? where ten_dang_nhap = ?";
				$param_last_login = array($time_login,$_POST["ten_dang_nhap"]);
				$this->setQuery($sql_last_login);
				$this->execute($param_last_login);
				
				header('location: .');
			}
			else
			{
				setcookie('ad_login_false',1,time()+20*60);
				header('location: login.php');
			}
		}
	}
	
	public function doc_nguoi_dung($name){
		$sql = 'select * from nguoi_dung where ten_dang_nhap = ?';
		$param = array($name);
		$this->setQuery($sql);
		return $this->loadRow($param);
	}
	
	public function doc_loai_nguoi_dung(){
		$sql= "SELECT * FROM loai_nguoi_dung ";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function ten_loai_nguoi_dung($ma_loai_nguoi_dung){
		$sql= "SELECT ten_loai_nguoi_dung FROM loai_nguoi_dung where ma_loai_nguoi_dung = ? ";
		$param = array($ma_loai_nguoi_dung);
		$this->setQuery($sql);
		$arr = $this->loadRow($param);
		return $arr->ten_loai_nguoi_dung;
	}
	
	public function user_da_ton_tai($val,$sql){
		$param = $val;
		$this->setQuery($sql);
		$kq = $this->loadAllRows($param);
		if(count($kq)==0)
		{
			return true;
		}else{
			return false;
		}
	}
	
	public function error_trung_user(){
		if(isset($_POST["btn_dk"]))
		{
		  if(!$this->user_da_ton_tai(array(trim(strtolower($_POST['ten_dang_nhap']))),'select * from nguoi_dung where ten_dang_nhap =?'))
		  {
			  return "<div style=\"color:#F00; margin:10px auto ;padding:10px 0; border:1px solid #F00; text-indent:10px\">Tên đăng nhập này đã tồn tại</div>";
		  }
		  else if(!$this->user_da_ton_tai(array(md5($_POST['mat_khau'])),'select * from nguoi_dung where mat_khau =?'))
		  {
			  return "<div style=\"color:#F00; margin:10px auto ;padding:10px 0; border:1px solid #F00; text-indent:10px\">Mật khẩu này đã tồn tại</div>";
		  }
		  else if(!$this->user_da_ton_tai(array(trim($_POST['email'])),'select * from nguoi_dung where email =?'))
		  {
			  return "<div style=\"color:#F00; margin:10px auto ;padding:10px 0; border:1px solid #F00; text-indent:10px\">Email này đã tồn tại</div>";
		  }
		  else
			  return '';
		}
		else
		{
			return '';
		}
	}
	
	public function error_trung_user_update(){
		if(isset($_POST["btn_cap_nhat"]))
		{
			$nguoi_dung = $this->doc_nguoi_dung($_SESSION['ad_name']);
			$ma_nguoi_dung = $nguoi_dung->ma_nguoi_dung;
		  if(!$this->user_da_ton_tai(array($ma_nguoi_dung,trim(strtolower($_POST['ten_dang_nhap']))),'SELECT * FROM nguoi_dung where ma_nguoi_dung <> ? and ten_dang_nhap = ? '))
		  {
			  return "<div style=\"color:#F00; margin:10px auto ;padding:10px 0; border:1px solid #F00; text-indent:10px\">Tên đăng nhập này đã tồn tại</div>";
		  }
		  else if(!$this->user_da_ton_tai(array($ma_nguoi_dung,trim($_POST['email'])),'SELECT * FROM nguoi_dung where ma_nguoi_dung <> ? and email = ? '))
		  {
			  return "<div style=\"color:#F00; margin:10px auto ;padding:10px 0; border:1px solid #F00; text-indent:10px\">Email này đã tồn tại</div>";
		  }
		  else
			  return '';
		}
		else
		{
			return '';
		}
	}
	
	public function error_trung_mat_khau(){
		if(isset($_POST["btn_change_pass"]))
		{
			$nguoi_dung = $this->doc_nguoi_dung($_SESSION['ad_name']);
			$ma_nguoi_dung = $nguoi_dung->ma_nguoi_dung;
		  if(!$this->user_da_ton_tai(array($ma_nguoi_dung,md5($_POST['mat_khau'])),'SELECT * FROM nguoi_dung where ma_nguoi_dung <> ? and mat_khau = ? '))
		  {
			  return "Mật khẩu này đã tồn tại";
		  }
		  else
			  return '';
		}
		else
		{
			return '';
		}
	}
	
	
	public function test_email($email){
		include_once 'libs/test_mail.php';
		if(spamcheck($email))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function kiem_tra_ngay($ngay_sinh,$thang_sinh,$nam_sinh){
		include_once 'libs/kiem_tra_ngay.php';
		
		if(!kiem_tra_ngay($ngay_sinh,$thang_sinh,$nam_sinh))
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	
	public function xl_dang_ky(){
	
	  if(isset($_POST['btn_dk']))
	  {
		$registry = true;
		if(strlen(trim($_POST['ho_ten'])) <6 || strlen(trim($_POST['ho_ten'])) >32)
		{
			$registry =false;
		}
		if(strlen(trim($_POST['ten_dang_nhap'])) <6 || strlen(trim($_POST['ten_dang_nhap'])) >32)
		{
			$registry =false;
		}
		if(strlen($_POST['mat_khau']) <5 || strlen(trim($_POST['mat_khau'])) >32)
		{
			$registry =false;
		}
		if(strlen($_POST['re_pass_dk']) =='' ||$_POST['re_pass_dk'] != $_POST['mat_khau'])
		{
			$registry =false;
		}
		
		if(!$this->test_email($_POST['email']))
		{
			$registry =false;
		}
		if(!$this->kiem_tra_ngay($_POST['ngay_sinh'],$_POST['thang_sinh'],$_POST['nam_sinh']))
		{
			$registry =false;
		}
		if(!$this->test_error_gender())
		{
			$registry= false;
		}
		
		if($this->error_trung_user() !='')
		{
			$registry = false;
		}
		
		if($registry)
		{
			$birthdate = $_POST['nam_sinh'].'-'.$_POST['thang_sinh'].'-'.$_POST['ngay_sinh'];
			$sql_them_user = "insert into nguoi_dung values(NULL,?,?,?,?,?,?,?,0,?,?)";
			$param_them_user = array(2,trim($_POST['ho_ten']),trim(strtolower($_POST['ten_dang_nhap'])),md5($_POST['mat_khau']),trim($_POST['email']),date('Y-m-d'),date('Y-m-d'),$birthdate,$_POST['gender']);
			$this->setQuery($sql_them_user);
			$this->execute($param_them_user);
			
			$_SESSION['login'] =true;
			$_SESSION['name'] = trim(strtolower($_POST['ten_dang_nhap']));
			$_SESSION['dang_ky_xong']= true;
			if($_POST['remember'] == 'Có')
			{
				setcookie('login',true,time() + 60*20);
				setcookie('name',trim(strtolower($_POST['ten_dang_nhap'])),time() + 60*20);
			}
			header('location: welcome.php');
		}
	  }
	}
	
	public function test_error($val,$number_1,$number_2,$post){
		if(isset($_POST[$post]))
		{
			if(strlen(trim($val)) >= $number_1 && strlen(trim($val)) <=$number_2)
				return true;
			else
				return false;
		}
		else 
			return true;
	}
	
	public function check_re_pass(){
		if($_POST['re_pass_dk'] == '' || $_POST['re_pass_dk'] != $_POST['mat_khau'])
			return false;
		else
			return true;
	}
	
	public function date_selected($i,$date){
		if($i==$date)
			return 'selected';
		else
			return '';
	}
	
	public function lay_ngay_sinh($date)
	{
		$arr = explode('-',$date);
		return $arr[2];
	}
	
	public function lay_thang_sinh($date)
	{
		$arr = explode('-',$date);
		return $arr[1];
	}
	
	public function lay_nam_sinh($date)
	{
		$arr = explode('-',$date);
		return $arr[0];
	}
	
	public function echo_gt($val){
		if($_POST['gender'] == $val && $_POST['gender'] !='')
			return 'checked';
		else
			return '';

	}
	
	public function echo_gt_cap_nhat($val,$x){
		if($x == $val && $x !='')
			return 'checked';
		else
			return '';

	}
	
	public function test_error_gender(){
		if(!isset($_POST['gender']))
			return false;
		else
			return true;
	}
	
	public function remove_session_login_false(){
		if(isset($_COOKIE['login_false']))
		{
			echo '<div style="color:#F00; margin:10px auto ;padding:10px 0; border:1px solid #F00; text-indent:10px"> Lỗi : tên đăng nhập hoặc mật khẩu không tồn tại . </div>';
			setcookie('login_false',NULL,time());
		}

	}
	
	public function kiem_tra_dang_nhap_cap_nhat(){
		if(!isset($_SESSION['login']) || $_SESSION['login'] != true)
		{
			header('location: .');
		}
	}
	
	public function cap_nhat_nguoi_dung(){
		if(isset($_POST['btn_cap_nhat']))
		{
		  $nguoi_dung = $this->doc_nguoi_dung($_SESSION['ad_name']);
		  $ma_nguoi_dung = $nguoi_dung->ma_nguoi_dung;
		  $update = true;
		  
		  if($this->error_trung_user_update() != '')
		  {
			  $update = false;
		  }
		  if(strlen(trim($_POST['ho_ten'])) <6 || strlen(trim($_POST['ho_ten'])) >32)
		  {
			  $update =false;
		  }
		  if(strlen(trim($_POST['ten_dang_nhap'])) <6 || strlen(trim($_POST['ten_dang_nhap'])) >32)
		  {
			  $update =false;
		  }
		  
		  if(!$this->test_email($_POST['email']))
		  {
			  $update =false;
		  }
		  if(!$this->kiem_tra_ngay($_POST['ngay_sinh'],$_POST['thang_sinh'],$_POST['nam_sinh']))
		  {
			  $update =false;
		  }
		  
		  
		  if($update)
		  {
			  $birthdate = $_POST['nam_sinh'].'-'.$_POST['thang_sinh'].'-'.$_POST['ngay_sinh'];
			  $sql = 'UPDATE nguoi_dung set ho_ten=?,ten_dang_nhap=?,email=?,birthdate=?,gioi_tinh=? where ma_nguoi_dung =?';
			  $param = array($_POST['ho_ten'],$_POST['ten_dang_nhap'],$_POST['email'],$birthdate,$_POST['gender'],$ma_nguoi_dung);
			  $this->setQuery($sql);
			  $this->execute($param);
			  
			  $_SESSION['ad_name'] = trim(strtolower($_POST['ten_dang_nhap']));
			  
			  setcookie('sua_user','Cập nhật thông tin thành công',time() + 60*20);

			  header('location: cap_nhat_user.php');
		  }
		}
	}
	public function kiem_tra_mat_khau_hien_tai(){
		if(isset($_POST['btn_change_pass']))
		{
			$mat_khau_hien_tai = $this->doc_nguoi_dung($_SESSION['ad_name'])->mat_khau;
			if($mat_khau_hien_tai != md5($_POST['mat_khau_hien_tai']))
			{
				return false;
			}
			else
			{
				return true;
			}
		}
		else
			return true;
	}
	
	public function doi_mat_khau(){
		if(isset($_POST['btn_change_pass']))
		{
			$change = true;
			
			if(!$this->kiem_tra_mat_khau_hien_tai())
			{
				$change = false;
			}
			if($this->error_trung_mat_khau() != '')
			{
				$change = false;
			}
			if(strlen($_POST['mat_khau']) <5 || strlen(trim($_POST['mat_khau'])) >32)
			{
				$change =false;
			}
			if(strlen($_POST['re_pass_dk']) =='' ||$_POST['re_pass_dk'] != $_POST['mat_khau'])
			{
				$change =false;
			}
			
			if($change)
			{
				$sql= "UPDATE nguoi_dung set mat_khau = ? where ten_dang_nhap = ?";
				$param = array(md5($_POST['mat_khau']),$_SESSION['ad_name']);
				$this->setQuery($sql);
				$this->execute($param);
				setcookie('doi_mat_khau_xong','Bạn đã thay đổi mật khẩu thành công',time() +20*60);
				header('location: '.$_SERVER['PHP_SELF']);
			}
		}
	}
	
	public function doi_loai_user($ma_loai_nguoi_dung,$ma_nguoi_dung){
		$sql = "UPDATE nguoi_dung SET ma_loai_nguoi_dung = ? WHERE ma_nguoi_dung = ?";
		$this->setQuery($sql);
		$param = array($ma_loai_nguoi_dung,$ma_nguoi_dung);
		return $this->execute($param);
	}
}
?>

<?php
include_once 'database.php';

class M_nguoi_dung extends database{
	
	var $loi_xac_nhan_email = NULL;
	
	public function kiem_tra_so_nguyen($x){
		if((int)$x == $x)
			return true;
		else
			return false;
	}
	
	public function bao_loi_dang_nhap(){
		if(isset($_GET,$_GET['login']) && $_GET['login'] ==0)
		{
			return true;
		}
		else
			return false;
	}
	
	public function xoa_cookie($val){
		setcookie($val,NULL,time()-1);
	}
	
	public function nguoi_dung($ma_nguoi_dung){
		$sql = 'select * from nguoi_dung where ma_nguoi_dung = ?';
		$param = array($ma_nguoi_dung);
		$this->setQuery($sql);
		return $this->loadRow($param);
	}
	
	public function doc_nguoi_dung($name){
		$sql = 'select * from nguoi_dung where ten_dang_nhap = ?';
		$param = array($name);
		$this->setQuery($sql);
		return $this->loadRow($param);
	}
	
	
	public function kiem_tra_dang_nhap(){
		
		if(isset($_POST["btn_dn"]))
		{
			if(isset($_SESSION['login']) && isset($_SESSION['name']))
			{
				header('loction: .');
				die();
			}
			
			$login = false;
			$ten_dang_nhap = trim(strtolower($_POST["ten_dang_nhap"]));
			$mat_khau = md5($_POST["mat_khau"]);
			
			$remember = (isset($_POST["remember"]))?$_POST["remember"]:'';
			
			$sql = "SELECT * FROM nguoi_dung where mat_khau = ? and (ten_dang_nhap = ? or email = ?)";
			$param = array($mat_khau,$ten_dang_nhap,$ten_dang_nhap);
			$this->setQuery($sql);
			$kq = $this->loadRow($param);
			if(!empty($kq))
			{
				$login = true;
			}
			
			if($login)
			{
				$_SESSION['login'] = true;
				$_SESSION['name'] = $kq->ten_dang_nhap;
				if(isset($_POST["remember"]) && $_POST["remember"] =="Có")
				{
					setcookie('login',true, time() +60*20);
					setcookie('name',$kq->ten_dang_nhap, time() +60*20);
				}
				
				$time_login = date('Y-m-d');
				$sql_last_login = "UPDATE nguoi_dung set ngay_dang_nhap_cuoi = ? where ten_dang_nhap = ?";
				$param_last_login = array($time_login,$ten_dang_nhap);
				$this->setQuery($sql_last_login);
				$this->execute($param_last_login);
				header('location: .');
				
			}
			else
			{
				//setcookie('login_false','no',time()+20*60);
				$_SESSION['login_false'] = 1;
			}
		}
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
			$nguoi_dung = $this->doc_nguoi_dung($_SESSION['name']);
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
			$nguoi_dung = $this->doc_nguoi_dung($_SESSION['name']);
			$ma_nguoi_dung = $nguoi_dung->ma_nguoi_dung;
		  if(!$this->user_da_ton_tai(array($ma_nguoi_dung,md5($_POST['mat_khau'])),'SELECT * FROM nguoi_dung where ma_nguoi_dung <> ? and mat_khau = ? '))
		  {
			  return "<div style=\"color:#F00; margin:10px auto ;padding:10px 0; border:1px solid #F00; text-indent:10px\">Mật khẩu này đã tồn tại</div>";
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
		if(isset($_SESSION['login']) && isset($_SESSION['name']))
		{
			header('loction: .');
			die();
		}
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
			
			
			require_once("smtpgmail/class.phpmailer.php");
			$mail=new PHPMailer();
			$mail->IsSMTP(); // Chứng thực SMTP
			$mail->SMTPAuth=TRUE;
			$mail->Host="smtp.gmail.com";
			$mail->Port=465;
			$mail->SMTPSecure="ssl";
			/* Server google*/
			$mail->Username="luongthehai2001@gmail.com"; // Nhập mail 
			$mail->Password="figoluongthehai"; // Mật khẩu
			/* Server google*/
			$mail->CharSet="utf-8";

			$noidung ="<br>Xin chào: " .''.strtolower($_POST['ten_dang_nhap']);
			$noidung .="<br><br> Cảm ơn bạn đã đăng ký thành viên tại website cửa hàng di động Thanh Thanh";
			
			$mail->SetFrom('saohoa1007@gmail.com','Di Động Thanh Thanh');
			$mail->Subject='Di Động Thanh Thanh chào mừng bạn';
			$mail->MsgHTML($noidung);
			$mail->AddAddress($_POST['email'],"t"); // Mail người nhận

			header('location: .');
			$mail->Send();	
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
			setcookie('login_false',NULL,time()-1);
		}
		
		else if(isset($_SESSION['login_false']))
		{
			echo '<div style="color:#F00; margin:10px auto ;padding:10px 0; border:1px solid #F00; text-indent:10px"> Lỗi : tên đăng nhập hoặc mật khẩu không tồn tại . </div>';
			unset($_SESSION['login_false']);
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
			if(isset($_SESSION['login']) && isset($_SESSION['name']))
			{
			  $nguoi_dung = $this->doc_nguoi_dung($_SESSION['name']);
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
				  
				  $_SESSION['name'] = trim(strtolower($_POST['ten_dang_nhap']));
				  
				  setcookie('cap_nhat_xong',true,time() + 60*20);
				  if($_POST['remember'] == 'Có')
				  {
					  setcookie('login',true,time() + 60*20);
					  setcookie('name',trim(strtolower($_POST['ten_dang_nhap'])),time() + 60*20);
				  }
				  header('location: cap_nhat_nguoi_dung.php');
			  }
			}
		}
	}
	public function kiem_tra_mat_khau_hien_tai(){
		if(isset($_POST['btn_change_pass']))
		{
			$mat_khau_hien_tai = $this->doc_nguoi_dung($_SESSION['name'])->mat_khau;
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
			if(isset($_SESSION['login']) && isset($_SESSION['name']))
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
					$param = array(md5($_POST['mat_khau']),$_SESSION['name']);
					$this->setQuery($sql);
					$this->execute($param);
					setcookie('doi_mat_khau_xong',true,time() +20*60);
					header('location: cap_nhat_nguoi_dung.php');
				}
			}
		}
	}
	
	
	public function gui_lai_mat_khau(){
		if(isset($_POST['btn_xac_nhan']))
		{
			$sql = "select email from nguoi_dung where email = ?";
			$param = array($_POST['email']);
			$this->setQuery($sql);
			$kq = $this->loadRow($param);
			
			if(empty($kq))
			{
				$this->loi_xac_nhan_email = '<p style="color:#F00; text-indent:12px; padding:10px 0; border:1px #FF0000 solid">email này không tồn tại</p>';
			}
			else
			{
				include_once 'm_xl_chung.php';
				$m_xl = new M_xl_chung();
				$new_pass = $m_xl->rand_string();
				
				$sql_new = "UPDATE nguoi_dung set mat_khau = ? where email = ?";
				$param_new = array(md5($new_pass),$_POST['email']);
				$this->setQuery($sql_new);
				$this->execute($param_new);

				require_once("smtpgmail/class.phpmailer.php");
				$mail=new PHPMailer();
				$mail->IsSMTP(); // Chứng thực SMTP
				$mail->SMTPAuth=TRUE;
				$mail->Host="smtp.gmail.com";
				$mail->Port=465;
				$mail->SMTPSecure="ssl";
				/* Server google*/
				$mail->Username="luongthehai2001@gmail.com"; // Nhập mail 
				$mail->Password="figoluongthehai"; // Mật khẩu
				/* Server google*/
				$mail->CharSet="utf-8";
	
				$noidung ="<br>Mật khẩu mới của bạn là: " .''.$new_pass;
				$noidung .="<br> Hãy sửa lại mật khẩu để bảo đảm an toàn cho tài khoản của bạn";
				$mail->SetFrom('luongthehai2001@gmail.com','Tin Học Thanh Thanh');
				$mail->Subject='Di động Thanh Thanh - cập nhật lại mật khẩu';
				$mail->MsgHTML($noidung);
				$mail->AddAddress($_POST['email'],"t"); // Mail người nhận
				setcookie('gui_lai_mk','Chúng tôi đã gửi mật khẩu mới đến email của bạn',time() + 60*20);

				header('location: forget_pass.php');
				$mail->Send();	
			}
		}
	}
}

?>
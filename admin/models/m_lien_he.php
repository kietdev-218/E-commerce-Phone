<?php
include_once 'database.php';
class M_lien_he extends database{
	public function trang_trai_lh($ma_lien_he,$noi_dung_tt=0){
		$sql = 'select trang_thai from lien_he where ma_lien_he = ?';
		$param = array($ma_lien_he);
		$this->setQuery($sql);
		$tt = $this->loadRow($param);
		if($noi_dung_tt != 0)
		{
			if($tt->trang_thai == 0)
			{
				return 'chu_xanh';
			}
			else if($tt->trang_thai ==1)
			{
				return 'chu_do';
			}
			else
			{
				return '';
			}
		}
		else
		{
			if($tt->trang_thai == 1)
			{
				return 'Đã xem';
			}
			else if($tt->trang_thai == 2)
			{
				return 'Đã trả lời';
			}
			else
			{
				return 'Chưa xem';
			}
		}
	}
	
	public function so_lh_chua_xem(){
		$sql = "select * from lien_he where trang_thai =0";
		$this->setQuery($sql);
		$arr = $this->loadAllRows();
		if(count($arr) > 0)
		{
			return '('.count($arr).')';
		}
		else
		{
			return '';
		}
	}
	
	public function xac_nhan_lh_dx($ma_lien_he){
		include_once 'models/m_common.php';
		$m_common = new M_common();
		if($m_common->select_single_id('lien_he','ma_lien_he',$ma_lien_he)->trang_thai == 0)
		{
			$sql = "update lien_he set trang_thai = 1 where ma_lien_he = ?";
			$param = array($ma_lien_he);
			$this->setQuery($sql);
			$this->execute($param);
		}
	}
	
	public function tra_loi_lh($mail_nguoi_nhan,$ten_nguoi_nhan){
		if(isset($_POST['btn_tra_loi']))
		{
			include_once 'models/m_common.php';
			$m_common = new M_common();
			$nguoi_dung = $m_common->select_single_id('nguoi_dung','ten_dang_nhap',"'".$_SESSION['ad_name']."'");
			$ma_nguoi_dung = $nguoi_dung->ma_nguoi_dung;
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

			$noidung ="<br>Chào bạn: " .''.$ten_nguoi_nhan;
			$noidung .="<br><br>" .$_POST["tra_loi_lh"];
			$mail->SetFrom('saohoa1007@gmail.com','Di động Thanh Thanh');
			$mail->Subject='Di động Thanh Thanh trả lời liên hệ';
			$mail->MsgHTML($noidung);
			$mail->AddAddress($mail_nguoi_nhan,"t"); // Mail người nhận
			if(strlen(trim($_POST["tra_loi_lh"])) > 0)
			{
				$sql = "update lien_he set trang_thai = 2 , tra_loi = ? , ma_nguoi_dung = ? where ma_lien_he = ?";
				$param = array($_POST["tra_loi_lh"],$ma_nguoi_dung,$_GET['ma_lien_he']);
				$this->setQuery($sql);
				$this->execute($param);
	
				setcookie('tra_loi_xong','Bạn đã trả lời xong',time() +60*20);
				header('location: xem_lien_he.php'.'?'.$_SERVER['QUERY_STRING']);
				$mail->Send();
			}
		}
	}
}
?>

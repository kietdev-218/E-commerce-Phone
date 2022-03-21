<?php
include_once 'database.php';

class M_gio_hang extends database{
	public function kiem_tra_so_nguyen($x){
		if((int)$x == $x)
			return true;
		else
			return false;
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
	
	public function ma_khach_hang_cuoi(){
		$sql ="SELECT ma_khach_hang FROM khach_hang order by ma_khach_hang desc limit 0,1";
		$this->setQuery($sql);
		$kq = $this->loadRow();
		return $kq->ma_khach_hang;
	}
	
	public function ma_hoa_don_cuoi(){
		$sql ="SELECT ma_hoa_don FROM hoa_don order by ma_hoa_don desc limit 0,1";
		$this->setQuery($sql);
		$kq = $this->loadRow();
		return $kq->ma_hoa_don;
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
	
	public function xl_dat_hang(){
	
	  if(isset($_POST['dat_hang']))
	  {
		  if(isset($_SESSION['gio_hang']))
		  {
			$result = true;
			if(strlen(trim($_POST['ho_ten'])) =='')
			{
				$result =false;
			}
			
			if(!$this->test_email($_POST['email']))
			{
				$result =false;
			}
			
			if(strlen(trim($_POST['dia_chi'])) =='')
			{
				$result =false;
			}
			
			if(!is_numeric($_POST['dien_thoai']) || $_POST['dien_thoai'] == '' || !$this->kiem_tra_so_nguyen($_POST['dien_thoai']))
			{
				$result =false;
			}
			if($result)
			{
				$sql_them_khach_hang = "insert into khach_hang values(NULL,?,?,?,?,?)";
				$param_them_khach_hang = array($_POST['ho_ten'],$_POST['gender'],$_POST['dia_chi'],$_POST['dien_thoai'],$_POST['email']);
				$this->setQuery($sql_them_khach_hang);
				$this->execute($param_them_khach_hang);
				
				$sql_them_hoa_don = "insert into hoa_don values(NULL,?,?,?,0)";
				$param_them_hoa_don = array($this->ma_khach_hang_cuoi(),date('Y-m-d',time()),$_SESSION['thanh_tien']);
				$this->setQuery($sql_them_hoa_don);
				$this->execute($param_them_hoa_don);
				
				$so_hoa_don_cuoi =$this->ma_hoa_don_cuoi();
				foreach($_SESSION['gio_hang'] as $ma_san_pham => $x)
				{
					$sql_them_ct_hoa_don = "insert into chi_tiet_hoa_don values(?,?,?,?,?,NULL)";
					$param_them_ct_hoa_don = array($so_hoa_don_cuoi,$ma_san_pham,$x['ten_san_pham'],$x['so_luong'],$x['don_gia']);
					$this->setQuery($sql_them_ct_hoa_don);
					$this->execute($param_them_ct_hoa_don);
				}
				
				unset($_SESSION['gio_hang']);
				unset($_SESSION['tong_so']);
				unset($_SESSION['thanh_tien']);
				setcookie('dat_hang_true','ok',time() +20*60);
				header('location: dat_hang');
			}
		  }
		  else
		  {
			   header('location: dat_hang'); 
		  }
	  }
	}
	
	public function test_error($val,$number_1,$number_2){
		if(isset($_POST['btn_dat_hang']))
		{
			if(strlen(trim($val)) >= $number_1 && strlen(trim($val)) <=$number_2)
				return true;
			else
				return false;
		}
		else 
			return true;
	}
	
	public function date_selected($i,$date){
		if($i==$date)
			return 'selected';
		else
			return '';
	}
	
	public function echo_gt($val){
		if($_POST['gender'] == $val && $_POST['gender'] !='')
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
	
	public function xoa_cook_dat_hang(){
		if($_COOKIE['dat_hang_true'])
			setcookie('dat_hang_true',NULL,time());
	}
	
}
/*$a = new M_san_pham();
$b = $a->san_pham_theo_loai(19);
echo '<pre>',print_r($b),'</pre>';*/

?>
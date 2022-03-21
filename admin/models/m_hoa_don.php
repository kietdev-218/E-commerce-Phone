<?php
include_once 'database.php';
class M_hoa_don extends database{
	public function trang_trai_hd($ma_hoa_don,$noi_dung_tt=0){
		$sql = 'select trang_thai from hoa_don where ma_hoa_don = ?';
		$param = array($ma_hoa_don);
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
				return 'Đã thanh toán';
			}
			else
			{
				return 'Chưa xem';
			}
		}
	}
	
	public function so_hd_chua_xem(){
		$sql = "select * from hoa_don where trang_thai =0";
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
	public function xd_kh($ma_hoa_don){
		$sql = "select * from hoa_don where ma_hoa_don = ?";
		$param = array($ma_hoa_don);
		$this->setQuery($sql);
		$hd = $this->loadRow($param);
		
		$sql2 = "select * from khach_hang where ma_khach_hang = ?";
		$param2 = array($hd->ma_khach_hang);
		$this->setQuery($sql2);
		return $this->loadRow($param2);
	}
	
	public function ct_hoa_don($ma_hoa_don){
		$sql = "select * from chi_tiet_hoa_don where ma_hoa_don = ?";
		$param = array($ma_hoa_don);
		$this->setQuery($sql);
		return $this->loadAllRows($param);
	}
	
	public function tim_hd($ma_hoa_don){
		$sql = "select * from hoa_don where ma_hoa_don = ?";
		$param = array($ma_hoa_don);
		$this->setQuery($sql);
		return $this->loadRow($param);
	}
	
	public function xac_nhan_hd_dx($ma_hoa_don){
		if($this->tim_hd($ma_hoa_don)->trang_thai == 0)
		{
			$sql = "update hoa_don set trang_thai = 1 where ma_hoa_don = ?";
			$param = array($ma_hoa_don);
			$this->setQuery($sql);
			$this->execute($param);
		}
	}
	
	public function thanh_toan($ma_hoa_don){
		if(isset($_POST['btn_thanh_toan']))
		{
			$sql = "update hoa_don set trang_thai = 2 where ma_hoa_don = ?";
			$param = array($ma_hoa_don);
			$this->setQuery($sql);
			$this->execute($param);
			header('location: '.$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']);
		}
	}
}
?>

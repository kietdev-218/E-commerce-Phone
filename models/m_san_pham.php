<?php
include_once 'database.php';

class M_san_pham extends database{
	public function single($ma_san_pham){
		$sql ="select * from san_pham where ma_san_pham = ?";
		$param = array($ma_san_pham);
		$this->setQuery($sql);
		return $this->loadRow($param);
	}
	
	public function ds_loai_sp($ma_loai=0){
		$sql ="SELECT * from nha_san_xuat where ma_loai=?";
		$param = array($ma_loai);
		$this->setQuery($sql);
		return $this->loadAllRows($param);
	}
	
	public function san_pham_theo_loai($ma_loai,$sort=''){
		$sql ="SELECT *, don_gia*(1-khuyen_mai/100) gia_ct from san_pham where ma_loai=?";
		if($sort != '')
		{
			$sql .= " $sort";
		}
		$param = array($ma_loai);
		$this->setQuery($sql);
		return $this->loadAllRows($param);
	}
	
	public function san_pham_cung_loai($ma_loai,$ma_san_pham,$sort=''){
		$sql ="SELECT *, don_gia*(1-khuyen_mai/100) gia_ct from san_pham where ma_loai=? and ma_san_pham <> ?";
		if($sort != '')
		{
			$sql .= " $sort";
		}
		$param = array($ma_loai,$ma_san_pham);
		$this->setQuery($sql);
		return $this->loadAllRows($param);
	}
	
	public function san_pham_theo_hang($ma_nha_san_xuat,$sort=''){
		$sql ="SELECT *, don_gia*(1-khuyen_mai/100) gia_ct from san_pham where ma_nha_san_xuat=?";
		if($sort != '')
		{
			$sql .= " $sort";
		}
		$param = array($ma_nha_san_xuat);
		$this->setQuery($sql);
		return $this->loadAllRows($param);
	}
	
	public function tim_loai($ma_nha_san_xuat){
		$sql ="SELECT * from nha_san_xuat where ma_nha_san_xuat=?";
		$param = array($ma_nha_san_xuat);
		$this->setQuery($sql);
		return $this->loadRow($param);
	}
	
	public function ten_loai($ma_loai){
		$sql ="SELECT ten_nha_san_xuat from nha_san_xuat where ma_nha_san_xuat=?";
		$param = array($ma_loai);
		$this->setQuery($sql);
		return $this->loadRow($param)->ten_nha_san_xuat;
	}
	
	public function tag_list(){
		$sql = "select * from tag";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function sp_new(){
		$sql ="select * from san_pham order by ma_san_pham limit 0,8";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function danh_gia_cao(){
		$sql = "SELECT * FROM san_pham sp inner join (SELECT ma_san_pham,avg(diem) dtb FROM danh_gia group by ma_san_pham order by dtb desc ) dg on sp.ma_san_pham = dg.ma_san_pham limit 0,9";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function single_score($ma_san_pham){
		$sql = "SELECT ma_san_pham,avg(diem) dtb FROM danh_gia where ma_san_pham =? group by ma_san_pham";
		$param = array($ma_san_pham);
		$this->setQuery($sql);
		return $this->loadRow($param);
	}
	public function star_yel($ma_san_pham){
		if(!empty($this->single_score($ma_san_pham)))
		{
			return $this->single_score($ma_san_pham)->dtb;
		}
		else
		{
			return 0;
		}
	}
	public function khuyen_mai($vt=-1,$limit=-1){
		$sql = "select *from san_pham where khuyen_mai >0 ";
		if($vt >= 0 && $limit >=0)
		{
			$sql .= "limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function san_pham_km($sort=''){
		$sql = "select *, don_gia*(1-khuyen_mai/100) gia_ct from san_pham where khuyen_mai >0 ";
		if($sort != '')
		{
			$sql .= " $sort";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function sp_hot($vt=-1,$limit=-1){
		$sql = "select *from san_pham where so_luot_mua > 0 order by so_luot_mua desc ";
		if($vt >= 0 && $limit >=0)
		{
			$sql .= "limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function confirm_sp_hot($ma_san_pham){
		$sql = "select sp.ma_san_pham, ten_san_pham, so_luot_mua from san_pham sp inner join (select ma_san_pham from san_pham where so_luot_mua > 0 order by so_luot_mua desc limit 0,8) hot on sp.ma_san_pham = hot.ma_san_pham where hot.ma_san_pham = ?";
		
		$param = array($ma_san_pham);
		$this->setQuery($sql);
		$arr = $this->loadRow($param);
		if(!empty($arr))
			return true;
		else
			return false;
	}
	public function confirm_sp_new($ma_san_pham){
		$sql = "select sp.ma_san_pham,ten_san_pham from san_pham sp inner join (select ma_san_pham from san_pham order by ma_san_pham desc limit 0,8) new on sp.ma_san_pham = new.ma_san_pham where new.ma_san_pham = ?";
		$param = array($ma_san_pham);
		$this->setQuery($sql);
		$arr = $this->loadRow($param);
		if(!empty($arr))
			return true;
		else
			return false;
	}
	public function confirm_sp_km($ma_san_pham){
		$sql = "select ma_san_pham from san_pham where ma_san_pham = ? and khuyen_mai >0";
		$param = array($ma_san_pham);
		$this->setQuery($sql);
		$arr = $this->loadRow($param);
		if(!empty($arr))
			return true;
		else
			return false;
	}
	public function stick_class($ma_san_pham,$x=''){
		if($this->confirm_sp_hot($ma_san_pham))
		{
			return 'hot';
		}
		else if($this->confirm_sp_new($ma_san_pham))
		{
			return 'new';
		}
		else if($this->confirm_sp_km($ma_san_pham))
		{
			if($x != '')
			{
				return '-'.$this->single($ma_san_pham)->khuyen_mai.'%';
			}
			else
			{
				return 'sale';
			}
		}
	}
	
	public function san_pham_ct($ma_san_pham){
		$sql ="select *,don_gia*(1-khuyen_mai/100) gia_ct from san_pham where ma_san_pham = ?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_san_pham));
	}
	
	public function slide_hinh_sp_ct($ma_san_pham){
		$sql = "SELECT * FROM hinh_chi_tiet where ma_san_pham = ?";
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_san_pham));
	}
	
	public function tim_kiem($keyword,$vt=-1,$limit=-1)
	{
		$sql = "SELECT *, don_gia*(1-khuyen_mai/100) gia_ct FROM san_pham where ten_san_pham like '%$keyword%'";
		if($vt >=0 && $limit >= 0)
		{
			$sql .= " limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function diem_danh_gia($ma_san_pham){
		$sql ="SELECT ma_san_pham, avg(diem) diemtb FROM danh_gia where ma_san_pham =? group by ma_san_pham";
		$param =array($ma_san_pham);
		$this->setQuery($sql);
		$arr = $this->loadRow($param);
		if(empty($arr))
			$diem_danh_gia = 0;
		else
			$diem_danh_gia = round($this->loadRow($param)->diemtb,2);
		
		return $diem_danh_gia;
	}
	
	public function kq_danh_gia($ma_san_pham){
		$diem_danh_gia = $this->diem_danh_gia($ma_san_pham);
			return ($diem_danh_gia*25).'px';
	}
	
	public function da_danh_gia($ma_san_pham,$id_login){
		$sql ="SELECT * FROM danh_gia where ma_san_pham = ? and ma_nguoi_dung = ? ";
		$param = array($ma_san_pham,$id_login);
		$this->setQuery($sql);
		$result = $this->loadRow($param);
		return $result;
	}	
	
	public function diem_da_danh_gia($ma_san_pham,$id_login){
		$arr = $this->da_danh_gia($ma_san_pham,$id_login);
		if(!empty($arr))
		{
			$result = ($arr->diem*16).'px';
		}
		else
		{
			$result = 0;
		}
		return $result;
	}
	
	public function nhap_danh_gia($ma_san_pham,$id_login,$url){
		if(isset($_POST['btn_danh_gia'])){		
			
			if(isset($_SESSION['name']) && empty($this->da_danh_gia($ma_san_pham,$id_login)))
			{
				$sql = 'INSERT into danh_gia values (NULL,?,?,?,?)';
				$param = array($ma_san_pham,$id_login,$_POST['diem_danh_gia'],date('Y-m-d',time()));
				$this->setQuery($sql);
				$this->execute($param);
				
				header('location: sp_'.$url.'.'.$ma_san_pham.'.html');
			}
			else
			{
				header('location: sp_'.$url.'.'.$ma_san_pham.'.html');
			}
		}
	}
	
	public function slider(){
		$sql = "select * from home_slider where vi_tri <> 0 order by vi_tri";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}
?>
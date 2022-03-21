<?php
include_once 'database.php';

class M_common extends database{
	public function del_sess($sess){
		unset($_SESSION[$sess]);
	}
	
	public function del_cook($cook){
		setcookie($cook,NULL,time()-1);
	}
	
	public function select_full_desc($table,$id,$vt=-1,$limit=-1){
		$sql = "select * from ".$table." order by ".$id." desc";
		if($vt >=0 && $limit >=0)
		{
			$sql .= " limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function select_full($table,$vt=-1,$limit=-1){
		$sql = "select * from ".$table;
		if($vt >=0 && $limit >=0)
		{
			$sql .= " limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function select_group($table,$col,$col_val,$vt=-1,$limit=-1){
		$sql = "select * from ".$table." where ".$col." = ".$col_val;
		if($vt >=0 && $limit >=0)
		{
			$sql .= " limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function select_group_desc($table,$col,$col_val,$id,$vt=-1,$limit=-1){
		$sql = "select * from ".$table." where ".$col." = ".$col_val." order by ".$id." desc";
		if($vt >=0 && $limit >=0)
		{
			$sql .= " limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function select_group_except_desc($table,$col,$col_val,$id,$vt=-1,$limit=-1){
		$sql = "select * from ".$table." where ".$col." <> ".$col_val." order by ".$id." desc";
		if($vt >=0 && $limit >=0)
		{
			$sql .= " limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function select_single_id($table,$id,$val)
	{
		$sql = "select * from ".$table." where ".$id." = ".$val;
		$this->setQuery($sql);
		return $this->loadRow();
	}
	
	public function da_ton_tai($table,$id,$id_val,$col,$col_val){
		$sql = "SELECT * FROM ".$table." where ".$id." <> ".$id_val." and ".$col." = ".$col_val;
		$this->setQuery($sql);
		if(count($this->loadAllRows())>0)
			return true;
		else
			return false;
	}
	
	public function lim_min($val,$min){
		if($val >= $min)
			return true;
		else
			return false;
	}
	
	public function lim_max($val,$max){
		if($val <= $max)
			return true;
		else
			return false;
	}
	
	public function lim_min_max($val,$min,$max)
	{
		if($val > $min && $val < $max)
			return true;
		else
			return false;
	}
	
	public function xoa($table,$id,$val){
		$sql = "delete from ".$table." where ".$id." IN($val)";
		$this->setQuery($sql);
		return $this->execute();
	}
	
	public function search($table,$col,$keyword)
	{
		$sql = "select * from ".$table." where ".$col." like '%".$keyword."%' ";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function search_theo_loai($table,$loai,$ma_so,$col,$keyword)
	{
		$sql = "select * from ".$table." where ".$col." like '%".$keyword."%' and ".$loai." =".$ma_so;
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function select_loai_desc($table,$id,$col,$val,$vt=-1,$limit=-1){
		$sql = "select * from ".$table." where ".$col." = ".$val." order by ".$id." desc";
		if($vt >=0 && $limit >=0)
		{
			$sql .= " limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function selected($get,$v){
		if(isset($_GET[$get]))
		{
			if($_GET[$get] == $v)
				return 'selected';
			else
				return '';
		}
		else
			return '';
	}
	
	public function selected_2($get,$post,$x,$v){
		if(isset($_POST[$post]))
		{
			if($_POST[$post] == $v)
			{
				return 'selected';
			}
			else
			{
				return '';
			}
		}
		else if(isset($_GET[$get]))
		{
			if($x == $v)
			{
				return 'selected';
			}
			else
			{
				return '';
			}
		}
		else
		{
			return '';
		}
	}
	
	public function selected_single($x,$v){
		if($x == $v)
			return 'selected';
		else
			return '';
	}
	
	public function show_value($get,$post,$v){
		if(isset($_POST[$post]))
		{
			return $_POST[$post];
		}
		else if(isset($_GET[$get]))
		{
			return $v;
		}
		else
		{
			return '';
		}
	}
	public function xoa_hinh($table,$col,$id,$id_val,$default){
		$sql = "update ".$table." set ".$col." = '".$default."' where ".$id." = ".$id_val;
		$this->setQuery($sql);
		return $this->execute();
	}
	
	public function edit_single($table,$col,$val,$id,$id_val){
		$sql = "update ".$table." set ".$col." = ".$val." where ".$id." = ".$id_val;
		$this->setQuery($sql);
		return $this->execute();
	}
	public function ten_da_ton_tai($table,$col,$val){
		$sql = "select * from ".$table." where ".$col." = "."'".trim(strtolower($val))."'";
		$this->setQuery($sql);
		$rs = $this->loadRow();
		if(!empty($rs))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function xac_nhan_ad($ma_nguoi_dung){
		$sql = "select * from nguoi_dung where ma_nguoi_dung = ? and (ma_loai_nguoi_dung =1 or ma_loai_nguoi_dung = 3)";
		$param = array($ma_nguoi_dung);
		$this->setQuery($sql);
		return $this->loadRow($param);
	}
}

?>

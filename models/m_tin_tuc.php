<?php
include_once 'database.php';

class M_tin_tuc extends database{
	public function ds_tin($vt=-1,$limit=-1){
		$sql = "SELECT * FROM bai_viet where ma_loai_bai=1 order by ma_bai_viet desc ";
		if($vt >=0 && $limit >=0)
		{
			$sql .= "limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function tin_xem_nhieu($vt=-1,$limit=-1){
		$sql = "SELECT * FROM bai_viet where ma_loai_bai=1 order by luot_xem desc ";
		if($vt >=0 && $limit >=0)
		{
			$sql .= "limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function ban_tin($ma_bai_viet){
		$sql = "SELECT * FROM bai_viet where ma_bai_viet= ? ";
		$param = array($ma_bai_viet);
		$this->setQuery($sql);
		return $this->loadRow($param);
	}
	
	public function tang_luot_xem($ma_bai_viet){
		if(!isset($_SESSION['bai_viet-'.$ma_bai_viet]))
		{
			$_SESSION['bai_viet-'.$ma_bai_viet] = true;
			$luot_xem = $this->ban_tin($ma_bai_viet)->luot_xem;
			$sql = "Update bai_viet set luot_xem = ? where ma_bai_viet = ?";
			$param = array($luot_xem+1,$ma_bai_viet);
			$this->setQuery($sql);
			$this->execute($param);
		}
	}
}
?>
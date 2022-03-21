<?php
include_once 'database.php';

class M_lien_he extends database{
	
		public function test_error($val,$number_1,$number_2){
			if(isset($_POST['btn_lien_he']))
			{
				if(strlen(trim($val)) >= $number_1 && strlen(trim($val)) <=$number_2)
					return true;
				else
					return false;
			}
			else 
				return true;
		}
		
		public function xoa_cook_lien_he(){
			setcookie('lien_he',NULL,time()-1);
		}
	
	public function xl_lien_he(){
		if(isset($_POST['btn_lien_he']))
		{
			include_once 'm_nguoi_dung.php';
			$m_nguoi_dung = new M_nguoi_dung();
			
			$lien_he=true;
			if(!is_numeric($_POST['dien_thoai']) || $_POST['dien_thoai'] == '' || !$m_nguoi_dung->kiem_tra_so_nguyen($_POST['dien_thoai']))
			{
				$lien_he =false;
			}
			
			if($lien_he)
			{
				$sql = "Insert into lien_he values(NULL,?,?,?,?,?,?,?,?,?)";
				$param = array($_POST['ten_nguoi_gui'],$_POST['dien_thoai'],$_POST['email'],$_POST['tieu_de'],$_POST['noi_dung'],date('Y-m-d',time()),0,'',0);
				$this->setQuery($sql);
				$this->execute($param);
				setcookie('lien_he',true,time() +20*60);
				header('location: lien_he');
				
			}
		}
	}
}
?>
<?php
include_once 'database.php';

class M_bai_viet extends database{
	var $loi_hinh = NULL;
	var $loi_trung_ten = NULL;
	
	public function xd_loai_bv($ma_loai){
		$sql = "select ten_loai_bai from loai_bai_viet where ma_loai_bai = ? ";
		$param = array($ma_loai);
		$this->setQuery($sql);
		if(!empty($this->loadRow($param)))
			return $this->loadRow($param)->ten_loai_bai;
		else
			return NULL;
	}
	
	public function them_bai_viet(){
		if(isset($_POST['btn_them_bv']))
		{
			include_once 'm_common.php';
			$m_common = new M_common();
			$ma_nguoi_dang = $m_common->select_single_id('nguoi_dung','ten_dang_nhap',"'".$_SESSION['ad_name']."'")->ma_nguoi_dung;
			
			$insert = true;
			
			if(strlen(trim($_POST['ten_bai_viet'])) == 0)
			{
				$insert = false;
			}
			else if(strlen(trim($_POST['noi_dung_tom_tat'])) == 0)
			{
				$insert = false;
			}
			else if(strlen(trim($_POST['noi_dung_chi_tiet'])) == 0)
			{
				$insert = false;
			}
			
			if(isset($_FILES['hinh_bv']) && $_FILES['hinh_bv']['error'] ==0)
			{
				$mang_ten_hinh = explode('.',$_FILES['hinh_bv']['name']);
				$type_hinh = end($mang_ten_hinh);
				$maxsize = 1*1024*1024;
				$list_file_type = array('jpg','png','bmp','jepg');
				if(in_array($type_hinh,$list_file_type))
				{
					if($_FILES['hinh_bv']['size'] <= $maxsize)
					{
						$hinh = time().$_FILES['hinh_bv']['name'];
						$up_hinh = move_uploaded_file($_FILES['hinh_bv']['tmp_name'],'../assets/images/news/'.$hinh);
						if($up_hinh){
							$this->loi_hinh = '';
						}
						else
						{
							$this->loi_hinh = 'Lỗi tải hình';
							$insert = false;
						}
					}
					else
					{
						$this->loi_hinh = 'Kích thước hình ảnh đã vượt quá giới hạn 1MB';
						$insert = false;
					}
				}
				else
				{
					$this->loi_hinh = 'Hình ảnh không đúng định dạng';
					$insert = false;
				}
			}
			else
			{
				$hinh = 'hinh_dang_cn.jpg';
			}
			
			if($insert)
			{
				$sql = "insert into bai_viet VALUES(NULL,?,?,?,?,?,?,?,?)";
				$param = array($_POST['ma_loai_bai'],$_POST['ten_bai_viet'],$_POST['noi_dung_tom_tat'],$_POST['noi_dung_chi_tiet'],$ma_nguoi_dang,date('Y-m-d',time()),$hinh,0);
				$this->setQuery($sql);
				
				if($this->execute($param))
					$_SESSION['them_bai_xong'] = 'Bạn đã thêm bài thành công';
				else
					$_SESSION['them_bai_xong'] = 'Quá trình xử lý bị lỗi';
				header('location: ds_bai_viet.php');
			}
		}
	}
	
	public function sua_bai_viet($ma_bai_viet,$hinh_ht){
		if(isset($_POST['btn_them_bv']))
		{
			$update = true;
			
			if(strlen(trim($_POST['ten_bai_viet'])) == 0)
			{
				$update = false;
			}
			else if(strlen(trim($_POST['noi_dung_tom_tat'])) == 0)
			{
				$update = false;
			}
			else if(strlen(trim($_POST['noi_dung_chi_tiet'])) == 0)
			{
				$update = false;
			}
			
			if(isset($_FILES['hinh_bv']) && $_FILES['hinh_bv']['error'] ==0)
			{
				$mang_ten_hinh = explode('.',$_FILES['hinh_bv']['name']);
				$type_hinh = end($mang_ten_hinh);
				$maxsize = 1*1024*1024;
				$list_file_type = array('jpg','png','bmp','jepg');
				if(in_array($type_hinh,$list_file_type))
				{
					if($_FILES['hinh_bv']['size'] <= $maxsize)
					{
						$hinh = time().$_FILES['hinh_bv']['name'];
						$up_hinh = move_uploaded_file($_FILES['hinh_bv']['tmp_name'],'../assets/images/news/'.$hinh);
						if($up_hinh){
							$this->loi_hinh = '';
						}
						else
						{
							$this->loi_hinh = 'Lỗi tải hình';
							$update = false;
						}
					}
					else
					{
						$this->loi_hinh = 'Kích thước hình ảnh đã vượt quá giới hạn 1MB';
						$update = false;
					}
				}
				else
				{
					$this->loi_hinh = 'Hình ảnh không đúng định dạng';
					$update = false;
				}
			}
			else
			{
				$hinh = $hinh_ht;
			}
			
			if($update)
			{
				$sql = "update bai_viet set ma_loai_bai = ? , ten_bai_viet = ? , noi_dung_tom_tat=? , noi_dung_chi_tiet= ? , hinh = ? where ma_bai_viet = ?";
				$param = array($_POST['ma_loai_bai'],$_POST['ten_bai_viet'],$_POST['noi_dung_tom_tat'],$_POST['noi_dung_chi_tiet'],$hinh,$ma_bai_viet);
				$this->setQuery($sql);
				$this->execute($param);
				
				setcookie('sua_bai_xong','Bạn đã sửa bài thành công',time()+20);
				header('location: '.$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']);
			}
		}
	}
	
	public function them_loai_bai(){
		if(isset($_POST['btn_cap_nhat_loai_bv']))
		{
			$insert = true;
			$ten_loai_bai = trim($_POST['ten_loai_bai']);
			$ten_loai_bai_kt = "'".trim($_POST['ten_loai_bai'])."'";
			include_once 'm_common.php';
			$m_common = new M_common();
			$arr = $m_common->select_single_id('loai_bai_viet','ten_loai_bai',$ten_loai_bai_kt);
			
			if(!empty($arr))
			{
				$insert = false;
				$this->loi_trung_ten = 'Tên loại này đã tồn tại';
			}
			else if($ten_loai_bai == '' || $ten_loai_bai == ' ')
			{
				$insert = false;
				$this->loi_trung_ten = 'Hãy nhập tên loại';
			}
			
			if($insert)
			{
				$sql = "insert into loai_bai_viet VALUES(NULL,?)";
				$param = array($ten_loai_bai);
				$this->setQuery($sql);
				$this->execute($param);
				
				$_SESSION['them_loai_xong'] = 'Bạn đã thêm loại bài viết';
				header('location: ds_loai_bai_viet.php');
			}
		}
	}
	
	public function sua_loai_bai($ma_loai_bai){
		if(isset($_POST['btn_cap_nhat_loai_bv']))
		{
			$update = true;
			$ten_loai_bai = trim($_POST['ten_loai_bai']);
			$ten_loai_bai_kt = "'".trim($_POST['ten_loai_bai'])."'";
			include_once 'm_common.php';
			$m_common = new M_common();
			$arr = $m_common->da_ton_tai('loai_bai_viet','ma_loai_bai',$ma_loai_bai,'ten_loai_bai',$ten_loai_bai_kt);
			
			if($arr)
			{
				$update = false;
				$this->loi_trung_ten = 'Tên loại này đã tồn tại';
			}
			else if($ten_loai_bai == '' || $ten_loai_bai == ' ')
			{
				$update = false;
				$this->loi_trung_ten = 'Hãy nhập tên loại';
			}
			
			if($update)
			{
				$sql = "update loai_bai_viet set ten_loai_bai = ? where ma_loai_bai = ? ";
				$param = array($ten_loai_bai,$ma_loai_bai);
				$this->setQuery($sql);
				$this->execute($param);
				
				setcookie('sua_loaibv','Bạn đã sửa loại xong',time()+20);
				header('location: '.$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']);
			}
		}
	}
}
?>
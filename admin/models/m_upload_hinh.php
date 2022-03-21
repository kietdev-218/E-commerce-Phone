<?php
include_once 'database.php';

class M_upload_hinh extends database{
	public function img_error($file){
		$kq = true;
		foreach($_FILES[$file]['error'] as $err)
		{
			if($err != 0)
			{
				$kq = false;
				break;
			}
		}
		return $kq;
	}
	public function img_type($file){
		$kq = true;
		foreach($_FILES[$file]['name'] as $name)
		{
			$mang_ten_hinh = explode('.',$name);
			$type = end($mang_ten_hinh);
			$type_arr = array('jpg','jpeg','bmp','png');
			if(!in_array($type,$type_arr))
			{
				$kq = false ;
				break;
			}
		}
		return $kq;
	}
	public function img_size($file,$size=1){
		$kq = true;
		$max = $size*1024*1024;
		foreach($_FILES[$file]['size'] as $size)
		{
			if($size > $max)
			{
				$kq = false;
				break;
			}
		}
		return $kq;
	}
	public function img_up($file,$path){
		$kq = true ;
		foreach($_FILES[$file]['name'] as $k => $name)
		{
			$hinh = time().'_'.$k.'_'.$name;
			$up = move_uploaded_file($_FILES[$file]['tmp_name'][$k],$path.$hinh);
			if(!$up)
			{
				$kq = false;
				break;
			}
		}
		return $kq;
	}
}

?>
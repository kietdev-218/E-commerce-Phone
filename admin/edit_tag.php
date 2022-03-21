<?php
@session_start();
if(isset($_GET['stt']) && isset($_GET['val']))
{
	$stt = $_GET['stt'];
	$val = "'".trim(strtolower($_GET['val']))."'";
	include 'models/m_common.php';
	$m_common = new M_common();
	$edit = $m_common->edit_single('tag','tag_name',$val,'stt',$stt);
	if($edit)
	{
		$_SESSION['edit'] = 'Đã sửa tên thành công';
	}
	else
	{
		$_SESSION['edit'] = 'Quá trình sửa bị lỗi';
	}
	header('location: ds_tag.php');
}
else
{
	header('location: .');
}
?>
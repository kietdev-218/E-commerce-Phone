<?php
class C_bai_viet{
	public function ds_bai_viet(){
		include_once 'controllers/models_common.php';
		$link = $_SERVER['PHP_SELF'];
		$trang_xl = 'ket_qua_xl_bv.php';
		$so_luong_show = 8;
		
		$ds_loai_bai = $m_common->select_full('loai_bai_viet');
		include_once 'models/m_bai_viet.php';
		$m_bai_viet = new M_bai_viet();
		
		if(isset($_GET['ma_loai_bai']))
		{
			$kieu = 'loai,'.$_GET['ma_loai_bai'];
			$ten_loai = $m_bai_viet->xd_loai_bv($_GET['ma_loai_bai']);
			if($ten_loai !=NULL)
			{
				$title = ucfirst(trim($ten_loai));
			}
			else
			{
				$title = 'Không có loại bài này';
			}
			$bai_viets = $m_common->select_group_desc("bai_viet","ma_loai_bai",$_GET['ma_loai_bai'],"ma_bai_viet");
			include_once 'models/pager.php';
			$p = new Pager();
			$get_page = $p->get_page();
			$limit =8;
			$vt = $p->findstart($get_page,$limit);
			$count_pages = $p->count_pages($limit,count($bai_viets));
			$lst = $p->pages_list($count_pages,$get_page);
			$bai_viets = $m_common->select_group_desc("bai_viet","ma_loai_bai",$_GET['ma_loai_bai'],"ma_bai_viet",$vt,$limit);			
		}
		else
		{
			$kieu = 'full,';
			$title = 'Danh sách bài viết';
			$bai_viets = $m_common->select_full_desc('bai_viet','ma_bai_viet');
			include_once 'models/pager.php';
			$p = new Pager();
			$get_page = $p->get_page();
			$limit =8;
			$vt = $p->findstart($get_page,$limit);
			$count_pages = $p->count_pages($limit,count($bai_viets));
			$lst = $p->pages_list($count_pages,$get_page);
			$bai_viets = $m_common->select_full_desc("bai_viet","ma_bai_viet",$vt,$limit);
		}
		
		include_once 'controllers/smarty_common.php';
		$view = "views/bai_viet/v_ds_bai_viet.tpl";
		
		$smarty->assign('link',$link);
		$smarty->assign('trang_xl',$trang_xl);
		$smarty->assign('kieu',$kieu);
		$smarty->assign('so_luong_show',$so_luong_show);
		$smarty->assign('bai_viets',$bai_viets);
		$smarty->assign('ds_loai_bai',$ds_loai_bai);
		
		$smarty->assign('m_bai_viet',$m_bai_viet);
		$smarty->assign('view',$view);
		$smarty->assign('title',$title);
		$smarty->assign('lst',$lst);
		
		$smarty->hien_thi('layout.tpl');
	}
	
	public function ds_loai_bai(){
		include_once 'controllers/models_common.php';
		
		$loai_bai_viets = $m_common->select_full('loai_bai_viet');
		$link = $_SERVER['PHP_SELF'];
		
		include_once 'controllers/smarty_common.php';
		$view = "views/bai_viet/v_ds_loai_bai_viet.tpl";	
		$title = "Danh sách loại bài";
		
		$smarty->assign('loai_bai_viets',$loai_bai_viets);
		$smarty->assign('link',$link);
		$smarty->assign('view',$view);
		$smarty->assign('title',$title);
		
		$smarty->hien_thi('layout.tpl');
	}
	
	public function cap_nhat_bai_viet(){
		include_once 'controllers/models_common.php';
		$ds_loai_bai = $m_common->select_full('loai_bai_viet');
		
		include_once 'models/m_bai_viet.php';
		$m_bai_viet = new M_bai_viet();
		
		if(isset($_GET['ma_bai_viet']))
		{
			$title = "Cập nhật bài viết";
			$ma_bai_viet =$_GET['ma_bai_viet'];
			$bai_viet = $m_common->select_single_id('bai_viet','ma_bai_viet',$ma_bai_viet);
			$ma_loai_bai_ht = $bai_viet->ma_loai_bai;
			$link = $_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
			$m_bai_viet->sua_bai_viet($ma_bai_viet,$bai_viet->hinh);
		}
		else{
			$title = "Thêm bài viết";
			$m_bai_viet->them_bai_viet();
			$ma_loai_bai_ht = NULL;
		}
		
		include_once 'controllers/smarty_common.php';
		$view = "views/bai_viet/v_cap_nhat_bai_viet.tpl";	
		
		$smarty->assign('view',$view);
		$smarty->assign('title',$title);
		$smarty->assign('ds_loai_bai',$ds_loai_bai);
		$smarty->assign('m_bai_viet',$m_bai_viet);
		$smarty->assign('ma_loai_bai_ht',$ma_loai_bai_ht);
		if(isset($_GET['ma_bai_viet']))
		{
			$smarty->assign('bai_viet',$bai_viet);
			$smarty->assign('ma_bai_viet',$ma_bai_viet);
			$smarty->assign('link',$link);
		}
		
		$smarty->hien_thi('layout.tpl');
	}
	
	public function cap_nhat_loai_bai_viet(){
		include_once 'controllers/models_common.php';
		
		include_once 'models/m_bai_viet.php';
		$m_bai_viet = new M_bai_viet();
				
		if(isset($_GET['ma_loai_bai']))
		{
			$ma_loai_bai = $_GET['ma_loai_bai'];
			$title = 'Cập nhật loại bài';
			$loai_bai = $m_common->select_single_id('loai_bai_viet','ma_loai_bai',$ma_loai_bai);
			$ten_loai_ht = $loai_bai->ten_loai_bai;
			$m_bai_viet->sua_loai_bai($ma_loai_bai);
		}
		else
		{
			$title = 'Thêm loại bài';
			$m_bai_viet->them_loai_bai();
			$ten_loai_ht = NULL;
		}
		include_once 'controllers/smarty_common.php';
		$view = "views/bai_viet/v_cap_nhat_loai_bai_viet.tpl";
		
		$smarty->assign('title',$title);
		$smarty->assign('view',$view);
		$smarty->assign('m_bai_viet',$m_bai_viet);
		$smarty->assign('ten_loai_ht',$ten_loai_ht);
		if(isset($_GET['ma_loai_bai']))
		{
			$smarty->assign('ma_loai_bai',$ma_loai_bai);
			$smarty->assign('loai_bai',$loai_bai);
		}
		$smarty->hien_thi('layout.tpl');
	}
}
?>
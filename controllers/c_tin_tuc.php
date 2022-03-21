<?php
class C_tin_tuc{
	public function ds_tin(){
		include_once 'controllers/models_common.php';
		include 'models/m_tin_tuc.php';
		$m_tin_tuc = new M_tin_tuc();
		$ds_tin = $m_tin_tuc->ds_tin();
		$tin_xem_nhieu = $m_tin_tuc->tin_xem_nhieu(0,4);
		$tag_list = $m_san_pham->tag_list();
		$description = 'tin tức di động Thanh Thanh';
		$meta_key = 'di động Thanh Thanh, điện thoại, máy tính bảng, phụ kiện, sony, samsung, apple, asus';
		include 'models/pager.php';
		$p = new Pager();
		
		$get_page = $p->get_page();
		$limit =4;
		$vt = $p->findstart($get_page,$limit);
		$count_pages = $p->count_pages($limit,count($ds_tin));
		$lst = $p->pages_list($count_pages,$get_page);
		$ds_tin = $m_tin_tuc->ds_tin($vt,$limit);
		
		$dieu_huong = '<li class="active">Tin tức</li>';
		
		include_once 'controllers/smarty_common.php';
		$title = 'Tin tức';
		$view = "views/bai_viet/v_news.tpl";
		$smarty->assign('title',$title);
		$smarty->assign('view',$view);
		$smarty->assign('description',$description);
		$smarty->assign('meta_key',$meta_key);
		$smarty->assign('dieu_huong',$dieu_huong);
		$smarty->assign('ds_tin',$ds_tin);
		$smarty->assign('tin_xem_nhieu',$tin_xem_nhieu);
		$smarty->assign('tag_list',$tag_list);
		$smarty->assign('lst',$lst);
		$smarty->hien_thi('bai_viet/layout.tpl');
	}
	
	public function ban_tin(){
		include 'controllers/models_common.php';
		include 'models/m_tin_tuc.php';
		$m_tin_tuc = new M_tin_tuc();
		$tag_list = $m_san_pham->tag_list();
		$dieu_huong = '<li><a href="tin_tuc">Tin tức</a></li>';
		if(!isset($_GET['ma_bai_viet']))
		{
			header('location: .');
			die();
		}
		else
		{
			$m_tin_tuc->tang_luot_xem($_GET['ma_bai_viet']);
			$ban_tin = $m_tin_tuc->ban_tin($_GET['ma_bai_viet']);
			$ds_tin = $m_tin_tuc->ds_tin(0,4);
			$tin_xem_nhieu = $m_tin_tuc->tin_xem_nhieu(0,4);
			if(empty($ban_tin))
			{
				header('location: .');
				die();
			}
		}
		
		include 'controllers/smarty_common.php';
		$smarty->assign('title',$ban_tin->ten_bai_viet);
		$smarty->assign('dieu_huong',$dieu_huong);
		$smarty->assign('m_tin_tuc',$m_tin_tuc);
		$smarty->assign('ban_tin',$ban_tin);
		$smarty->assign('ds_tin',$ds_tin);
		$smarty->assign('tin_xem_nhieu',$tin_xem_nhieu);
		$smarty->assign('tag_list',$tag_list);
		$smarty->assign('view','views/bai_viet/v_ban_tin.tpl');
		$smarty->hien_thi('bai_viet/layout.tpl');
	}
	
	public function about(){
		include 'controllers/models_common.php';
		include 'models/m_tin_tuc.php';
		$m_tin_tuc = new M_tin_tuc();
		$ds_tin = $m_tin_tuc->ds_tin(0,4);
		$tin_xem_nhieu = $m_tin_tuc->tin_xem_nhieu(0,4);
		$tag_list = $m_san_pham->tag_list();
		$dieu_huong = '<li><a href="news.php">Giới thiệu</a></li>';
		$m_tin_tuc->tang_luot_xem(6);
		$ban_tin = $m_tin_tuc->ban_tin(6);
		
		include 'controllers/smarty_common.php';
		$smarty->assign('title',$ban_tin->ten_bai_viet);
		$smarty->assign('dieu_huong',$dieu_huong);
		$smarty->assign('m_tin_tuc',$m_tin_tuc);
		$smarty->assign('ban_tin',$ban_tin);
		$smarty->assign('ds_tin',$ds_tin);
		$smarty->assign('tin_xem_nhieu',$tin_xem_nhieu);
		$smarty->assign('tag_list',$tag_list);
		$smarty->assign('view','views/bai_viet/v_ban_tin.tpl');
		$smarty->hien_thi('bai_viet/layout.tpl');
	}
}
?>
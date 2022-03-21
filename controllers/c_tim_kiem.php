<?php
class C_tim_kiem{
	public function tim_kiem(){
		include_once 'controllers/models_common.php';
		
		$description = 'sản phẩm di động Thanh Thanh';
		$meta_key = 'di động Thanh Thanh';
		$dieu_huong = '<li class="active">Tìm kiếm</li>';
		$khuyen_mai_moi = $m_san_pham->khuyen_mai(0,6);
		$tag_list = $m_san_pham->tag_list();
		$keyword = $_GET['keyword'];
		$san_phams = $m_san_pham->tim_kiem($keyword);
		$tong_so = count($san_phams);
		
		include 'models/pager.php';
		$p = new Pager();
		
		$get_page = $p->get_page();
		$limit =8;
		$vt = $p->findstart($get_page,$limit);
		$count_pages = $p->count_pages($limit,count($san_phams));
		$lst = $p->pages_list($count_pages,$get_page);
		$san_phams = $m_san_pham->tim_kiem($keyword,$vt,$limit);
		include_once 'controllers/smarty_common.php';
		
		$view = "views/tim_kiem/v_tim_kiem.tpl";
		$smarty->assign('title','Tìm kiếm');
		$smarty->assign('description',$description);
		$smarty->assign('meta_key',$meta_key);
		$smarty->assign('tag_list',$tag_list);
		$smarty->assign('khuyen_mai_moi',$khuyen_mai_moi);
		$smarty->assign('dieu_huong',$dieu_huong);
		$smarty->assign('keyword',$keyword);
		$smarty->assign('san_phams',$san_phams);
		$smarty->assign('tong_so',$tong_so);
		$smarty->assign('lst',$lst);
		$smarty->assign('view',$view);
		
		$smarty->hien_thi('tim_kiem/layout.tpl');
	}
}
?>
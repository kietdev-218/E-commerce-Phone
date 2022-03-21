<?php
class C_slider{
	public function ds_hinh(){
		include_once 'controllers/models_common.php';
		$ds_hinh = $m_common->select_full_desc('home_slider','id');
		
		include_once 'models/pager.php';
		$p = new Pager();
		$get_page = $p->get_page();
		$limit =8;
		$vt = $p->findstart($get_page,$limit);
		$count_pages = $p->count_pages($limit,count($ds_hinh));
		$lst = $p->pages_list($count_pages,$get_page);
		$ds_hinh = $m_common->select_full_desc('home_slider','id',$vt,$limit);
		$link = $_SERVER['PHP_SELF'];
		
		include_once 'models/m_slider.php';
		$m_slider = new M_slider();
		$m_slider->them_hinh();
		
		include_once 'controllers/smarty_common.php';
		
		$title = 'Danh sách toàn bộ hình slider';
		$view = "views/slider/v_ds_hinh.tpl";
		
		$smarty->assign('title',$title);
		$smarty->assign('view',$view);
		$smarty->assign('ds_hinh',$ds_hinh);
		$smarty->assign('link',$link);
		$smarty->assign('lst',$lst);
		$smarty->assign('m_slider',$m_slider);
		
		$smarty->hien_thi('layout.tpl');
	}
	
	public function sap_xep(){
		include_once 'controllers/models_common.php';
		
		include_once 'models/m_slider.php';
		$m_slider = new M_slider();
		$slider = $m_slider->slider();
		$v=1;
		
		$link = $_SERVER['PHP_SELF'];
		
		include_once 'controllers/smarty_common.php';
		
		$title = 'sắp xếp slider';
		$view = "views/slider/v_sap_xep.tpl";
		
		$smarty->assign('title',$title);
		$smarty->assign('view',$view);
		$smarty->assign('m_slider',$m_slider);
		$smarty->assign('slider',$slider);
		$smarty->assign('link',$link);
		$smarty->assign('v',$v);
		
		$smarty->hien_thi('layout.tpl');
	}
	public function them_bot(){
		include_once 'controllers/models_common.php';
		
		include_once 'models/m_slider.php';
		$m_slider = new M_slider();
		$slider = $m_slider->slider();
		$m_slider->bot_slider();
		$m_slider->them_slider();
		$hinh_ngoai_slider = $m_slider->hinh_ngoai_slider();
		$v=0;
		$link = $_SERVER['PHP_SELF'];
		
		include_once 'controllers/smarty_common.php';
		
		$title = 'Thêm bớt hình slider';
		$view = "views/slider/v_them_bot.tpl";
		
		$smarty->assign('title',$title);
		$smarty->assign('view',$view);
		$smarty->assign('m_slider',$m_slider);
		$smarty->assign('slider',$slider);
		$smarty->assign('hinh_ngoai_slider',$hinh_ngoai_slider);
		$smarty->assign('link',$link);
		$smarty->assign('v',$v);
		
		$smarty->hien_thi('layout.tpl');
	}
}

?>
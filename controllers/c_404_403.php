<?php
class C_404_403{
	public function page_404(){
		include_once 'controllers/models_common.php';
		
		$description = 'sản phẩm di động Thanh Thanh';
		$meta_key = 'di động Thanh Thanh';
		$error = 404;
		$content_err = 'Trang này không tồn tại';

		include_once 'controllers/smarty_common.php';
		
		$view = "views/404_403/v_404_403.tpl";
		$smarty->assign('title','Không tìm thấy trang');
		$smarty->assign('description',$description);
		$smarty->assign('meta_key',$meta_key);
		$smarty->assign('error',$error);
		$smarty->assign('content_err',$content_err);

		$smarty->assign('view',$view);
		
		$smarty->hien_thi('layout.tpl');
	}

	public function page_403(){
		include_once 'controllers/models_common.php';
		
		$description = 'sản phẩm di động Thanh Thanh';
		$meta_key = 'di động Thanh Thanh';
		$error = 403;
		$content_err = 'Bạn không được truy cập vào khu vực này';

		include_once 'controllers/smarty_common.php';
		
		$view = "views/404_403/v_404_403.tpl";
		$smarty->assign('title',403);
		$smarty->assign('description',$description);
		$smarty->assign('meta_key',$meta_key);
		$smarty->assign('error',$error);
		$smarty->assign('content_err',$content_err);

		$smarty->assign('view',$view);
		
		$smarty->hien_thi('layout.tpl');
	}
}
?>
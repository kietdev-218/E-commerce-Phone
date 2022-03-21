<?php
class C_home{
	public function home_page(){
		include 'controllers/models_common.php';
		
		include_once 'controllers/smarty_common.php';
		$title= "Quản trị";
		$smarty->assign("title",$title);
		$smarty->hien_thi('layout.tpl');
	}
}
?>
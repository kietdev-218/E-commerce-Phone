<?php
class C_nguoi_dung{
	public function login_register(){
		include_once 'controllers/models_common.php';
		
		$description = 'sản phẩm di động Thanh Thanh';
		$meta_key = 'di động Thanh Thanh';
		$dieu_huong = '<li class="active">Đăng nhập - Đăng ký</li>';
		$m_nguoi_dung->kiem_tra_dang_nhap();
		$m_nguoi_dung->xl_dang_ky();
		
		include_once 'controllers/smarty_common.php';
		
		$view = "views/user/v_user.tpl";
		$smarty->assign('title','Đăng nhập / Đăng ký');
		$smarty->assign('dieu_huong',$dieu_huong);
		$smarty->assign('meta_key',$meta_key);
		$smarty->assign('description',$description);
		$smarty->assign('view',$view);

		$smarty->hien_thi('user/layout.tpl');
	}
	
	public function cap_nhat_nguoi_dung(){
		
		include_once 'controllers/models_common.php';
		$m_nguoi_dung->kiem_tra_dang_nhap_cap_nhat();
		$nguoi_dung = $m_nguoi_dung->doc_nguoi_dung($_SESSION['name']);
		$m_nguoi_dung->cap_nhat_nguoi_dung();
		$m_nguoi_dung->doi_mat_khau();
		include_once 'controllers/smarty_common.php';
		$title = 'Cập nhật người dùng';
		$tieu_de = 'Cập nhật người dùng';
		$dieu_huong = '<label><a href="">Cập nhật người dùng</a></label>';
		$view = 'views/user/v_update_user.tpl';
		
		$smarty->assign('title',$title);
		$smarty->assign('tieu_de',$tieu_de);
		$smarty->assign('dieu_huong',$dieu_huong);
		$smarty->assign('nguoi_dung',$nguoi_dung);
		$smarty->assign('view',$view);
		
		$smarty->hien_thi("user/layout.tpl");
		
	}
	
	public function quen_mat_khau(){
		include_once 'controllers/models_common.php';
		$m_nguoi_dung->gui_lai_mat_khau();
		include_once 'controllers/smarty_common.php';
		
		$dieu_huong = '<label><a href="">Quên mật khẩu</a></label>';
		$view = 'views/user/v_forget_pass.tpl';
		
		$smarty->assign('title','Quên mật khẩu');
		$smarty->assign('tieu_de','Quên mật khẩu');
		$smarty->assign('dieu_huong',$dieu_huong);
		$smarty->assign('view',$view);
		
		$smarty->hien_thi("user/layout.tpl");
		
	}
}
?>
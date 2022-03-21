<?php
class C_san_pham{
	public function san_pham_theo_loai(){
		include_once 'controllers/models_common.php';
		
		$san_phams = $m_san_pham->san_pham_theo_loai($_GET['ma_loai'],'order by ma_san_pham desc');
		$ma_loai =$_GET['ma_loai'];
		$input_products = 'loai,'.$ma_loai;
		$tag_list = $m_san_pham->tag_list();
		$khuyen_mai_moi = $m_san_pham->khuyen_mai(0,6);
		$ten_loai = $m_san_pham->ten_loai($_GET['ma_loai']);
		$description = 'sản phẩm di động Thanh Thanh';
		$meta_key = 'di động Thanh Thanh, '.$ten_loai;
		$dieu_huong = '<li class="active">'.$ten_loai.'</li>';
		
		include_once 'controllers/smarty_common.php';
		
		$view = "views/san_pham/v_products.tpl";
		$smarty->assign('title',$ten_loai);
		$smarty->assign('tag_list',$tag_list);
		$smarty->assign('meta_key',$meta_key);
		$smarty->assign('khuyen_mai_moi',$khuyen_mai_moi);
		$smarty->assign('dieu_huong',$dieu_huong);
		$smarty->assign('view',$view);
		$smarty->assign('san_phams',$san_phams);
		$smarty->assign('input_products',$input_products);
		
		$smarty->hien_thi('san_pham/layout.tpl');
	}
	
	public function san_pham_km(){
		include_once 'controllers/models_common.php';
		
		$san_phams = $m_san_pham->san_pham_km('order by ma_san_pham desc');
		
		$input_products = 'km,';
		$tag_list = $m_san_pham->tag_list();
		$khuyen_mai_moi = $m_san_pham->khuyen_mai(0,6);
		
		$description = 'sản phẩm di động Thanh Thanh';
		$meta_key = 'di động Thanh Thanh';
		$dieu_huong = '<li class="active">Khuyến mãi</li>';
		
		include_once 'controllers/smarty_common.php';
		
		$view = "views/san_pham/v_products.tpl";
		$smarty->assign('title','Sản phẩm khuyến mãi');
		$smarty->assign('tag_list',$tag_list);
		$smarty->assign('meta_key',$meta_key);
		$smarty->assign('khuyen_mai_moi',$khuyen_mai_moi);
		$smarty->assign('dieu_huong',$dieu_huong);
		$smarty->assign('view',$view);
		$smarty->assign('san_phams',$san_phams);
		$smarty->assign('input_products',$input_products);
		
		$smarty->hien_thi('san_pham/layout.tpl');
	}
	
	public function san_pham_theo_hang(){
		include_once 'controllers/models_common.php';
		
		$san_phams = $m_san_pham->san_pham_theo_hang($_GET['ma_nha_san_xuat'],'order by ma_san_pham desc');
		$ma_nha_san_xuat =$_GET['ma_nha_san_xuat'];
		$input_products = 'hang,'.$ma_nha_san_xuat;
		$tag_list = $m_san_pham->tag_list();
		$khuyen_mai_moi = $m_san_pham->khuyen_mai(0,6);
		$ma_loai = $m_san_pham->tim_loai($ma_nha_san_xuat)->ma_loai;
		$ten_nha_san_xuat = $m_san_pham->ten_loai($ma_nha_san_xuat);
		$ten_loai = $m_san_pham->ten_loai($ma_loai);
		$description = 'sản phẩm di động Thanh Thanh';
		$meta_key = 'di động Thanh Thanh, '.$ten_loai.','.$ten_nha_san_xuat;
		$dieu_huong = '<li style="display:inline"><a href="loai_'.thu_vien::bo_dau($ten_loai).'.'.$ma_loai.'">'.$ten_loai.'</a></li> <li class="active">'.$ten_nha_san_xuat.'</li>';
		
		include_once 'controllers/smarty_common.php';
		
		$view = "views/san_pham/v_products.tpl";
		$smarty->assign('title',$ten_loai.' '.$ten_nha_san_xuat);
		$smarty->assign('tag_list',$tag_list);
		$smarty->assign('meta_key',$meta_key);
		$smarty->assign('khuyen_mai_moi',$khuyen_mai_moi);
		$smarty->assign('dieu_huong',$dieu_huong);
		$smarty->assign('view',$view);
		$smarty->assign('san_phams',$san_phams);
		$smarty->assign('ma_nha_san_xuat',$ma_nha_san_xuat);
		$smarty->assign('ma_loai',$ma_loai);
		$smarty->assign('ten_loai',$ten_loai);
		$smarty->assign('ten_nha_san_xuat',$ten_nha_san_xuat);
		$smarty->assign('input_products',$input_products);
		
		$smarty->hien_thi('san_pham/layout.tpl');
	}
	
	public function san_pham_ct(){
		include_once 'controllers/models_common.php';
		
		$ma_san_pham = $_GET['ma_san_pham'];
		$san_pham = $m_san_pham->san_pham_ct($ma_san_pham);
		if(empty($san_pham))
		{
			header('location: .');
			die();
		}
		$slide_hinh_sp_ct = $m_san_pham->slide_hinh_sp_ct($ma_san_pham);
		$ma_loai =$san_pham->ma_loai;
		$ma_nha_san_xuat = $san_pham->ma_nha_san_xuat;
		$san_pham_cung_loai = $m_san_pham->san_pham_cung_loai($ma_loai,$ma_san_pham,'order by ma_san_pham desc');
		
		$tag_list = $m_san_pham->tag_list();
		$khuyen_mai_moi = $m_san_pham->khuyen_mai(0,6);
		$ten_loai = $m_san_pham->ten_loai($ma_loai);
		$ten_hang = $m_san_pham->ten_loai($ma_nha_san_xuat);
		
		include_once 'models/m_nguoi_dung.php';
		$m_nguoi_dung = new M_nguoi_dung();
		if(isset($_SESSION['name']))
		{
			$name_login = $_SESSION['name'];
			$id_login = $m_nguoi_dung->doc_nguoi_dung($name_login)->ma_nguoi_dung;	
		}else{
			$id_login = NULL;
		}
		$url = thu_vien::bo_dau($san_pham->ten_san_pham);
		$m_san_pham->nhap_danh_gia($ma_san_pham,$id_login,$url);
		
		
		$description = 'sản phẩm di động Thanh Thanh, '.$san_pham->ten_san_pham;
		$meta_key = 'di động Thanh Thanh, '.$san_pham->ten_san_pham;
		$dieu_huong = '<li style="display:inline"><a href="loai_'.thu_vien::bo_dau($ten_loai).'.'.$ma_loai.'">'.$ten_loai.'</a></li> <li style="display:inline"><a href="hang_'.thu_vien::bo_dau($ten_hang).'.'.$ma_nha_san_xuat.'">'.$ten_hang.'</a></li>';
		
		include_once 'controllers/smarty_common.php';
		
		$view = "views/san_pham/v_product-detail.tpl";
		$smarty->assign('title',$ten_loai.' '.$san_pham->ten_san_pham);
		$smarty->assign('tag_list',$tag_list);
		$smarty->assign('meta_key',$meta_key);
		$smarty->assign('khuyen_mai_moi',$khuyen_mai_moi);
		$smarty->assign('dieu_huong',$dieu_huong);
		$smarty->assign('view',$view);
		$smarty->assign('ma_san_pham',$ma_san_pham);
		$smarty->assign('san_pham',$san_pham);
		$smarty->assign('slide_hinh_sp_ct',$slide_hinh_sp_ct);
		$smarty->assign('ma_loai',$ma_loai);
		$smarty->assign('ma_nha_san_xuat',$ma_nha_san_xuat);
		$smarty->assign('ten_loai',$ten_loai);
		$smarty->assign('ten_hang',$ten_hang);
		$smarty->assign('san_pham_cung_loai',$san_pham_cung_loai);
		$smarty->assign('id_login',$id_login);
		
		$smarty->hien_thi('san_pham/layout.tpl');
	}
}
?>
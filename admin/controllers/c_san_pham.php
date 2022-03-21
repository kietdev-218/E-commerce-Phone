<?php
class C_san_pham{
	public function ds_san_pham(){
		include_once 'controllers/models_common.php';
		$san_phams = $m_common->select_full_desc("san_pham","ma_san_pham");
		
		include_once 'models/pager.php';
		$p = new Pager();
		$get_page = $p->get_page();
		$limit =8;
		$vt = $p->findstart($get_page,$limit);
		$count_pages = $p->count_pages($limit,count($san_phams));
		$lst = $p->pages_list($count_pages,$get_page);
		$san_phams = $m_common->select_full_desc("san_pham","ma_san_pham",$vt,$limit);
		$select_loai = true;
		include_once 'models/m_san_pham.php';
		$m_san_pham = new M_san_pham();
		$kieu = 'full,';
		$link = $_SERVER['PHP_SELF'];
		$trang_xl= 'ket_qua_xl_sp.php';
		$so_luong_show = 8;
		
		include_once 'controllers/smarty_common.php';
		$title = "Danh sách sản phẩm";
		$view = "views/san_pham/v_ds_san_pham.tpl";
		
		$smarty->assign("san_phams",$san_phams);
		$smarty->assign("m_san_pham",$m_san_pham);
		$smarty->assign("view",$view);
		$smarty->assign("title",$title);
		$smarty->assign("lst",$lst);
		$smarty->assign("kieu",$kieu);
		$smarty->assign("link",$link);
		$smarty->assign("trang_xl",$trang_xl);
		$smarty->assign("so_luong_show",$so_luong_show);
		$smarty->assign("select_loai",$select_loai);
		
		$smarty->hien_thi('layout.tpl');
	}
	
	public function ds_hang(){
		include_once 'controllers/models_common.php';
		include_once 'models/m_san_pham.php';
		$m_san_pham = new M_san_pham();
		
		if(isset($_GET['ma_loai']))
		{
			$ma_loai = $_GET['ma_loai'];
			if(!$m_san_pham->xac_minh_loai_co_ton_tai($ma_loai))
			{
				//header('location: san_pham.php');
				die();
			}
			else
			{
				$ten_loai = $m_san_pham->loai_nsx($ma_loai);
				$link= $_SERVER['PHP_SELF'].'?ma_loai='.$ma_loai;
				$ds_hang = $m_common->select_group_desc('nha_san_xuat','ma_loai',$ma_loai,'ma_nha_san_xuat');
			}
			
		}
		else
		{
			$ma_loai = NULL;
			$ten_loai = NULL;
			$link= $_SERVER['PHP_SELF'];
			$ds_hang = $m_common->select_group_except_desc('nha_san_xuat','ma_loai',0,'ma_nha_san_xuat');
		}
		
		include_once 'models/pager.php';
		$p = new Pager();
		$get_page = $p->get_page();
		$limit =8;
		$vt = $p->findstart($get_page,$limit);
		$count_pages = $p->count_pages($limit,count($ds_hang));
		$lst = $p->pages_list($count_pages,$get_page);
		if(isset($_GET['ma_loai']))
		{
			$ds_hang = $m_common->select_group_desc('nha_san_xuat','ma_loai',$ma_loai,'ma_nha_san_xuat',$vt,$limit);
		}
		else
		{
			$ds_hang = $m_common->select_group_except_desc('nha_san_xuat','ma_loai',0,'ma_nha_san_xuat',$vt,$limit);
		}
		include_once 'controllers/smarty_common.php';
		$title = $ten_loai;
		$view = "views/san_pham/v_ds_hang.tpl";
		
		$smarty->assign("ds_hang",$ds_hang);
		$smarty->assign("view",$view);
		$smarty->assign("title",$title);
		$smarty->assign("lst",$lst);
		$smarty->assign("m_san_pham",$m_san_pham);
		$smarty->assign("ma_loai",$ma_loai);
		$smarty->assign("link",$link);
		
		$smarty->hien_thi('layout.tpl');
	}
	
	public function sp_theo_loai(){
		$ma_loai = $_GET['ma_loai'];
		include_once 'controllers/models_common.php';
		$san_phams = $m_common->select_loai_desc("san_pham","ma_san_pham","ma_loai",$ma_loai);
		$select_loai = true;
		
		include_once 'models/pager.php';
		$p = new Pager();
		$get_page = $p->get_page();
		$limit =8;
		$vt = $p->findstart($get_page,$limit);
		$count_pages = $p->count_pages($limit,count($san_phams));
		$lst = $p->pages_list($count_pages,$get_page);
		$san_phams = $m_common->select_loai_desc("san_pham","ma_san_pham","ma_loai",$ma_loai,$vt,$limit);
		include_once 'models/m_san_pham.php';
		$m_san_pham = new M_san_pham();
		$ds_loai_hang_sp = $m_san_pham->ds_loai_hang_sp();
		$ten_loai = $m_san_pham->loai_nsx($ma_loai);
		$kieu = 'loai,'.$ma_loai;
		$link = $_SERVER['PHP_SELF'].'?ma_loai='.$ma_loai;
		$trang_xl= 'ket_qua_xl_sp.php';
		$so_luong_show = 8;
		
		include_once 'controllers/smarty_common.php';
		$title = $ten_loai;
		$view = "views/san_pham/v_ds_san_pham.tpl";
		
		$smarty->assign("san_phams",$san_phams);
		$smarty->assign("m_san_pham",$m_san_pham);
		$smarty->assign("ds_loai_hang_sp",$ds_loai_hang_sp);
		$smarty->assign("view",$view);
		$smarty->assign("title",$title);
		$smarty->assign("lst",$lst);
		$smarty->assign("kieu",$kieu);
		$smarty->assign("link",$link);
		$smarty->assign("trang_xl",$trang_xl);
		$smarty->assign("so_luong_show",$so_luong_show);
		$smarty->assign("select_loai",$select_loai);
		
		$smarty->hien_thi('layout.tpl');
	}
	
	public function sp_theo_hang(){
		$ma_nha_san_xuat = $_GET['ma_nha_san_xuat'];
		include_once 'controllers/models_common.php';
		$san_phams = $m_common->select_loai_desc("san_pham","ma_san_pham","ma_nha_san_xuat",$ma_nha_san_xuat);
		
		include_once 'models/pager.php';
		$p = new Pager();
		$get_page = $p->get_page();
		$limit =8;
		$vt = $p->findstart($get_page,$limit);
		$count_pages = $p->count_pages($limit,count($san_phams));
		$lst = $p->pages_list($count_pages,$get_page);
		$san_phams = $m_common->select_loai_desc("san_pham","ma_san_pham","ma_nha_san_xuat",$ma_nha_san_xuat,$vt,$limit);
		include_once 'models/m_san_pham.php';
		$m_san_pham = new M_san_pham();
		$ds_loai_hang_sp = $m_san_pham->ds_loai_hang_sp();
		$ma_loai = $m_common->select_single_id('nha_san_xuat','ma_nha_san_xuat',$ma_nha_san_xuat)->ma_loai;
		$ten_loai = $m_san_pham->loai_nsx($ma_loai);
		$ten_nha_san_xuat = $m_san_pham->loai_nsx($ma_nha_san_xuat);
		include_once 'controllers/smarty_common.php';
		$title =$ten_loai.' '.$ten_nha_san_xuat;
		$view = "views/san_pham/v_ds_san_pham.tpl";
		$kieu = 'hang,'.$ma_nha_san_xuat;
		$link = $_SERVER['PHP_SELF'].'?ma_nha_san_xuat='.$ma_nha_san_xuat;
		$trang_xl= 'ket_qua_xl_sp.php';
		$so_luong_show = 8;
		
		$smarty->assign("san_phams",$san_phams);
		$smarty->assign("m_san_pham",$m_san_pham);
		$smarty->assign("ds_loai_hang_sp",$ds_loai_hang_sp);
		$smarty->assign("view",$view);
		$smarty->assign("title",$title);
		$smarty->assign("lst",$lst);
		$smarty->assign("kieu",$kieu);
		$smarty->assign("link",$link);
		$smarty->assign("trang_xl",$trang_xl);
		$smarty->assign("so_luong_show",$so_luong_show);
		
		$smarty->hien_thi('layout.tpl');
	}
	
	public function sua_hangsx(){
		$ma_nha_san_xuat = $_GET['ma_nha_san_xuat'];
		$link = $_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
		include_once 'controllers/models_common.php';
		$hangsx = $m_common->select_single_id('nha_san_xuat','ma_nha_san_xuat',$ma_nha_san_xuat);
		if(empty($hangsx))
		{
			header('location: '.$_SERVER['PHP_SELF']);
			die();
		}
		$ma_loai = $hangsx->ma_loai;
		
		include_once 'models/m_san_pham.php';
		$m_san_pham = new M_san_pham();
		$ten_nha_san_xuat = $hangsx->ten_nha_san_xuat;
		$m_san_pham->edit_hang_sx($ma_nha_san_xuat,$ten_nha_san_xuat,$hangsx->logo);
		
		include_once'controllers/smarty_common.php';
		$view ="views/san_pham/v_cap_nhat_hang.tpl";
		$title = $ten_nha_san_xuat;
		
		$smarty->assign('view',$view);
		$smarty->assign('title',$title);
		$smarty->assign('link',$link);
		$smarty->assign('hangsx',$hangsx);
		$smarty->assign('ten_nha_san_xuat',$ten_nha_san_xuat);
		$smarty->assign('m_san_pham',$m_san_pham);
		$smarty->assign('ma_nha_san_xuat',$ma_nha_san_xuat);
		$smarty->assign('ma_loai',$ma_loai);
		
		$smarty->hien_thi('layout.tpl');
	}
	
	public function them_hangsx(){
		include_once 'controllers/models_common.php';
		
		include_once 'models/m_san_pham.php';
		$m_san_pham = new M_san_pham();
		$m_san_pham->them_hang_sx();
		
		include_once'controllers/smarty_common.php';
		$view ="views/san_pham/v_cap_nhat_hang.tpl";
		$title = 'Thêm hãng sản xuất';
		
		$smarty->assign('view',$view);
		$smarty->assign('title',$title);

		$smarty->assign('m_san_pham',$m_san_pham);
		$smarty->assign('ten_nha_san_xuat','');
		$smarty->assign('ma_loai','');
		$smarty->hien_thi('layout.tpl');
	}
	
	public function ds_loaisp(){
		include_once 'controllers/models_common.php';
		
		include_once 'models/pager.php';
		$p = new Pager();
		$get_page = $p->get_page();
		$limit =8;
		$vt = $p->findstart($get_page,$limit);
		$count_pages = $p->count_pages($limit,count($ds_loai_sp));
		$lst = $p->pages_list($count_pages,$get_page);
		$ds_loai_sp = $m_common->select_group('nha_san_xuat','ma_loai',0,$vt,$limit);
		
		include_once'controllers/smarty_common.php';
		$view ="views/san_pham/v_ds_loaisp.tpl";
		$title = 'Danh sách loại sản phẩm';
		
		$smarty->assign('view',$view);
		$smarty->assign('title',$title);
		$smarty->assign('lst',$lst);
		$smarty->assign('link',$_SERVER['PHP_SELF']);
		
		$smarty->hien_thi('layout.tpl');
	}
	public function them_loaisp(){
		include_once 'controllers/models_common.php';
		
		include_once 'models/m_san_pham.php';
		$m_san_pham = new M_san_pham();
		$m_san_pham->them_loai_sp();
		$link = $_SERVER['PHP_SELF'];
		
		include_once'controllers/smarty_common.php';
		$view ="views/san_pham/v_cap_nhat_loaisp.tpl";
		$title = 'Thêm loại sản phẩm';
		
		$smarty->assign('view',$view);
		$smarty->assign('title',$title);

		$smarty->assign('m_san_pham',$m_san_pham);
		$smarty->assign('ten_nha_san_xuat','');
		$smarty->assign('ma_loai','');
		$smarty->assign('link',$link);
		$smarty->hien_thi('layout.tpl');
	}
	
	public function sua_loaisp(){
		$ma_loai = $_GET['ma_loai'];
		$link = $_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
		include_once 'controllers/models_common.php';
		$loaisp = $m_common->select_single_id('nha_san_xuat','ma_nha_san_xuat',$ma_loai);
		if(empty($loaisp))
		{
			header('location: '.$_SERVER['PHP_SELF']);
			die();
		}
		$ten_loai = $loaisp->ten_nha_san_xuat;
		
		include_once 'models/m_san_pham.php';
		$m_san_pham = new M_san_pham();
		$m_san_pham->sua_loaisp($ma_loai,$ten_loai,$loaisp->logo);
		
		include_once'controllers/smarty_common.php';
		$view ="views/san_pham/v_cap_nhat_loaisp.tpl";
		$title = $ten_loai;
		
		$smarty->assign('view',$view);
		$smarty->assign('title',$title);
		$smarty->assign('link',$link);
		$smarty->assign('loaisp',$loaisp);
		$smarty->assign('ten_loai',$ten_loai);
		$smarty->assign('ten_nha_san_xuat',$ten_loai);
		$smarty->assign('m_san_pham',$m_san_pham);
		$smarty->assign('ma_loai',$ma_loai);
		
		$smarty->hien_thi('layout.tpl');
	}
	
	public function xoa_hinh_chi_tiet(){
		include_once 'models/m_san_pham.php';
		$m_san_pham = new M_san_pham();
		$khoa_chinh = $_GET['khoa_chinh'];
		
		$m_san_pham->xoa_hinh_chi_tiet($khoa_chinh);
	
		header('location: cap_nhat_san_pham.php?ma_san_pham='.$_GET['ma_san_pham']);
	}
	
	public function cap_nhat_san_pham(){
		include_once 'controllers/models_common.php';
		include_once 'models/m_san_pham.php';
		$m_san_pham = new M_san_pham();
		if(isset($_GET['ma_san_pham']))
		{
			$ma_san_pham = $_GET['ma_san_pham'];
			$san_pham = $m_common->select_single_id('san_pham','ma_san_pham',$ma_san_pham);
			$ma_loai = $san_pham->ma_loai;
			$m_san_pham->xl_sua_sp($ma_san_pham,$san_pham->hinh);
			$hinh_chi_tiet = $m_san_pham->hinh_chi_tiet($ma_san_pham);
			$link = $_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
		}
		else
		{
			$m_san_pham->xl_them_sp();
		}
		
		$ds_hang = $m_san_pham->ds_hang();

		include_once 'models/m_nguoi_dung.php';
		$m_nguoi_dung = new M_nguoi_dung();
			
		include_once 'controllers/smarty_common.php';
		$title = 'Thêm sản phẩm';
		$tieu_de = 'Thêm sản phẩm';
		
		$view = 'views/san_pham/v_cap_nhat_san_pham.tpl';
		$smarty->assign('title',$title);
		$smarty->assign('tieu_de',$tieu_de);
		
		$smarty->assign('m_san_pham',$m_san_pham);
		if(isset($_GET['ma_san_pham']))
		{
			$smarty->assign('ma_san_pham',$ma_san_pham);
			$smarty->assign('san_pham',$san_pham);
			$smarty->assign('hinh_chi_tiet',$hinh_chi_tiet);
			$smarty->assign('link',$link);
		}
		$smarty->assign('ds_hang',$ds_hang);
		$smarty->assign('m_nguoi_dung',$m_nguoi_dung);
		
		$smarty->assign('view',$view);
		
		$smarty->hien_thi('layout.tpl');
	}
	
	public function ds_tag(){
		include 'controllers/models_common.php';
		$tags = $m_common->select_full('tag');
		$link = $_SERVER['PHP_SELF'];
		
		include 'models/m_san_pham.php';
		$m_san_pham = new M_san_pham();
		$m_san_pham->them_tag();
		
		include_once 'models/pager.php';
		$p = new Pager();
		$get_page = $p->get_page();
		$limit =8;
		$vt = $p->findstart($get_page,$limit);
		$count_pages = $p->count_pages($limit,count($tags));
		$lst = $p->pages_list($count_pages,$get_page);
		$tags = $m_common->select_full("tag",$vt,$limit);
		
		include 'controllers/smarty_common.php';
		$title = 'Danh sách tag';
		$view = 'views/san_pham/v_tag.tpl';
		
		$smarty->assign('title',$title);
		$smarty->assign('view',$view);
		$smarty->assign('link',$link);
		$smarty->assign('lst',$lst);
		$smarty->assign('tags',$tags);
		$smarty->assign('m_san_pham',$m_san_pham);
		
		$smarty->hien_thi('layout.tpl');
	}
	
	public function danh_gia(){
		include 'controllers/models_common.php';
		include 'models/m_san_pham.php';
		$m_san_pham = new M_san_pham();
		$danh_gia_gr_by_id = $m_san_pham->danh_gia_gr_by_id();
		
		include_once 'models/pager.php';
		$p = new Pager();
		$get_page = $p->get_page();
		$limit =8;
		$vt = $p->findstart($get_page,$limit);
		$count_pages = $p->count_pages($limit,count($danh_gia_gr_by_id));
		$lst = $p->pages_list($count_pages,$get_page);
		$danh_gia_gr_by_id = $m_san_pham->danh_gia_gr_by_id($vt,$limit);
		
		include_once 'controllers/smarty_common.php';
		
		$title = 'Xem đánh giá';
		$view = 'views/san_pham/v_danh_gia.tpl';
		
		$smarty->assign('title',$title);
		$smarty->assign('view',$view);
		$smarty->assign('m_san_pham',$m_san_pham);
		$smarty->assign('danh_gia_gr_by_id',$danh_gia_gr_by_id);
		$smarty->assign('lst',$lst);
		
		$smarty->hien_thi('layout.tpl');
	}
}
?>
<?php /* Smarty version Smarty-3.1.18, created on 2018-04-05 14:54:39
         compiled from "views\bai_viet\v_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3060759eda6ece09244-11138053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68c579a9660b4773f19eb45e5d54a9025e0ee67d' => 
    array (
      0 => 'views\\bai_viet\\v_sidebar.tpl',
      1 => 1522848156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3060759eda6ece09244-11138053',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59eda6ece8d516_60065375',
  'variables' => 
  array (
    'ds_tin' => 0,
    'tin' => 0,
    'm_nguoi_dung' => 0,
    'tin_xem_nhieu' => 0,
    'xem_nhieu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59eda6ece8d516_60065375')) {function content_59eda6ece8d516_60065375($_smarty_tpl) {?><div class="col-md-3 sidebar">
					<div class="sidebar-module-container">
<!-- ==============================================CATEGORY============================================== -->
<div class="sidebar-widget outer-bottom-xs wow fadeInUp">
	<?php echo $_smarty_tpl->getSubTemplate ("views/v_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><!-- /.sidebar-widget -->
	<!-- ============================================== CATEGORY : END ============================================== -->						<div class="sidebar-widget outer-bottom-xs wow fadeInUp">
    
	<h3 class="section-title">Tin tức</h3>
    <ul class="nav nav-tabs">
	  <li class="active"><a href="#recent" data-toggle="tab">Tin mới</a></li>
	  <li><a href="#popular" data-toggle="tab">Tin xem nhiều</a></li>
	</ul>
	<div class="tab-content">
    	<div class="tab-pane active m-t-20" id="recent">
            <?php  $_smarty_tpl->tpl_vars['tin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_tin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tin']->key => $_smarty_tpl->tpl_vars['tin']->value) {
$_smarty_tpl->tpl_vars['tin']->_loop = true;
?>
            <div class="blog-post">
                <img class="img-responsive" src="assets/images/news/<?php echo $_smarty_tpl->tpl_vars['tin']->value->hinh;?>
" alt="">
                <h4><a href="bt_<?php echo thu_vien::bo_dau($_smarty_tpl->tpl_vars['tin']->value->ten_bai_viet);?>
.<?php echo $_smarty_tpl->tpl_vars['tin']->value->ma_bai_viet;?>
.html"><?php echo $_smarty_tpl->tpl_vars['tin']->value->ten_bai_viet;?>
</a></h4>
                <span class="author"><?php if (!empty($_smarty_tpl->tpl_vars['m_nguoi_dung']->value->nguoi_dung($_smarty_tpl->tpl_vars['tin']->value->ma_nguoi_dung))) {?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->nguoi_dung($_smarty_tpl->tpl_vars['tin']->value->ma_nguoi_dung)->ten_dang_nhap;?>
<?php } else { ?>user<?php }?></span>
                <span class="review"><?php echo $_smarty_tpl->tpl_vars['tin']->value->luot_xem;?>
</span>
                <span class="date-time"><?php echo date('d-m-Y',strtotime($_smarty_tpl->tpl_vars['tin']->value->ngay_dang));?>
</span>
                <p><?php echo $_smarty_tpl->tpl_vars['tin']->value->noi_dung_tom_tat;?>
</p>
            </div>
            <?php } ?>
		</div>
	   <div class="tab-pane m-t-20" id="popular">
       <?php  $_smarty_tpl->tpl_vars['xem_nhieu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xem_nhieu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tin_xem_nhieu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xem_nhieu']->key => $_smarty_tpl->tpl_vars['xem_nhieu']->value) {
$_smarty_tpl->tpl_vars['xem_nhieu']->_loop = true;
?>
		<div class="blog-post inner-bottom-30 " >
			<img class="img-responsive" src="assets/images/news/<?php echo $_smarty_tpl->tpl_vars['xem_nhieu']->value->hinh;?>
" alt="">
			<h4><a href="bt_<?php echo thu_vien::bo_dau($_smarty_tpl->tpl_vars['tin']->value->ten_bai_viet);?>
.<?php echo $_smarty_tpl->tpl_vars['tin']->value->ma_bai_viet;?>
.html"><?php echo $_smarty_tpl->tpl_vars['xem_nhieu']->value->ten_bai_viet;?>
</a></h4>
			<span class="author"><?php if (!empty($_smarty_tpl->tpl_vars['m_nguoi_dung']->value->nguoi_dung($_smarty_tpl->tpl_vars['xem_nhieu']->value->ma_nguoi_dung))) {?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->nguoi_dung($_smarty_tpl->tpl_vars['xem_nhieu']->value->ma_nguoi_dung)->ten_dang_nhap;?>
<?php } else { ?>user<?php }?></span>
			<span class="review"><?php echo $_smarty_tpl->tpl_vars['xem_nhieu']->value->luot_xem;?>
</span>
			<span class="date-time"><?php echo date('d-m-Y',strtotime($_smarty_tpl->tpl_vars['xem_nhieu']->value->ngay_dang));?>
</span>
			<p><?php echo $_smarty_tpl->tpl_vars['xem_nhieu']->value->noi_dung_tom_tat;?>
</p>
		</div>
		<?php } ?>
		</div>
	</div>
    
    
</div>
<?php echo $_smarty_tpl->getSubTemplate ("views/v_tag.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					</div>
				</div><?php }} ?>

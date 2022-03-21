<?php /* Smarty version Smarty-3.1.18, created on 2018-04-05 12:53:22
         compiled from "views\v_khuyen_mai_moi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2132059fc6b0fa63df9-80871055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33c96f4a8792a11610fab0f9e6525a1c852c8ee9' => 
    array (
      0 => 'views\\v_khuyen_mai_moi.tpl',
      1 => 1510040146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2132059fc6b0fa63df9-80871055',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59fc6b0faeedf8_65536880',
  'variables' => 
  array (
    'khuyen_mai_moi' => 0,
    'km_moi' => 0,
    'm_san_pham' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fc6b0faeedf8_65536880')) {function content_59fc6b0faeedf8_65536880($_smarty_tpl) {?><div class="sidebar-widget hot-deals wow fadeInUp">
	<h3 class="section-title" style="font-family:Tahoma, Geneva, sans-serif; font-weight:bold">Khuyến mãi mới</h3>
	<div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-xs">
		<?php  $_smarty_tpl->tpl_vars['km_moi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['km_moi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['khuyen_mai_moi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['km_moi']->key => $_smarty_tpl->tpl_vars['km_moi']->value) {
$_smarty_tpl->tpl_vars['km_moi']->_loop = true;
?>
			<div class="item">
					<div class="products">
						<div class="hot-deal-wrapper">
							<div class="image">
								<img src="assets/images/products/<?php echo $_smarty_tpl->tpl_vars['km_moi']->value->hinh;?>
" alt="">
							</div>
							<div class="sale-offer-tag"><span>-<?php echo $_smarty_tpl->tpl_vars['km_moi']->value->khuyen_mai;?>
%</span></div>
						</div><!-- /.hot-deal-wrapper -->

						<div class="product-info text-left m-t-20">
							<h3 class="name">
                            	<a href="sp_<?php echo thu_vien::bo_dau($_smarty_tpl->tpl_vars['km_moi']->value->ten_san_pham);?>
.<?php echo $_smarty_tpl->tpl_vars['km_moi']->value->ma_san_pham;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['km_moi']->value->ten_san_pham;?>
"><?php echo $_smarty_tpl->tpl_vars['km_moi']->value->ten_san_pham;?>
</a>
                            </h3>
							<div class="rating-range">
                                <div class="star-raw"></div>
                                <div class="star-yel" style="width:<?php echo $_smarty_tpl->tpl_vars['m_san_pham']->value->star_yel($_smarty_tpl->tpl_vars['km_moi']->value->ma_san_pham)*16;?>
px"></div>
                            </div>
					<div class="product-price">	
								<span class="price">
									<?php echo number_format($_smarty_tpl->tpl_vars['km_moi']->value->don_gia*(1-$_smarty_tpl->tpl_vars['km_moi']->value->khuyen_mai/100),0,'.',',');?>
 Đ
								</span>
									
							    <span class="price-before-discount"><?php echo number_format($_smarty_tpl->tpl_vars['km_moi']->value->don_gia);?>
 Đ</span>					
							
							</div><!-- /.product-price -->
							
						</div><!-- /.product-info -->

						<div class="cart clearfix animate-effect">
							<div class="action">
								
								<div class="add-cart-button btn-group">
                                	<label class="container-nut-cart">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                            <i class="fa fa-shopping-cart"></i>													
                                        </button>
										<button class="btn btn-primary" type="button">Mua</button>
                                     </label>	
                                    <input style="width:50px; text-align:center; height:34px" type="number" class="sl_dat_mua" name="sl_dat_mua" value="1"/>				
                                    <input type="hidden" class="gia_sp" value="<?php echo $_smarty_tpl->tpl_vars['km_moi']->value->don_gia*(1-$_smarty_tpl->tpl_vars['km_moi']->value->khuyen_mai/100);?>
"/>
                                    <input type="hidden" class="ten_sp" value="<?php echo $_smarty_tpl->tpl_vars['km_moi']->value->ten_san_pham;?>
"/>	
                    <input type="hidden" class="gia_tri_ma_sp" value="<?php echo $_smarty_tpl->tpl_vars['km_moi']->value->ma_san_pham;?>
"/>
								</div>
							</div><!-- /.action -->
						</div><!-- /.cart -->
					</div>	
					</div>
         <?php } ?>
    </div><!-- /.sidebar-widget -->
    
    <div style="text-align:center; padding:10px 0; border-top:#0CF solid 1px; border-bottom:#0CF solid 1px; margin-top:12px">
    	<a style="font-size:16px" href="khuyen_mai">Xem Tất Cả</a>
    </div>
</div><?php }} ?>

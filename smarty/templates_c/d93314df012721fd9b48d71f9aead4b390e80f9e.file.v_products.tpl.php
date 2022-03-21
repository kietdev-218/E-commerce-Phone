<?php /* Smarty version Smarty-3.1.18, created on 2018-04-05 13:57:02
         compiled from "views\san_pham\v_products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1572659faf25c80c882-42031303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd93314df012721fd9b48d71f9aead4b390e80f9e' => 
    array (
      0 => 'views\\san_pham\\v_products.tpl',
      1 => 1510040258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1572659faf25c80c882-42031303',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59faf25c8f6eb2_89423749',
  'variables' => 
  array (
    'san_phams' => 0,
    'input_products' => 0,
    'k' => 0,
    'sp' => 0,
    'm_san_pham' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59faf25c8f6eb2_89423749')) {function content_59faf25c8f6eb2_89423749($_smarty_tpl) {?><div class="row">
	<!-- ============================================== SIDEBAR ============================================== -->	
		<?php echo $_smarty_tpl->getSubTemplate ("views/v_sidebar_sp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        
        <!-- ============================================== CONTENT ============================================== -->
        <div class='col-md-9'>
        <?php if (count($_smarty_tpl->tpl_vars['san_phams']->value)>0) {?>
				<div class="clearfix filters-container m-t-10">
	<div class="row">
		
		<div class="col col-sm-12 col-md-6">
			<div class="col col-sm-3 col-md-6 no-padding">
				<div class="lbl-cnt">
					<span class="lbl">Sắp xếp</span>
					<div class="fld inline">
						<div class="dropdown dropdown-small dropdown-med dropdown-white inline">
							<button id="nut_sort" data-toggle="dropdown" type="button" class="btn dropdown-toggle">
								Mặc định <span class="caret"></span>
							</button>

							<ul role="menu" class="dropdown-menu">
								<li role="presentation">
                                	<input class="kieu_sort" type="hidden" value="order by ma_san_pham desc"/>
                                    <a class="link_sort" href="#">Mặc định</a>
                                </li>
								<li role="presentation">
                                	<input class="kieu_sort" type="hidden" value="order by ten_san_pham"/>
                                	<a class="link_sort" href="#">Tên: A-Z</a>
                                </li>
								<li role="presentation">
                                	<input class="kieu_sort" type="hidden" value="order by ten_san_pham desc"/>
                                	<a class="link_sort" href="#">Tên: Z-A</a>
                                </li>
								<li role="presentation">
                                	<input class="kieu_sort" type="hidden" value="order by gia_ct desc"/>
                                	<a class="link_sort" href="#">Giá: Cao-Thấp</a>
                                </li>
                                <li role="presentation">
                                	<input class="kieu_sort" type="hidden" value="order by gia_ct"/>
                                	<a class="link_sort" href="#">Giá: Thấp-Cao</a>
                                </li>
							</ul>
						</div>
					</div><!-- /.fld -->
				</div><!-- /.lbl-cnt -->
			</div><!-- /.col -->
			
		</div><!-- /.col -->
        
        <div class="col col-sm-12 col-md-6">
			<div class="col col-sm-3 col-md-6 no-padding">
				<div class="lbl-cnt">
					<span class="lbl">Mức giá</span>
					<div class="fld inline">
						<div class="dropdown dropdown-small dropdown-med dropdown-white inline">
							<button id="nut_filter" data-toggle="dropdown" type="button" class="btn dropdown-toggle">
								Mặc định <span class="caret"></span>
							</button>

							<ul role="menu" class="dropdown-menu">
								<li role="presentation">
                                	<input class="kieu_filter" type="hidden" value="order by ma_san_pham desc"/>
                                    <a class="link_filter" href="#">Mặc định</a>
                                </li>
								<li role="presentation">
                                	<input class="kieu_filter" type="hidden" value="and don_gia*(1- khuyen_mai/100) < 2000000 order by gia_ct"/>
                                	<a class="link_filter" href="#">Dưới 2 triệu</a>
                                </li>
								<li role="presentation">
                                	<input class="kieu_filter" type="hidden" value="and don_gia*(1- khuyen_mai/100) between 2000000 and 5000000 order by gia_ct"/>
                                	<a class="link_filter" href="#">2 triệu - 5 triệu</a>
                                </li>
								<li role="presentation">
                                	<input class="kieu_filter" type="hidden" value="and don_gia*(1- khuyen_mai/100) between 5000000 and 10000000 order by gia_ct"/>
                                	<a class="link_filter" href="#">5 triệu - 10 triệu</a>
                                </li>
                                <li role="presentation">
                                	<input class="kieu_filter" type="hidden" value="and don_gia*(1- khuyen_mai/100) > 10000000 order by gia_ct"/>
                                	<a class="link_filter" href="#">Trên 10 triệu</a>
                                </li>
							</ul>
						</div>
					</div><!-- /.fld -->
				</div><!-- /.lbl-cnt -->
			</div><!-- /.col -->
			
		</div>
		<input type="hidden" id="input_products" value="<?php echo $_smarty_tpl->tpl_vars['input_products']->value;?>
"/>
	</div><!-- /.row -->
</div>
				<div class="search-result-container">
                    <div id="wrap-search-result-container">
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane active " id="grid-container">
                                <div class="category-product  inner-top-vs">
                                    <div class="row">
                                    <?php  $_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sp']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['san_phams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->key => $_smarty_tpl->tpl_vars['sp']->value) {
$_smarty_tpl->tpl_vars['sp']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['sp']->key;
?>	
                                    <?php if ($_smarty_tpl->tpl_vars['k']->value<9) {?>							
                                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                                            <div class="products grid-product">
                                                
                                    <div class="product">		
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="sp_<?php echo thu_vien::bo_dau($_smarty_tpl->tpl_vars['sp']->value->ten_san_pham);?>
.<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
.html"><img  src="assets/images/products/<?php echo $_smarty_tpl->tpl_vars['sp']->value->hinh;?>
" alt=""></a>
                                            </div><!-- /.image -->			
                                
                                            <div class="tag <?php echo $_smarty_tpl->tpl_vars['m_san_pham']->value->stick_class($_smarty_tpl->tpl_vars['sp']->value->ma_san_pham);?>
"><span><?php echo $_smarty_tpl->tpl_vars['m_san_pham']->value->stick_class($_smarty_tpl->tpl_vars['sp']->value->ma_san_pham,1);?>
</span></div>                       		   
                                        </div><!-- /.product-image -->
                                            
                                        
                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="sp_<?php echo thu_vien::bo_dau($_smarty_tpl->tpl_vars['sp']->value->ten_san_pham);?>
.<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
.html"><?php echo $_smarty_tpl->tpl_vars['sp']->value->ten_san_pham;?>
</a></h3>
                                            <div class="rating-range">
                                                <div class="star-raw"></div>
                                                <div class="star-yel" style="width:<?php echo $_smarty_tpl->tpl_vars['m_san_pham']->value->star_yel($_smarty_tpl->tpl_vars['sp']->value->ma_san_pham)*16;?>
px"></div>
                                            </div>
                                            <div class="product-price">	
                                                <span class="price">
                                                    <?php echo number_format($_smarty_tpl->tpl_vars['sp']->value->gia_ct,0,',','.');?>

                                                </span>
                                                <?php if ($_smarty_tpl->tpl_vars['sp']->value->don_gia!=$_smarty_tpl->tpl_vars['sp']->value->gia_ct) {?>
                                                <span class="price-before-discount"><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value->don_gia);?>
 Đ</span>
                                                <?php }?>
                                            </div><!-- /.product-price -->
                                            
                                        </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <ul class="list-unstyled">
                                                        <li class="add-cart-button btn-group">
                                                        	<label class="container-nut-cart">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>													
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Mua</button>
                                                             </label>
                                                             <input style="width:50px; text-align:center; height:34px" type="number" class="sl_dat_mua" name="sl_dat_mua" value="1"/>					
                                                              <input type="hidden" class="gia_sp" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value->don_gia*(1-$_smarty_tpl->tpl_vars['sp']->value->khuyen_mai/100);?>
"/>
                                                              <input type="hidden" class="ten_sp" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value->ten_san_pham;?>
"/>	
                                                        	<input type="hidden" class="gia_tri_ma_sp" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
"/>                        
                                                        </li>
                                                    </ul>
                                                </div><!-- /.action -->
                                            </div><!-- /.cart -->
                                            </div><!-- /.product -->
                                      
                                            </div><!-- /.products -->
                                         </div><!-- /.item -->
                                         <?php }?>
                                    <?php } ?>
                                    </div><!-- /.row -->
                                </div><!-- /.category-product -->
                            </div><!-- /.tab-pane -->
                                
                            <input type="hidden" id="input_products_2" value="<?php echo $_smarty_tpl->tpl_vars['input_products']->value;?>
,order by ma_san_pham desc"/>
                            <input type="hidden" id="sl_sp" value="9"/>
                            <?php if (count($_smarty_tpl->tpl_vars['san_phams']->value)>9) {?>
                            <div class="container-button-xemthem">
                            	<div class="wrap-button-xemthem">
                            		<input class="btn-xemthem" type="button" value="Xem thêm"/>
                                 </div>
                            </div>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSubTemplate ("views/script_xl_sp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        </div><!-- /.tab-content -->
                    </div><!--end wrap-search-result-container-->
					<div class="clearfix filters-container">
						
					</div><!-- /.filters-container -->

				</div><!-- /.search-result-container -->
        <?php } else { ?>
        <h3>Sản phẩm đang cập nhật</h3>
        <?php }?>
		</div>
        <!-- ============================================== CONTENT : END============================================== -->
            <!-- /.col -->
</div> <!-- ========= row : END =========== -->
<?php }} ?>

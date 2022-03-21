<?php /* Smarty version Smarty-3.1.18, created on 2018-04-06 12:51:30
         compiled from "views\tim_kiem\v_tim_kiem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2104459fd93ad2aa694-09949646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b437a5bb83100eda15725babc7809a1821dc47b' => 
    array (
      0 => 'views\\tim_kiem\\v_tim_kiem.tpl',
      1 => 1523011820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2104459fd93ad2aa694-09949646',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59fd93ad2b14f0_40631077',
  'variables' => 
  array (
    'san_phams' => 0,
    'tong_so' => 0,
    'keyword' => 0,
    'sp' => 0,
    'm_san_pham' => 0,
    'lst' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fd93ad2b14f0_40631077')) {function content_59fd93ad2b14f0_40631077($_smarty_tpl) {?><div class="row">
	<!-- ============================================== SIDEBAR ============================================== -->	
		<?php echo $_smarty_tpl->getSubTemplate ("views/v_sidebar_sp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        
        <!-- ============================================== CONTENT ============================================== -->
     <div class='col-md-9'>
     <?php if (count($_smarty_tpl->tpl_vars['san_phams']->value)>0) {?>
     	<div class="clearfix filters-container m-t-10">
			<div class="row">
            	<div class='col-md-12'>
                	<h3>Tìm thấy <label style="color:#900"><?php echo $_smarty_tpl->tpl_vars['tong_so']->value;?>
</label> kết quả cho từ khóa <label style="color:#84b943">'<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
'</label></h3>
                </div>
            </div><!-- /.row -->
		</div>
		<div class="search-result-container">
			<div id="myTabContent" class="tab-content">
            	<div class="tab-pane "  id="list-container" style="display:block">
					<div class="category-product  inner-top-vs">
                    <?php  $_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['san_phams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->key => $_smarty_tpl->tpl_vars['sp']->value) {
$_smarty_tpl->tpl_vars['sp']->_loop = true;
?>
                    	<div class="category-product-inner wow fadeInUp">
			<div class="products">				
	            <div class="product-list product">
	<div class="row product-list-row">
		<div class="col col-sm-4 col-lg-4">
			<div class="product-image">
				<div class="image">
					<img data-echo="assets/images/products/<?php echo $_smarty_tpl->tpl_vars['sp']->value->hinh;?>
" src="assets/images/blank.gif" alt="">
				</div>
			</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col col-sm-8 col-lg-8">
			<div class="product-info">
				<h3 class="name"><a href="product-detail.php?ma_san_pham=<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
"><?php echo $_smarty_tpl->tpl_vars['sp']->value->ten_san_pham;?>
</a></h3>
				<div class="rating-range">
                    <div class="star-raw"></div>
                    <div class="star-yel" style="width:<?php echo $_smarty_tpl->tpl_vars['m_san_pham']->value->star_yel($_smarty_tpl->tpl_vars['sp']->value->ma_san_pham)*16;?>
px"></div>
                </div>
				<div class="product-price">	
					<span class="price"><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value->gia_ct,0,',','.');?>
	Đ</span>
                    <?php if ($_smarty_tpl->tpl_vars['sp']->value->don_gia!=$_smarty_tpl->tpl_vars['sp']->value->gia_ct) {?>
					<span class="price-before-discount"><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value->don_gia,0,',','.');?>
	Đ</span>
					<?php }?>						
				</div><!-- /.product-price -->
				<div class="description m-t-10">Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget.</div>
                				<div class="cart clearfix animate-effect">
					<div class="action">
						<ul class="list-unstyled">
							<li class="add-cart-button btn-group">
								<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
									<i class="fa fa-shopping-cart"></i>													
								</button>
								<button class="btn btn-primary" type="button">Add to cart</button>
														
							</li>
		                   
			                <li class="lnk wishlist">
								<a class="add-to-cart" href="detail.html" title="Wishlist">
									 <i class="icon fa fa-heart"></i>
								</a>
							</li>

							<li class="lnk">
								<a class="add-to-cart" href="detail.html" title="Compare">
								    <i class="fa fa-retweet"></i>
								</a>
							</li>
						</ul>
					</div><!-- /.action -->
				</div><!-- /.cart -->
								
			</div><!-- /.product-info -->	
		</div><!-- /.col -->
	</div><!-- /.product-list-row -->
	<div class="tag new"><span>new</span></div>        </div><!-- /.product-list -->
			</div><!-- /.products -->
		</div><!-- /.category-product-inner -->
        			<?php } ?>
        			</div><!-- /.category-product -->
				</div><!-- /.tab-pane #list-container -->
			</div><!-- /.tab-content -->
         	<div class="clearfix filters-container"> </div><!-- /.filters-container -->

		</div><!-- /.search-result-container -->
        <div class="pages_list"><?php echo $_smarty_tpl->tpl_vars['lst']->value;?>
</div>
      <?php } else { ?>
      <h3>Không tìm thấy kết quả cho từ khóa '<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
'</h3>
      <?php }?>
	</div><!-- /.col -->
        <!-- ============================================== CONTENT : END============================================== -->
</div> <!-- ========= row : END =========== -->
<?php }} ?>

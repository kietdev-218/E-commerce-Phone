<?php /* Smarty version Smarty-3.1.18, created on 2018-04-05 12:53:21
         compiled from "views\v_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1832159e9f00426e5c8-44461339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4234a32622b5066f6af54cbdedf19cc9e16f3e31' => 
    array (
      0 => 'views\\v_home.tpl',
      1 => 1522850178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1832159e9f00426e5c8-44461339',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59e9f0042c9940_47067438',
  'variables' => 
  array (
    'count_dg_cao' => 0,
    'i' => 0,
    'k' => 0,
    'danh_gia_cao' => 0,
    'slider' => 0,
    'item' => 0,
    'sps_new' => 0,
    'sp_new' => 0,
    'm_san_pham' => 0,
    'sp_hot' => 0,
    'ds_tin' => 0,
    'tin' => 0,
    'm_nguoi_dung' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e9f0042c9940_47067438')) {function content_59e9f0042c9940_47067438($_smarty_tpl) {?><div class="row">
	<!-- ============================================== SIDEBAR ============================================== -->	
		<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
			
			<!-- ================================== TOP NAVIGATION ================================== -->
<!-- /.side-menu -->
<!-- ================================== TOP NAVIGATION : END ================================== -->
			<!-- ============================================== SPECIAL OFFER ============================================== -->

<div class="sidebar-widget outer-bottom-small wow fadeInUp">
	<h3 class="section-title">Đánh giá cao</h3>
	<div class="sidebar-widget-body outer-top-xs">
		<div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 3;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['count_dg_cao']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['count_dg_cao']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
	        	        <div class="item">
                <?php $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['k']->step = 1;$_smarty_tpl->tpl_vars['k']->total = (int) ceil(($_smarty_tpl->tpl_vars['k']->step > 0 ? $_smarty_tpl->tpl_vars['i']->value+2+1 - ($_smarty_tpl->tpl_vars['i']->value) : $_smarty_tpl->tpl_vars['i']->value-($_smarty_tpl->tpl_vars['i']->value+2)+1)/abs($_smarty_tpl->tpl_vars['k']->step));
if ($_smarty_tpl->tpl_vars['k']->total > 0) {
for ($_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->value, $_smarty_tpl->tpl_vars['k']->iteration = 1;$_smarty_tpl->tpl_vars['k']->iteration <= $_smarty_tpl->tpl_vars['k']->total;$_smarty_tpl->tpl_vars['k']->value += $_smarty_tpl->tpl_vars['k']->step, $_smarty_tpl->tpl_vars['k']->iteration++) {
$_smarty_tpl->tpl_vars['k']->first = $_smarty_tpl->tpl_vars['k']->iteration == 1;$_smarty_tpl->tpl_vars['k']->last = $_smarty_tpl->tpl_vars['k']->iteration == $_smarty_tpl->tpl_vars['k']->total;?>
                <?php if ($_smarty_tpl->tpl_vars['k']->value<$_smarty_tpl->tpl_vars['count_dg_cao']->value) {?>
	        	<div class="products special-product">
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="assets/images/products/<?php echo $_smarty_tpl->tpl_vars['danh_gia_cao']->value[$_smarty_tpl->tpl_vars['k']->value]->hinh;?>
" data-lightbox="image-1" data-title="<?php echo $_smarty_tpl->tpl_vars['danh_gia_cao']->value[$_smarty_tpl->tpl_vars['k']->value]->ten_san_pham;?>
">
						<img width="100" height="120" data-echo="assets/images/products/<?php echo $_smarty_tpl->tpl_vars['danh_gia_cao']->value[$_smarty_tpl->tpl_vars['k']->value]->hinh;?>
" src="assets/images/blank.gif" alt="">
						<div class="zoom-overlay"></div>
					</a>					
				</div><!-- /.image -->
											<div class="tag tag-micro hot">
							<span>hot</span>
						</div>
					
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col col-xs-7">
			<div class="product-info">
				<h3 class="name">
                	<a href="sp_<?php echo thu_vien::bo_dau($_smarty_tpl->tpl_vars['danh_gia_cao']->value[$_smarty_tpl->tpl_vars['k']->value]->ten_san_pham);?>
.<?php echo $_smarty_tpl->tpl_vars['danh_gia_cao']->value[$_smarty_tpl->tpl_vars['k']->value]->ma_san_pham;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['danh_gia_cao']->value[$_smarty_tpl->tpl_vars['k']->value]->ten_san_pham;?>
"><?php echo $_smarty_tpl->tpl_vars['danh_gia_cao']->value[$_smarty_tpl->tpl_vars['k']->value]->ten_san_pham;?>
</a>
                </h3>
				<div class="rating-range">
                	<div class="star-raw"></div>
                    <div class="star-yel" style="width:<?php echo $_smarty_tpl->tpl_vars['danh_gia_cao']->value[$_smarty_tpl->tpl_vars['k']->value]->dtb*16;?>
px"></div>
                </div>
				<div class="product-price">	
					<span class="price">
						<?php echo number_format($_smarty_tpl->tpl_vars['danh_gia_cao']->value[$_smarty_tpl->tpl_vars['k']->value]->don_gia*(1-$_smarty_tpl->tpl_vars['danh_gia_cao']->value[$_smarty_tpl->tpl_vars['k']->value]->khuyen_mai/100),0,',','.');?>

                 	</span>
				</div><!-- /.product-price -->
				<div class="action">
                    <label class="container-nut-cart"><a href="#" class="lnk btn btn-primary">Mua</a></label>
                    <input style="width:50px; text-align:center" type="number" class="sl_dat_mua" name="sl_dat_mua" value="1"/>
                    <input type="hidden" class="gia_sp" value="<?php echo $_smarty_tpl->tpl_vars['danh_gia_cao']->value[$_smarty_tpl->tpl_vars['k']->value]->don_gia*(1-$_smarty_tpl->tpl_vars['danh_gia_cao']->value[$_smarty_tpl->tpl_vars['k']->value]->khuyen_mai/100);?>
"/>
                    <input type="hidden" class="ten_sp" value="<?php echo $_smarty_tpl->tpl_vars['danh_gia_cao']->value[$_smarty_tpl->tpl_vars['k']->value]->ten_san_pham;?>
"/>	
                    <input type="hidden" class="gia_tri_ma_sp" value="<?php echo $_smarty_tpl->tpl_vars['danh_gia_cao']->value[$_smarty_tpl->tpl_vars['k']->value]->ma_san_pham;?>
"/>
                </div>
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        		        	</div>
                 <?php }?>
                <?php }} ?>
	        </div>
        <?php }} ?>
	    		    </div>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== SPECIAL OFFER : END ============================================== -->
<?php echo $_smarty_tpl->getSubTemplate ("views/v_tag.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<!-- ============================================== HOT DEALS ============================================== -->
<?php echo $_smarty_tpl->getSubTemplate ("views/v_khuyen_mai_moi.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- ============================================== HOT DEALS: END ============================================== -->


		</div><!-- /.sidemenu-holder -->
		<!-- ============================================== SIDEBAR : END ============================================== -->

		<!-- ============================================== CONTENT ============================================== -->
		<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
			<!-- ========================================== SECTION – HERO ========================================= -->
			
<div id="hero">
	<div class="flexslider ma-nivoslider">
                            <div class="ma-loading"></div>
                            <div id="ma-inivoslider-banner7" class="slides">
                            <?php if (count($_smarty_tpl->tpl_vars['slider']->value)>0) {?>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                <img src="assets/images/sliders/<?php echo $_smarty_tpl->tpl_vars['item']->value->hinh;?>
" class="dn" alt="" title="#banner7-caption<?php echo $_smarty_tpl->tpl_vars['item']->value->vi_tri;?>
"  />
                             <?php } ?>
                             <?php }?>
                            </div>
                            <div id="banner7-caption1" class="banner7-caption nivo-html-caption nivo-caption">
                                <div class="timethai"></div>
                                <div class="banner7-content slider-1">
                                    <div class="title-container">
                                        <h1 class="title1"></h1>
                                        <h2 class="title2" ></h2>                                          
                                    </div>
                                    <div class="banner7-des">
                                        <div class="des">
                                            <h1></h1>
                                            <h2></h2>
                                            
                                        </div>
                                    </div>                                                                                              
                                    <img class="img1" src="" alt="" />                                                                              
                                </div>
                            </div>                      
                            <div id="banner7-caption2" class="banner7-caption nivo-html-caption nivo-caption">
                                <div class="timethai"></div>
                                <div class="banner7-content slider-2">
                                    <div class="title-container">
                                        <h1 class="title1"></h1>
                                        <h2 class="title2" ></h2>                                          
                                    </div>
                                    <div class="banner7-des">
                                        <div class="des">
                                            <h1></h1>
                                            <h2></h2>
                                        </div>
                                    </div>                                                                                              
                                    <img class="img1" src="" alt="" />                                                                                  
                                </div>
                            </div>
                        </div><!-- /.owl-carousel -->
</div>
	<script type="text/javascript">
	 /* Main Slideshow */
            $(window).load(function() {
                $(document).off('mouseenter').on('mouseenter', '.pos-slideshow', function(e){
                    $('.ma-banner7-container .timethai').addClass('pos_hover');
                });
                $(document).off('mouseleave').on('mouseleave', '.pos-slideshow', function(e){
                    $('.ma-banner7-container .timethai').removeClass('pos_hover');
                });
            });
            $(window).load(function() {
                $('#ma-inivoslider-banner7').nivoSlider({
                    effect: 'random',
                    slices: 15,
                    boxCols: 8,
                    boxRows: 4,
                    animSpeed: 1000,
                    pauseTime: 6000,
                    startSlide: 0,
                    controlNav: false,
                    controlNavThumbs: false,
                    pauseOnHover: true,
                    manualAdvance: false,
                    prevText: 'Prev',
                    nextText: 'Next',
                    afterLoad: function(){
                        },     
                    beforeChange: function(){ 
                    }, 
                    afterChange: function(){ 
                    }
                });
            });
</script>		
<!-- ========================================= SECTION – HERO : END ========================================= -->	

			<!-- ============================================== INFO BOXES ============================================== -->
<div class="info-boxes wow fadeInUp">
	<div class="info-boxes-inner">
		<div class="row">
			<div class="col-md-6 col-sm-4 col-lg-4">
				<div class="info-box">
					<div class="row">
						<div class="col-xs-2">
						     <i class="icon fa fa-dollar"></i>
						</div>
						<div class="col-xs-10">
							<h4 class="info-box-heading green">money back</h4>
						</div>
					</div>	
					<h6 class="text">30 Day Money Back Guarantee.</h6>
				</div>
			</div><!-- .col -->

			<div class="hidden-md col-sm-4 col-lg-4">
				<div class="info-box">
					<div class="row">
						<div class="col-xs-2">
							<i class="icon fa fa-truck"></i>
						</div>
						<div class="col-xs-10">
							<h4 class="info-box-heading orange">free shipping</h4>
						</div>
					</div>
					<h6 class="text">free ship-on oder over $600.00</h6>	
				</div>
			</div><!-- .col -->

			<div class="col-md-6 col-sm-4 col-lg-4">
				<div class="info-box">
					<div class="row">
						<div class="col-xs-2">
							<i class="icon fa fa-gift"></i>
						</div>
						<div class="col-xs-10">
							<h4 class="info-box-heading red">Special Sale</h4>
						</div>
					</div>
					<h6 class="text">All items-sale up to 20% off </h6>	
				</div>
			</div><!-- .col -->
		</div><!-- /.row -->
	</div><!-- /.info-boxes-inner -->
	
</div><!-- /.info-boxes -->
<!-- ============================================== INFO BOXES : END ============================================== -->

			<!-- ============================================== San pham moi ============================================== -->
<section class="section featured-product wow fadeInUp">
	<h3 class="section-title" style="font-family:Tahoma, Geneva, sans-serif; font-weight:bold">Sản phẩm mới</h3>
	<div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
	    <?php  $_smarty_tpl->tpl_vars['sp_new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sp_new']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sps_new']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sp_new']->key => $_smarty_tpl->tpl_vars['sp_new']->value) {
$_smarty_tpl->tpl_vars['sp_new']->_loop = true;
?>	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="sp_<?php echo thu_vien::bo_dau($_smarty_tpl->tpl_vars['sp_new']->value->ten_san_pham);?>
.<?php echo $_smarty_tpl->tpl_vars['sp_new']->value->ma_san_pham;?>
.html"><img  src="assets/images/blank.gif" data-echo="assets/images/products/<?php echo $_smarty_tpl->tpl_vars['sp_new']->value->hinh;?>
" alt=""></a>
			</div><!-- /.image -->			

			                        <div class="tag <?php echo $_smarty_tpl->tpl_vars['m_san_pham']->value->stick_class($_smarty_tpl->tpl_vars['sp_new']->value->ma_san_pham);?>
"><span><?php echo $_smarty_tpl->tpl_vars['m_san_pham']->value->stick_class($_smarty_tpl->tpl_vars['sp_new']->value->ma_san_pham,1);?>
</span></div>	   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name">
            	<a href="sp_<?php echo thu_vien::bo_dau($_smarty_tpl->tpl_vars['sp_new']->value->ten_san_pham);?>
.<?php echo $_smarty_tpl->tpl_vars['sp_new']->value->ma_san_pham;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['sp_new']->value->ten_san_pham;?>
"><?php echo $_smarty_tpl->tpl_vars['sp_new']->value->ten_san_pham;?>
</a>
            </h3>
			<div class="rating-range">
               <div class="star-raw"></div>
               <div class="star-yel" style="width:<?php echo $_smarty_tpl->tpl_vars['m_san_pham']->value->star_yel($_smarty_tpl->tpl_vars['sp_new']->value->ma_san_pham)*16;?>
px"></div>
            </div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					<?php echo number_format($_smarty_tpl->tpl_vars['sp_new']->value->don_gia*(1-$_smarty_tpl->tpl_vars['sp_new']->value->khuyen_mai/100),0,'.',',');?>
 Đ				</span>
					<?php if ($_smarty_tpl->tpl_vars['sp_new']->value->khuyen_mai>0) {?><span class="price-before-discount"><?php echo $_smarty_tpl->tpl_vars['sp_new']->value->don_gia;?>
 Đ</span><?php }?>
									
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
                            <input type="hidden" class="gia_sp" value="<?php echo $_smarty_tpl->tpl_vars['sp_new']->value->don_gia*(1-$_smarty_tpl->tpl_vars['sp_new']->value->khuyen_mai/100);?>
"/>
                            <input type="hidden" class="ten_sp" value="<?php echo $_smarty_tpl->tpl_vars['sp_new']->value->ten_san_pham;?>
"/>	
                    <input type="hidden" class="gia_tri_ma_sp" value="<?php echo $_smarty_tpl->tpl_vars['sp_new']->value->ma_san_pham;?>
"/>		
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
        <?php } ?>
			</div><!-- /.home-owl-carousel -->
</section><!-- /.section -->
<!-- ============================================== San pham moi : END ============================================== -->
			<!-- ============================================== WIDE PRODUCTS ============================================== -->
<div class="wide-banners wow fadeInUp outer-bottom-vs">
	<div class="row">

		<div class="col-md-12">
			<div class="wide-banner cnt-strip">
				<div class="image">
					<img class="img-responsive" data-echo="assets/images/banners/3.png" src="assets/images/blank.gif" alt="">
				</div>	
				<div class="strip strip-text">
					<div class="strip-inner">
						<h2 class="text-right" style="font:Tahoma, Geneva, sans-serif; font-weight:bold"><br>
						<span class="shopping-needs" style="font:Tahoma, Geneva, sans-serif; font-weight:bold"></span></h2>
					</div>	
				</div>

			</div><!-- /.wide-banner -->
		</div><!-- /.col -->

	</div><!-- /.row -->
</div><!-- /.wide-banners -->
<!-- ============================================== WIDE PRODUCTS : END ============================================== -->
			<!-- ============================================== BEST SELLER ============================================== -->

<div class="sidebar-widget wow fadeInUp outer-bottom-vs">
	<h3 class="section-title">Bán chạy nhất</h3>
	<div class="sidebar-widget-body outer-top-xs">
		<div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 3;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['sp_hot']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['sp_hot']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
	        	        <div class="item">
	        	<div class="products best-product">
                <?php $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['k']->step = 1;$_smarty_tpl->tpl_vars['k']->total = (int) ceil(($_smarty_tpl->tpl_vars['k']->step > 0 ? $_smarty_tpl->tpl_vars['i']->value+2+1 - ($_smarty_tpl->tpl_vars['i']->value) : $_smarty_tpl->tpl_vars['i']->value-($_smarty_tpl->tpl_vars['i']->value+2)+1)/abs($_smarty_tpl->tpl_vars['k']->step));
if ($_smarty_tpl->tpl_vars['k']->total > 0) {
for ($_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->value, $_smarty_tpl->tpl_vars['k']->iteration = 1;$_smarty_tpl->tpl_vars['k']->iteration <= $_smarty_tpl->tpl_vars['k']->total;$_smarty_tpl->tpl_vars['k']->value += $_smarty_tpl->tpl_vars['k']->step, $_smarty_tpl->tpl_vars['k']->iteration++) {
$_smarty_tpl->tpl_vars['k']->first = $_smarty_tpl->tpl_vars['k']->iteration == 1;$_smarty_tpl->tpl_vars['k']->last = $_smarty_tpl->tpl_vars['k']->iteration == $_smarty_tpl->tpl_vars['k']->total;?>
                <?php if ($_smarty_tpl->tpl_vars['k']->value<count($_smarty_tpl->tpl_vars['sp_hot']->value)) {?>
                	<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="assets/images/products/<?php echo $_smarty_tpl->tpl_vars['sp_hot']->value[$_smarty_tpl->tpl_vars['k']->value]->hinh;?>
" data-lightbox="image-1" data-title="<?php echo $_smarty_tpl->tpl_vars['sp_hot']->value[$_smarty_tpl->tpl_vars['k']->value]->ten_san_pham;?>
">
						<img data-echo="assets/images/products/<?php echo $_smarty_tpl->tpl_vars['sp_hot']->value[$_smarty_tpl->tpl_vars['k']->value]->hinh;?>
" src="assets/images/blank.gif" alt="">
						<div class="zoom-overlay"></div>
					</a>					
				</div><!-- /.image -->
					
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="sp_<?php echo thu_vien::bo_dau($_smarty_tpl->tpl_vars['sp_hot']->value[$_smarty_tpl->tpl_vars['k']->value]->ten_san_pham);?>
.<?php echo $_smarty_tpl->tpl_vars['sp_hot']->value[$_smarty_tpl->tpl_vars['k']->value]->ma_san_pham;?>
.html"><?php echo $_smarty_tpl->tpl_vars['sp_hot']->value[$_smarty_tpl->tpl_vars['k']->value]->ten_san_pham;?>
</a></h3>
				<div class="rating-range">
                	<div class="star-raw"></div>
                    <div class="star-yel" style="width:<?php echo $_smarty_tpl->tpl_vars['m_san_pham']->value->star_yel($_smarty_tpl->tpl_vars['sp_hot']->value[$_smarty_tpl->tpl_vars['k']->value]->ma_san_pham)*16;?>
px"></div>
                </div>
				<div class="product-price">	
					<span class="price"><?php echo number_format($_smarty_tpl->tpl_vars['sp_hot']->value[$_smarty_tpl->tpl_vars['k']->value]->don_gia*(1-$_smarty_tpl->tpl_vars['sp_hot']->value[$_smarty_tpl->tpl_vars['k']->value]->khuyen_mai/100),0,'.',',');?>
 Đ</span>
					<?php if ($_smarty_tpl->tpl_vars['sp_hot']->value[$_smarty_tpl->tpl_vars['k']->value]->khuyen_mai>0) {?><span class="price-before-discount"><?php echo $_smarty_tpl->tpl_vars['sp_hot']->value[$_smarty_tpl->tpl_vars['k']->value]->don_gia;?>
 Đ</span><?php }?>
                </div><!-- /.product-price -->
				<div class="action">
                	<label class="container-nut-cart"><a href="#" class="lnk btn btn-primary">Mua</a></label>
                    <input style="width:50px; text-align:center" type="number" class="sl_dat_mua" name="sl_dat_mua" value="1"/>
                    <input type="hidden" class="ten_sp" value="<?php echo $_smarty_tpl->tpl_vars['sp_hot']->value[$_smarty_tpl->tpl_vars['k']->value]->ten_san_pham;?>
"/>
                    <input type="hidden" class="gia_sp" value="<?php echo $_smarty_tpl->tpl_vars['sp_hot']->value[$_smarty_tpl->tpl_vars['k']->value]->don_gia*(1-$_smarty_tpl->tpl_vars['sp_hot']->value[$_smarty_tpl->tpl_vars['k']->value]->khuyen_mai/100);?>
"/>	
                    <input type="hidden" class="gia_tri_ma_sp" value="<?php echo $_smarty_tpl->tpl_vars['sp_hot']->value[$_smarty_tpl->tpl_vars['k']->value]->ma_san_pham;?>
"/>					
                </div>
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
                 <?php }?>
                <?php }} ?>
		        		        	</div>
	        </div>
         <?php }} ?>
	    		    </div>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== BEST SELLER : END ============================================== -->	

			<!-- ============================================== BLOG SLIDER ============================================== -->
<section class="section outer-bottom-vs wow fadeInUp">
	<h3 class="section-title"><a class="title-cont-news" title="Tin tức" href="tin_tuc">Tin tức</a></h3>
	<div class="blog-slider-container outer-top-xs">
		<div class="owl-carousel blog-slider custom-carousel">
			<?php  $_smarty_tpl->tpl_vars['tin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_tin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tin']->key => $_smarty_tpl->tpl_vars['tin']->value) {
$_smarty_tpl->tpl_vars['tin']->_loop = true;
?>										
				<div class="item">
					<div class="blog-post">
						<div class="blog-post-image">
							<div class="image">
								<a href="bt_<?php echo thu_vien::bo_dau($_smarty_tpl->tpl_vars['tin']->value->ten_bai_viet);?>
.<?php echo $_smarty_tpl->tpl_vars['tin']->value->ma_bai_viet;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['tin']->value->ten_bai_viet;?>
"><img data-echo="assets/images/news/<?php echo $_smarty_tpl->tpl_vars['tin']->value->hinh;?>
" src="assets/images/blank.gif" alt=""></a>
							</div>
						</div><!-- /.blog-post-image -->
					
					
						<div class="blog-post-info text-left">
							<h3 class="name"><a href="bt_<?php echo thu_vien::bo_dau($_smarty_tpl->tpl_vars['tin']->value->ten_bai_viet);?>
.<?php echo $_smarty_tpl->tpl_vars['tin']->value->ma_bai_viet;?>
.html"><?php echo $_smarty_tpl->tpl_vars['tin']->value->ten_bai_viet;?>
</a></h3>	
							<span class="author_h"> 
                            <?php if (!empty($_smarty_tpl->tpl_vars['m_nguoi_dung']->value->nguoi_dung($_smarty_tpl->tpl_vars['tin']->value->ma_nguoi_dung))) {?>
                            <?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->nguoi_dung($_smarty_tpl->tpl_vars['tin']->value->ma_nguoi_dung)->ten_dang_nhap;?>

                            <?php } else { ?>
                            user
                            <?php }?>
                            </span>
                            <span class="review_h"><?php echo $_smarty_tpl->tpl_vars['tin']->value->luot_xem;?>
</span>
                            <span class="date-time_h"><?php echo date('d-m-Y',strtotime($_smarty_tpl->tpl_vars['tin']->value->ngay_dang));?>
</span>
							<p class="text"><?php echo $_smarty_tpl->tpl_vars['tin']->value->noi_dung_tom_tat;?>
</p>
							<a href="bt_<?php echo thu_vien::bo_dau($_smarty_tpl->tpl_vars['tin']->value->ten_bai_viet);?>
.<?php echo $_smarty_tpl->tpl_vars['tin']->value->ma_bai_viet;?>
.html" class="lnk btn btn-primary">Đọc tin</a>
						</div><!-- /.blog-post-info -->
						
						
					</div><!-- /.blog-post -->
				</div><!-- /.item -->
			<?php } ?>
		</div><!-- /.owl-carousel -->
	</div><!-- /.blog-slider-container -->
</section><!-- /.section -->
<!-- ============================================== BLOG SLIDER : END ============================================== -->	

		</div><!-- /.homebanner-holder -->
		<!-- ============================================== CONTENT : END ============================================== -->
	</div>
<?php }} ?>

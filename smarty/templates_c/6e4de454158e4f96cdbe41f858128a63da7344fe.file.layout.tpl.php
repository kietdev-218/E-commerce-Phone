<?php /* Smarty version Smarty-3.1.18, created on 2018-04-05 14:54:38
         compiled from "smarty\templates\bai_viet\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2433759ec6ce6610de7-59431177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e4de454158e4f96cdbe41f858128a63da7344fe' => 
    array (
      0 => 'smarty\\templates\\bai_viet\\layout.tpl',
      1 => 1508750408,
      2 => 'file',
    ),
    'c0e1035e7417e8b863bd30f8ec5e1bc1a9736835' => 
    array (
      0 => 'smarty\\templates\\san_pham\\layout.tpl',
      1 => 1508747648,
      2 => 'file',
    ),
    'e0734278ae9da0e34a12899ed984b77d116c8cf5' => 
    array (
      0 => 'smarty\\templates\\layout.tpl',
      1 => 1508747446,
      2 => 'file',
    ),
    '52829958461c7c2c7960435a8326ca81056cdb4e' => 
    array (
      0 => 'smarty\\templates\\san_pham\\breadcrumb.tpl',
      1 => 1508667436,
      2 => 'file',
    ),
    '6652bf75f43eb8665356b88e8a0e2401680ee1b9' => 
    array (
      0 => 'smarty\\templates\\header.tpl',
      1 => 1522923506,
      2 => 'file',
    ),
    '9d8a996fac83122decb51d72fce7bec36e5976b3' => 
    array (
      0 => 'smarty\\templates\\brand_carousel.tpl',
      1 => 1508747370,
      2 => 'file',
    ),
    '70eba14aea234c9b7881b48964462938ebb4971e' => 
    array (
      0 => 'smarty\\templates\\footer.tpl',
      1 => 1508747494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2433759ec6ce6610de7-59431177',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59ec6ce696fea4_51359831',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ec6ce696fea4_51359831')) {function content_59ec6ce696fea4_51359831($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php /*  Call merged included template "header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2433759ec6ce6610de7-59431177');
content_5ac61c8e97f1b3_71658584($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "header.tpl" */?>
<?php echo $_smarty_tpl->getSubTemplate ("content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2433759ec6ce6610de7-59431177');
content_5ac61c8ead3130_19495070($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "footer.tpl" */?><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2018-04-05 14:54:38
         compiled from "smarty\templates\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ac61c8e97f1b3_71658584')) {function content_5ac61c8e97f1b3_71658584($_smarty_tpl) {?><!-- ============================================== HEADER ============================================== -->

<header class="header-style-1"> 
  
  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
          <?php if (isset($_SESSION['name'])) {?>
          	<li><a href="javascript:void(0)"><i class="icon fa fa-user"></i><label style="color:#06C"><?php echo $_SESSION['name'];?>
</label></a></li>
			<li><a href="cap_nhat_nguoi_dung.php"><i class="icon fa fa-pencil"></i>Cập nhật</a></li>
            <li><a href="logout.php?logout=1"><i class="icon fa fa-sign-out"></i>Thoát</a></li>
           <?php } else { ?>
            <li><a href="login_register.php"><i class="icon fa fa-sign-in"></i>Đăng Nhập / Đăng Ký</a></li>
            <?php }?>
          </ul>
        </div>
        <!-- /.cnt-account -->
        
        <div class="cnt-block">
          <div class="contact-row">
            <div class="phone inline"> <i class="icon fa fa-phone"></i> (028) 888 888 888 </div>
            <div class="contact inline"> <i class="icon fa fa-envelope"></i> thanhthanh@gmail.com </div>
          </div>
        </div>
        <!-- /.cnt-cart -->
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.header-top --> 
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder"> 
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="."> <img src="assets/images/logo.png" width="240px" alt=""> </a> </div>
          <!-- /.logo --> 
          <!-- ============================================================= LOGO : END ============================================================= --> </div>
        <!-- /.logo-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder"> 
          <!-- /.contact-row --> 
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
              <div class="control-group">
                <input class="search-field" placeholder="Tìm sản phẩm" />
                <div id="cont_combo_list_keyword" style="display:none">
                
                 </div>
              </div>
              <div class="nut_tim"></div>
              <div class="clear"></div>
          </div>
          <!-- /.search-area --> 
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
        <!-- /.top-search-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row"> 
          <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
          
          <div id="container-cart-header" class="dropdown dropdown-cart">
          <?php if (!isset($_smarty_tpl->tpl_vars['page_cart']->value)) {?>
          	<a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
            	<div class="items-cart-inner">
              <div class="total-price-basket"> 
                  <span class="lbl">giỏ hàng -</span> <span class="total-price">
                      <span class="value">
                      <?php if (isset($_SESSION['thanh_tien'])) {?><?php echo number_format($_SESSION['thanh_tien'],0,',','.');?>
 Đ
                      <?php } else { ?>Trống<?php }?>
                      </span> 
                  </span> 
              </div>
              <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
              <?php if (isset($_SESSION['tong_so'])) {?><div class="basket-item-count">
              	<span class="count">(<?php echo $_SESSION['tong_so'];?>
)</span></div><?php }?>
            </div>
            </a>
            <?php if (isset($_SESSION['gio_hang'])) {?>
            
            <ul class="dropdown-menu dropdown-menu-cart">
            <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['ma_san_pham'] = new Smarty_Variable;
 $_from = $_SESSION['gio_hang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['ma_san_pham']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
            <?php $_smarty_tpl->tpl_vars['san_pham'] = new Smarty_variable($_smarty_tpl->tpl_vars['m_san_pham']->value->san_pham_ct($_smarty_tpl->tpl_vars['ma_san_pham']->value), null, 0);?>
              <li>
                <div class="cart-item product-summary">
                  <div class="row">
                    <div class="col-xs-4">
                      <div class="image"> <a href="">
                      <img src="assets/images/products/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
" alt=""></a> </div>
                    </div>
                    <div class="col-xs-7">
                      <h3 class="name"><a href=""><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham;?>
</a></h3>
                      <div class="price">
                      	<?php echo $_smarty_tpl->tpl_vars['info']->value['so_luong'];?>
x
                      	<?php echo number_format($_smarty_tpl->tpl_vars['info']->value['don_gia'],0,',','.');?>
 Đ
                      </div>
                    </div>
                    
                  </div>
                </div>
                <!-- /.cart-item -->
                <div class="clearfix"></div>
                <hr>
                <!-- /.cart-total--> 
                
              </li>
              <?php } ?>
              <div class="clearfix cart-total">
                  <div class="pull-right"> <span class="text">Tổng cộng :</span><span class='price'><?php echo number_format($_SESSION['thanh_tien'],0,',','.');?>
 Đ</span> </div>
                  <div class="clearfix"></div>
                  <a href="gio_hang" class="btn btn-upper btn-primary btn-block m-t-20">Xem giỏ hàng</a> </div>
            </ul>
            <?php }?>
            <!-- /.dropdown-menu-->
            <?php }?>
          </div>
          <!-- /.dropdown-cart --> 
          
          <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> </div>
        <!-- /.top-cart-row --> 
      </div>
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.main-header --> 
  
  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
              
                 <li class="dropdown"><a href=".">TRANG CHỦ</a></li>
                 <li class="dropdown"><a href="gioi_thieu">GIỚI THIỆU</a></li>
                  <li class="dropdown yamm"> 
                	<a href="javascript:void(0)" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">SẢN PHẨM</a>
                    <ul class="dropdown-menu">
                        <li>
                          <div class="yamm-content">
                            <div class="row">
                              <div class='col-sm-12'>
                              <?php  $_smarty_tpl->tpl_vars['loai'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loai']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_loai_sp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->key => $_smarty_tpl->tpl_vars['loai']->value) {
$_smarty_tpl->tpl_vars['loai']->_loop = true;
?>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                  <h2 class="title"><a href="loai_<?php echo thu_vien::bo_dau($_smarty_tpl->tpl_vars['loai']->value->ten_nha_san_xuat);?>
.<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_nha_san_xuat;?>
">
                                  <?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_nha_san_xuat;?>
</a></h2>
                                  <ul class="links">
                                  <?php $_smarty_tpl->tpl_vars['ds_hang'] = new Smarty_variable($_smarty_tpl->tpl_vars['m_san_pham']->value->ds_loai_sp($_smarty_tpl->tpl_vars['loai']->value->ma_nha_san_xuat), null, 0);?>
                                  <?php  $_smarty_tpl->tpl_vars['hang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_hang']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hang']->key => $_smarty_tpl->tpl_vars['hang']->value) {
$_smarty_tpl->tpl_vars['hang']->_loop = true;
?>
                                    <li><a href="hang_<?php echo thu_vien::bo_dau($_smarty_tpl->tpl_vars['hang']->value->ten_nha_san_xuat);?>
.<?php echo $_smarty_tpl->tpl_vars['hang']->value->ma_nha_san_xuat;?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['hang']->value->ten_nha_san_xuat;?>
</a>
                                    </li>
                                   <?php } ?>
                                  </ul>
                                </div>
                               <?php } ?>
                                <!-- /.col -->
    
                              </div>
                            </div>
                            <!-- /.row --> 
                          </div>
                          <!-- /.yamm-content --> </li>
                  	</ul>
                  </li>
                  <li class="dropdown"><a href="tin_tuc">TIN TỨC</a></li>
                  <li class="dropdown"><a href="lien_he">LIÊN HỆ</a></li>
         
              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer --> 
          </div>
          <!-- /.navbar-collapse --> 
          
        </div>
        <!-- /.nav-bg-class --> 
      </div>
      <!-- /.navbar-default --> 
    </div>
    <!-- /.container-class --> 
    
  </div>
  <!-- /.header-nav --> 
  <!-- ============================================== NAVBAR : END ============================================== --> 
  
</header>

<!-- ============================================== HEADER : END ============================================== --> 
<?php /*  Call merged included template "san_pham/breadcrumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("san_pham/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2433759ec6ce6610de7-59431177');
content_5ac61c8eab1d74_68077826($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "san_pham/breadcrumb.tpl" */?>
<div class="body-content outer-top-xs">
	<div class="container"><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2018-04-05 14:54:38
         compiled from "smarty\templates\san_pham\breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ac61c8eab1d74_68077826')) {function content_5ac61c8eab1d74_68077826($_smarty_tpl) {?><div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li style="display:inline"><a href=".">Trang chủ</a></li>
                <?php echo $_smarty_tpl->tpl_vars['dieu_huong']->value;?>

			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2018-04-05 14:54:38
         compiled from "smarty\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ac61c8ead3130_19495070')) {function content_5ac61c8ead3130_19495070($_smarty_tpl) {?>	<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div style="width:100%; height:50px"></div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
	</div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->
<!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="footer color-bg">

    <div class="footer-bottom inner-bottom-sm">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <p style="line-height:30px">
                	<strong style="font-size:20px">CỬA HÀNG THIẾT BỊ DI ĐỘNG THANH THANH</strong><br>
                    Chuyên cung cấp sản phẩm điện máy chất lượng cao, giá cả phải chăng, nhiều khuyến mãi hấp dẫn<br>
                    Giao hàng tận nơi, phục vụ tận tình.<br>
                    Địa chỉ trụ sở chính:210, Nguyễn Văn A, Quận X, TP Hồ Chí Minh <br>
                    Địa chỉ cơ sở 2:107B, Lê Văn B, Quận V, Tp Hồ Chí Minh<br>
                    Điện thoại: (028) 38.351.056      Fax: (08)3333333<br>
                    Email: thanhthanh@gmail.com 
                	</p>
                </div><!-- /.col -->

                <div style="position:relative; min-height:200px;line-height:30px" class="col-xs-12 col-md-6">
                	<strong style="font-size:20px">Giờ làm việc</strong>
                    <p>6:00 đến 21:00 tất cả các ngày trong tuần, nghỉ lễ, Tết</p>
                    <div class="div-bocongthuong">
                		<img class="icon-bocongthuong" src="assets/images/icon/20150827110756-dathongbao.png"/>
                	</div>
                </div><!-- /.col -->
            </div>
        </div>
    </div>

    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-padding">
                <div class="copyright">
                   Copyright © 2017
                    <a href=".">Di Động Thanh Thanh</a>
                    - All rights Reserved
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 no-padding">
                <div class="clearfix payment-methods">
                </div><!-- /.payment-methods -->
            </div>
        </div>
    </div>
</footer>
<!-- ============================================================= FOOTER : END============================================================= -->


	<!-- For demo purposes – can be removed on production -->
	
	<!--<div class="config open">
		<div class="config-options">
			<h4>Pages</h4>
			<ul class="list-unstyled animate-dropdown">
				<li class="dropdown">
					<button class="dropdown-toggle btn btn-primary btn-block" data-toggle="dropdown">View Pages</button>
					<ul class="dropdown-menu" role="menu">
						<li role="presentation" class="dropdown-header">Home Pages</li>
						<li><a href="home.html">Home</a></li>
						<li><a href="home2.html">Home II</a></li>
						<li><a href="home-furniture.html">Home Furniture</a></li>
						<li><a href="homepage1.html">Home Page I</a></li>
						<li><a href="homepage2.html">Home Page II</a></li>
					  	<li class="divider"></li>
					  	<li role="presentation" class="dropdown-header">Other Pages</li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="blog-details.html">Blog Details</a></li>
						<li><a href="category.html">Category</a></li>
						<li><a href="category-2.html">Category II</a></li>
						<li><a href="checkout.html">Checkout</a></li>
						<li><a href="contact.html">Contact</a></li>
						<li><a href="detail.html">Detail</a></li>
						<li><a href="detail2.html">Detail II</a></li>
						<li><a href="shopping-cart.html">Shopping Cart Summary</a></li>						
						
					</ul>
				</li>
			</ul>
			<h4>Header Styles</h4>
			<ul class="list-unstyled">
				<li><a href="home.html">Header 1</a></li>
				<li><a href="homepage1.html">Header 2</a></li>
				<li><a href="home-furniture.html">Header 3</a></li>
			</ul>
			<h4>Layouts</h4>
			<ul class="list-unstyled">
				<li><a href="homepage1.html">Full Width</a></li>
				<li><a href="homepage2.html">Boxed</a></li>
			</ul>
			<h4>Colors</h4>
			<ul>
				<li><a class="changecolor green-text" href="#" title="Green color">Green</a></li>
                <li><a class="changecolor blue-text" href="#" title="Blue color">Blue</a></li>
                <li><a class="changecolor red-text" href="#" title="Red color">Red</a></li>
                <li><a class="changecolor orange-text" href="#" title="Orange color">Orange</a></li>
                <li><a class="changecolor dark-green-text" href="#" title="Darkgreen color">Dark Green</a></li>
			</ul>
		</div>
		<a class="show-theme-options" href="#"><i class="fa fa-wrench"></i></a>
	</div>-->
	<!-- For demo purposes – can be removed on production : End -->
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->

</body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2018-04-05 14:54:38
         compiled from "smarty\templates\brand_carousel.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ac61c8eade384_43346889')) {function content_5ac61c8eade384_43346889($_smarty_tpl) {?><div id="brands-carousel" class="logo-slider wow fadeInUp">

		<h3 class="section-title"></h3>
		<div class="logo-slider-inner">	
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item m-t-15">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item m-t-10">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->
		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->
	
</div><?php }} ?>

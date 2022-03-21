<!-- ============================================== HEADER ============================================== -->

<header class="header-style-1"> 
  
  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
          {if isset($smarty.session.name)}
          	<li><a href="javascript:void(0)"><i class="icon fa fa-user"></i><label style="color:#06C">{$smarty.session.name}</label></a></li>
			<li><a href="cap_nhat_nguoi_dung.php"><i class="icon fa fa-pencil"></i>Cập nhật</a></li>
            <li><a href="logout.php?logout=1"><i class="icon fa fa-sign-out"></i>Thoát</a></li>
           {else}
            <li><a href="login_register.php"><i class="icon fa fa-sign-in"></i>Đăng Nhập / Đăng Ký</a></li>
            {/if}
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
          {if !isset($page_cart)}
          	<a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
            	<div class="items-cart-inner">
              <div class="total-price-basket"> 
                  <span class="lbl">giỏ hàng -</span> <span class="total-price">
                      <span class="value">
                      {if isset($smarty.session.thanh_tien)}{number_format($smarty.session.thanh_tien,0,',','.')} Đ
                      {else}Trống{/if}
                      </span> 
                  </span> 
              </div>
              <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
              {if isset($smarty.session.tong_so)}<div class="basket-item-count">
              	<span class="count">({$smarty.session.tong_so})</span></div>{/if}
            </div>
            </a>
            {if isset($smarty.session.gio_hang)}
            
            <ul class="dropdown-menu dropdown-menu-cart">
            {foreach $smarty.session.gio_hang as $ma_san_pham => $info}
            {$san_pham = $m_san_pham->san_pham_ct($ma_san_pham)}
              <li>
                <div class="cart-item product-summary">
                  <div class="row">
                    <div class="col-xs-4">
                      <div class="image"> <a href="">
                      <img src="assets/images/products/{$san_pham->hinh}" alt=""></a> </div>
                    </div>
                    <div class="col-xs-7">
                      <h3 class="name"><a href="">{$san_pham->ten_san_pham}</a></h3>
                      <div class="price">
                      	{$info['so_luong']}x
                      	{number_format($info['don_gia'],0,',','.')} Đ
                      </div>
                    </div>
                    
                  </div>
                </div>
                <!-- /.cart-item -->
                <div class="clearfix"></div>
                <hr>
                <!-- /.cart-total--> 
                
              </li>
              {/foreach}
              <div class="clearfix cart-total">
                  <div class="pull-right"> <span class="text">Tổng cộng :</span><span class='price'>{number_format($smarty.session.thanh_tien,0,',','.')} Đ</span> </div>
                  <div class="clearfix"></div>
                  <a href="gio_hang" class="btn btn-upper btn-primary btn-block m-t-20">Xem giỏ hàng</a> </div>
            </ul>
            {/if}
            <!-- /.dropdown-menu-->
            {/if}
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
                              {foreach $ds_loai_sp as $loai}
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                  <h2 class="title"><a href="loai_{thu_vien::bo_dau($loai->ten_nha_san_xuat)}.{$loai->ma_nha_san_xuat}">
                                  {$loai->ten_nha_san_xuat}</a></h2>
                                  <ul class="links">
                                  {$ds_hang = $m_san_pham->ds_loai_sp($loai->ma_nha_san_xuat)}
                                  {foreach $ds_hang as $hang}
                                    <li><a href="hang_{thu_vien::bo_dau($hang->ten_nha_san_xuat)}.{$hang->ma_nha_san_xuat}">
                                    {$hang->ten_nha_san_xuat}</a>
                                    </li>
                                   {/foreach}
                                  </ul>
                                </div>
                               {/foreach}
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
{block name="breadcrumb"}{/block}
<div class="body-content outer-top-xs">
	<div class="container">
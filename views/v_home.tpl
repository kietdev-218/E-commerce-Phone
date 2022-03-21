<div class="row">
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
        {for $i=0 to $count_dg_cao step 3}
	        	        <div class="item">
                {for $k=$i to $i+2 step 1}
                {if $k < $count_dg_cao}
	        	<div class="products special-product">
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="assets/images/products/{$danh_gia_cao[$k]->hinh}" data-lightbox="image-1" data-title="{$danh_gia_cao[$k]->ten_san_pham}">
						<img width="100" height="120" data-echo="assets/images/products/{$danh_gia_cao[$k]->hinh}" src="assets/images/blank.gif" alt="">
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
                	<a href="sp_{thu_vien::bo_dau($danh_gia_cao[$k]->ten_san_pham)}.{$danh_gia_cao[$k]->ma_san_pham}.html" title="{$danh_gia_cao[$k]->ten_san_pham}">{$danh_gia_cao[$k]->ten_san_pham}</a>
                </h3>
				<div class="rating-range">
                	<div class="star-raw"></div>
                    <div class="star-yel" style="width:{$danh_gia_cao[$k]->dtb*16}px"></div>
                </div>
				<div class="product-price">	
					<span class="price">
						{number_format($danh_gia_cao[$k]->don_gia*(1 - $danh_gia_cao[$k]->khuyen_mai/100),0,',','.')}
                 	</span>
				</div><!-- /.product-price -->
				<div class="action">
                    <label class="container-nut-cart"><a href="#" class="lnk btn btn-primary">Mua</a></label>
                    <input style="width:50px; text-align:center" type="number" class="sl_dat_mua" name="sl_dat_mua" value="1"/>
                    <input type="hidden" class="gia_sp" value="{$danh_gia_cao[$k]->don_gia*(1-$danh_gia_cao[$k]->khuyen_mai/100)}"/>
                    <input type="hidden" class="ten_sp" value="{$danh_gia_cao[$k]->ten_san_pham}"/>	
                    <input type="hidden" class="gia_tri_ma_sp" value="{$danh_gia_cao[$k]->ma_san_pham}"/>
                </div>
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        		        	</div>
                 {/if}
                {/for}
	        </div>
        {/for}
	    		    </div>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== SPECIAL OFFER : END ============================================== -->
{include file="views/v_tag.tpl"}
			<!-- ============================================== HOT DEALS ============================================== -->
{include file="views/v_khuyen_mai_moi.tpl"}
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
                            {if count($slider) >0}
                            {foreach $slider as $item}
                                <img src="assets/images/sliders/{$item->hinh}" class="dn" alt="" title="#banner7-caption{$item->vi_tri}"  />
                             {/foreach}
                             {/if}
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
	    {foreach $sps_new as $sp_new}	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="sp_{thu_vien::bo_dau($sp_new->ten_san_pham)}.{$sp_new->ma_san_pham}.html"><img  src="assets/images/blank.gif" data-echo="assets/images/products/{$sp_new->hinh}" alt=""></a>
			</div><!-- /.image -->			

			                        <div class="tag {$m_san_pham->stick_class($sp_new->ma_san_pham)}"><span>{$m_san_pham->stick_class($sp_new->ma_san_pham,1)}</span></div>	   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name">
            	<a href="sp_{thu_vien::bo_dau($sp_new->ten_san_pham)}.{$sp_new->ma_san_pham}.html" title="{$sp_new->ten_san_pham}">{$sp_new->ten_san_pham}</a>
            </h3>
			<div class="rating-range">
               <div class="star-raw"></div>
               <div class="star-yel" style="width:{$m_san_pham->star_yel($sp_new->ma_san_pham)*16}px"></div>
            </div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					{number_format($sp_new->don_gia*(1-$sp_new->khuyen_mai/100),0,'.',',')} Đ				</span>
					{if $sp_new->khuyen_mai>0}<span class="price-before-discount">{$sp_new->don_gia} Đ</span>{/if}
									
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
                            <input type="hidden" class="gia_sp" value="{$sp_new->don_gia*(1-$sp_new->khuyen_mai/100)}"/>
                            <input type="hidden" class="ten_sp" value="{$sp_new->ten_san_pham}"/>	
                    <input type="hidden" class="gia_tri_ma_sp" value="{$sp_new->ma_san_pham}"/>		
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
        {/foreach}
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
        {for $i=0 to $sp_hot|count-1 step 3}
	        	        <div class="item">
	        	<div class="products best-product">
                {for $k=$i to $i+2 step 1}
                {if $k < $sp_hot|count}
                	<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="assets/images/products/{$sp_hot[$k]->hinh}" data-lightbox="image-1" data-title="{$sp_hot[$k]->ten_san_pham}">
						<img data-echo="assets/images/products/{$sp_hot[$k]->hinh}" src="assets/images/blank.gif" alt="">
						<div class="zoom-overlay"></div>
					</a>					
				</div><!-- /.image -->
					
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="sp_{thu_vien::bo_dau($sp_hot[$k]->ten_san_pham)}.{$sp_hot[$k]->ma_san_pham}.html">{$sp_hot[$k]->ten_san_pham}</a></h3>
				<div class="rating-range">
                	<div class="star-raw"></div>
                    <div class="star-yel" style="width:{$m_san_pham->star_yel($sp_hot[$k]->ma_san_pham)*16}px"></div>
                </div>
				<div class="product-price">	
					<span class="price">{number_format($sp_hot[$k]->don_gia*(1-$sp_hot[$k]->khuyen_mai/100),0,'.',',')} Đ</span>
					{if $sp_hot[$k]->khuyen_mai>0}<span class="price-before-discount">{$sp_hot[$k]->don_gia} Đ</span>{/if}
                </div><!-- /.product-price -->
				<div class="action">
                	<label class="container-nut-cart"><a href="#" class="lnk btn btn-primary">Mua</a></label>
                    <input style="width:50px; text-align:center" type="number" class="sl_dat_mua" name="sl_dat_mua" value="1"/>
                    <input type="hidden" class="ten_sp" value="{$sp_hot[$k]->ten_san_pham}"/>
                    <input type="hidden" class="gia_sp" value="{$sp_hot[$k]->don_gia*(1-$sp_hot[$k]->khuyen_mai/100)}"/>	
                    <input type="hidden" class="gia_tri_ma_sp" value="{$sp_hot[$k]->ma_san_pham}"/>					
                </div>
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
                 {/if}
                {/for}
		        		        	</div>
	        </div>
         {/for}
	    		    </div>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== BEST SELLER : END ============================================== -->	

			<!-- ============================================== BLOG SLIDER ============================================== -->
<section class="section outer-bottom-vs wow fadeInUp">
	<h3 class="section-title"><a class="title-cont-news" title="Tin tức" href="tin_tuc">Tin tức</a></h3>
	<div class="blog-slider-container outer-top-xs">
		<div class="owl-carousel blog-slider custom-carousel">
			{foreach $ds_tin as $tin}										
				<div class="item">
					<div class="blog-post">
						<div class="blog-post-image">
							<div class="image">
								<a href="bt_{thu_vien::bo_dau($tin->ten_bai_viet)}.{$tin->ma_bai_viet}.html" title="{$tin->ten_bai_viet}"><img data-echo="assets/images/news/{$tin->hinh}" src="assets/images/blank.gif" alt=""></a>
							</div>
						</div><!-- /.blog-post-image -->
					
					
						<div class="blog-post-info text-left">
							<h3 class="name"><a href="bt_{thu_vien::bo_dau($tin->ten_bai_viet)}.{$tin->ma_bai_viet}.html">{$tin->ten_bai_viet}</a></h3>	
							<span class="author_h"> 
                            {if !empty($m_nguoi_dung->nguoi_dung($tin->ma_nguoi_dung))}
                            {$m_nguoi_dung->nguoi_dung($tin->ma_nguoi_dung)->ten_dang_nhap}
                            {else}
                            user
                            {/if}
                            </span>
                            <span class="review_h">{$tin->luot_xem}</span>
                            <span class="date-time_h">{date('d-m-Y',strtotime($tin->ngay_dang))}</span>
							<p class="text">{$tin->noi_dung_tom_tat}</p>
							<a href="bt_{thu_vien::bo_dau($tin->ten_bai_viet)}.{$tin->ma_bai_viet}.html" class="lnk btn btn-primary">Đọc tin</a>
						</div><!-- /.blog-post-info -->
						
						
					</div><!-- /.blog-post -->
				</div><!-- /.item -->
			{/foreach}
		</div><!-- /.owl-carousel -->
	</div><!-- /.blog-slider-container -->
</section><!-- /.section -->
<!-- ============================================== BLOG SLIDER : END ============================================== -->	

		</div><!-- /.homebanner-holder -->
		<!-- ============================================== CONTENT : END ============================================== -->
	</div>

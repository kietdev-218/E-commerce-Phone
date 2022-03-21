
<div class="row single-product outer-bottom-sm">
	<!-- ============================================== SIDEBAR ============================================== -->	
		{include file="views/v_sidebar_sp.tpl"}
        
        <!-- ============================================== CONTENT ============================================== -->
        <div class='col-md-9'>
			<div class="row  wow fadeInUp">
						     <div class="col-xs-12 col-sm-6 col-md-7 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">
    	<div class="container-slider" style="width:100%; margin:auto">
          <div class="container-big-img">
              <div class="item-big-act" style="display:block">
                  <img class="img-big" src="assets/images/products/{$san_pham->hinh}"/> 
               </div>
               {if count($slide_hinh_sp_ct) > 0}
            	{foreach $slide_hinh_sp_ct as $k=>$thumb}
               <div class="item-big">
                   <img class="img-big" src="assets/images/products/{$thumb->ten_hinh}"/> 
                </div>
                {/foreach}
            	{/if}
          </div>
          {if count($slide_hinh_sp_ct) > 0}
          <div class="container-thumb">
              
              <div class="item-thumb-act">
                  <img class="img-thumb" src="assets/images/products/{$san_pham->hinh}"/>
              </div>
              {foreach $slide_hinh_sp_ct as $k=>$thumb}
              <div class="item-thumb">
                  <img class="img-thumb" src="assets/images/products/{$thumb->ten_hinh}"/>
              </div>
              {/foreach}
              <div class="clear"></div>
                  
          </div>
          {/if}
      </div>
    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->	        			
						<div class='col-sm-6 col-md-5 product-info-block product-info-detail'>
							<div class="product-info">
								<h1 class="name">{$san_pham->ten_san_pham}</h1>
                                
								<div class="product-price">	
                                     <span class="price">
                                         {number_format($san_pham->gia_ct,0,',','.')} Đ 
                                      </span>
                                       {if $san_pham->don_gia != $san_pham->gia_ct}
                                       <span class="price-before-discount">{number_format($san_pham->don_gia)} Đ</span>
                                        {/if}
                                </div><!-- /.product-price -->
                                
                                <div id="area_rating"><!-- area_rating -->
                                    <div class="rating-reviews m-t-20">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="rating-range">
                                                    <div class="star-raw"></div>
                                                    <div class="star-yel" style="width:{$m_san_pham->star_yel($san_pham->ma_san_pham)*16}px"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="reviews">
                                                    <a href="#" class="lnk">(Lượt mua: {$san_pham->so_luot_mua})</a>
                                                </div>
                                            </div>
                                        </div><!-- /.row -->		
                                    </div><!-- /.rating-reviews -->
                                    
                                    <div class="stock-container info-container m-t-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="stock-box">
                                                    <span class="label">Tình trạng :</span>
                                                </div>	
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="stock-box">
                                                    <span class="value">{if $san_pham->so_luong>0}Còn hàng{else}Ngừng kinh doanh{/if}</span>
                                                </div>	
                                            </div>
                                        </div><!-- /.row -->	
                                    </div><!-- /.stock-container -->
    
                                    <div class="description-container m-t-20">
                                        Giảm ngay 2 triệu HOẶC Trả góp 0% đến hết năm 2017. Cơ hội trúng nhiều giải thưởng hấp dẫn
     trị giá lên đến hơn 50 triệu.								</div><!-- /.description-container -->
     
                                    <div class="rating-reviews m-t-20">
                                    {if isset($smarty.session.login) && $smarty.session.login == 1 && empty($m_san_pham->da_danh_gia($san_pham->ma_san_pham,$id_login))}
                                        <div class="row">
                                            <div class="col-sm-6">
                                            Đánh giá: 
                                            </div>
                                            <div class="col-sm-3">
                                                  <div style="width:70%; margin:0" id="khachhang-danh-gia" class="danh-gia-san-pham">
                                                      <div class="container-star-null">
                                                        <span class="star-null"></span>
                                                        <span style="left:16px" class="star-null"></span>
                                                        <span style="left:32px" class="star-null"></span>
                                                        <span style="left:48px" class="star-null"></span>
                                                        <span style="left:64px" class="star-null"></span>
                                                      </div>
                                                  </div>
                                            </div>
                                        </div>
                                        
                                        {/if}
                                        {if isset($smarty.session.login) && $smarty.session.login == 1 && !empty($m_san_pham->da_danh_gia($san_pham->ma_san_pham,$id_login))}
                                        <div class="row">
                                            <div class="col-sm-6">
                                            Bạn đã đánh giá: 
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="rating-range rating-range_custom">
                                                    <div class="star-raw"></div>
                                                    <div class="star-yel" style="width:{$m_san_pham->diem_da_danh_gia($san_pham->ma_san_pham,$id_login)}"></div>
                                                </div>
                                             </div>
                                        </div>
                                        {/if}
                                        {if !isset($smarty.session.login)}
                                        <p>Bạn hãy <a href="login_register.php" class="lnk">đăng nhập</a> để đánh giá sản phẩm</p>
                                        {/if}
                                    </div>
                                </div><!-- end area_rating -->
								<div class="row outer-top-vs">
									<div class="col-sm-2 col-lg-2 col-md-4">
										<span class="label">Số lượng :</span>
									</div>
									<div class="col-sm-3 col-lg-3 col-md-4">
                                    	<input type="hidden" class="gia_tri_ma_sp" value="{$san_pham->ma_san_pham}"/>
        <input type="hidden" class="gia_sp" value="{$san_pham->gia_ct}"/>
										<input name="sl_dat_mua" type="number" value="1" class="sl_dat_mua txt txt-qty"/>
                                        <input type="hidden" class="ten_sp" value="{$san_pham->ten_san_pham}"/>
									</div>
									<div class="cart col-md-12 col-lg-6 clearfix animate-effect">
                                    	<div class="container-nut-cart">
                                            <div class="action">		
                                                <button type="button" class="btn btn-primary">Mua</button>
                                            </div><!-- /.action -->
                                         </div>
									</div>
								</div>

								<div class="row product-social-link outer-top-vs">
									<div class="fb-like" data-href="http://localhost/project3/sp_{thu_vien::bo_dau($san_pham->ten_san_pham)}.{$san_pham->ma_san_pham}.html" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
								</div>
								
							</div><!-- /.product-info -->
						</div><!-- /.col-sm-5 -->
					</div><!-- /.row -->
			<div class="product-tabs outer-top-smal  wow fadeInUp">
				
						<ul id="product-tabs" class="nav nav-tabs nav-tab-cell-detail">
							<li class="active"><a data-toggle="tab" href="#description">THÔNG TIN SẢN PHẨM</a></li>
							<li><a data-toggle="tab" href="#review">GIỚI THIỆU SẢN PHẨM</a></li>
							<li><a data-toggle="tab" href="#tags">NHẬN XÉT</a></li>
						</ul><!-- /.nav-tabs #product-tabs -->
					

						<div class="tab-content outer-top-xs">

							<div id="description" class="tab-pane in active">
								<div class="product-tab">
									{$san_pham->tom_tat_thong_so}
								</div>	
							</div><!-- /.tab-pane -->

							<div id="review" class="tab-pane">
								<div class="product-tab">
                                {$san_pham->mo_ta}
								</div><!-- /.product-tab -->
							</div><!-- /.tab-pane -->

								<div id="tags" class="tab-pane">
									<div class="fb-comments" data-href="http://localhost/project3/sp_{thu_vien::bo_dau($san_pham->ten_san_pham)}.{$san_pham->ma_san_pham}.html" data-numposts="5" data-width="100%"></div>
								</div><!-- /.tab-pane -->

							</div><!-- /.tab-content -->

						</div><!-- /.product-tabs -->
		</div>
        <!-- ============================================== CONTENT : END============================================== -->
            <!-- /.col -->
</div> <!-- ========= row : END =========== -->
<section class="section featured-product outer-top-small wow fadeInUp">
		<h3 class="section-title">Sản Phẩm liên quan</h3>
		<div class="owl-carousel home-owl-carousel  custom-carousel owl-theme outer-top-xs" >
			{if count($san_pham_cung_loai) > 1}
            {foreach $san_pham_cung_loai as $i => $spcl}
            {if $i<8 && $i<count($san_pham_cung_loai)} 	
			<div class="item item-carousel">
			<div class="products">
				
	<div class="product featured-product">		
		<div class="product-image">
			<div class="image">
				<a href="sp_{thu_vien::bo_dau($spcl->ten_san_pham)}.{$spcl->ma_san_pham}.html"><img  src="assets/images/products/{$spcl->hinh}" alt=""></a>
			</div><!-- /.image -->			

			 <div class="tag {$m_san_pham->stick_class($spcl->ma_san_pham)}"><span>{$m_san_pham->stick_class($spcl->ma_san_pham,1)}</span></div>		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="sp_{thu_vien::bo_dau($spcl->ten_san_pham)}.{$spcl->ma_san_pham}.html">{$spcl->ten_san_pham}</a></h3>
			<div class="rating-range">
                <div class="star-raw"></div>
                <div class="star-yel" style="width:{$m_san_pham->star_yel($spcl->ma_san_pham)*16}px"></div>
            </div>
            <div class="product-price">	
            	<span class="price">
                    {number_format($spcl->gia_ct,0,',','.')}
                 </span>
                 {if $spcl->don_gia != $spcl->gia_ct}
                  <span class="price-before-discount">{number_format($spcl->don_gia)} Đ</span>
                  {/if}
            </div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
		
        <div class="action">
            <label class="container-nut-cart"><a href="javascript:void(0)" class="lnk btn btn-primary">Mua</a></label>
            <input style="width:50px; text-align:center; height:34px" type="number" class="sl_dat_mua" name="sl_dat_mua" value="1"/>					
            <input type="hidden" class="gia_sp" value="{$spcl->gia_ct}"/>
             <input type="hidden" class="ten_sp" value="{$spcl->ten_san_pham}"/>	
              <input type="hidden" class="gia_tri_ma_sp" value="{$spcl->ma_san_pham}"/>
         </div>
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
        {/if}
        	{/foreach}
        	{/if}
        </div><!-- /.home-owl-carousel -->
			</section>
<div class="clearfix"></div>
<!--lightbox-->
{if isset($smarty.session.login) && $smarty.session.login == 1 && empty($m_san_pham->da_danh_gia($san_pham->ma_san_pham,$id_login))}
<div id="lb_danh_gia_sp" class="light-box">
      <div class="head-light-box">
          <div class="in-head-lightbox">
              Đánh giá sản phẩm
          <span class="dau_X">X</span>
          </div>
      </div>
      
      <div class="content-lightbox">
          <div class="in-content-lightbox">
          
              <div class="danh-gia-san-pham" style="margin:auto; height:100px">
              
                <h3>Bạn muốn đánh giá sản phẩm này ?</h3>
                
                <div class="rating-reviews m-t-20">
                                      <div class="row">
                                          <div class="col-sm-3">
                                              <div class="rating-range">
                                                  <div class="star-raw"></div>
                                                  <div class="star-yel" style=""></div>
                                              </div>
                                          </div>
                                          
                                      </div><!-- /.row -->		
                                  </div><!-- /.rating-reviews -->
                    
              </div>
              
              <div style="width:70px; float:left; padding:10px 0; margin-left:25%">
                  <form name="frm_danh_gia" class="frm_danh_gia" method="post" action="">
                      <input type="hidden" value="" name="diem_danh_gia" id="diem_danh_gia"/>
                      <input type="hidden" value="{$ma_san_pham}" class="ma_san_pham" name=""/>
                      <input name="btn_danh_gia" class="nut-submit nut_chap_nhan_danh_gia" type="submit" value="Đồng ý"/>
                  </form>
              </div>
              
          
               <div style="width:70px; float:right; padding:10px 0; margin-right:25%">
                  <input type="button" value="Cancel" class="nut-submit cancel"/>
               </div>
               <div class="clear"></div>
          </div>
      </div>
  </div>
{/if}
<!--end lightbox-->
<script>
$('.product-tab p img').css('width','90%');
</script>
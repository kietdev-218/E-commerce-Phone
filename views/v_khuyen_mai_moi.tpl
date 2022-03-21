<div class="sidebar-widget hot-deals wow fadeInUp">
	<h3 class="section-title" style="font-family:Tahoma, Geneva, sans-serif; font-weight:bold">Khuyến mãi mới</h3>
	<div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-xs">
		{foreach $khuyen_mai_moi as $km_moi}
			<div class="item">
					<div class="products">
						<div class="hot-deal-wrapper">
							<div class="image">
								<img src="assets/images/products/{$km_moi->hinh}" alt="">
							</div>
							<div class="sale-offer-tag"><span>-{$km_moi->khuyen_mai}%</span></div>
						</div><!-- /.hot-deal-wrapper -->

						<div class="product-info text-left m-t-20">
							<h3 class="name">
                            	<a href="sp_{thu_vien::bo_dau($km_moi->ten_san_pham)}.{$km_moi->ma_san_pham}.html" title="{$km_moi->ten_san_pham}">{$km_moi->ten_san_pham}</a>
                            </h3>
							<div class="rating-range">
                                <div class="star-raw"></div>
                                <div class="star-yel" style="width:{$m_san_pham->star_yel($km_moi->ma_san_pham)*16}px"></div>
                            </div>
					<div class="product-price">	
								<span class="price">
									{number_format($km_moi->don_gia*(1-$km_moi->khuyen_mai/100),0,'.',',')} Đ
								</span>
									
							    <span class="price-before-discount">{number_format($km_moi->don_gia)} Đ</span>					
							
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
                                    <input type="hidden" class="gia_sp" value="{$km_moi->don_gia*(1-$km_moi->khuyen_mai/100)}"/>
                                    <input type="hidden" class="ten_sp" value="{$km_moi->ten_san_pham}"/>	
                    <input type="hidden" class="gia_tri_ma_sp" value="{$km_moi->ma_san_pham}"/>
								</div>
							</div><!-- /.action -->
						</div><!-- /.cart -->
					</div>	
					</div>
         {/foreach}
    </div><!-- /.sidebar-widget -->
    
    <div style="text-align:center; padding:10px 0; border-top:#0CF solid 1px; border-bottom:#0CF solid 1px; margin-top:12px">
    	<a style="font-size:16px" href="khuyen_mai">Xem Tất Cả</a>
    </div>
</div>
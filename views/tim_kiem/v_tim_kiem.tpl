<div class="row">
	<!-- ============================================== SIDEBAR ============================================== -->	
		{include file="views/v_sidebar_sp.tpl"}
        
        <!-- ============================================== CONTENT ============================================== -->
     <div class='col-md-9'>
     {if count($san_phams) > 0}
     	<div class="clearfix filters-container m-t-10">
			<div class="row">
            	<div class='col-md-12'>
                	<h3>Tìm thấy <label style="color:#900">{$tong_so}</label> kết quả cho từ khóa <label style="color:#84b943">'{$keyword}'</label></h3>
                </div>
            </div><!-- /.row -->
		</div>
		<div class="search-result-container">
			<div id="myTabContent" class="tab-content">
            	<div class="tab-pane "  id="list-container" style="display:block">
					<div class="category-product  inner-top-vs">
                    {foreach $san_phams as $sp}
                    	<div class="category-product-inner wow fadeInUp">
			<div class="products">				
	            <div class="product-list product">
	<div class="row product-list-row">
		<div class="col col-sm-4 col-lg-4">
			<div class="product-image">
				<div class="image">
					<img data-echo="assets/images/products/{$sp->hinh}" src="assets/images/blank.gif" alt="">
				</div>
			</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col col-sm-8 col-lg-8">
			<div class="product-info">
				<h3 class="name"><a href="product-detail.php?ma_san_pham={$sp->ma_san_pham}">{$sp->ten_san_pham}</a></h3>
				<div class="rating-range">
                    <div class="star-raw"></div>
                    <div class="star-yel" style="width:{$m_san_pham->star_yel($sp->ma_san_pham)*16}px"></div>
                </div>
				<div class="product-price">	
					<span class="price">{number_format($sp->gia_ct,0,',','.')}	Đ</span>
                    {if $sp->don_gia != $sp->gia_ct}
					<span class="price-before-discount">{number_format($sp->don_gia,0,',','.')}	Đ</span>
					{/if}						
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
        			{/foreach}
        			</div><!-- /.category-product -->
				</div><!-- /.tab-pane #list-container -->
			</div><!-- /.tab-content -->
         	<div class="clearfix filters-container"> </div><!-- /.filters-container -->

		</div><!-- /.search-result-container -->
        <div class="pages_list">{$lst}</div>
      {else}
      <h3>Không tìm thấy kết quả cho từ khóa '{$keyword}'</h3>
      {/if}
	</div><!-- /.col -->
        <!-- ============================================== CONTENT : END============================================== -->
</div> <!-- ========= row : END =========== -->

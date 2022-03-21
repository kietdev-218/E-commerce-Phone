<div class="col-md-3 sidebar">
					<div class="sidebar-module-container">
<!-- ==============================================CATEGORY============================================== -->
<div class="sidebar-widget outer-bottom-xs wow fadeInUp">
	{include file="views/v_danh_muc.tpl"}
</div><!-- /.sidebar-widget -->
	<!-- ============================================== CATEGORY : END ============================================== -->						<div class="sidebar-widget outer-bottom-xs wow fadeInUp">
    
	<h3 class="section-title">Tin tức</h3>
    <ul class="nav nav-tabs">
	  <li class="active"><a href="#recent" data-toggle="tab">Tin mới</a></li>
	  <li><a href="#popular" data-toggle="tab">Tin xem nhiều</a></li>
	</ul>
	<div class="tab-content">
    	<div class="tab-pane active m-t-20" id="recent">
            {foreach $ds_tin as $tin}
            <div class="blog-post">
                <img class="img-responsive" src="assets/images/news/{$tin->hinh}" alt="">
                <h4><a href="bt_{thu_vien::bo_dau($tin->ten_bai_viet)}.{$tin->ma_bai_viet}.html">{$tin->ten_bai_viet}</a></h4>
                <span class="author">{if !empty($m_nguoi_dung->nguoi_dung($tin->ma_nguoi_dung))}{$m_nguoi_dung->nguoi_dung($tin->ma_nguoi_dung)->ten_dang_nhap}{else}user{/if}</span>
                <span class="review">{$tin->luot_xem}</span>
                <span class="date-time">{date('d-m-Y',strtotime($tin->ngay_dang))}</span>
                <p>{$tin->noi_dung_tom_tat}</p>
            </div>
            {/foreach}
		</div>
	   <div class="tab-pane m-t-20" id="popular">
       {foreach $tin_xem_nhieu as $xem_nhieu}
		<div class="blog-post inner-bottom-30 " >
			<img class="img-responsive" src="assets/images/news/{$xem_nhieu->hinh}" alt="">
			<h4><a href="bt_{thu_vien::bo_dau($tin->ten_bai_viet)}.{$tin->ma_bai_viet}.html">{$xem_nhieu->ten_bai_viet}</a></h4>
			<span class="author">{if !empty($m_nguoi_dung->nguoi_dung($xem_nhieu->ma_nguoi_dung))}{$m_nguoi_dung->nguoi_dung($xem_nhieu->ma_nguoi_dung)->ten_dang_nhap}{else}user{/if}</span>
			<span class="review">{$xem_nhieu->luot_xem}</span>
			<span class="date-time">{date('d-m-Y',strtotime($xem_nhieu->ngay_dang))}</span>
			<p>{$xem_nhieu->noi_dung_tom_tat}</p>
		</div>
		{/foreach}
		</div>
	</div>
    
    
</div>
{include file="views/v_tag.tpl"}
					</div>
				</div>
<div class="row  outer-bottom-vs">
			<div class="blog-page">
				<div class="col-md-9">
                {foreach $ds_tin as $tin}
                	<div class="blog-post outer-top-bd  wow fadeInUp">
	<a href="bt_{thu_vien::bo_dau($tin->ten_bai_viet)}.{$tin->ma_bai_viet}.html"><img class="img-responsive" src="assets/images/news/{$tin->hinh}" alt=""></a>
	<h1><a href="bt_{thu_vien::bo_dau($tin->ten_bai_viet)}.{$tin->ma_bai_viet}.html">{$tin->ten_bai_viet}</a></h1>
	<span class="author">{if !empty($m_nguoi_dung->nguoi_dung($tin->ma_nguoi_dung))}{$m_nguoi_dung->nguoi_dung($tin->ma_nguoi_dung)->ten_dang_nhap}{else}user{/if}</span>
	<span class="review">Lượt xem: {$tin->luot_xem}</span>
	<span class="date-time">{date('d-m-Y',strtotime($tin->ngay_dang))}</span>
	<p>{$tin->noi_dung_tom_tat}</p>
	<a href="bt_{thu_vien::bo_dau($tin->ten_bai_viet)}.{$tin->ma_bai_viet}.html" class="btn btn-upper btn-primary read-more">Đọc tin</a>
</div>
				{/foreach}
<div class="pages_list">{$lst}</div><!-- /.filters-container -->
</div>
				{include file="views/bai_viet/v_sidebar.tpl"}
			</div>
		</div>
<script>
var link_a =  $(location).attr('pathname');
if(link_a.indexOf("/page/") != -1)
{
	var link_g =link_a.substring(0,link_a.indexOf('/page/'));
	for(var i = 0; i<$('.pages_list a').length;i++)
	{
		if($('.pages_list a').eq(i).attr('href').indexOf('page')!=-1)
		{
			var arr = $('.pages_list a').eq(i).attr('href').split("page=");
			var tham_so = parseFloat(arr[1]);
			$('.pages_list a').eq(i).attr('href',link_g+'/page/'+tham_so)
		}
		else
		{
			$('.pages_list a').eq(i).attr('href',link_g);
		}
	
	}
}
else
{
	for(var i = 0; i<$('.pages_list a').length;i++)
	{
		var arr = $('.pages_list a').eq(i).attr('href').split("page=");
		var tham_so = arr[1];
		$('.pages_list a').eq(i).attr('href',link_a+'/page/'+tham_so)
	
	}

}
</script>
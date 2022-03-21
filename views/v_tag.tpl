			<!-- ============================================== PRODUCT TAGS ============================================== -->
<div class="sidebar-widget product-tag wow fadeInUp">
	<h3 class="section-title" style="font-family:'Times New Roman', Times, serif; font-weight:bold">Từ khóa</h3>
	<div class="sidebar-widget-body outer-top-xs">
		<div class="tag-list">
        {foreach $tag_list as $tag}					
			<a class="item" title="{$tag->tag_name}" href="tim_kiem.php?keyword={$tag->tag_name}">{$tag->tag_name}</a>
        {/foreach}
		</div><!-- /.tag-list -->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== PRODUCT TAGS : END ============================================== -->
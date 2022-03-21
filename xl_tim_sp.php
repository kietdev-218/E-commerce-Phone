<?php
$gt_tim = $_POST["gt_tim"];

if($gt_tim =='' || $gt_tim ==' ')
{
	die();
}

include_once 'models/m_san_pham.php';
include 'libs/bo_dau.php';
$m_san_pham = new M_san_pham();
$san_pham_s = $m_san_pham->tim_kiem($gt_tim);
?>
<?php
if(count($san_pham_s)>0)
{
?>
	<div id="wrap_combo_list_keyword">
    <?php
	foreach($san_pham_s as $k => $sp)
	{
		if($k <=6)
		{
	?>
      <div class="row_result_search">
          <a href="sp_<?php echo thu_vien::bo_dau($sp->ten_san_pham).'.'.$sp->ma_san_pham;?>.html">
            <div class="in-row_result">
                <div class="img_product_search"><img src="assets/images/products/<?php echo $sp->hinh;?>"/></div>
                <div class="name_product_search">
					<?php echo $sp->ten_san_pham;?>
                </div>
                <div class="clear"></div>
             </div>
           </a>
      </div>
    
	<?php
		}
	}
	?>
    
    <?php
	if(count($san_pham_s)>6)
	{
	?>
    	<a class="link-trang-tim" href="tim_kiem.php?keyword=<?php echo $gt_tim;?>">
    		<div class="row_result_search" style="text-align:center; font-weight:bold">
        		Xem tất cả
        	</div>
        </a>
     <?php
	}
	?>
	</div>
<?php
}
?>
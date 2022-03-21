<?php
include 'models/m_san_pham.php';
$m_san_pham = new M_san_pham();

if($arr[0] == 'loai')
{
	$san_phams = $m_san_pham->san_pham_theo_loai($ma_loai,$them_lenh);
	$kieu_sp = 'loai';
}
else if($arr[0] == 'hang')
{
	$san_phams = $m_san_pham->san_pham_theo_hang($ma_loai,$them_lenh);
	$kieu_sp = 'hang';
}
else if($arr[0] == 'km')
{
	$san_phams = $m_san_pham->san_pham_km($them_lenh);
	$kieu_sp = 'km';
}
include 'libs/bo_dau.php';
?>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane active " id="grid-container">
    <div class="category-product  inner-top-vs">
      <div class="row">
      <?php
	  foreach($san_phams as $k => $sp)
	  {
		  if($k < $sl_sp)
		  {
	  ?>
        <div class="col-sm-6 col-md-4 wow <?php if($k>=$sl_sp-9) echo 'fadeInUp'?>">
          <div class="products grid-product">
            <div class="product">
              <div class="product-image">
                <div class="image"> <a href="sp_<?php echo thu_vien::bo_dau($sp->ten_san_pham).'.'.$sp->ma_san_pham ?>.html"><img  src="assets/images/products/<?php echo $sp->hinh?>" alt=""></a> </div>
                <!-- /.image -->
                
                <div class="tag <?php echo $m_san_pham->stick_class($sp->ma_san_pham)?>"><span><?php echo $m_san_pham->stick_class($sp->ma_san_pham,1)?></span></div>
              </div>
              <!-- /.product-image -->
              
              <div class="product-info text-left">
                <h3 class="name"><a href="sp_<?php echo thu_vien::bo_dau($sp->ten_san_pham).'.'.$sp->ma_san_pham ?>.html"><?php echo $sp->ten_san_pham?></a></h3>
                <div class="rating-range">
                  <div class="star-raw"></div>
                  <div class="star-yel" style="width:<?php echo $m_san_pham->star_yel($sp->ma_san_pham)*16?>px"></div>
                </div>
                <div class="product-price"> <span class="price"><?php echo number_format($sp->gia_ct,0,',','.')?> </span>
                <?php
				if($sp->gia_ct != $sp->don_gia)
				{
				?>
                <span class="price-before-discount"><?php echo number_format($sp->don_gia)?> Đ</span>
                <?php
				}
				?>
                </div>
                <!-- /.product-price --> 
                
              </div>
              <!-- /.product-info -->
              <div class="cart clearfix animate-effect">
                <div class="action">
                  <ul class="list-unstyled">
                    <li class="add-cart-button btn-group">
                      <label class="container-nut-cart container-nut-cart-ajax">
                           <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                               <i class="fa fa-shopping-cart"></i>													
                            </button>
                            <button class="btn btn-primary" type="button">Mua</button>
                       </label>
                       <input style="width:50px; text-align:center; height:34px" type="number" class="sl_dat_mua-ajax" name="sl_dat_mua" value="1"/>					
                       <input type="hidden" class="gia_sp-ajax" value="<?php echo $sp->don_gia*(1-$sp->khuyen_mai/100)?>"/>
                       <input type="hidden" class="ten_sp-ajax" value="<?php echo $sp->ten_san_pham?>"/>	
                        <input type="hidden" class="gia_tri_ma_sp-ajax" value="<?php echo $sp->ma_san_pham?>"/>
                    </li>
                  </ul>
                </div>
                <!-- /.action --> 
              </div>
              <!-- /.cart --> 
            </div>
            <!-- /.product --> 
            
          </div>
          <!-- /.products --> 
        </div>
        <!-- /.item --> 
      <?php
	  	}
	  }
	  ?>
       </div>
      <!-- /.row --> 
    </div>
    <!-- /.category-product --> 
  </div>
  <!-- /.tab-pane -->

  <input type="hidden" id="input_products_2" value="<?php echo $kieu_sp.','.$ma_loai.','.$them_lenh;?>"/>
  <input type="hidden" id="sl_sp" value="<?php echo $sl_sp;?>"/>
  <?php
  if($sl_sp  < count($san_phams))
  {
?>
  <div class="container-button-xemthem">
    <div class="wrap-button-xemthem">
      <input class="btn-xemthem" type="button" value="Xem thêm"/>
    </div>
  </div>
  <?php
  }
  ?>
  <?php include 'views/script_xl_sp.tpl'?>
</div>

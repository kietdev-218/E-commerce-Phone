<?php
@session_start();
if(!isset($_SESSION['gio_hang']))
{
?>
<h2 style="text-align:center">Giỏ hàng của bạn còn trống</h2>
<?php
	die();
}
include 'models/m_san_pham.php';
$m_san_pham = new M_san_pham();
$mang_hang_xoa = $_POST['mang_hang_xoa'];
$mang_so_luong = $_POST['mang_so_luong'];

$list_xoa_hang = explode('-',$mang_hang_xoa);
$list_so_luong = explode('-',$mang_so_luong);
//echo '<pre>',print_r($list_xoa_hang);
$gio_hang_moi = array();
foreach($_SESSION['gio_hang'] as $ma_san_pham => $thong_tin)
{
	if(!in_array($ma_san_pham,$list_xoa_hang))
	{
		$gio_hang_moi[$ma_san_pham] = $thong_tin;
	}
}
//echo '<pre>',print_r($gio_hang_moi);
unset($_SESSION['gio_hang']);
$key_sl = 0;
foreach($gio_hang_moi as $ma_san_pham => $thong_tin)
{
	$_SESSION['gio_hang'][$ma_san_pham] = array('ten_san_pham'=>$thong_tin['ten_san_pham'],'so_luong'=>$list_so_luong[$key_sl],'don_gia'=>$thong_tin['don_gia']);
	$key_sl++;
}

$_SESSION['tong_so'] = 0;
$_SESSION['thanh_tien'] = 0;
if(isset($_SESSION['gio_hang']))
{
	foreach($_SESSION['gio_hang'] as $x)
	{
		$_SESSION['tong_so'] += $x['so_luong'];
		$_SESSION['thanh_tien'] += $x['so_luong']*$x['don_gia'];
	}
	$ds_gio_hang = $_SESSION['gio_hang'];
}
else
	$ds_gio_hang = '';


?>

<?php if($ds_gio_hang != '')
{
?>
<div class="row inner-bottom-sm">
			<div class="shopping-cart">
				<div class="col-md-12 col-sm-12 shopping-cart-table ">
	<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th class="cart-romove item">Xóa</th>
					<th class="cart-description item">Hình</th>
					<th class="cart-product-name item">Sản phẩm</th>
					
					<th class="cart-qty item">Số lượng</th>
					<th class="cart-sub-total item">Đơn giá</th>
					
				</tr>
			</thead><!-- /thead -->
			<tfoot>
				<tr>
					<td colspan="7">
						<div class="shopping-cart-btn" style="text-align:center">
							<span class="">
								<a href="#" id="xoa_gio_hang" class="btn btn-upper btn-primary outer-left-xs">Xóa giỏ hàng</a>
								<a href="#" id="cap_nhat_gio_hang" class="btn btn-upper btn-primary outer-right-xs">Cập nhật</a>
                                <a href="dat_hang" id="dat_hang" class="btn btn-upper btn-primary out" style="">Đặt hàng</a>
							</span>
						</div><!-- /.shopping-cart-btn -->
					</td>
				</tr>
			</tfoot>
			<tbody>
            	<?php
                foreach ($_SESSION['gio_hang'] as $ma_san_pham => $info)
				{
					$san_pham = $m_san_pham->san_pham_ct($ma_san_pham);
                ?>
				<tr>
					<td class="romove-item">
                    	<input type="checkbox" class="xoa_hang" value="<?php echo $ma_san_pham?>"/>
                    </td>
					<td class="cart-image">
						<a class="entry-thumbnail" href="product-detail.php?ma_san_pham=<?php echo $ma_san_pham?>">
						    <img class="hinh_cart" src="assets/images/products/<?php echo $san_pham->hinh?>" alt="">
						</a>
					</td>
					<td class="cart-product-name-info">
						<h4 class='cart-product-description'>
                        	<a href="product-detail.php?ma_san_pham=<?php echo $ma_san_pham?>"><?php echo $san_pham->ten_san_pham?></a>
                        </h4>
						<div class="row">
							<div class="col-sm-4">
								<div class="rating-range">
                                    <div class="star-raw"></div>
                                    <div class="star-yel" style="width:<?php echo $m_san_pham->star_yel($ma_san_pham)*16?>px"></div>
                                </div>
							</div>
							<div class="col-sm-8">
								<div class="reviews luot_mua">
									(Lượt mua: <?php echo $san_pham->so_luot_mua?>)
								</div>
							</div>
						</div><!-- /.row -->
						<div class="cart-product-info">
							<span class="product-imel">IMEL:<span>084628312</span></span><br>
							<span class="product-color">COLOR:<span>White</span></span>
						</div>
					</td>
					
					<td class="cart-product-quantity">
						<div class="quant-input">
				             <input class="gia_tri_so_luong" type="number" value="<?php echo $info['so_luong']?>">
			              </div>
		            </td>
					<td class="cart-product-sub-total">
                    	<span class="cart-sub-total-price"><?php echo number_format($info['don_gia'],0,',','.')?> Đ</span>
                        <input type="hidden" class="gia_sp" value="<?php echo $info['don_gia']?>"/>
                    </td>
					
				</tr>
                <?php
				}
				?>
				<tr>
                	<th colspan="5" style="font-size:18px; text-align:center">
                    Tổng tiền: <label style="color:#84b943"><?php echo number_format($_SESSION['thanh_tien'],0,',','.')?> Đ</label>
                    </th>
                </tr>
			</tbody><!-- /tbody -->
		</table><!-- /table -->
	</div>
</div><!-- /.shopping-cart-table -->

</div><!-- /.shopping-cart -->
		</div>
 <?php
 include "views/script_xl_gio_hang.tpl";
}
else
{
	unset($_SESSION['gio_hang']);
	unset($_SESSION['tong_so']);
	unset($_SESSION['thanh_tien']);
	?>
	<h2 style="text-align:center">Giỏ hàng của bạn còn trống</h2>
    <?php
}
?>

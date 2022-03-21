{if isset($smarty.session.gio_hang)}
<div class="row inner-bottom-sm">
			<div class="shopping-cart">
				<div class="col-md-12 col-sm-12 shopping-cart-table">
	<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th class="cart-romove item">Xóa</th>
					<th class="cart-description item img-td">Hình</th>
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
            	{foreach $smarty.session.gio_hang as $ma_san_pham => $info}
                {$san_pham = $m_san_pham->san_pham_ct($ma_san_pham)}
				<tr>
					<td class="romove-item">
                    	<input type="checkbox" class="xoa_hang" value="{$ma_san_pham}"/>
                    </td>
					<td class="cart-image img-td">
						<a class="entry-thumbnail" href="sp_{thu_vien::bo_dau($san_pham->ten_san_pham)}.{$san_pham->ma_san_pham}.html">
						    <img class="hinh_cart" src="assets/images/products/{$san_pham->hinh}" alt="">
						</a>
					</td>
					<td class="cart-product-name-info">
						<h4 class='cart-product-description'>
                        	<a href="sp_{thu_vien::bo_dau($san_pham->ten_san_pham)}.{$san_pham->ma_san_pham}.html">{$san_pham->ten_san_pham}</a>
                        </h4>
						<div class="row">
							<div class="col-sm-4">
								<div class="rating-range">
                                    <div class="star-raw"></div>
                                    <div class="star-yel" style="width:{$m_san_pham->star_yel($ma_san_pham)*16}px"></div>
                                </div>
							</div>
							<div class="col-sm-8">
								<div class="reviews luot_mua">
									(Lượt mua: {$san_pham->so_luot_mua})
								</div>
							</div>
						</div><!-- /.row -->
						<div id="don_gia_768" class="cart-product-info">
							<span class="product-imel" style="font-family:Tahoma, Geneva, sans-serif; font-weight:bold">
                            Đơn giá:
                            <span>{number_format($info['don_gia'],0,',','.')} Đ</span>
                            </span><br>
						</div>
					</td>
					
					<td class="cart-product-quantity">
						<div class="quant-input">
                        	<input class="gia_tri_so_luong" type="number" value="{$info['so_luong']}">
			              </div>
		            </td>
					<td class="cart-product-sub-total">
                    	<span class="cart-sub-total-price">{number_format($info['don_gia'],0,',','.')} Đ</span>
                        <input type="hidden" class="gia_sp" value="{$info['don_gia']}"/>
                    </td>
					
				</tr>
                {/foreach}
				<tr>
                	<th colspan="5" style="font-size:18px; text-align:center">
                    Tổng tiền: <label style="color:#84b943">{number_format($smarty.session.thanh_tien,0,',','.')} Đ</label>
                    </th>
                </tr>
			</tbody><!-- /tbody -->
		</table><!-- /table -->
	</div>
</div><!-- /.shopping-cart-table -->

</div><!-- /.shopping-cart -->
		</div>
{include file="views/script_xl_gio_hang.tpl"}
{else}
<div style="min-height:300px"><h3>Bạn chưa chọn sản phẩm nào</h3></div>
{/if}
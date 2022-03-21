<?php /* Smarty version Smarty-3.1.18, created on 2018-04-05 14:28:42
         compiled from "views\gio_hang\v_gio_hang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:354259fc734a03b654-96696302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cf22b497d3dd38e808ab6e2941be1145def4a8a' => 
    array (
      0 => 'views\\gio_hang\\v_gio_hang.tpl',
      1 => 1510039616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '354259fc734a03b654-96696302',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59fc734a042733_09872522',
  'variables' => 
  array (
    'ma_san_pham' => 0,
    'm_san_pham' => 0,
    'san_pham' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fc734a042733_09872522')) {function content_59fc734a042733_09872522($_smarty_tpl) {?><?php if (isset($_SESSION['gio_hang'])) {?>
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
            	<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['ma_san_pham'] = new Smarty_Variable;
 $_from = $_SESSION['gio_hang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['ma_san_pham']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
                <?php $_smarty_tpl->tpl_vars['san_pham'] = new Smarty_variable($_smarty_tpl->tpl_vars['m_san_pham']->value->san_pham_ct($_smarty_tpl->tpl_vars['ma_san_pham']->value), null, 0);?>
				<tr>
					<td class="romove-item">
                    	<input type="checkbox" class="xoa_hang" value="<?php echo $_smarty_tpl->tpl_vars['ma_san_pham']->value;?>
"/>
                    </td>
					<td class="cart-image img-td">
						<a class="entry-thumbnail" href="sp_<?php echo thu_vien::bo_dau($_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham);?>
.<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
.html">
						    <img class="hinh_cart" src="assets/images/products/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
" alt="">
						</a>
					</td>
					<td class="cart-product-name-info">
						<h4 class='cart-product-description'>
                        	<a href="sp_<?php echo thu_vien::bo_dau($_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham);?>
.<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
.html"><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham;?>
</a>
                        </h4>
						<div class="row">
							<div class="col-sm-4">
								<div class="rating-range">
                                    <div class="star-raw"></div>
                                    <div class="star-yel" style="width:<?php echo $_smarty_tpl->tpl_vars['m_san_pham']->value->star_yel($_smarty_tpl->tpl_vars['ma_san_pham']->value)*16;?>
px"></div>
                                </div>
							</div>
							<div class="col-sm-8">
								<div class="reviews luot_mua">
									(Lượt mua: <?php echo $_smarty_tpl->tpl_vars['san_pham']->value->so_luot_mua;?>
)
								</div>
							</div>
						</div><!-- /.row -->
						<div id="don_gia_768" class="cart-product-info">
							<span class="product-imel" style="font-family:Tahoma, Geneva, sans-serif; font-weight:bold">
                            Đơn giá:
                            <span><?php echo number_format($_smarty_tpl->tpl_vars['info']->value['don_gia'],0,',','.');?>
 Đ</span>
                            </span><br>
						</div>
					</td>
					
					<td class="cart-product-quantity">
						<div class="quant-input">
                        	<input class="gia_tri_so_luong" type="number" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['so_luong'];?>
">
			              </div>
		            </td>
					<td class="cart-product-sub-total">
                    	<span class="cart-sub-total-price"><?php echo number_format($_smarty_tpl->tpl_vars['info']->value['don_gia'],0,',','.');?>
 Đ</span>
                        <input type="hidden" class="gia_sp" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['don_gia'];?>
"/>
                    </td>
					
				</tr>
                <?php } ?>
				<tr>
                	<th colspan="5" style="font-size:18px; text-align:center">
                    Tổng tiền: <label style="color:#84b943"><?php echo number_format($_SESSION['thanh_tien'],0,',','.');?>
 Đ</label>
                    </th>
                </tr>
			</tbody><!-- /tbody -->
		</table><!-- /table -->
	</div>
</div><!-- /.shopping-cart-table -->

</div><!-- /.shopping-cart -->
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("views/script_xl_gio_hang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
<div style="min-height:300px"><h3>Bạn chưa chọn sản phẩm nào</h3></div>
<?php }?><?php }} ?>

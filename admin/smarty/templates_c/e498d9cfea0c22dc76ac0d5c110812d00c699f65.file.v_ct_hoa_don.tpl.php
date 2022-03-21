<?php /* Smarty version Smarty-3.1.14, created on 2018-03-21 04:06:39
         compiled from "views\hoa_don\v_ct_hoa_don.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205325ab1c18698d326-12788129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e498d9cfea0c22dc76ac0d5c110812d00c699f65' => 
    array (
      0 => 'views\\hoa_don\\v_ct_hoa_don.tpl',
      1 => 1521601596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205325ab1c18698d326-12788129',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ab1c1869e0ad7_73964160',
  'variables' => 
  array (
    'title' => 0,
    'm_hoa_don' => 0,
    'ct_hoa_don' => 0,
    'hd' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab1c1869e0ad7_73964160')) {function content_5ab1c1869e0ad7_73964160($_smarty_tpl) {?><div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
                    <form class="frm_ct_hd" name="frm_ct_hd" method="post">
						
						<table>
							
							<thead>
                            	<tr>
                                	<td colspan="5" style="font-size:18px">
                                    Khách hàng: <?php echo $_smarty_tpl->tpl_vars['m_hoa_don']->value->xd_kh($_GET['ma_hoa_don'])->ten_khach_hang;?>

                                    </td>
                                </tr>
								<tr>
								   <th>Mã sản phẩm</th>
								   <th>Tên sản phẩm</th>
								   <th>Số lượng</th>
								   <th>Đơn giá</th>
                                   <th>Trạng thái</th>
								</tr>
								
							</thead>

							<tbody>
                            <?php  $_smarty_tpl->tpl_vars['hd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ct_hoa_don']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hd']->key => $_smarty_tpl->tpl_vars['hd']->value){
$_smarty_tpl->tpl_vars['hd']->_loop = true;
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['hd']->value->ma_san_pham;?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['hd']->value->ten_san_pham;?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['hd']->value->so_luong;?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['hd']->value->don_gia;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['m_hoa_don']->value->trang_trai_hd($_GET['ma_hoa_don']);?>
</td>
								</tr>
							<?php } ?>
                            	<tr>
                                	<td colspan="5">
                                      <div style="width:150px; margin:auto">
                                          <input style="height:40px; cursor:pointer" onclick="Hoi_xoa_nhom2('khach_hang','hoa_don','chi_tiet_hoa_don','ma_khach_hang',<?php echo $_smarty_tpl->tpl_vars['m_hoa_don']->value->xd_kh($_GET['ma_hoa_don'])->ma_khach_hang;?>
,'ma_hoa_don',<?php echo $_GET['ma_hoa_don'];?>
,'hoa_don.php','hóa đơn','khách hàng')"
                                          type="button" name="btn_xoa" class="btn_xoa_sp" value="Xóa"/>
                                          
                                          <input style="height:40px; cursor:pointer" type="submit" class="btn_tt" name="btn_thanh_toan" value="Thanh toán"/>
                                       </div>
                                    </td>
                                </tr>
							</tbody>
							
						</table>
						</form>
					</div> <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->
				
			</div>
<?php echo $_smarty_tpl->getSubTemplate ("views/xl_ajax/v_script_nhom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
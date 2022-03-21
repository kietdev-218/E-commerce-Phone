<?php /* Smarty version Smarty-3.1.14, created on 2020-03-07 18:24:35
         compiled from "views\hoa_don\v_ds_hoa_don.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14175aac9df0e625f0-61015155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '338c346c98976bc1d60c9e2b6bc4ce1d542a1d24' => 
    array (
      0 => 'views\\hoa_don\\v_ds_hoa_don.tpl',
      1 => 1521723932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14175aac9df0e625f0-61015155',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aac9df12718f1_31230358',
  'variables' => 
  array (
    'title' => 0,
    'm_common' => 0,
    'hoa_dons' => 0,
    'hd' => 0,
    'm_hoa_don' => 0,
    'link' => 0,
    'lst' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aac9df12718f1_31230358')) {function content_5aac9df12718f1_31230358($_smarty_tpl) {?><div class="content-box">
<!-- Start Content Box -->
    <div class="content-box-header">
      <h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
      <div style="width:200px; float:left; padding:10px 0">
        <input name="thanh_tim" type="text" id="thanh_tim" placeholder="Nhập mã hóa đơn"/>
        <?php echo $_smarty_tpl->getSubTemplate ("views/input/v_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      </div>
      
      <h3 style="color:#F00; text-align:center; padding:10px 0"></h3>
      <div style="clear:both"></div>
    </div>
    <!-- End .content-box-header -->
    
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
            <h3 style="color:#F00; text-align:center; padding:10px 0; text-indent:10px">
                  <?php if (isset($_SESSION['kq_xoa_nhom2'])){?>
                  <p style="color:#00F; font-weight:bold; font-size:20px"><?php echo $_SESSION['kq_xoa_nhom2'];?>
</p>
                  <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_sess('kq_xoa_nhom2');?>

                   <?php }?>
              </h3>
              <h3 style="color:#F00; text-align:center; padding:10px 0; text-indent:10px">
                  <?php if (isset($_SESSION['kq_xoa'])){?>
                  <p style="color:#00F; font-weight:bold; font-size:20px"><?php echo $_SESSION['kq_xoa'];?>
</p>
                  <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_sess('kq_xoa');?>

                   <?php }?>
              </h3>
            <?php if (count($_smarty_tpl->tpl_vars['hoa_dons']->value)>0){?>
            <table id="bang">
              <thead>
                <tr>
                  <th><input class="check-all" type="checkbox" /></th>
                  <th>Mã hóa đơn</th>
                  <th>Ngày đặt hàng</th>
                  <th>Mã khách hàng</th>
                  <th>Trị giá</th>
                  <th>Trạng thái</th>
                </tr>
              </thead>
              <tbody>
              <?php  $_smarty_tpl->tpl_vars['hd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hoa_dons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hd']->key => $_smarty_tpl->tpl_vars['hd']->value){
$_smarty_tpl->tpl_vars['hd']->_loop = true;
?>
                <tr class="<?php echo $_smarty_tpl->tpl_vars['m_hoa_don']->value->trang_trai_hd($_smarty_tpl->tpl_vars['hd']->value->ma_hoa_don,1);?>
">
                  <td><input value="<?php echo $_smarty_tpl->tpl_vars['hd']->value->ma_hoa_don;?>
" class="chon_xoa" type="checkbox" /></td>
                  <td><?php echo $_smarty_tpl->tpl_vars['hd']->value->ma_hoa_don;?>
</td>
                  <td><?php echo date('d-m-Y',strtotime($_smarty_tpl->tpl_vars['hd']->value->ngay_dat_hang));?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['hd']->value->ma_khach_hang;?>
</td>
                  <td><?php echo number_format($_smarty_tpl->tpl_vars['hd']->value->tong_tien,0,',','.');?>
 Đ</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['m_hoa_don']->value->trang_trai_hd($_smarty_tpl->tpl_vars['hd']->value->ma_hoa_don);?>
</td>
                  <td><!-- Icons --> 
                    <a href="javascript:Hoi_xoa_nhom2('khach_hang','hoa_don','chi_tiet_hoa_don','ma_khach_hang',<?php echo $_smarty_tpl->tpl_vars['hd']->value->ma_khach_hang;?>
,'ma_hoa_don',<?php echo $_smarty_tpl->tpl_vars['hd']->value->ma_hoa_don;?>
,'<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
','hóa đơn','khách hàng')" title="Delete"><img src="images/icons/cross.png" alt="Delete" /></a> <a href="ct_hoa_don.php?ma_hoa_don=<?php echo $_smarty_tpl->tpl_vars['hd']->value->ma_hoa_don;?>
" title="Xem chi tiết"><img src="images/icons/view-details.png" width="16px"/></a></td>
                </tr>
                <?php } ?>
                <tr>
                  <td colspan="6"><div style="width:150px; margin:auto">
                      <input style="height:40px; cursor:pointer" onclick="xoa_nhieu_nhom2('khach_hang','hoa_don','chi_tiet_hoa_don','ma_khach_hang','ma_hoa_don','<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
','hóa đơn','khách_hang')"
                          type="button" name="btn_xoa_sp" class="btn_xoa_sp" value="Xóa hóa đơn"/>
                    </div></td>
                </tr>
                <tr>
                  <td colspan="6"><div class="pages_list"><?php echo $_smarty_tpl->tpl_vars['lst']->value;?>
</div></td>
                </tr>
              </tbody>
              <?php echo $_smarty_tpl->getSubTemplate ("views/xl_ajax/v_script_nhom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </table>
            <?php echo $_smarty_tpl->getSubTemplate ('views/xl_ajax/v_script_tim.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }else{ ?>
				<h3 style="padding:20px 0">Không tìm thấy hóa đơn nào</h3>
				<?php }?>
         </div> <!-- End #tab1 -->
     </div> <!-- End .content-box-content -->
</div>
<?php }} ?>
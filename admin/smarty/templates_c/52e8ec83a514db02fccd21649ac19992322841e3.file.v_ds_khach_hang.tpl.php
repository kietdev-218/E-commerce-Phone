<?php /* Smarty version Smarty-3.1.14, created on 2018-03-22 14:05:01
         compiled from "views\khach_hang\v_ds_khach_hang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5945aab58c627fb51-95624796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52e8ec83a514db02fccd21649ac19992322841e3' => 
    array (
      0 => 'views\\khach_hang\\v_ds_khach_hang.tpl',
      1 => 1521723863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5945aab58c627fb51-95624796',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aab58c66cbe31_79709414',
  'variables' => 
  array (
    'title' => 0,
    'm_common' => 0,
    'ds_khach_hang' => 0,
    'kh' => 0,
    'link' => 0,
    'lst' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aab58c66cbe31_79709414')) {function content_5aab58c66cbe31_79709414($_smarty_tpl) {?>
<div class="content-box">
<!-- Start Content Box -->
    <div class="content-box-header">
      <h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
      <div style="width:200px; float:left; padding:10px 0">
        <input name="thanh_tim" type="text" id="thanh_tim" placeholder="Nhập tên khách hàng"/>
        <?php echo $_smarty_tpl->getSubTemplate ("views/input/v_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      </div>
      
      <h3 style="color:#F00; text-align:center; padding:10px 0"></h3>
      <div style="clear:both"></div>
    </div>
    <!-- End .content-box-header -->
    
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
            <h3 style="color:#F00; text-align:center; padding:10px 0; text-indent:10px">
                  <?php if (isset($_SESSION['kq_xoa_nhom'])){?>
                  <p style="color:#00F; font-weight:bold; font-size:20px"><?php echo $_SESSION['kq_xoa_nhom'];?>
</p>
                  <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_sess('kq_xoa_nhom');?>

                   <?php }?>
              </h3>
            <?php if (count($_smarty_tpl->tpl_vars['ds_khach_hang']->value)>0){?>
    		<table id="bang">
              <thead>
                <tr>
                  <th><input class="check-all" type="checkbox" /></th>
                  <th>Mã khách hàng</th>
                  <th>Tên khách hàng</th>
                  <th>Giới tính</th>
                  <th>Địa chỉ</th>
                  <th>Điện thoại</th>
                  <th>email</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <?php  $_smarty_tpl->tpl_vars['kh'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kh']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_khach_hang']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kh']->key => $_smarty_tpl->tpl_vars['kh']->value){
$_smarty_tpl->tpl_vars['kh']->_loop = true;
?>
                <tr class="">
                  <th><input value="<?php echo $_smarty_tpl->tpl_vars['kh']->value->ma_khach_hang;?>
" class="chon_xoa" type="checkbox" /></th>
                  <th><?php echo $_smarty_tpl->tpl_vars['kh']->value->ma_khach_hang;?>
</th>
                  <th><?php echo $_smarty_tpl->tpl_vars['kh']->value->ten_khach_hang;?>
</th>
                  <th><img src="images/icons/<?php echo $_smarty_tpl->tpl_vars['kh']->value->gioi_tinh;?>
.png" width="25px"/></th>
                  <th><?php echo $_smarty_tpl->tpl_vars['kh']->value->dia_chi;?>
</th>
                  <th><?php echo $_smarty_tpl->tpl_vars['kh']->value->dien_thoai;?>
</th>
                  <th><?php echo $_smarty_tpl->tpl_vars['kh']->value->email;?>
</th>
                  <th> <!-- Icons --> 
                    <a href="javascript:Hoi_xoa_nhom('khach_hang','hoa_don','ma_khach_hang',<?php echo $_smarty_tpl->tpl_vars['kh']->value->ma_khach_hang;?>
,'<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
','khách hàng','hóa đơn')" 
                    title="Delete"><img src="<?php echo @constant('IMG_AD');?>
/icons/cross.png" alt="Delete" /></a>
                    <a href="" title="Xem chi tiết"><img src="<?php echo @constant('IMG_AD');?>
/icons/view-details.png" width="16px"/></a>
                    </th>
                </tr>
                <?php } ?>
                <tr>
                  <td colspan="7">
                      <div style="width:150px; margin:auto">
                          <input style="height:40px; cursor:pointer" onclick="xoa_nhieu_nhom('khach_hang','hoa_don','ma_khach_hang','<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
','khách hàng','hóa đơn')"
                          type="button" name="btn_xoa_sp" class="btn_xoa_sp" value="Xóa khách hàng"/>
                        </div>
                    </td>
                </tr>
                <tr>
                  <td colspan="11"><div class="pages_list"><?php echo $_smarty_tpl->tpl_vars['lst']->value;?>
</div></td>
                </tr>
              </tbody>
              
              <?php echo $_smarty_tpl->getSubTemplate ('views/xl_ajax/v_script_nhom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </table>
            <?php echo $_smarty_tpl->getSubTemplate ('views/xl_ajax/v_script_tim.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }else{ ?>
				<h3 style="padding:20px 0">Không tìm thấy khách hàng nào</h3>
				 <?php }?>   
         </div> <!-- End #tab1 -->
     </div> <!-- End .content-box-content -->
</div>
<?php }} ?>
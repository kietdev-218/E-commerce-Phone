<?php /* Smarty version Smarty-3.1.14, created on 2018-04-06 08:51:38
         compiled from "views\lien_he\v_ds_lien_he.tpl" */ ?>
<?php /*%%SmartyHeaderCode:262365ab33cb0b981d9-47239966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83e9cff519010d54c455394a0c224b340fdc9cdf' => 
    array (
      0 => 'views\\lien_he\\v_ds_lien_he.tpl',
      1 => 1521696498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262365ab33cb0b981d9-47239966',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ab33cb10cd1f1_68056382',
  'variables' => 
  array (
    'title' => 0,
    'm_common' => 0,
    'ds_lien_he' => 0,
    'lh' => 0,
    'm_lien_he' => 0,
    'link' => 0,
    'lst' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab33cb10cd1f1_68056382')) {function content_5ab33cb10cd1f1_68056382($_smarty_tpl) {?><div class="content-box">
<!-- Start Content Box -->
    <div class="content-box-header">
      <h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
      <h3 style="color:#F00; text-align:center; padding:10px 0"></h3>
      <div style="clear:both"></div>
    </div>
    <!-- End .content-box-header -->
    
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
              <h3 style="color:#F00; text-align:center; padding:10px 0; text-indent:10px">
                  <?php if (isset($_SESSION['kq_xoa'])){?>
                  <p style="color:#00F; font-weight:bold; font-size:20px"><?php echo $_SESSION['kq_xoa'];?>
</p>
                  <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_sess('kq_xoa');?>

                   <?php }?>
              </h3>
            <?php if (count($_smarty_tpl->tpl_vars['ds_lien_he']->value)>0){?>
            <table id="bang">
              <thead>
                <tr>
                  <th><input class="check-all" type="checkbox" /></th>
                  <th>Mã liên hệ</th>
                  <th>Người gửi</th>
                  <th>Điện thoại</th>
                  <th>Email</th>
                  <th>Tiêu đề</th>
                  <th>Nội dung</th>
                  <th>Ngày gửi</th>
                  <th>Trạng thái</th>
                </tr>
              </thead>
              <tbody>
              <?php  $_smarty_tpl->tpl_vars['lh'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lh']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_lien_he']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lh']->key => $_smarty_tpl->tpl_vars['lh']->value){
$_smarty_tpl->tpl_vars['lh']->_loop = true;
?>
                <tr class="<?php echo $_smarty_tpl->tpl_vars['m_lien_he']->value->trang_trai_lh($_smarty_tpl->tpl_vars['lh']->value->ma_lien_he,1);?>
">
                  <td><input value="<?php echo $_smarty_tpl->tpl_vars['lh']->value->ma_lien_he;?>
" class="chon_xoa" type="checkbox" /></td>
                  <td><?php echo $_smarty_tpl->tpl_vars['lh']->value->ma_lien_he;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['lh']->value->ten_nguoi_gui;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['lh']->value->dien_thoai;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['lh']->value->email;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['lh']->value->tieu_de;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['lh']->value->noi_dung;?>
</td>
                  <td><?php echo date('d-m-Y',strtotime($_smarty_tpl->tpl_vars['lh']->value->ngay_gui));?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['m_lien_he']->value->trang_trai_lh($_smarty_tpl->tpl_vars['lh']->value->ma_lien_he);?>
</td>
                  <td><!-- Icons --> 
                    <a href="javascript:Hoi_xoa('lien_he','ma_lien_he',<?php echo $_smarty_tpl->tpl_vars['lh']->value->ma_lien_he;?>
,'<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
','liên hệ')" title="Delete"><img src="images/icons/cross.png" alt="Delete" /></a> <a href="xem_lien_he.php?ma_lien_he=<?php echo $_smarty_tpl->tpl_vars['lh']->value->ma_lien_he;?>
" title="Xem chi tiết"><img src="images/icons/view-details.png" width="16px"/></a></td>
                </tr>
                <?php } ?>
                <tr>
                  <td colspan="9"><div style="width:150px; margin:auto">
                      <input style="height:40px; cursor:pointer" onclick="xoa_nhieu('lien_he','ma_lien_he','<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
','liên hệ')"
                          type="button" name="btn_xoa_sp" class="btn_xoa_sp" value="Xóa liên hệ"/>
                    </div></td>
                </tr>
                <tr>
                  <td colspan="9"><div class="pages_list"><?php echo $_smarty_tpl->tpl_vars['lst']->value;?>
</div></td>
                </tr>
              </tbody>
              <?php echo $_smarty_tpl->getSubTemplate ("views/xl_ajax/v_script_phan_tu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </table>
				<?php }else{ ?>
				<h3 style="padding:20px 0">Không tìm thấy liên hệ nào</h3>
				<?php }?>
         </div> <!-- End #tab1 -->
     </div> <!-- End .content-box-content -->
</div>
<?php }} ?>
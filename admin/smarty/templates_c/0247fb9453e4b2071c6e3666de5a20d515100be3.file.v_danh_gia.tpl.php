<?php /* Smarty version Smarty-3.1.14, created on 2018-04-05 23:33:55
         compiled from "views\san_pham\v_danh_gia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134405ac6853bbc5f73-31436236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0247fb9453e4b2071c6e3666de5a20d515100be3' => 
    array (
      0 => 'views\\san_pham\\v_danh_gia.tpl',
      1 => 1522964029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134405ac6853bbc5f73-31436236',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ac6853bbe7332_40090823',
  'variables' => 
  array (
    'danh_gia_gr_by_id' => 0,
    'item' => 0,
    'm_san_pham' => 0,
    'dgct' => 0,
    'k' => 0,
    'ct' => 0,
    'lst' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac6853bbe7332_40090823')) {function content_5ac6853bbe7332_40090823($_smarty_tpl) {?>   <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
<?php if (count($_smarty_tpl->tpl_vars['danh_gia_gr_by_id']->value)>0){?>
        <table id="bang">
              <thead>
                <tr>
                  <th>Mã sản phẩm</th>
                  <th>Tên sản phẩm</th>
                  <th>Điểm trung bình</th>
                  <th>Mã đánh giá</th>
                  <th>Mã người đánh giá</th>
                  <th>Người đánh giá</th>
                  <th>Điểm</th>
                  <th>Ngày đánh giá</th>
                </tr>
              </thead>
              <tbody>
              <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['danh_gia_gr_by_id']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                  <?php $_smarty_tpl->tpl_vars['dgct'] = new Smarty_variable($_smarty_tpl->tpl_vars['m_san_pham']->value->danh_gia_ct($_smarty_tpl->tpl_vars['item']->value->ma_san_pham), null, 0);?>
                  <?php  $_smarty_tpl->tpl_vars['ct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ct']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dgct']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ct']->key => $_smarty_tpl->tpl_vars['ct']->value){
$_smarty_tpl->tpl_vars['ct']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['ct']->key;
?>
                 <tr class="" style="background-color:#FFF; border-bottom:#CCC 1px solid">
                 <?php if ($_smarty_tpl->tpl_vars['k']->value==0){?>
                  <th rowspan="<?php echo count($_smarty_tpl->tpl_vars['dgct']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->ma_san_pham;?>
</th>
                  <th rowspan="<?php echo count($_smarty_tpl->tpl_vars['dgct']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->ten_san_pham;?>
</th>
                  <th rowspan="<?php echo count($_smarty_tpl->tpl_vars['dgct']->value);?>
" style="border-right:#CCC 1px solid"><?php echo round($_smarty_tpl->tpl_vars['item']->value->dtb,1);?>
</th>
                  <?php }?>
                  <th><?php echo $_smarty_tpl->tpl_vars['ct']->value->ma_danh_gia;?>
</th>
                  <th><?php echo $_smarty_tpl->tpl_vars['ct']->value->ma_nguoi_dung;?>
</th>
                  <th><?php echo $_smarty_tpl->tpl_vars['ct']->value->ten_dang_nhap;?>
</th>
                  <th><?php echo $_smarty_tpl->tpl_vars['ct']->value->diem;?>
</th>
                  <th><?php echo date('d-m-Y',strtotime($_smarty_tpl->tpl_vars['ct']->value->ngay));?>
</th>
                </tr>  
                <?php } ?> 
              <?php } ?>         
                <tr>
                  <td colspan="8"><div class="pages_list"><?php echo $_smarty_tpl->tpl_vars['lst']->value;?>
</div></td>
                </tr>
              </tbody>
            </table>
<?php }else{ ?>
<h3>Không tìm thấy kết quả</h3>
<?php }?>     
         </div> <!-- End #tab1 -->
     </div> <!-- End .content-box-content -->
<?php }} ?>
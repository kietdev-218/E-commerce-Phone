<?php /* Smarty version Smarty-3.1.14, created on 2018-04-06 09:12:20
         compiled from "views\bai_viet\v_cap_nhat_loai_bai_viet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:318545abf57aa6eff81-14652444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27432b998742a1c23130f11c3cedd33e4ccdb9da' => 
    array (
      0 => 'views\\bai_viet\\v_cap_nhat_loai_bai_viet.tpl',
      1 => 1522565782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '318545abf57aa6eff81-14652444',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5abf57aa75d1d1_52816728',
  'variables' => 
  array (
    'm_common' => 0,
    'ten_loai_ht' => 0,
    'm_bai_viet' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abf57aa75d1d1_52816728')) {function content_5abf57aa75d1d1_52816728($_smarty_tpl) {?><h3 style="color:#00F; text-align:center; padding:10px 0; text-indent:10px">
    <?php if (isset($_COOKIE['sua_loaibv'])){?>
    <?php echo $_COOKIE['sua_loaibv'];?>

    <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_cook('sua_loaibv');?>

    <?php }?>
</h3>
<h3 style="color:#00F; text-align:center; padding:10px 0">
    <?php if (isset($_COOKIE['them_loaibv'])){?>
    <?php echo $_COOKIE['them_loaibv'];?>

    <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_cook('them_loaibv');?>

    <?php }?>
</h3>
<form method="post" name="frm_cap_nhat_ten_loai" enctype="multipart/form-data">
<table>
	<tr>
    	<td>Tên loại bài: </td>
        <td>
        	<input type="text" name="ten_loai_bai" class="ten_loai_bai" value="<?php echo $_smarty_tpl->tpl_vars['m_common']->value->show_value('ma_loai_bai','ten_loai_bai',$_smarty_tpl->tpl_vars['ten_loai_ht']->value);?>
" required="required"/>
            <p style="color:#F00; font-style:italic"><?php echo $_smarty_tpl->tpl_vars['m_bai_viet']->value->loi_trung_ten;?>
</p>
        </td>
    </tr>
    
    <tr>
    	<td colspan="2"><input type="submit" name="btn_cap_nhat_loai_bv" value="Gửi"/></td>
    </tr>
</table>
</form><?php }} ?>
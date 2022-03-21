<?php /* Smarty version Smarty-3.1.14, created on 2018-04-01 07:49:23
         compiled from "views\san_pham\v_cap_nhat_hang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91535a30c35fc903c6-96202104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca639954c64a16c065bacdfd3e2d1c0a1783436d' => 
    array (
      0 => 'views\\san_pham\\v_cap_nhat_hang.tpl',
      1 => 1522561161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91535a30c35fc903c6-96202104',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a30c35fd0ec41_54341674',
  'variables' => 
  array (
    'm_common' => 0,
    'ten_nha_san_xuat' => 0,
    'm_san_pham' => 0,
    'hangsx' => 0,
    'ma_nha_san_xuat' => 0,
    'link' => 0,
    'ds_loai_sp' => 0,
    'ma_loai' => 0,
    'loai' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a30c35fd0ec41_54341674')) {function content_5a30c35fd0ec41_54341674($_smarty_tpl) {?><h3 style="color:#00F; text-align:center; padding:10px 0; text-indent:10px">
    <?php if (isset($_COOKIE['sua_hangsx'])){?>
    <?php echo $_COOKIE['sua_hangsx'];?>

    <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_cook('sua_hangsx');?>

    <?php }?>
</h3>
<form method="post" name="frm_cap_nhat_ten_loai" enctype="multipart/form-data">
<table>
	<tr>
    	<td>Tên nhà sản xuất: </td>
        <td>
        	<input type="text" name="ten_nha_san_xuat" class="ten_nha_san_xuat" value="<?php echo $_smarty_tpl->tpl_vars['m_common']->value->show_value('ma_nha_san_xuat','ten_nha_san_xuat',$_smarty_tpl->tpl_vars['ten_nha_san_xuat']->value);?>
"/>
            <p style="color:#F00; font-style:italic"><?php echo $_smarty_tpl->tpl_vars['m_san_pham']->value->loi_cap_nhat_hang;?>
</p>
        </td>
    </tr>
    <tr>
    	<td>Upload Logo : </td>
        <td>
            <input type="file" name="logo" class="logo"/>
            <p style="color:#F00; font-style:italic"><?php echo $_smarty_tpl->tpl_vars['m_san_pham']->value->loi_up_hinh;?>
</p>
        </td>
    </tr>
    <?php if (isset($_GET['ma_nha_san_xuat'])){?>
    <tr>
    	<td>Logo: </td>
        <td>
        	<img width="150px" src="<?php echo @constant('IMG');?>
/logos/<?php echo $_smarty_tpl->tpl_vars['hangsx']->value->logo;?>
"/><br /><br />
            <?php if ($_smarty_tpl->tpl_vars['hangsx']->value->logo!='hinh_dang_cn.jpg'){?>
            <input onclick="xoa_hinh('nha_san_xuat','logo','ma_nha_san_xuat',<?php echo $_smarty_tpl->tpl_vars['ma_nha_san_xuat']->value;?>
,'hinh_dang_cn.jpg','<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
')" type="button" class="xoa_logo" value="Xóa logo"/><?php }?>
        </td>
    </tr>
    <?php }?>
    <tr>
    	<td>Loại sản phẩm: </td>
        <td>
        	<select name="loai_sp">
            <?php  $_smarty_tpl->tpl_vars['loai'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loai']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_loai_sp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->key => $_smarty_tpl->tpl_vars['loai']->value){
$_smarty_tpl->tpl_vars['loai']->_loop = true;
?>
            <option <?php echo $_smarty_tpl->tpl_vars['m_common']->value->selected_2('ma_nha_san_xuat','loai_sp',$_smarty_tpl->tpl_vars['ma_loai']->value,$_smarty_tpl->tpl_vars['loai']->value->ma_nha_san_xuat);?>
 value="<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_nha_san_xuat;?>
">
            <?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_nha_san_xuat;?>
</option>
            <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
    	<td colspan="2"><input type="submit" name="btn_cap_nhat_hangsx" value="Gửi"/></td>
    </tr>
</table>
</form>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2018-04-01 07:47:53
         compiled from "views\san_pham\v_cap_nhat_loaisp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:317765a329f01d75990-27270871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdfde1062604211693e4841fc70caa01a9580a8d' => 
    array (
      0 => 'views\\san_pham\\v_cap_nhat_loaisp.tpl',
      1 => 1522561178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317765a329f01d75990-27270871',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a329f01f20297_47563159',
  'variables' => 
  array (
    'm_common' => 0,
    'ten_nha_san_xuat' => 0,
    'm_san_pham' => 0,
    'loaisp' => 0,
    'ma_loai' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a329f01f20297_47563159')) {function content_5a329f01f20297_47563159($_smarty_tpl) {?><h3 style="color:#00F; text-align:center; padding:10px 0; text-indent:10px">
    <?php if (isset($_COOKIE['sua_loaisp'])){?>
    <?php echo $_COOKIE['sua_loaisp'];?>

    <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_cook('sua_loaisp');?>

    <?php }?>
</h3>
<form method="post" name="frm_cap_nhat_ten_loai" enctype="multipart/form-data">
<table>
	<tr>
    	<td>Tên loại sản phẩm: </td>
        <td>
        	<input type="text" name="ten_nha_san_xuat" class="ten_nha_san_xuat" value="<?php echo $_smarty_tpl->tpl_vars['m_common']->value->show_value('ma_loai','ten_nha_san_xuat',$_smarty_tpl->tpl_vars['ten_nha_san_xuat']->value);?>
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
    <?php if (isset($_GET['ma_loai'])){?>
    <tr>
    	<td>Logo: </td>
        <td>
        	<img width="150px" src="<?php echo @constant('IMG');?>
/logos/<?php echo $_smarty_tpl->tpl_vars['loaisp']->value->logo;?>
"/><br /><br />
            <?php if ($_smarty_tpl->tpl_vars['loaisp']->value->logo!='hinh_dang_cn.jpg'){?>
            <input onclick="xoa_hinh('nha_san_xuat','logo','ma_nha_san_xuat',<?php echo $_smarty_tpl->tpl_vars['ma_loai']->value;?>
,'hinh_dang_cn.jpg','<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
')" type="button" class="xoa_logo" value="Xóa logo"/><?php }?>
        </td>
    </tr>
    <?php }?>
    
    <tr>
    	<td colspan="2"><input type="submit" name="btn_cap_nhat_loai_sp" value="Gửi"/></td>
    </tr>
</table>
</form><?php }} ?>
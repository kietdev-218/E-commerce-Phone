<?php /* Smarty version Smarty-3.1.14, created on 2018-04-05 14:53:12
         compiled from "views\san_pham\v_ds_hang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:225885a2fc0ac915d64-04463620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4119c4476fd5d0cb9626d4a595f6382595940c44' => 
    array (
      0 => 'views\\san_pham\\v_ds_hang.tpl',
      1 => 1522564764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225885a2fc0ac915d64-04463620',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2fc0ac9f7341_44117743',
  'variables' => 
  array (
    'm_common' => 0,
    'ds_loai_sp' => 0,
    'loai' => 0,
    'title' => 0,
    'ds_hang' => 0,
    'hang' => 0,
    'link' => 0,
    'lst' => 0,
    'ma_loai' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fc0ac9f7341_44117743')) {function content_5a2fc0ac9f7341_44117743($_smarty_tpl) {?> <h3 style="color:#F00; text-align:center; padding:10px 0; text-indent:10px">
     <?php if (isset($_SESSION['kq_xoa_nhom'])){?>
     <?php echo $_SESSION['kq_xoa_nhom'];?>

     <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_sess('kq_xoa_nhom');?>

    <?php }?>
</h3>
<h3 style="color:#00F; text-align:center; padding:10px 0">
    <?php if (isset($_SESSION['them_hangsx'])){?>
    <?php echo $_SESSION['them_hangsx'];?>

    <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_sess('them_hangsx');?>

    <?php }?>
</h3>
<div style="padding:15px 0">
	<span style="font-size:18px; font-weight:bold">Loại: </span>
	<select style="padding:10px 0" name="ds_nhom_sp" class="ds_loai"  id="ma_loai">
    	<option value="">Tất cả</option>
         <?php  $_smarty_tpl->tpl_vars['loai'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loai']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_loai_sp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->key => $_smarty_tpl->tpl_vars['loai']->value){
$_smarty_tpl->tpl_vars['loai']->_loop = true;
?>
             <option <?php echo $_smarty_tpl->tpl_vars['m_common']->value->selected('ma_loai',$_smarty_tpl->tpl_vars['loai']->value->ma_nha_san_xuat);?>
 value="<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_nha_san_xuat;?>
"><?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_nha_san_xuat;?>
</option>
          <?php } ?>
   </select>
</div>

<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3> <div style="clear:both"></div>

                    <div style="clear:both"></div>
                    
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
                    <?php if (count($_smarty_tpl->tpl_vars['ds_hang']->value)>0){?>
						<table id="bang">
							
							<thead>
								<tr>
								   <th><input class="check-all" type="checkbox" /></th>
								   <th>Mã nhà sản xuất</th>
								   <th>Tên nhà sản xuất</th>
                                   <th>Tên loại</th>
                                   <th>Logo</th>
                                   <th></th>
								</tr>
								
							</thead>

							<tbody>
                            <?php  $_smarty_tpl->tpl_vars['hang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_hang']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hang']->key => $_smarty_tpl->tpl_vars['hang']->value){
$_smarty_tpl->tpl_vars['hang']->_loop = true;
?>
								<tr class="">
									<td><input value="<?php echo $_smarty_tpl->tpl_vars['hang']->value->ma_nha_san_xuat;?>
" class="chon_xoa" type="checkbox" /></td>
									<th><?php echo $_smarty_tpl->tpl_vars['hang']->value->ma_nha_san_xuat;?>
</th>
								   <th><?php echo $_smarty_tpl->tpl_vars['hang']->value->ten_nha_san_xuat;?>
</th>
                                   <th><?php echo $_smarty_tpl->tpl_vars['m_common']->value->select_single_id('nha_san_xuat','ma_nha_san_xuat',$_smarty_tpl->tpl_vars['hang']->value->ma_loai)->ten_nha_san_xuat;?>
</th>
                                   <th><img width="100px" src="<?php echo @constant('IMG');?>
/logos/<?php echo $_smarty_tpl->tpl_vars['hang']->value->logo;?>
"/></th>
									<th>
										<!-- Icons -->
										 <a href="javascript:Hoi_xoa_nhom('nha_san_xuat','san_pham','ma_nha_san_xuat',<?php echo $_smarty_tpl->tpl_vars['hang']->value->ma_nha_san_xuat;?>
,'<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
','hãng sản xuất','sản phẩm')" title="Delete">
                                         <img src="images/icons/cross.png" alt="Delete" /></a> 
                                         <a href="cap_nhat_hangsx.php?ma_nha_san_xuat=<?php echo $_smarty_tpl->tpl_vars['hang']->value->ma_nha_san_xuat;?>
" title="Edit"><img src="images/icons/pencil.png" alt="Edit" /></a>
									</th>
								</tr>
                                <?php } ?>
                                <tr>
                                	<td colspan="6">
                                    	<div style="width:150px; margin:auto">
                                        	<input onclick="xoa_nhieu_nhom('nha_san_xuat','san_pham','ma_nha_san_xuat','<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
','hãng sản xuất','sản phẩm')" style="height:40px; cursor:pointer" type="button" name="btn_xoa_sp" class="btn_xoa_sp" value="Xóa"/>
                                        </div>
                                     </td>
                               </tr>
                               <tr><td colspan="5"><div class="pages_list"><?php echo $_smarty_tpl->tpl_vars['lst']->value;?>
</div></td></tr>
							</tbody>
                            <input type="hidden" class="ma_loai" value="<?php echo $_smarty_tpl->tpl_vars['ma_loai']->value;?>
"/>
                            <?php echo $_smarty_tpl->getSubTemplate ('views/xl_ajax/v_script_nhom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

						</table>
						  <?php }else{ ?>
                          <h3>Không có kết quả</h3>
                         <?php }?>
					</div> <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->
				
			</div>
<?php }} ?>
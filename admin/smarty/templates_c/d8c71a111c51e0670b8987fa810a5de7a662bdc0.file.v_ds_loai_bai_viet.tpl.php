<?php /* Smarty version Smarty-3.1.14, created on 2018-04-05 15:24:44
         compiled from "views\bai_viet\v_ds_loai_bai_viet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2565abcb6c9a7fa99-57948786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8c71a111c51e0670b8987fa810a5de7a662bdc0' => 
    array (
      0 => 'views\\bai_viet\\v_ds_loai_bai_viet.tpl',
      1 => 1522565868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2565abcb6c9a7fa99-57948786',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5abcb6c9b364a9_87091368',
  'variables' => 
  array (
    'title' => 0,
    'm_common' => 0,
    'loai_bai_viets' => 0,
    'loai' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abcb6c9b364a9_87091368')) {function content_5abcb6c9b364a9_87091368($_smarty_tpl) {?>
<div class="content-box">
<!-- Start Content Box -->
    <div class="content-box-header">
      <h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
      <div style="width:200px; float:left; padding:10px 0">
      </div>
      
      <h3 style="color:#00F; text-align:center; padding:10px 0">
      <?php if (isset($_SESSION['them_loai_xong'])){?>
          <?php echo $_SESSION['them_loai_xong'];?>

          <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_sess('them_loai_xong');?>

       <?php }?>
      </h3>
      <div style="clear:both"></div>
    </div>
    <!-- End .content-box-header -->
    
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
            <h3 style="color:#F00; text-align:center; padding:10px 0; text-indent:10px">
                  <?php if (isset($_SESSION['kq_xoa_nhom'])){?>
                  <p style="font-weight:bold; font-size:20px"><?php echo $_SESSION['kq_xoa_nhom'];?>
</p>
                  <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_sess('kq_xoa_nhom');?>

                   <?php }?>
              </h3>
            <?php if (count($_smarty_tpl->tpl_vars['loai_bai_viets']->value)>0){?>
    		<table id="bang">
              <thead>
                <tr>
                  <th><input class="check-all" type="checkbox" /></th>
                  <th>Mã loại bài</th>
                  <th>Tên loại bài</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <?php  $_smarty_tpl->tpl_vars['loai'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loai']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['loai_bai_viets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->key => $_smarty_tpl->tpl_vars['loai']->value){
$_smarty_tpl->tpl_vars['loai']->_loop = true;
?>
                <tr class="">
                  <th><input value="<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai_bai;?>
" class="chon_xoa" type="checkbox" /></th>
                  <th><?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai_bai;?>
</th>
                  <th><a href="ds_bai_viet.php?ma_loai_bai=<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai_bai;?>
"><?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai_bai;?>
</a></th>
                  <th> <!-- Icons --> 
                    <a href="javascript:Hoi_xoa_nhom('bai_viet','loai_bai_viet','ma_loai_bai',<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai_bai;?>
,'<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
','loại bài','bài viết')" 
                    title="Delete"><img src="<?php echo @constant('IMG_AD');?>
/icons/cross.png" alt="Delete" /></a>
                    
                    <a href="cap_nhat_loai_bai_viet.php?ma_loai_bai=<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai_bai;?>
" title="Edit"><img src="<?php echo @constant('IMG_AD');?>
/icons/pencil.png" alt="Edit" /></a>
                    </th>
                </tr>
                <?php } ?>
                <tr>
                  <td colspan="10">
                      <div style="width:150px; margin:auto">
                          <input style="height:40px; cursor:pointer" onclick="xoa_nhieu_nhom('bai_viet','loai_bai_viet','ma_loai_bai','<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
','loại bài','bài viết')"
                          type="button" name="btn_xoa_sp" class="btn_xoa_sp" value="Xóa loại"/>
                        </div>
                    </td>
                </tr>
                <tr>
                  <td colspan="10"><div class="pages_list"></div></td>
                </tr>
              </tbody>
              
              <?php echo $_smarty_tpl->getSubTemplate ("views/xl_ajax/v_script_nhom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </table>
				<?php }else{ ?>
				<h3 style="padding:20px 0">Không tìm thấy loại bài viết nào</h3>
				<?php }?>     
         </div> <!-- End #tab1 -->
     </div> <!-- End .content-box-content -->
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2018-04-01 07:46:05
         compiled from "views\san_pham\v_tag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110375ab9dc1d4426f5-22139615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0903eb3e1ca697bdcc11737a48398d90d680452' => 
    array (
      0 => 'views\\san_pham\\v_tag.tpl',
      1 => 1522561561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110375ab9dc1d4426f5-22139615',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ab9dc1d5a2e70_64069695',
  'variables' => 
  array (
    'title' => 0,
    'link' => 0,
    'm_common' => 0,
    'tags' => 0,
    'tag' => 0,
    'lst' => 0,
    'm_san_pham' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab9dc1d5a2e70_64069695')) {function content_5ab9dc1d5a2e70_64069695($_smarty_tpl) {?>
<div class="content-box">
<!-- Start Content Box -->
    <div class="content-box-header">
      <h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
      <div style="width:200px; float:left; padding:10px 0">
        <input type="hidden" class="link" value="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"/>
      </div>
      
      <h3 style="color:#F00; text-align:center; padding:10px 0"></h3>
      <div style="clear:both"></div>
    </div>
    <!-- End .content-box-header -->
    
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
            <h3 style="color:#F00; text-align:center; padding:10px 0; text-indent:10px">
                  <?php if (isset($_SESSION['kq_xoa'])){?>
                  <p style="font-weight:bold; font-size:20px"><?php echo $_SESSION['kq_xoa'];?>
</p>
                  <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_sess('kq_xoa');?>

                   <?php }?>
             </h3>
             <h3 style="color:#00F; text-align:center; padding:10px 0; text-indent:10px">
                  <?php if (isset($_COOKIE['them_tag_xong'])){?>
                    <?php echo $_COOKIE['them_tag_xong'];?>

                    <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_cook('them_tag_xong');?>

                   <?php }?>
             </h3>
             <h3 style="color:#00F; text-align:center; padding:10px 0; text-indent:10px">
                  <?php if (isset($_SESSION['edit'])){?>
                  <p style="color:#00F; font-weight:bold; font-size:20px"><?php echo $_SESSION['edit'];?>
</p>
                  <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_sess('edit');?>

                   <?php }?>
             </h3>
           <?php if (count($_smarty_tpl->tpl_vars['tags']->value)>0){?>
           
    		<table id="bang">
              <thead>
                <tr>
                  <th><input class="check-all" type="checkbox" /></th>
                  <th>Mã số</th>
                  <th>Tên tag</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                <tr class="">
                  <th><input value="<?php echo $_smarty_tpl->tpl_vars['tag']->value->stt;?>
" class="chon_xoa" type="checkbox" /></th>
                  <th><?php echo $_smarty_tpl->tpl_vars['tag']->value->stt;?>
</th>
                  <th><input value="<?php echo $_smarty_tpl->tpl_vars['tag']->value->tag_name;?>
" type="text" name="tag_name" class="tag_name"/></th>
                  <th> <!-- Icons --> 
                    <a href="javascript:Hoi_xoa('tag','stt',<?php echo $_smarty_tpl->tpl_vars['tag']->value->stt;?>
,'<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
','thẻ tag')" 
                    title="Delete"><img src="<?php echo @constant('IMG_AD');?>
/icons/cross.png" alt="Delete" /></a>
                    <a class="edit_tag" href="#" title="Edit"><img src="<?php echo @constant('IMG_AD');?>
/icons/pencil.png" alt="Edit" /></a>
                   </th>
                </tr>
                <?php } ?>
                <tr>
                  <td colspan="4">
                      <div style="width:150px; margin:auto">
                          <input style="height:40px; cursor:pointer" onclick="xoa_nhieu('tag','stt','<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
','thẻ tag')"
                          type="button" name="btn_xoa_sp" class="btn_xoa_sp" value="Xóa tag"/>
                       </div>
                    </td>
                </tr>
                <tr>
                  <td colspan="11"><div class="pages_list"><?php echo $_smarty_tpl->tpl_vars['lst']->value;?>
</div></td>
                </tr>
              </tbody>
              
              <?php echo $_smarty_tpl->getSubTemplate ("views/xl_ajax/v_script_phan_tu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </table>
            <script>
			$('.edit_tag').each(function(index) {
                $('.edit_tag').eq(index).click(function(e){
					e.preventDefault();
					$stt = $('.chon_xoa').eq(index).val();
					$val = $('.tag_name').eq(index).val();
					if(confirm('Thay đổi tên thẻ tag ?'))
						window.location = 'edit_tag.php?stt='+$stt+'&val='+$val;
				})
            });
			</script>
			<?php }else{ ?>
				<h3 style="padding:20px 0">Không tìm thấy</h3>
			<?php }?>
            <div>
            	<h3 style="padding:10px 0">Thêm tag</h3>
                <form name="frm_them_tag" method="post" action="">
                	tên tag: <input name="tag_name" value="<?php echo $_smarty_tpl->tpl_vars['m_common']->value->show_value('','tag_name','');?>
" type="text" required="required"/>
                    <input type="submit" name="btn_them_tag" value="Thêm tag"/>
                    <p style="color:#F00; font-style:italic"><?php echo $_smarty_tpl->tpl_vars['m_san_pham']->value->loi_cap_nhat_hang;?>
</p>
                </form>
            </div>     
         </div> <!-- End #tab1 -->
     </div> <!-- End .content-box-content -->
</div>
<?php }} ?>
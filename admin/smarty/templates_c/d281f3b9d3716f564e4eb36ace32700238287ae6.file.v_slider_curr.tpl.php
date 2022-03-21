<?php /* Smarty version Smarty-3.1.14, created on 2018-04-04 08:25:47
         compiled from "views\slider\v_slider_curr.tpl" */ ?>
<?php /*%%SmartyHeaderCode:280685ac4630debb9a8-61087003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd281f3b9d3716f564e4eb36ace32700238287ae6' => 
    array (
      0 => 'views\\slider\\v_slider_curr.tpl',
      1 => 1522823138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '280685ac4630debb9a8-61087003',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ac4630e110b65_04231197',
  'variables' => 
  array (
    'slider' => 0,
    'hinh' => 0,
    'v' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac4630e110b65_04231197')) {function content_5ac4630e110b65_04231197($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['slider']->value)>0){?>
<div class="container-hinhphu">
  <?php  $_smarty_tpl->tpl_vars['hinh'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hinh']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hinh']->key => $_smarty_tpl->tpl_vars['hinh']->value){
$_smarty_tpl->tpl_vars['hinh']->_loop = true;
?>
    <div class="cont-img">
        <div class="box-img">
        <img src="../assets/images/sliders/<?php echo $_smarty_tpl->tpl_vars['hinh']->value->hinh;?>
"/>
        </div>
        <div style="padding:10px 0; text-align:center">
        <?php if ($_smarty_tpl->tpl_vars['v']->value==1){?>
            <input class="id_hinh" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['hinh']->value->id;?>
"/>
            <input class="vi_tri_ht" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['hinh']->value->vi_tri;?>
"/>
            <label>Vị trí: </label>
            <select class="vi_tri_hinh" name="vi_tri">
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['slider']->value)+1 - (1) : 1-(count($_smarty_tpl->tpl_vars['slider']->value))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                <option class="op_vi_tri" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['hinh']->value->vi_tri){?>selected<?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['i']->value;?>

                </option>
             <?php }} ?>
            </select>
          <?php }else{ ?>
            <label>Loại ra: <input class="id_hinh" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['hinh']->value->id;?>
" name="id_hinh[]"/></label>
          <?php }?>
         </div>
    </div>
    <?php } ?>
    <div class="clear"></div>
    <?php if ($_smarty_tpl->tpl_vars['v']->value!=1){?>
    	<div style="text-align:center"><input id="btn_slider" type="submit" name="btn_slider" value="Cập nhật"/></div>
        <script>
		$('#btn_slider').click(function(e){
			var count_chon_xoa = $('.id_hinh').filter(':checked').length;
			var mang_chon_xoa = [];
			
			for(var i = 0; i<count_chon_xoa; i++)
			{
				var val = $('.id_hinh').filter(':checked').eq(i).val();
				mang_chon_xoa.push(val);
			}
			var id_val = mang_chon_xoa.join();
			if(id_val == '')
			{
				e.preventDefault();
				alert('Hãy chọn hình cần loại ra');
			}
		})
        </script>
    <?php }?>
  </div>
  <?php echo $_smarty_tpl->getSubTemplate ("views/xl_ajax/v_script_sx_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
<h3 style="padding:20px 0">Không tìm thấy hình ảnh nào</h3>
<?php }?><?php }} ?>
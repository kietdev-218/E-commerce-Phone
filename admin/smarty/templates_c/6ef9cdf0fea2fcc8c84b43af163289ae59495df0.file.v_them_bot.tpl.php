<?php /* Smarty version Smarty-3.1.14, created on 2018-04-04 09:03:38
         compiled from "views\slider\v_them_bot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161185ac468266e9e24-64275137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ef9cdf0fea2fcc8c84b43af163289ae59495df0' => 
    array (
      0 => 'views\\slider\\v_them_bot.tpl',
      1 => 1522825322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161185ac468266e9e24-64275137',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ac46826720825_49102014',
  'variables' => 
  array (
    'title' => 0,
    'hinh_ngoai_slider' => 0,
    'h' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac46826720825_49102014')) {function content_5ac46826720825_49102014($_smarty_tpl) {?>
<div class="content-box">
<!-- Start Content Box -->
    <div class="content-box-header">
      <h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
      
      <div style="clear:both"></div>
    </div>
    <!-- End .content-box-header -->
    
    <div class="content-box-content">
    <h3 style="color:#00F">Slider hiện tại</h3>
        <div class="tab-content default-tab" id="tab1">
        <p>Hình ảnh trong slider cần có tỷ lệ khung hình bằng nhau để slider được đều</p>
        <form name="frm_slider" method="post">
            <?php echo $_smarty_tpl->getSubTemplate ("views/slider/v_slider_curr.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

         </form>
         <br /><hr />
         <h3 style="padding:15px 0; color:#00F">Hình ảnh ngoài slider</h3>
         <form name="frm_them_slider" method="post">
         <?php if (count($_smarty_tpl->tpl_vars['hinh_ngoai_slider']->value)>0){?>
            <div class="container-hinhphu">
              <?php  $_smarty_tpl->tpl_vars['h'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['h']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hinh_ngoai_slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['h']->key => $_smarty_tpl->tpl_vars['h']->value){
$_smarty_tpl->tpl_vars['h']->_loop = true;
?>
                <div class="cont-img">
                    <div class="box-img">
                    <img src="../assets/images/sliders/<?php echo $_smarty_tpl->tpl_vars['h']->value->hinh;?>
"/>
                    </div>
                    <div style="padding:10px 0; text-align:center">                   
                        <label>Chọn: <input class="id_hinh2" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['h']->value->id;?>
" name="id_hinh2[]"/></label>
                     </div>
                </div>
                <?php } ?>
                <div class="clear"></div>
                
                    <div style="text-align:center"><input id="btn_them_slider" type="submit" name="btn_them_slider" value="Thêm vào slider"/></div>
                    <script>
                    $('#btn_them_slider').click(function(e){
                        var count_chon_xoa2 = $('.id_hinh2').filter(':checked').length;
                        var mang_chon_xoa2 = [];
                        
                        for(var i = 0; i<count_chon_xoa2; i++)
                        {
                            var val = $('.id_hinh2').filter(':checked').eq(i).val();
                            mang_chon_xoa2.push(val);
                        }
                        var id_val2 = mang_chon_xoa2.join();
                        if(id_val2 == '')
                        {
                            e.preventDefault();
                            alert('Hãy chọn hình cần thêm');
                        }
                    })
                    </script>
                
              </div>
        <?php }else{ ?>
        <h3 style="padding:20px 0">Không tìm thấy hình ảnh nào</h3>
        <?php }?>
        </form>
         </div> <!-- End #tab1 -->
     </div> <!-- End .content-box-content -->
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2018-04-05 11:04:40
         compiled from "views\slider\v_ds_hinh.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48815ac20cf75e67a5-65111346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a45e472c236ae35a126587f8beca277bd265b79' => 
    array (
      0 => 'views\\slider\\v_ds_hinh.tpl',
      1 => 1522919077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48815ac20cf75e67a5-65111346',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ac20cf765ab80_53561741',
  'variables' => 
  array (
    'title' => 0,
    'm_common' => 0,
    'ds_hinh' => 0,
    'hinh' => 0,
    'lst' => 0,
    'm_slider' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac20cf765ab80_53561741')) {function content_5ac20cf765ab80_53561741($_smarty_tpl) {?>
<div class="content-box">
<!-- Start Content Box -->
    <div class="content-box-header">
      <h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
      
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
                  <?php if (isset($_COOKIE['them_hinh_xong'])){?>
                  <?php echo $_COOKIE['them_hinh_xong'];?>

                  <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_cook('them_hinh_xong');?>

                   <?php }?>
              </h3>
            
            <?php if (count($_smarty_tpl->tpl_vars['ds_hinh']->value)>0){?>
            <p>Những hình ảnh có vị trí 0 là những hình không hiển thị trong slider. Hình ảnh trong slider cần có tỷ lệ khung hình bằng nhau để slider được đều</p>
    		<table id="bang">
              <thead>
                <tr>
                  <th><input class="check-all" type="checkbox" /></th>
                  <th>id</th>
                  <th>Tên hình</th>
                  <th>Vị trí</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <?php  $_smarty_tpl->tpl_vars['hinh'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hinh']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_hinh']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hinh']->key => $_smarty_tpl->tpl_vars['hinh']->value){
$_smarty_tpl->tpl_vars['hinh']->_loop = true;
?>
                <tr class="">
                  <th><input value="<?php echo $_smarty_tpl->tpl_vars['hinh']->value->id;?>
" class="chon_xoa" type="checkbox" /></th>
                  <th><?php echo $_smarty_tpl->tpl_vars['hinh']->value->id;?>
</th>
                  <th><img  width="100px" src="<?php echo @constant('IMG');?>
/sliders/<?php echo $_smarty_tpl->tpl_vars['hinh']->value->hinh;?>
"/></th>
                  <th><?php echo $_smarty_tpl->tpl_vars['hinh']->value->vi_tri;?>
</th>
                  <th> <!-- Icons --> 
                    <a href="javascript:Hoi_xoa_hinh_sli(<?php echo $_smarty_tpl->tpl_vars['hinh']->value->id;?>
)" 
                    title="Delete"><img src="<?php echo @constant('IMG_AD');?>
/icons/cross.png" alt="Delete" /></a>
                    </th>
                </tr>
                <?php } ?>
                <tr>
                  <td colspan="5">
                      <div style="width:150px; margin:auto">
                          <input style="height:40px; cursor:pointer" onclick="xoa_nhieu_hinh_sli()"
                          type="button" name="btn_xoa_sp" class="btn_xoa_sp" value="Xóa hình"/>
                        </div>
                    </td>
                </tr>
                <tr>
                  <td colspan="5"><div class="pages_list"><?php echo $_smarty_tpl->tpl_vars['lst']->value;?>
</div></td>
                </tr>
              </tbody>
            </table>
<script>
function Hoi_xoa_hinh_sli(id)
{
	if(confirm("Bạn muốn xóa hình này ?"))
	{
		window.location='xoa_hinh_slider.php?id='+id;	
	}	
}

function xoa_nhieu_hinh_sli(){
	var count_chon_xoa = $('.chon_xoa').filter(':checked').length;
	var mang_chon_xoa = [];
	
	for(var i = 0; i<count_chon_xoa; i++)
	{
		var val = $('.chon_xoa').filter(':checked').eq(i).val();
		mang_chon_xoa.push(val);
	}
	var id = mang_chon_xoa.join();
	if(id != '')
		Hoi_xoa_hinh_sli(id);
	else
		alert('Hãy chọn những hình cần xóa');
}

$('.check-all').click(
	function(){
		$(this).parent().parent().parent().parent().find("input[type='checkbox']").attr('checked', $(this).is(':checked'));   
	}
);
</script>

            <?php }else{ ?>
            <h3 style="padding:20px 0">Không tìm thấy hình ảnh nào</h3>
			<?php }?>
            <h3 style="text-align:center; padding:10px 0">Thêm hình vào danh sách</h3>
            <form name="frm_them_hinh" method="post" enctype="multipart/form-data">
            
            <strong>Thêm hình: </strong><input type="file" name="hinh[]" value="" multiple="multiple"/><br />
            <p>(Có thể thêm nhiều hình, định dạng phải là jpg,jpeg,bmp,png ; kích thước không quá 4mb)</p>
            <strong>Đưa vào slider: </strong><label>Có <input type="radio" name="gt" value="1" checked="checked"/></label>
            <label>Không <input type="radio" name="gt" value="0"/></label>
            <p style="color:#F00; font-style:italic"><?php echo $_smarty_tpl->tpl_vars['m_slider']->value->loi_up_hinh;?>
</p>
            <div style="padding:10px 0"><input type="submit" name="btn_them_hinh" value="Thêm"/></div>
            </form>
         </div> <!-- End #tab1 -->
     </div> <!-- End .content-box-content -->
</div>
<?php }} ?>
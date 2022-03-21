<?php /* Smarty version Smarty-3.1.14, created on 2018-04-05 14:54:52
         compiled from "views\bai_viet\v_ds_bai_viet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54355abb51ee423208-38009074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b06ad0f6c83edbaf06b8fa66705d8f9be442963f' => 
    array (
      0 => 'views\\bai_viet\\v_ds_bai_viet.tpl',
      1 => 1522607288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54355abb51ee423208-38009074',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5abb51ee535225_17057723',
  'variables' => 
  array (
    'title' => 0,
    'm_common' => 0,
    'ds_loai_bai' => 0,
    'i' => 0,
    'bai_viets' => 0,
    'bv' => 0,
    'm_bai_viet' => 0,
    'link' => 0,
    'lst' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abb51ee535225_17057723')) {function content_5abb51ee535225_17057723($_smarty_tpl) {?>
<div class="content-box">
<!-- Start Content Box -->
    <div class="content-box-header">
      <h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
      <div style="width:200px; float:left; padding:10px 0">
        <input name="thanh_tim" type="text" id="thanh_tim" placeholder="Nhập tên bài viết"/>
        <?php echo $_smarty_tpl->getSubTemplate ("views/input/v_input3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      </div>
      
      <h3 style="color:#00F; text-align:center; padding:10px 0">
      <?php if (isset($_SESSION['them_bai_xong'])){?>
          <?php echo $_SESSION['them_bai_xong'];?>

          <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_sess('them_bai_xong');?>

       <?php }?>
      </h3>
      <div style="clear:both"></div>
    </div>
    <!-- End .content-box-header -->
    
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
        	<div style="padding:12px">
            
            <?php if (count($_smarty_tpl->tpl_vars['ds_loai_bai']->value)>0){?>
              <label style="font-weight:bold; font-size:16px">Loại bài viết:</label> 
              <select class="ds_loai" id="ma_loai_bai">
              <option class="loai_bai" value="">Tất cả</option>
              <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_loai_bai']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                  <option class="loai_bai" value="<?php echo $_smarty_tpl->tpl_vars['i']->value->ma_loai_bai;?>
" <?php echo $_smarty_tpl->tpl_vars['m_common']->value->selected('ma_loai_bai',$_smarty_tpl->tpl_vars['i']->value->ma_loai_bai);?>
>
                  <?php echo $_smarty_tpl->tpl_vars['i']->value->ten_loai_bai;?>

                  </option>
               <?php } ?>
              </select>
              <?php }?>
             
            </div>
            <h3 style="color:#F00; text-align:center; padding:10px 0; text-indent:10px">
                  <?php if (isset($_SESSION['kq_xoa'])){?>
                  <p style="font-weight:bold; font-size:20px"><?php echo $_SESSION['kq_xoa'];?>
</p>
                  <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_sess('kq_xoa');?>

                   <?php }?>
              </h3>
            <?php if (count($_smarty_tpl->tpl_vars['bai_viets']->value)>0){?>
    		<table id="bang">
              <thead>
                <tr>
                  <th><input class="check-all" type="checkbox" /></th>
                  <th>Mã bài viết</th>
                  <th>Tên bài viết</th>
                  <th>Loại</th>
                  <th>Nội dung tóm tắt</th>
                  <th>Người đăng</th>
                  <th>Ngày đăng</th>
                  <th>Hình</th>
                  <th>Lượt xem</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <?php  $_smarty_tpl->tpl_vars['bv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bai_viets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bv']->key => $_smarty_tpl->tpl_vars['bv']->value){
$_smarty_tpl->tpl_vars['bv']->_loop = true;
?>
                <tr class="">
                  <th><input value="<?php echo $_smarty_tpl->tpl_vars['bv']->value->ma_bai_viet;?>
" class="chon_xoa" type="checkbox" /></th>
                  <th><?php echo $_smarty_tpl->tpl_vars['bv']->value->ma_bai_viet;?>
</th>
                  <th><?php echo $_smarty_tpl->tpl_vars['bv']->value->ten_bai_viet;?>
</th>
                  <th><a href="ds_bai_viet.php?ma_loai_bai=<?php echo $_smarty_tpl->tpl_vars['bv']->value->ma_loai_bai;?>
"><?php echo $_smarty_tpl->tpl_vars['m_bai_viet']->value->xd_loai_bv($_smarty_tpl->tpl_vars['bv']->value->ma_loai_bai);?>
</a></th>
                  <th><?php echo $_smarty_tpl->tpl_vars['bv']->value->noi_dung_tom_tat;?>
</th>
                  <th>
                  <?php if (!empty($_smarty_tpl->tpl_vars['m_common']->value->select_single_id('nguoi_dung','ma_nguoi_dung',$_smarty_tpl->tpl_vars['bv']->value->ma_nguoi_dung))){?>
                  <?php echo $_smarty_tpl->tpl_vars['m_common']->value->select_single_id('nguoi_dung','ma_nguoi_dung',$_smarty_tpl->tpl_vars['bv']->value->ma_nguoi_dung)->ten_dang_nhap;?>

                  <?php }else{ ?>
                  user
                  <?php }?>
                  </th>
                  <th><?php echo date('d-m-Y',strtotime($_smarty_tpl->tpl_vars['bv']->value->ngay_dang));?>
</th>
                  <th><img width="100px" src="<?php echo @constant('IMG');?>
/news/<?php echo $_smarty_tpl->tpl_vars['bv']->value->hinh;?>
"/></th>
                  <th><?php echo $_smarty_tpl->tpl_vars['bv']->value->luot_xem;?>
</th>
                  <th> <!-- Icons --> 
                    <a href="javascript:Hoi_xoa('bai_viet','ma_bai_viet',<?php echo $_smarty_tpl->tpl_vars['bv']->value->ma_bai_viet;?>
,'<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
','bài viết')" 
                    title="Delete"><img src="<?php echo @constant('IMG_AD');?>
/icons/cross.png" alt="Delete" /></a>
                    
                    <a href="cap_nhat_bai_viet.php?ma_bai_viet=<?php echo $_smarty_tpl->tpl_vars['bv']->value->ma_bai_viet;?>
" title="Edit"><img src="<?php echo @constant('IMG_AD');?>
/icons/pencil.png" alt="Edit" /></a>
                    <a href="../bt_<?php echo thu_vien::bo_dau($_smarty_tpl->tpl_vars['bv']->value->ten_bai_viet);?>
.<?php echo $_smarty_tpl->tpl_vars['bv']->value->ma_bai_viet;?>
.html" title="Xem chi tiết"><img src="<?php echo @constant('IMG_AD');?>
/icons/view-details.png" width="16px"/></a>
                    </th>
                </tr>
                <?php } ?>
                <tr>
                  <td colspan="10">
                      <div style="width:150px; margin:auto">
                          <input style="height:40px; cursor:pointer" onclick="xoa_nhieu('bai_viet','ma_bai_viet','<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
','bài viết')"
                          type="button" name="btn_xoa_sp" class="btn_xoa_sp" value="Xóa bài"/>
                        </div>
                    </td>
                </tr>
                <tr>
                  <td colspan="10"><div class="pages_list"><?php echo $_smarty_tpl->tpl_vars['lst']->value;?>
</div></td>
                </tr>
              </tbody>
              
              <?php echo $_smarty_tpl->getSubTemplate ("views/xl_ajax/v_script_phan_tu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </table>
            <?php echo $_smarty_tpl->getSubTemplate ("views/xl_ajax/v_script_tim_2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


				<?php }else{ ?>
				<h3 style="padding:20px 0">Không tìm thấy bài viết nào</h3>
				<?php }?>     
         </div> <!-- End #tab1 -->
     </div> <!-- End .content-box-content -->
</div>
<?php }} ?>
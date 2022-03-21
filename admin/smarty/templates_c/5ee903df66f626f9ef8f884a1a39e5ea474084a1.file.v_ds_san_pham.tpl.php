<?php /* Smarty version Smarty-3.1.14, created on 2018-04-05 14:47:45
         compiled from "views\san_pham\v_ds_san_pham.tpl" */ ?>
<?php /*%%SmartyHeaderCode:264745a2d1c09a161c2-60896986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ee903df66f626f9ef8f884a1a39e5ea474084a1' => 
    array (
      0 => 'views\\san_pham\\v_ds_san_pham.tpl',
      1 => 1522561608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '264745a2d1c09a161c2-60896986',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2d1c09a3c9f1_68412213',
  'variables' => 
  array (
    'title' => 0,
    'm_common' => 0,
    'select_loai' => 0,
    'ds_loai_sp' => 0,
    'i' => 0,
    'san_phams' => 0,
    'sp' => 0,
    'm_san_pham' => 0,
    'link' => 0,
    'lst' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2d1c09a3c9f1_68412213')) {function content_5a2d1c09a3c9f1_68412213($_smarty_tpl) {?>
<div class="content-box">
<!-- Start Content Box -->
    <div class="content-box-header">
      <h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
      <div style="width:200px; float:left; padding:10px 0">
        <input name="thanh_tim" type="text" id="thanh_tim" placeholder="Nhập tên sản phẩm"/>
        <?php echo $_smarty_tpl->getSubTemplate ("views/input/v_input3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      </div>
      
      <h3 style="color:#00F; text-align:center; padding:10px 0">
      <?php if (isset($_SESSION['them_sp_xong'])){?>
          <?php echo $_SESSION['them_sp_xong'];?>

          <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_sess('them_sp_xong');?>

       <?php }?>
      </h3>
      <div style="clear:both"></div>
    </div>
    <!-- End .content-box-header -->
    
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
        	<div style="padding:12px">
            <?php if (isset($_smarty_tpl->tpl_vars['select_loai']->value)){?>
            <?php if (count($_smarty_tpl->tpl_vars['ds_loai_sp']->value)>0){?>
              <label style="font-weight:bold; font-size:16px">Loại sản phẩm:</label> 
              <select class="ds_loai" id="ma_loai">
              <option class="loai_sp" value="">Tất cả</option>
              <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_loai_sp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                  <option class="loai_sp" value="<?php echo $_smarty_tpl->tpl_vars['i']->value->ma_nha_san_xuat;?>
" <?php echo $_smarty_tpl->tpl_vars['m_common']->value->selected('ma_loai',$_smarty_tpl->tpl_vars['i']->value->ma_nha_san_xuat);?>
>
                  <?php echo $_smarty_tpl->tpl_vars['i']->value->ten_nha_san_xuat;?>

                  </option>
               <?php } ?>
              </select>
              <?php }?>
              <?php }?>
            </div>
            <h3 style="color:#F00; text-align:center; padding:10px 0; text-indent:10px">
                  <?php if (isset($_SESSION['kq_xoa'])){?>
                  <p style="font-weight:bold; font-size:20px"><?php echo $_SESSION['kq_xoa'];?>
</p>
                  <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_sess('kq_xoa');?>

                   <?php }?>
              </h3>
            <?php if (count($_smarty_tpl->tpl_vars['san_phams']->value)>0){?>
    		<table id="bang">
              <thead>
                <tr>
                  <th><input class="check-all" type="checkbox" /></th>
                  <th>Mã sản phẩm</th>
                  <th>Tên sản phẩm</th>
                  <th>Loại</th>
                  <th>Nhà sản xuất</th>
                  <th>Đơn giá</th>
                  <th>km</th>
                  <th>Hình</th>
                  <th>Lượt xem</th>
                  <th>Lượt mua</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <?php  $_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['san_phams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->key => $_smarty_tpl->tpl_vars['sp']->value){
$_smarty_tpl->tpl_vars['sp']->_loop = true;
?>
                <tr class="">
                  <th><input value="<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
" class="chon_xoa" type="checkbox" /></th>
                  <th><?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
</th>
                  <th><?php echo $_smarty_tpl->tpl_vars['sp']->value->ten_san_pham;?>
</th>
                  <th><a href="san_pham.php?ma_loai=<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_loai;?>
"><?php echo $_smarty_tpl->tpl_vars['m_san_pham']->value->loai_nsx($_smarty_tpl->tpl_vars['sp']->value->ma_loai);?>
</a></th>
                  <th><a href="san_pham.php?ma_nha_san_xuat=<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_nha_san_xuat;?>
"><?php echo $_smarty_tpl->tpl_vars['m_san_pham']->value->loai_nsx($_smarty_tpl->tpl_vars['sp']->value->ma_nha_san_xuat);?>
</a></th>
                  <th><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value->don_gia,0,',','.');?>
 Đ</th>
                  <th><?php if ($_smarty_tpl->tpl_vars['sp']->value->khuyen_mai>0){?>-<?php echo $_smarty_tpl->tpl_vars['sp']->value->khuyen_mai;?>
%<?php }else{ ?>Không<?php }?></th>
                  <th><img width="100px" src="<?php echo @constant('IMG');?>
/products/<?php echo $_smarty_tpl->tpl_vars['sp']->value->hinh;?>
"/></th>
                  <th><?php echo $_smarty_tpl->tpl_vars['sp']->value->so_luot_xem;?>
</th>
                  <th><?php echo $_smarty_tpl->tpl_vars['sp']->value->so_luot_mua;?>
</th>
                  <th> <!-- Icons --> 
                    <a href="javascript:Hoi_xoa('san_pham','ma_san_pham',<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
,'<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
','sản phẩm')" 
                    title="Delete"><img src="<?php echo @constant('IMG_AD');?>
/icons/cross.png" alt="Delete" /></a>
                    
                    <a href="cap_nhat_san_pham.php?ma_san_pham=<?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
" title="Edit"><img src="<?php echo @constant('IMG_AD');?>
/icons/pencil.png" alt="Edit" /></a>
                    <a href="" title="Xem chi tiết"><img src="<?php echo @constant('IMG_AD');?>
/icons/view-details.png" width="16px"/></a>
                    </th>
                </tr>
                <?php } ?>
                <tr>
                  <td colspan="11">
                      <div style="width:150px; margin:auto">
                          <input style="height:40px; cursor:pointer" onclick="xoa_nhieu('san_pham','ma_san_pham','<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
','sản phẩm')"
                          type="button" name="btn_xoa_sp" class="btn_xoa_sp" value="Xóa sản phẩm"/>
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
            <?php echo $_smarty_tpl->getSubTemplate ("views/xl_ajax/v_script_tim_2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }else{ ?>
				<h3 style="padding:20px 0">Không tìm thấy sản phẩm nào</h3>
				<?php }?>     
         </div> <!-- End #tab1 -->
     </div> <!-- End .content-box-content -->
</div>
<?php }} ?>
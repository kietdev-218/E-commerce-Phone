<?php /* Smarty version Smarty-3.1.14, created on 2018-04-06 08:51:42
         compiled from "views\lien_he\v_xem_lien_he.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152645ab3433fed4b94-94084420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43b5e49cead3fda702182768193098caef2c00f0' => 
    array (
      0 => 'views\\lien_he\\v_xem_lien_he.tpl',
      1 => 1522610834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152645ab3433fed4b94-94084420',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ab34340011879_14884563',
  'variables' => 
  array (
    'title' => 0,
    'xem_lien_he' => 0,
    'm_common' => 0,
    'ma_lien_he' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab34340011879_14884563')) {function content_5ab34340011879_14884563($_smarty_tpl) {?>
<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
                    <div style="clear:both"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
                
                <h3 style="color:#00F">
                <?php if (isset($_COOKIE['tra_loi_xong'])){?>
                <?php echo $_COOKIE['tra_loi_xong'];?>

                <?php }?>
                </h3>
					<form name="frm_lh" method="post">
					<div class="tab-content default-tab" id="tab1">
                    	<div style="padding:10px 0">
                        	<div style="width:10%; float:left">Tên người gửi:</div>
                            <div style="width:90%; float:left; color:#00F"><?php echo $_smarty_tpl->tpl_vars['xem_lien_he']->value->ten_nguoi_gui;?>
</div>
                            <div style="clear:both"></div>
                        </div>
                        
                        <div style="padding:10px 0">
                          <div style="width:10%; float:left">Nội dung:</div>
                          <div style="width:90%; border:1px solid #999; float:left; box-sizing:border-box">
                              <div style="width:97%; margin:auto; padding:10px 0">
                              <?php echo $_smarty_tpl->tpl_vars['xem_lien_he']->value->noi_dung;?>

                              </div>
                          </div>
                          <div style="clear:both"></div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['xem_lien_he']->value->trang_thai==2){?>
                        <div style="padding:10px 0">
                          <div style="width:10%; float:left">Đã trả lời:</div>
                          <div style="width:90%; float:left">
                          	<textarea class="tra_loi_lh" name="tra_loi_lh" readonly="readonly"
                               style="width:100%; box-sizing:border-box"><?php echo $_smarty_tpl->tpl_vars['xem_lien_he']->value->tra_loi;?>
</textarea>
                             <p>
                             <?php if (!empty($_smarty_tpl->tpl_vars['m_common']->value->select_single_id('nguoi_dung','ma_nguoi_dung',$_smarty_tpl->tpl_vars['xem_lien_he']->value->ma_nguoi_dung))){?>
                             	Người trả lời: <?php echo $_smarty_tpl->tpl_vars['m_common']->value->select_single_id('nguoi_dung','ma_nguoi_dung',$_smarty_tpl->tpl_vars['xem_lien_he']->value->ma_nguoi_dung)->ten_dang_nhap;?>

                             <?php }else{ ?>
                             Người trả lời: user
                             <?php }?>
                             </p>
                          </div>
                          <div style="clear:both"></div>
                        </div>
                        <?php }else{ ?>
                        <div style="padding:10px 0">
                          <div style="width:10%; float:left">Trả lời:</div>
                          <div style="width:90%; float:left">
                              <textarea class="tra_loi_lh" name="tra_loi_lh" rows="12" 
                              style="width:100%; box-sizing:border-box"></textarea>
                              <?php if (isset($_POST['btn_tra_loi'])&&strlen(trim($_POST['tra_loi_lh']))==0){?>
                              <p style="color:#F00; font-style:italic">Hãy nhập nội dung trả lời</p>
                              <?php }?>
                          </div>
                          <div style="clear:both"></div>
                        </div>
                        <?php }?>

                        <div style="width:320px; margin:auto">
                        	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['xem_lien_he']->value->ma_lien_he;?>
" class="ma_lh"/>
                            <input type="hidden" name="email" value="<?php echo $_smarty_tpl->tpl_vars['xem_lien_he']->value->email;?>
" class="email_lh"/>
                            <input style="height:40px; cursor:pointer" type="button" name="btn_xoa_lien_he" class="btn_xoa_lien_he" value="Xóa liên hệ" onclick="Hoi_xoa('lien_he','ma_lien_he',<?php echo $_smarty_tpl->tpl_vars['ma_lien_he']->value;?>
,'lien_he.php','liên hệ')"/>
                         <?php if ($_smarty_tpl->tpl_vars['xem_lien_he']->value->trang_thai!=2){?>   
                            <input type="submit" style="height:40px; cursor:pointer; margin-left:10px" name="btn_tra_loi" class="btn_tra_loi" value="Trả lời"/>
                          <?php }?>
                         </div>
                    </div> <!-- End #tab1 -->      
					</form>
				</div> <!-- End .content-box-content -->
				
			</div>
            <?php echo $_smarty_tpl->getSubTemplate ("views/xl_ajax/v_script_phan_tu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2018-04-05 15:25:28
         compiled from "views\bai_viet\v_cap_nhat_bai_viet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:289455abe1005b10a28-31740725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b1b9c0c417a67465ff8512a14c54a909d8f32f2' => 
    array (
      0 => 'views\\bai_viet\\v_cap_nhat_bai_viet.tpl',
      1 => 1522487612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289455abe1005b10a28-31740725',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5abe1005ea9986_68989155',
  'variables' => 
  array (
    'title' => 0,
    'm_common' => 0,
    'm_bai_viet' => 0,
    'bai_viet' => 0,
    'ds_loai_bai' => 0,
    'loai' => 0,
    'ma_loai_bai_ht' => 0,
    'ma_bai_viet' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abe1005ea9986_68989155')) {function content_5abe1005ea9986_68989155($_smarty_tpl) {?><script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<div class="content-box"><!-- Start Content Box -->
	
				<div class="content-box-header">

					<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
  
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					<h3 style="color:#00F">
                    <?php if (isset($_COOKIE['sua_bai_xong'])){?>
                    <?php echo $_COOKIE['sua_bai_xong'];?>

                    <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_cook('sua_bai_xong');?>

                    <?php }?>
                    </h3>
                    
                    <div style="color:#F00"><?php if (isset($_POST['btn_them_bv'])){?><?php echo $_smarty_tpl->tpl_vars['m_bai_viet']->value->loi_hinh;?>
<?php }?></div>
                    
					<div class="tab-content default-tab" id="tab1"> 
                    	<form class="form-sua-bai" name="form_sua_bai" action="" method="post" enctype="multipart/form-data">
                            <div class="container-form">
                              <div class="dong-input">
                                <div class="ten-input">Tựa đề:</div>
                                <div class="thanh-input">
                                  <input class="khung-input" type="text" name="ten_bai_viet"
                                   value="<?php if (isset($_POST['btn_them_bv'])){?><?php echo $_POST['ten_bai_viet'];?>
<?php }elseif(isset($_GET['ma_bai_viet'])){?><?php echo $_smarty_tpl->tpl_vars['bai_viet']->value->ten_bai_viet;?>
<?php }?>" required="required"/>
                                </div>
                                <div class="clear"></div>
                              </div>
                              <?php if (isset($_POST['btn_them_bv'])&&strlen(trim($_POST['ten_bai_viet']))==0){?>
                              <div class="bao_loi_php">
                                <div class="thanh-loi">Hãy nhập tựa đề</div>
                                <div class="clear"></div>
                              </div>
                              <?php }?>
                              
                              <div class="dong-input">
                                <div class="ten-input">Loại bài viết:</div>
                                
                                <div class="thanh-input">
                                
                                  <select name="ma_loai_bai" style="padding:10px 0; box-sizing:border-box" >
                                  <?php if (count($_smarty_tpl->tpl_vars['ds_loai_bai']->value)>0){?>
                                  <?php  $_smarty_tpl->tpl_vars['loai'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loai']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_loai_bai']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->key => $_smarty_tpl->tpl_vars['loai']->value){
$_smarty_tpl->tpl_vars['loai']->_loop = true;
?>
                                  	<option class="loai_bai" value="<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai_bai;?>
" <?php echo $_smarty_tpl->tpl_vars['m_common']->value->selected_2('ma_bai_viet','ma_loai_bai',$_smarty_tpl->tpl_vars['ma_loai_bai_ht']->value,$_smarty_tpl->tpl_vars['loai']->value->ma_loai_bai);?>
>
                                    	<?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai_bai;?>

                                    </option>
                                    <?php } ?>
                                  <?php }?>
                                  </select>
                                 
                                </div>
                                
                               </div>
                              <div style="margin-top:50px; margin-bottom:20px">
                                  <label style="font-size:18px">Upload hình chính của bài viết : </label>
                                  <input type="file" name="hinh_bv" class="hinh_bv"/>
                              </div>
                              <?php if (isset($_GET['ma_bai_viet'])){?>
                              <p>
                              <img width="250px" src="../assets/images/news/<?php echo $_smarty_tpl->tpl_vars['bai_viet']->value->hinh;?>
"/>
                              </p>
                              <?php if ($_smarty_tpl->tpl_vars['bai_viet']->value->hinh!='hinh_dang_cn.jpg'){?>
                              <input onclick="xoa_hinh('bai_viet','hinh','ma_bai_viet',<?php echo $_smarty_tpl->tpl_vars['ma_bai_viet']->value;?>
,'hinh_dang_cn.jpg','<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
')" type="button" class="xoa_hinh" value="Xóa hình"/>
                                <?php }?>
                                <?php }?>
                                
                               <div class="dong-input">
                                <div class="ten-input">Nội dung tóm tắt:</div>
                                <div class="clear"></div>
                                <div style="width:100%; float:none; margin:15px auto" class="thanh-input">
                                  <textarea id="noi_dung_tom_tat" class="ckeditor" name="noi_dung_tom_tat" rows="20" style="width:100%"><script>ckeditor.replace("noi_dung_tom_tat");</script><?php if (isset($_POST['btn_them_bv'])){?><?php echo $_POST['noi_dung_tom_tat'];?>
<?php }elseif(isset($_GET['ma_bai_viet'])){?><?php echo $_smarty_tpl->tpl_vars['bai_viet']->value->noi_dung_tom_tat;?>
<?php }?></textarea>
                                </div>
                                
                              </div>
                              <?php if (isset($_POST['btn_them_bv'])&&strlen(trim($_POST['noi_dung_tom_tat']))==0){?>
                              <div class="bao_loi_php">
                                <div class="thanh-loi">Hãy nhập nội dung tóm tắt</div>
                                <div class="clear"></div>
                              </div>
                              <?php }?>
                              
                                 <div class="dong-input">
                                <div class="ten-input">Nội dung chi tiết:</div>
                                <div class="clear"></div>
                                <div style="width:100%; float:none; margin:15px auto" class="thanh-input">
                                  <textarea id="noi_dung_chi_tiet" class="ckeditor" name="noi_dung_chi_tiet" rows="100" style="width:100%"><script>ckeditor.replace("noi_dung_chi_tiet");</script><?php if (isset($_POST['btn_them_bv'])){?><?php echo $_POST['noi_dung_chi_tiet'];?>
<?php }elseif(isset($_GET['ma_bai_viet'])){?><?php echo $_smarty_tpl->tpl_vars['bai_viet']->value->noi_dung_chi_tiet;?>
<?php }?></textarea>
                                </div>
                                
                              </div>
                              <?php if (isset($_POST['btn_them_bv'])&&strlen(trim($_POST['noi_dung_chi_tiet']))==0){?>
                              <div class="bao_loi_php">
                                <div class="thanh-loi">Hãy nhập nội dung chi tiết</div>
                                <div class="clear"></div>
                              </div>
                              <?php }?>

                              <div class="dong-input">
                                <div style="width:100px; margin:auto">
                                  <input name="btn_them_bv" type="submit" class="nut-submit" value="Lưu"/>
                                </div>
                              </div>
                            </div>
                          </form>
                          <!--end form dk-->
					</div> <!-- End #tab1 -->  
					
				</div> <!-- End .content-box-content -->
			</div>

<?php }} ?>
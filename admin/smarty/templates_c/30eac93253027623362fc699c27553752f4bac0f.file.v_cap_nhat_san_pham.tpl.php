<?php /* Smarty version Smarty-3.1.14, created on 2018-04-05 15:25:56
         compiled from "views\san_pham\v_cap_nhat_san_pham.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184185a336179ad1d90-83421980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30eac93253027623362fc699c27553752f4bac0f' => 
    array (
      0 => 'views\\san_pham\\v_cap_nhat_san_pham.tpl',
      1 => 1522918956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184185a336179ad1d90-83421980',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a33617a13f400_35919473',
  'variables' => 
  array (
    'tieu_de' => 0,
    'm_common' => 0,
    'm_san_pham' => 0,
    'san_pham' => 0,
    'ds_hang' => 0,
    'hang' => 0,
    'link' => 0,
    'hinh_chi_tiet' => 0,
    'hinhct' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a33617a13f400_35919473')) {function content_5a33617a13f400_35919473($_smarty_tpl) {?><script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<div class="content-box"><!-- Start Content Box -->
	
				<div class="content-box-header">
					<?php if (isset($_GET['ma_san_pham'])){?>
                    <input id="ma_san_pham" type="hidden" value="<?php echo $_GET['ma_san_pham'];?>
"/>
                    <?php }?>
					<h3><?php echo $_smarty_tpl->tpl_vars['tieu_de']->value;?>
</h3>
  
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					<h3 style="color:#00F">
                    <?php if (isset($_COOKIE['sua_sp_xong'])){?>
                    <?php echo $_COOKIE['sua_sp_xong'];?>

                    <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_cook('sua_sp_xong');?>

                    <?php }?>
                    </h3>
                    
                    <div style="color:#F00"><?php if (isset($_POST['btn_them_sp'])){?><?php echo $_smarty_tpl->tpl_vars['m_san_pham']->value->loi_hinh;?>
<?php }?></div>
                    <div style="color:#F00"><?php if (isset($_POST['btn_them_sp'])){?><?php echo $_smarty_tpl->tpl_vars['m_san_pham']->value->loi_hinh_phu;?>
<?php }?></div>
					<div class="tab-content default-tab" id="tab1"> 
                    	<form class="form-sua-bai" name="form_sua_sp" action="" method="post" enctype="multipart/form-data">
                            <div class="container-form">
                              <div class="dong-input">
                                <div class="ten-input">Tên sản phẩm:</div>
                                <div class="thanh-input">
                                  <input class="khung-input" type="text" name="ten_san_pham"
                                   value="<?php if (isset($_POST['btn_them_sp'])){?><?php echo $_POST['ten_san_pham'];?>
<?php }elseif(isset($_GET['ma_san_pham'])){?><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham;?>
<?php }?>" required="required"/>
                                </div>
                                <div class="clear"></div>
                              </div>
                              <?php if (isset($_POST['btn_them_sp'])&&strlen(trim($_POST['ten_san_pham']))==0){?>
                              <div class="bao_loi_php">
                                <div class="thanh-loi">Hãy nhập tên sản phẩm</div>
                                <div class="clear"></div>
                              </div>
                              <?php }?>
                              
                              <div class="dong-input">
                                <div class="ten-input">Loại sản phẩm/Hãng:</div>
                                
                                <div class="thanh-input">
                                  <select name="ma_nha_san_xuat" style="padding:10px 0; box-sizing:border-box" >
                                  <?php  $_smarty_tpl->tpl_vars['hang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_hang']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hang']->key => $_smarty_tpl->tpl_vars['hang']->value){
$_smarty_tpl->tpl_vars['hang']->_loop = true;
?>
                                  	<option value="<?php echo $_smarty_tpl->tpl_vars['hang']->value->ma_nha_san_xuat;?>
" <?php if (isset($_POST['btn_them_sp'])&&$_smarty_tpl->tpl_vars['hang']->value->ma_nha_san_xuat==$_POST['ma_nha_san_xuat']){?><?php echo 'selected';?>
<?php }elseif(isset($_GET['ma_san_pham'])){?><?php echo $_smarty_tpl->tpl_vars['m_san_pham']->value->sua_ma_loai($_smarty_tpl->tpl_vars['hang']->value->ma_nha_san_xuat,$_smarty_tpl->tpl_vars['san_pham']->value->ma_nha_san_xuat);?>
<?php }?>>
                                    	<?php echo $_smarty_tpl->tpl_vars['m_san_pham']->value->loai_nsx($_smarty_tpl->tpl_vars['hang']->value->ma_loai);?>
 - <?php echo $_smarty_tpl->tpl_vars['hang']->value->ten_nha_san_xuat;?>

                                    </option>
                                  <?php } ?>
                                  </select>
                                </div>
                                
                               </div>
                              <div style="margin-top:50px; margin-bottom:20px">
                                  <label style="font-size:18px">Upload hình chính của sản phẩm : </label>
                                  <input type="file" name="hinh_sp" class="hinh_sp"/>
                              </div>
                              <?php if (isset($_GET['ma_san_pham'])){?>
                              <p>
                              <img width="250px" src="../assets/images/products/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
"/>
                              </p>
                              <?php if ($_smarty_tpl->tpl_vars['san_pham']->value->hinh!='hinh_dang_cn.jpg'){?>
                              <input onclick="xoa_hinh('san_pham','hinh','ma_san_pham',<?php echo $_GET['ma_san_pham'];?>
,'hinh_dang_cn.jpg','<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
')" type="button" class="xoa_hinh" value="Xóa hình"/>
                              <?php }?>
                                <?php }?>
                                
                                <div style="margin-top:50px; margin-bottom:20px">
                                  <label style="font-size:18px">Upload thêm hình phụ : </label>
                                  <input multiple="multiple" type="file" name="hinh_phu[]" class="hinh_sp"/>
                              </div>
                              <?php if (isset($_GET['ma_san_pham'])&&isset($_smarty_tpl->tpl_vars['hinh_chi_tiet']->value)&&count($_smarty_tpl->tpl_vars['hinh_chi_tiet']->value)>0){?>
                              <div class="container-hinhphu">
                              <?php  $_smarty_tpl->tpl_vars['hinhct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hinhct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hinh_chi_tiet']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hinhct']->key => $_smarty_tpl->tpl_vars['hinhct']->value){
$_smarty_tpl->tpl_vars['hinhct']->_loop = true;
?>
                              	<div class="cont-img">
                                	<div class="box-img">
                                    <img src="../assets/images/products/<?php echo $_smarty_tpl->tpl_vars['hinhct']->value->ten_hinh;?>
"/>
                                    </div>
                                    <label><input class="xoa_hinh" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['hinhct']->value->khoa_chinh;?>
"/>Xóa</label>
                                </div>
                                <?php } ?>
                                <div class="clear"></div>
                                <div style="width:100%; text-align:center">
                                <input class="nut_xoa_hinh_chon" type="button" value="Xóa những hình chọn"/>
                                </div>
                              </div>
                                <?php }?>
                                <p>Chỉ upload hình ảnh có định dạng jpg,png,bmp,jpeg và kích thước tối đa 1 Mb</p>
                                  <div class="dong-input">
                                <div class="ten-input">Mô tả:</div>
                                <div class="clear"></div>
                                <div style="width:100%; float:none; margin:15px auto" class="thanh-input">
                                  <textarea id="mo_ta_chi_tiet" class="ckeditor" name="mo_ta_chi_tiet" rows="100" style="width:100%">
                                  	<script>
            							ckeditor.replace("mo_ta_chi_tiet");
            						</script>
                                    <?php if (isset($_POST['btn_them_sp'])){?><?php echo $_POST['mo_ta_chi_tiet'];?>
<?php }elseif(isset($_GET['ma_san_pham'])){?><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->mo_ta;?>
<?php }?>
                                  </textarea>
                                </div>
                                
                              </div>
                              <?php if (isset($_POST['btn_them_sp'])&&strlen(trim($_POST['mo_ta_chi_tiet']))==0){?>
                              <div class="bao_loi_php">
                                <div class="thanh-loi">Hãy nhập mô tả chi tiết</div>
                                <div class="clear"></div>
                              </div>
                              <?php }?>
                              
                                 <div class="dong-input">
                                <div class="ten-input">Tóm tắt thông số:</div>
                                <div class="clear"></div>
                                <div style="width:100%; float:none; margin:15px auto" class="thanh-input">
                                  <textarea id="tom_tat_thong_so" class="ckeditor" name="tom_tat_thong_so" rows="100" style="width:100%">
                                  	<script>
            							ckeditor.replace("tom_tat_thong_so");
            						</script>
                                    <?php if (isset($_POST['btn_them_sp'])){?><?php echo $_POST['tom_tat_thong_so'];?>
<?php }elseif(isset($_GET['ma_san_pham'])){?><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->tom_tat_thong_so;?>
<?php }?>
                                  </textarea>
                                </div>
                                
                              </div>
                              <?php if (isset($_POST['btn_them_sp'])&&strlen(trim($_POST['tom_tat_thong_so']))==0){?>
                              <div class="bao_loi_php">
                                <div class="thanh-loi">Hãy nhập tóm tắt thông số</div>
                                <div class="clear"></div>
                              </div>
                              <?php }?>
                              
                              <div class="dong-input">
                                <div class="ten-input">Đơn giá :</div>
                                <div class="thanh-input">
                                  <input class="khung-input" type="number" name="don_gia"
                                   value="<?php if (isset($_POST['btn_them_sp'])){?><?php echo $_POST['don_gia'];?>
<?php }elseif(isset($_GET['ma_san_pham'])){?><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->don_gia;?>
<?php }else{ ?>0<?php }?>"/>
                                </div>
                                <div class="clear"></div>
                              </div>
                              <?php if (isset($_POST['btn_them_sp'])&&$_POST['don_gia']<=0){?>
                              <div class="bao_loi_php">
                                <div class="thanh-loi">Đơn giá phải lớn hơn 0</div>
                                <div class="clear"></div>
                              </div>
                              <?php }?>
                              <div style="font-size:18px; margin:10px auto">
                              	<label>Khuyến mãi: <input type="number" name="km" value="<?php if (isset($_POST['btn_them_sp'])){?><?php echo $_POST['km'];?>
<?php }elseif(isset($_GET['ma_san_pham'])){?><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->khuyen_mai;?>
<?php }else{ ?>0<?php }?>"/></label>
                                <label>Số lượng: <input type="number" name="so_luong" value="<?php if (isset($_POST['btn_them_sp'])){?><?php echo $_POST['so_luong'];?>
<?php }elseif(isset($_GET['ma_san_pham'])){?><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->so_luong;?>
<?php }else{ ?>0<?php }?>"/></label>
                              </div>
                              
                              <?php if (isset($_POST['btn_them_sp'])&&($_POST['km']<0||$_POST['km']=='')){?>
                              <div class="bao_loi_php">
                                <div class="thanh-loi">Giá khuyến mãi không được nhỏ hơn 0 hay bằng rỗng</div>
                                <div class="clear"></div>
                              </div>
                              <?php }?>
                              <?php if (isset($_POST['btn_them_sp'])&&($_POST['so_luong']<0||$_POST['so_luong']=='')){?>
                              <div class="bao_loi_php">
                                <div class="thanh-loi">Số lượng không được nhỏ hơn 0 hay bằng rỗng</div>
                                <div class="clear"></div>
                              </div>
                              <?php }?>
                              <div class="dong-input">
                                <div style="width:100px; margin:auto">
                                  <input name="btn_them_sp" type="submit" class="nut-submit" value="Lưu"/>
                                </div>
                              </div>
                            </div>
                          </form>
                          <!--end form dk-->
					</div> <!-- End #tab1 -->  
					
				</div> <!-- End .content-box-content -->
			</div>
            
            <script>
            $('.nut_xoa_hinh_chon').click(function(){
				var count_chon_xoa = $('.xoa_hinh').filter(':checked').length;
				var mang_chon_xoa = [];
				var ma_san_pham = $('#ma_san_pham').val();
				
				for(var i = 0; i<count_chon_xoa; i++)
				{
					var val = $('.xoa_hinh').filter(':checked').eq(i).val();
					mang_chon_xoa.push(val);
				}
				var khoa_chinh = mang_chon_xoa.join();
				if(khoa_chinh != '')
					window.location.href = 'xoa_hinh_chi_tiet.php?khoa_chinh='+khoa_chinh+'&ma_san_pham='+ma_san_pham;
				else
					alert("Hãy chọn hình cần xóa");
			})
			
            
            </script>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2018-04-05 14:51:32
         compiled from "views\nguoi_dung\v_nguoi_dung.tpl" */ ?>
<?php /*%%SmartyHeaderCode:262865ab39bfc80c4a3-00076627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28b7b30c8441dd521339a8861c74b4f6256e97ac' => 
    array (
      0 => 'views\\nguoi_dung\\v_nguoi_dung.tpl',
      1 => 1522223828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262865ab39bfc80c4a3-00076627',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ab39bfcecedb1_09744592',
  'variables' => 
  array (
    'nguoi_dungs' => 0,
    'title' => 0,
    'm_common' => 0,
    'xd_admin' => 0,
    'user' => 0,
    'loai_nguoi_dung' => 0,
    'i' => 0,
    'loai' => 0,
    'link' => 0,
    'lst' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab39bfcecedb1_09744592')) {function content_5ab39bfcecedb1_09744592($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['nguoi_dungs']->value)>0){?>
<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
                    <div style="width:200px; float:left; padding:10px 0">
                    	<input name="thanh_tim" type="text" id="thanh_tim" placeholder="Nhập tên đăng nhập"/>
                        <?php echo $_smarty_tpl->getSubTemplate ("views/input/v_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                    </div>
                    <h3 style="color:#F00; text-align:center; padding:10px 0">
                        <?php if (isset($_SESSION['kq_doi_loai_user'])){?>
                        <?php echo $_SESSION['kq_doi_loai_user'];?>

                        <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_sess('kq_doi_loai_user');?>

                        <?php }?>
                	</h3>
                    
                    <h3 style="color:#F00; text-align:center; padding:10px 0">
                        <?php if (isset($_SESSION['kq_xoa'])){?>
                        <?php echo $_SESSION['kq_xoa'];?>

                        <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_sess('kq_xoa');?>

                        <?php }?>
                	</h3>
                    <div style="clear:both"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
                    <p>
                    Người "quản trị" và "kỹ thuật" đều có thể đăng , xóa , sửa nội dung như sản phẩm, tin tức ...., trả lời câu hỏi của khách . Nhưng người quản trị có thể trao quyền "kỹ thuật" cho mọi thành viên "khách" và xóa mọi thành viên ngoại trừ "quản trị", người "kỹ thuật" không thể trao quyền "kỹ thuật" cho khách, có thể xóa những thành viên "khách" nhưng không thể xóa "kỹ thuật" và "quản trị" .
                    </p>					
						<table id="bang">
							
							<thead>
								<tr>
								   <th><input class="check-all" type="checkbox" /></th>
								   <th>Mã user</th>
								   <th>Loại</th>
								   <th>Họ tên</th>
								   <th>Tên đăng nhập</th>
								   <th>Email</th>
                                   <th>Ngày đăng ký</th>
                                   <th>Đăng nhập gần đây</th>
                                   <th>Ngày sinh</th>
                                   <th>Giới tính</th>
								</tr>
								
							</thead>

							<tbody>
                            <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nguoi_dungs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['xd_admin']->value==1){?>
                            	<?php if ($_smarty_tpl->tpl_vars['user']->value->ma_loai_nguoi_dung==1){?>
								<tr>
									<td></td>
									<td><?php echo $_smarty_tpl->tpl_vars['user']->value->ma_nguoi_dung;?>
</td>
									<td class="chu_do">Quản trị</td>
									<td><?php echo $_smarty_tpl->tpl_vars['user']->value->ho_ten;?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['user']->value->ten_dang_nhap;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
                                    <td><?php echo date('d-m-Y',strtotime($_smarty_tpl->tpl_vars['user']->value->ngay_dang_ky));?>
</td>
                                    <td><?php echo date('d-m-Y',strtotime($_smarty_tpl->tpl_vars['user']->value->ngay_dang_nhap_cuoi));?>
</td>
                                    <td><?php echo date('d-m-Y',strtotime($_smarty_tpl->tpl_vars['user']->value->birthdate));?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->gioi_tinh;?>
</td>
									<td><!-- Icons --></td>
								</tr>
                                <?php }else{ ?>
                                <tr>
									<td><input type="checkbox" class="chon_xoa" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->ma_nguoi_dung;?>
"/></td>
									<td><?php echo $_smarty_tpl->tpl_vars['user']->value->ma_nguoi_dung;?>
</td>
									<td class="<?php if ($_smarty_tpl->tpl_vars['user']->value->ma_loai_nguoi_dung==3){?>chu_xanh<?php }?>">
                                    	<select class="ten_loai" name="ten_loai">
                                        <?php  $_smarty_tpl->tpl_vars['loai'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loai']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['loai_nguoi_dung']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->key => $_smarty_tpl->tpl_vars['loai']->value){
$_smarty_tpl->tpl_vars['loai']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['loai']->key;
?>
                                        	<?php if ($_smarty_tpl->tpl_vars['i']->value>=1){?>
                                        	<option class="gt_ten_loai" value="<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai_nguoi_dung;?>
" 
                                            <?php if ($_smarty_tpl->tpl_vars['loai']->value->ma_loai_nguoi_dung==$_smarty_tpl->tpl_vars['user']->value->ma_loai_nguoi_dung){?><?php echo 'selected';?>
<?php }?> >
                                            	<?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai_nguoi_dung;?>

                                            </option>
                                            <?php }?>
                                         <?php } ?>
                                        </select>
                                       
                                    </td>
									<td><?php echo $_smarty_tpl->tpl_vars['user']->value->ho_ten;?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['user']->value->ten_dang_nhap;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
                                    <td><?php echo date('d-m-Y',strtotime($_smarty_tpl->tpl_vars['user']->value->ngay_dang_ky));?>
</td>
                                    <td><?php echo date('d-m-Y',strtotime($_smarty_tpl->tpl_vars['user']->value->ngay_dang_nhap_cuoi));?>
</td>
                                    <td><?php echo date('d-m-Y',strtotime($_smarty_tpl->tpl_vars['user']->value->birthdate));?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->gioi_tinh;?>
</td>
									<td>
										<!-- Icons -->
										 <a href="javascript:Hoi_xoa('nguoi_dung','ma_nguoi_dung',<?php echo $_smarty_tpl->tpl_vars['user']->value->ma_nguoi_dung;?>
,'<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
','người dùng')" title="Delete"><img src="images/icons/cross.png" alt="Delete" /></a> 
									</td>
								</tr>
                                 <input type="hidden" class="ma_nguoi_thay_doi" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->ma_nguoi_dung;?>
"/>
                                <?php }?>
                            <?php }else{ ?>
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->ma_loai_nguoi_dung==1||$_smarty_tpl->tpl_vars['user']->value->ma_loai_nguoi_dung==3){?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->ma_nguoi_dung;?>
</td>
                                    <td class="<?php if ($_smarty_tpl->tpl_vars['user']->value->ma_loai_nguoi_dung==1){?>chu_do<?php }else{ ?>chu_xanh<?php }?>">
                                    	<?php  $_smarty_tpl->tpl_vars['loai'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loai']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['loai_nguoi_dung']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->key => $_smarty_tpl->tpl_vars['loai']->value){
$_smarty_tpl->tpl_vars['loai']->_loop = true;
?>
                                        	<?php if ($_smarty_tpl->tpl_vars['loai']->value->ma_loai_nguoi_dung==$_smarty_tpl->tpl_vars['user']->value->ma_loai_nguoi_dung){?>
                                            	<?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai_nguoi_dung;?>

                                            <?php }?>
                                         <?php } ?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->ho_ten;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->ten_dang_nhap;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
                                    <td><?php echo date('d-m-Y',strtotime($_smarty_tpl->tpl_vars['user']->value->ngay_dang_ky));?>
</td>
                                    <td><?php echo date('d-m-Y',strtotime($_smarty_tpl->tpl_vars['user']->value->ngay_dang_nhap_cuoi));?>
</td>
                                    <td><?php echo date('d-m-Y',strtotime($_smarty_tpl->tpl_vars['user']->value->birthdate));?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->gioi_tinh;?>
</td>
                                    <td><!-- Icons --></td>
                                </tr>
                                <?php }else{ ?>
                                 <tr>
									<td><input type="checkbox" class="chon_xoa" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->ma_nguoi_dung;?>
"/></td>
									<td><?php echo $_smarty_tpl->tpl_vars['user']->value->ma_nguoi_dung;?>
</td>
									<td>
                                    	<select class="ten_loai" name="ten_loai">
                                        <?php  $_smarty_tpl->tpl_vars['loai'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loai']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['loai_nguoi_dung']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->key => $_smarty_tpl->tpl_vars['loai']->value){
$_smarty_tpl->tpl_vars['loai']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['loai']->key;
?>
                                        	<?php if ($_smarty_tpl->tpl_vars['i']->value!=0&&$_smarty_tpl->tpl_vars['i']->value!=2){?>
                                        	<option class="gt_ten_loai" value="<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai_nguoi_dung;?>
" 
                                            <?php if ($_smarty_tpl->tpl_vars['loai']->value->ma_loai_nguoi_dung==$_smarty_tpl->tpl_vars['user']->value->ma_loai_nguoi_dung){?><?php echo 'selected';?>
<?php }?> >
                                            	<?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai_nguoi_dung;?>

                                            </option>
                                            <?php }?>
                                         <?php } ?>
                                        </select>
                                       
                                    </td>
									<td><?php echo $_smarty_tpl->tpl_vars['user']->value->ho_ten;?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['user']->value->ten_dang_nhap;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
                                    <td><?php echo date('d-m-Y',strtotime($_smarty_tpl->tpl_vars['user']->value->ngay_dang_ky));?>
</td>
                                    <td><?php echo date('d-m-Y',strtotime($_smarty_tpl->tpl_vars['user']->value->ngay_dang_nhap_cuoi));?>
</td>
                                    <td><?php echo date('d-m-Y',strtotime($_smarty_tpl->tpl_vars['user']->value->birthdate));?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->gioi_tinh;?>
</td>
									<td>
										<!-- Icons -->
										 <a href="javascript:Hoi_xoa('nguoi_dung','ma_nguoi_dung',<?php echo $_smarty_tpl->tpl_vars['user']->value->ma_nguoi_dung;?>
,'<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
','người dùng')" title="Delete"><img src="images/icons/cross.png" alt="Delete" /></a> 
									</td>
								</tr>
                                 <input type="hidden" class="ma_nguoi_thay_doi" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->ma_nguoi_dung;?>
"/>
                                 <?php }?>
                             <?php }?>
							<?php } ?>
                                <script>
                                $('.ten_loai').each(function(index) {
									var gt_hien_tai =$('.ten_loai').eq(index).val();
                                    $('.ten_loai').eq(index).change(function(){
										var gt_moi =$('.ten_loai').eq(index).val();
										var ma_nguoi_dung_thay = $('.ma_nguoi_thay_doi').eq(index).val();
										if(confirm('Thay đổi loại của người dùng này ?'))
											window.location = 'doi_loai_user.php?ma_nguoi_dung='+ma_nguoi_dung_thay+'&gt_moi='+gt_moi;
											//$('.ten_loai').eq(index).val(val2);
										else
											$('.ten_loai').eq(index).val(gt_hien_tai);
									})
                                });
                                </script>
                                <tr>
                                	<td colspan="10">
                                    	<div style="width:150px; margin:auto">
                                        	<input style="height:40px; cursor:pointer" type="button" name="btn_xoa_user" class="btn_xoa_user" value="Xóa người dùng" onclick="xoa_nhieu('nguoi_dung','ma_nguoi_dung','<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
','người dùng')"/>
                                        </div>
                                     </td>
                               </tr>
                               <tr><td colspan="10"><div class="pages_list"><?php echo $_smarty_tpl->tpl_vars['lst']->value;?>
</div></td></tr>
							</tbody>
							<?php echo $_smarty_tpl->getSubTemplate ("views/xl_ajax/v_script_phan_tu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                            
						</table>
						
					</div> <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->
				
			</div>
            <?php echo $_smarty_tpl->getSubTemplate ("views/xl_ajax/v_script_tim.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>
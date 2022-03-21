<?php /* Smarty version Smarty-3.1.14, created on 2018-04-01 21:11:48
         compiled from "views\nguoi_dung\v_cap_nhat_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:282245ac08dbb056c81-45455660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec1f4aa1aabc352f965a99fad685f5c7cf5edc88' => 
    array (
      0 => 'views\\nguoi_dung\\v_cap_nhat_user.tpl',
      1 => 1522609902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282245ac08dbb056c81-45455660',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ac08dbb3a6612_81379787',
  'variables' => 
  array (
    'm_common' => 0,
    'm_nguoi_dung' => 0,
    'nguoi_dung' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac08dbb3a6612_81379787')) {function content_5ac08dbb3a6612_81379787($_smarty_tpl) {?><h3 style="color:#00F; text-align:center; padding:10px 0; text-indent:10px">
    <?php if (isset($_COOKIE['sua_user'])){?>
    <?php echo $_COOKIE['sua_user'];?>

    <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_cook('sua_user');?>

    <?php }?>
</h3>
<h3 style="text-align:center">Cập nhật thông tin</h3>
<?php if (isset($_POST['btn_cap_nhat'])){?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->error_trung_user_update();?>
<?php }?>
	<p class="">Ngày đăng ký : <?php echo date("d/m/Y",strtotime($_smarty_tpl->tpl_vars['nguoi_dung']->value->ngay_dang_ky));?>
</p>
<form method="post" name="frm_cap_nhat" enctype="multipart/form-data">
<table>
	<tr>
    	<td>Họ tên: </td>
        <td>
        	<input type="text" name="ho_ten" class="ho_ten" value="<?php if (isset($_POST['btn_cap_nhat'])){?><?php echo $_POST['ho_ten'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['nguoi_dung']->value->ho_ten;?>
<?php }?>" required="required"/>
            <?php if (isset($_POST['btn_cap_nhat'])&&!$_smarty_tpl->tpl_vars['m_nguoi_dung']->value->test_error($_POST['ho_ten'],6,32,'btn_cap_nhat')){?>
            <p style="color:#F00; font-style:italic">Họ tên tối thiểu là 6 ký tự trở lên và tối đa 32 ký tự</p>
        <?php }?>
        </td>
    </tr>
    
    <tr>
    	<td>Tên đăng nhập: </td>
        <td>
        	<input type="text" name="ten_dang_nhap" class="ten_dang_nhap" value="<?php if (isset($_POST['btn_cap_nhat'])){?><?php echo $_POST['ten_dang_nhap'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['nguoi_dung']->value->ten_dang_nhap;?>
<?php }?>" required="required"/>
            <?php if (isset($_POST['btn_cap_nhat'])&&!$_smarty_tpl->tpl_vars['m_nguoi_dung']->value->test_error($_POST['ten_dang_nhap'],6,32,'btn_cap_nhat')){?>
          <p style="color:#F00; font-style:italic">Tên đăng nhập phải ít nhất 6 ký tự và tối đa 32 ký tự</p>
          <?php }?>
        </td>
    </tr>
    
    <tr>
    	<td>Email: </td>
        <td>
        	<input type="email" name="email" class="email" value="<?php if (isset($_POST['btn_cap_nhat'])){?><?php echo $_POST['email'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['nguoi_dung']->value->email;?>
<?php }?>" required="required"/>
            <?php if (isset($_POST['btn_cap_nhat'])&&!$_smarty_tpl->tpl_vars['m_nguoi_dung']->value->test_email($_POST['email'])){?>
          <p style="color:#F00; font-style:italic">Hãy nhập email đúng định dạng</p>
        <?php }?>
        </td>
    </tr>
    
    <tr>
    	<td>Giới tính: </td>
        <td>
        	<label class="info-title" for="exampleOrderIgt">Giới tính &nbsp;&nbsp;</label>
		    <label>Nam &nbsp;<input type="radio" <?php if (isset($_POST['gender'])){?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->echo_gt(1);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->echo_gt_cap_nhat(1,$_smarty_tpl->tpl_vars['nguoi_dung']->value->gioi_tinh);?>
<?php }?> name="gender" value="1"/></label>&nbsp;&nbsp; 
            <label>Nữ &nbsp;<input type="radio" name="gender" value="0" <?php if (isset($_POST['gender'])){?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->echo_gt(0);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->echo_gt_cap_nhat(0,$_smarty_tpl->tpl_vars['nguoi_dung']->value->gioi_tinh);?>
<?php }?>/></label>
        </td>
    </tr>
    
    <tr>
    	<td>Ngày sinh: </td>
        <td>
        	<label class="info-title">Ngày sinh:</label>
          	<div style="min-height:44px">
            <select class="ngay_sinh" name="ngay_sinh">
              <option class="op_ngaysinh" value="">Ngày</option>
    
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
              <option class="op_ngaysinh" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
               <?php if (isset($_POST['btn_cap_nhat'])){?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->date_selected($_smarty_tpl->tpl_vars['i']->value,$_POST['ngay_sinh']);?>

               <?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->date_selected($_smarty_tpl->tpl_vars['i']->value,$_smarty_tpl->tpl_vars['m_nguoi_dung']->value->lay_ngay_sinh($_smarty_tpl->tpl_vars['nguoi_dung']->value->birthdate));?>

               <?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['i']->value;?>

               </option>
              <?php }} ?>
              
            </select>
            <select class="thang_sinh" name="thang_sinh">
              <option class="op_thangsinh" value="">Tháng</option>
              <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
              <option class="op_thangsinh" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
              <?php if (isset($_POST['btn_cap_nhat'])){?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->date_selected($_smarty_tpl->tpl_vars['i']->value,$_POST['thang_sinh']);?>

              <?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->date_selected($_smarty_tpl->tpl_vars['i']->value,$_smarty_tpl->tpl_vars['m_nguoi_dung']->value->lay_thang_sinh($_smarty_tpl->tpl_vars['nguoi_dung']->value->birthdate));?>
<?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['i']->value;?>

               </option>
              <?php }} ?>
            </select>
            <select class="nam_sinh" name="nam_sinh">
              <option class="op_namsinh" value="">Năm</option>
              <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(date('Y'), null, 0);?>
              <?php while ($_smarty_tpl->tpl_vars['i']->value>=1900){?>
              <option class="op_namsinh" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" 
              <?php if (isset($_POST['btn_cap_nhat'])){?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->date_selected($_smarty_tpl->tpl_vars['i']->value,$_POST['nam_sinh']);?>

              <?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->date_selected($_smarty_tpl->tpl_vars['i']->value,$_smarty_tpl->tpl_vars['m_nguoi_dung']->value->lay_nam_sinh($_smarty_tpl->tpl_vars['nguoi_dung']->value->birthdate));?>

              <?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['i']->value;?>

              </option>
              <?php echo $_smarty_tpl->tpl_vars['i']->value--;?>

              <?php }?>
            </select>
                <?php if (isset($_POST['btn_cap_nhat'])&&!$_smarty_tpl->tpl_vars['m_nguoi_dung']->value->kiem_tra_ngay($_POST['ngay_sinh'],$_POST['thang_sinh'],$_POST['nam_sinh'])){?>
                    <p style="color:#F00; font-style:italic">Hãy chọn ngày tháng hợp lệ</p>
                <?php }?>
        </td>
    </tr>
    
    <tr>
    	<td colspan="2"><div style="width:150px; margin:auto"><input type="submit" name="btn_cap_nhat" value="Cập nhật thông tin"/></div></td>
    </tr>
</table>
</form>

<h3 style="color:#00F; text-align:center; padding:10px 0; text-indent:10px">
    <?php if (isset($_COOKIE['doi_mat_khau_xong'])){?>
    <?php echo $_COOKIE['doi_mat_khau_xong'];?>

    <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_cook('doi_mat_khau_xong');?>

    <?php }?>
</h3>

<form method="post" name="frm_cap_nhat_pw" enctype="multipart/form-data">
<table>
	<thead>
    	<tr>
        	<th colspan="2" style="text-align:center">Đổi mật khẩu</th>
        </tr>					
	</thead>
    <tbody>
    	<tr>
        	<td>Mật khẩu hiện tại:</td>
            <td>
            <input name="mat_khau_hien_tai" type="password" class="mat_khau_hien_tai"/>
            <?php if (isset($_POST['btn_change_pass'])&&!$_smarty_tpl->tpl_vars['m_nguoi_dung']->value->kiem_tra_mat_khau_hien_tai()){?>
            <p style="color:#F00; font-style:italic">Hãy nhập chính xác mật khẩu hiện tại</p>
            <?php }?>
            </td>
        </tr>
        
        <tr>
        	<td>Mật khẩu mới:</td>
            <td>
            <input name="mat_khau" type="password" class="mat_khau" />
            <?php if (isset($_POST['btn_change_pass'])&&!$_smarty_tpl->tpl_vars['m_nguoi_dung']->value->test_error($_POST['mat_khau'],5,32,'btn_change_pass')){?>
            <p style="color:#F00; font-style:italic">Mật khẩu mới phải ít nhất 5 ký tự và tối đa 32 ký tự</p>
            <?php }?>
            <?php if (isset($_POST['btn_change_pass'])){?>
            <p style="color:#F00; font-style:italic"><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->error_trung_mat_khau();?>
</p>
            <?php }?>
            </td>
        </tr>
        
        <tr>
        	<td>Nhập lại mật khẩu mới:</td>
            <td>
            <input name="re_pass_dk" type="password" class="mat_khau" />
            <?php if (isset($_POST['btn_change_pass'])&&!$_smarty_tpl->tpl_vars['m_nguoi_dung']->value->check_re_pass()){?>
            <p style="color:#F00; font-style:italic">Hãy nhập lại mật khẩu mới</p>
            <?php }?>
            </td>
        </tr>
        
        <tr>
        	<td colspan="2">
            	<div style="width:150px; margin:auto"><input type="submit" name="btn_change_pass" value="Cập nhật mật khẩu"/></div>
            </td>
        </tr>
    </tbody>
</table>
</form><?php }} ?>
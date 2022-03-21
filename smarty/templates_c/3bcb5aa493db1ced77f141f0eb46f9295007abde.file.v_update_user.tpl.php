<?php /* Smarty version Smarty-3.1.18, created on 2018-04-05 12:56:50
         compiled from "views\user\v_update_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2565259fef43c03e839-18738407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bcb5aa493db1ced77f141f0eb46f9295007abde' => 
    array (
      0 => 'views\\user\\v_update_user.tpl',
      1 => 1522569966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2565259fef43c03e839-18738407',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59fef43c05e7c2_59692346',
  'variables' => 
  array (
    'm_nguoi_dung' => 0,
    'nguoi_dung' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fef43c05e7c2_59692346')) {function content_59fef43c05e7c2_59692346($_smarty_tpl) {?><div class="sign-in-page inner-bottom-sm">
			<div class="row">
				<!-- Sign-in -->			
<div class="col-md-6 col-sm-6 sign-in">

	<h4 style="font-family:Tahoma, Geneva, sans-serif; font-weight:bold">Cập nhật thông tin người dùng</h4>
    <?php if (isset($_COOKIE['cap_nhat_xong'])) {?>
<h3 style="color:#0F0">Cập nhật thành công</h3>
<?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->xoa_cookie('cap_nhat_xong');?>

<?php }?>
    <?php if (isset($_POST['btn_cap_nhat'])) {?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->error_trung_user_update();?>
<?php }?>
	<p class="">Ngày đăng ký : <?php echo date("d/m/Y",strtotime($_smarty_tpl->tpl_vars['nguoi_dung']->value->ngay_dang_ky));?>
</p>
    
	<form method="post" action="" name="frm_update_user" class="register-form outer-top-xs" role="form">
    
    	<div class="form-group">
		    <label class="info-title">Họ tên <span></span></label>
		    <input name="ho_ten" type="text" class="form-control unicase-form-control text-input" id="exampleInputhoten" 
            value="<?php if (isset($_POST['btn_cap_nhat'])) {?><?php echo $_POST['ho_ten'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['nguoi_dung']->value->ho_ten;?>
<?php }?>" />
		</div>
        <?php if (isset($_POST['btn_cap_nhat'])&&!$_smarty_tpl->tpl_vars['m_nguoi_dung']->value->test_error($_POST['ho_ten'],6,32,'btn_cap_nhat')) {?>
        <div class="bao_loi_php">
          <div class="thanh-loi">Họ tên tối thiểu là 6 ký tự trở lên và tối đa 32 ký tự</div>
          <div class="clear"></div>
        </div>
        <?php }?>
        
		<div class="form-group">
		    <label class="info-title">Tên đăng nhập <span></span></label>
		    <input name="ten_dang_nhap" type="text" class="form-control unicase-form-control text-input" id="exampleInputtendn" 
            value="<?php if (isset($_POST['btn_cap_nhat'])) {?><?php echo $_POST['ten_dang_nhap'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['nguoi_dung']->value->ten_dang_nhap;?>
<?php }?>"/>
		</div>
        <?php if (isset($_POST['btn_cap_nhat'])&&!$_smarty_tpl->tpl_vars['m_nguoi_dung']->value->test_error($_POST['ten_dang_nhap'],6,32,'btn_cap_nhat')) {?>
        <div class="bao_loi_php">
          <div class="thanh-loi">Tên đăng nhập phải ít nhất 6 ký tự và tối đa 32 ký tự</div>
          <div class="clear"></div>
        </div>
        <?php }?>
	  	
		<div class="form-group">
	    	<label class="info-title">Email Address <span></span></label>
	    	<input name="email" type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail2" /
            value="<?php if (isset($_POST['btn_cap_nhat'])) {?><?php echo $_POST['email'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['nguoi_dung']->value->email;?>
<?php }?>">
	  	</div>
        <?php if (isset($_POST['btn_cap_nhat'])&&!$_smarty_tpl->tpl_vars['m_nguoi_dung']->value->test_email($_POST['email'])) {?>
        <div class="bao_loi_php">
          <div class="thanh-loi">Hãy nhập email đúng định dạng</div>
          <div class="clear"></div>
        </div>
        <?php }?>
        
        <div class="form-group">
		    <label class="info-title" for="exampleOrderIgt">Giới tính &nbsp;&nbsp;</label>
		    <label>Nam &nbsp;<input type="radio" <?php if (isset($_POST['gender'])) {?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->echo_gt(1);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->echo_gt_cap_nhat(1,$_smarty_tpl->tpl_vars['nguoi_dung']->value->gioi_tinh);?>
<?php }?> name="gender" value="1"/></label>&nbsp;&nbsp; 
            <label>Nữ &nbsp;<input type="radio" name="gender" value="0" <?php if (isset($_POST['gender'])) {?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->echo_gt(0);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->echo_gt_cap_nhat(0,$_smarty_tpl->tpl_vars['nguoi_dung']->value->gioi_tinh);?>
<?php }?>/></label>
		</div>
        
        <div class="form-group">
      		<label class="info-title">Ngày sinh:</label>
          	<div style="min-height:44px">
            <select class="ngay_sinh" name="ngay_sinh">
              <option class="op_ngaysinh" value="">Ngày</option>
    
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
              <option class="op_ngaysinh" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
               <?php if (isset($_POST['btn_cap_nhat'])) {?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->date_selected($_smarty_tpl->tpl_vars['i']->value,$_POST['ngay_sinh']);?>

               <?php } else { ?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->date_selected($_smarty_tpl->tpl_vars['i']->value,$_smarty_tpl->tpl_vars['m_nguoi_dung']->value->lay_ngay_sinh($_smarty_tpl->tpl_vars['nguoi_dung']->value->birthdate));?>

               <?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['i']->value;?>

               </option>
              <?php }} ?>
              
            </select>
            <select class="thang_sinh" name="thang_sinh">
              <option class="op_thangsinh" value="">Tháng</option>
              <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
              <option class="op_thangsinh" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
              <?php if (isset($_POST['btn_cap_nhat'])) {?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->date_selected($_smarty_tpl->tpl_vars['i']->value,$_POST['thang_sinh']);?>

              <?php } else { ?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->date_selected($_smarty_tpl->tpl_vars['i']->value,$_smarty_tpl->tpl_vars['m_nguoi_dung']->value->lay_thang_sinh($_smarty_tpl->tpl_vars['nguoi_dung']->value->birthdate));?>
<?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['i']->value;?>

               </option>
              <?php }} ?>
            </select>
            <select class="nam_sinh" name="nam_sinh">
              <option class="op_namsinh" value="">Năm</option>
              <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(date('Y'), null, 0);?>
              <?php while ($_smarty_tpl->tpl_vars['i']->value>=1900) {?>
              <option class="op_namsinh" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" 
              <?php if (isset($_POST['btn_cap_nhat'])) {?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->date_selected($_smarty_tpl->tpl_vars['i']->value,$_POST['nam_sinh']);?>

              <?php } else { ?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->date_selected($_smarty_tpl->tpl_vars['i']->value,$_smarty_tpl->tpl_vars['m_nguoi_dung']->value->lay_nam_sinh($_smarty_tpl->tpl_vars['nguoi_dung']->value->birthdate));?>

              <?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['i']->value;?>

              </option>
              <?php echo $_smarty_tpl->tpl_vars['i']->value--;?>

              <?php }?>
            </select>
          </div>
    	</div>
    
    <?php if (isset($_POST['btn_cap_nhat'])&&!$_smarty_tpl->tpl_vars['m_nguoi_dung']->value->kiem_tra_ngay($_POST['ngay_sinh'],$_POST['thang_sinh'],$_POST['nam_sinh'])) {?>
    	<div class="bao_loi_php">
      		<div class="thanh-loi">Hãy chọn ngày tháng hợp lệ</div>
      		<div class="clear"></div>
    	</div>
    <?php }?>
	  	<button name="btn_cap_nhat" type="submit" class="btn-upper btn btn-primary checkout-page-button">Cập nhật</button>
	</form>					
</div>
<!-- Sign-in -->

<!-- create a new account -->

	<h4 style="font-family:Tahoma, Geneva, sans-serif; font-weight:bold">Đổi mật khẩu</h4>
    <div class="col-md-6 col-sm-6 create-new-account">
        <?php if (isset($_COOKIE['doi_mat_khau_xong'])) {?>
        <h3 style="color:#0F0">Bạn đã thay đổi mật khẩu thành công</h3>
        <?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->xoa_cookie('doi_mat_khau_xong');?>

        <?php }?>
        <?php if (isset($_POST['btn_change_pass'])) {?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->error_trung_mat_khau();?>
<?php }?>
	<form method="post" name="frm_pass" class="register-form outer-top-xs" role="form">
    	<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Mật khẩu hiện tại <span></span></label>
		    <input name="mat_khau_hien_tai" type="password" class="form-control unicase-form-control text-input" id="exampleInputPassworht" >
		</div>
        <?php if (isset($_POST['btn_change_pass'])&&!$_smarty_tpl->tpl_vars['m_nguoi_dung']->value->kiem_tra_mat_khau_hien_tai()) {?>
    <div class="bao_loi_php">
      <div class="thanh-loi">Hãy nhập chính xác mật khẩu hiện tại</div>
      <div class="clear"></div>
    </div>
    <?php }?>
		<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Mật khẩu mới <span></span></label>
		    <input name="mat_khau" type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" >
		</div>
        <?php if (isset($_POST['btn_change_pass'])&&!$_smarty_tpl->tpl_vars['m_nguoi_dung']->value->test_error($_POST['mat_khau'],5,32,'btn_change_pass')) {?>
    <div class="bao_loi_php">
      <div class="thanh-loi">Mật khẩu mới phải ít nhất 5 ký tự và tối đa 32 ký tự</div>
      <div class="clear"></div>
    </div>
    <?php }?>
        <div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">nhập lại mật khẩu mới <span></span></label>
		    <input name="re_pass_dk" type="password" class="form-control unicase-form-control text-input" id="exampleInputPassworre" >
		</div>
        <?php if (isset($_POST['btn_change_pass'])&&!$_smarty_tpl->tpl_vars['m_nguoi_dung']->value->check_re_pass()) {?>
    <div class="bao_loi_php">
      <div class="thanh-loi">Hãy nhập lại mật khẩu mới</div>
      <div class="clear"></div>
    </div>
    <?php }?>
	  	<button type="submit" name="btn_change_pass" class="btn-upper btn btn-primary checkout-page-button">Đổi mật khẩu</button>
	</form>
</div>	
<!-- create a new account -->			</div><!-- /.row -->
		</div><?php }} ?>

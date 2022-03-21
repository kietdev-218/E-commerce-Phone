<div class="sign-in-page inner-bottom-sm">
			<div class="row">
				<!-- Sign-in -->			
<div class="col-md-6 col-sm-6 sign-in">
	<h4 style="font-family:Tahoma, Geneva, sans-serif; font-weight:bold">Đăng nhập</h4>
{$m_nguoi_dung->remove_session_login_false()}
	<form method="post" name="frm_login" class="register-form outer-top-xs" role="form">
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Tên đăng nhập / Email <span>*</span></label>
		    <input name="ten_dang_nhap" type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		</div>
	  	<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Mật khẩu <span>*</span></label>
		    <input name="mat_khau" type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" >
		</div>
		<div class="radio outer-xs">
		  	<label>
		    	<input type="radio" name="remember" id="optionsRadios2" value="Có">Remember me!
		  	</label>
		  	<a href="forget_pass.php" class="forgot-password pull-right">Quên mật khẩu ?</a>
		</div>
	  	<button name="btn_dn" type="submit" class="btn-upper btn btn-primary checkout-page-button">Đăng nhập</button>
	</form>					
</div>
<!-- Sign-in -->

<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account">
	<h4 style="font-family:Tahoma, Geneva, sans-serif; font-weight:bold">Đăng ký</h4>
    
	<p class="text title-tag-line">Tạo tài khoản ngay</p>
    {$m_nguoi_dung->error_trung_user()}
	<form method="post" name="frm_dangky" class="register-form outer-top-xs" role="form">
    	<div class="form-group">
		    <label class="info-title">Họ và tên<span>*</span></label>
		    <input name="ho_ten" type="text" class="form-control unicase-form-control text-input" 
            value="{if isset($smarty.post.btn_dk)}{$smarty.post.ho_ten}{/if}"/>
		</div>
        	{if isset($smarty.post.btn_dk) && !$m_nguoi_dung->test_error($smarty.post.ho_ten,6,32,'btn_dk')}
            <div class="bao_loi_php">
              <div class="thanh-loi">Họ tên tối thiểu là 6 ký tự trở lên và tối đa 32 ký tự</div>
              <div class="clear"></div>
            </div>
            {/if}
    	<div class="form-group">
		    <label class="info-title">Tên đăng nhập<span>*</span></label>
		    <input name="ten_dang_nhap" type="text" class="form-control unicase-form-control text-input" 
            value="{if isset($smarty.post.btn_dk)}{$smarty.post.ten_dang_nhap}{/if}"/>
		</div>
            {if isset($smarty.post.btn_dk) && !$m_nguoi_dung->test_error($smarty.post.ten_dang_nhap,6,32,'btn_dk')}
    <div class="bao_loi_php">
      <div class="thanh-loi">Tên đăng nhập phải ít nhất 6 ký tự và tối đa 32 ký tự</div>
      <div class="clear"></div>
    </div>
    {/if}
        <div class="form-group">
		    <label class="info-title">Mật khẩu <span>*</span></label>
		    <input name="mat_khau" type="password" class="form-control unicase-form-control text-input" />
		</div>
        
        {if isset($smarty.post.btn_dk) && !$m_nguoi_dung->test_error($smarty.post.mat_khau,5,32,'btn_dk')}
    <div class="bao_loi_php">
      <div class="thanh-loi">Mật khẩu phải ít nhất 5 ký tự và tối đa 32 ký tự</div>
      <div class="clear"></div>
    </div>
    {/if}
    
        <div class="form-group">
		    <label class="info-title">Nhập lại mật khẩu <span>*</span></label>
		    <input name="re_pass_dk" type="password" class="form-control unicase-form-control text-input" />
		</div>
        
            {if isset($smarty.post.btn_dk) &&  !$m_nguoi_dung->check_re_pass()}
    <div class="bao_loi_php">
      <div class="thanh-loi">Hãy nhập lại mật khẩu</div>
      <div class="clear"></div>
    </div>
    {/if}
    
		<div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Email <span>*</span></label>
	    	<input name="email" type="email" class="form-control unicase-form-control text-input" 
            value="{if isset($smarty.post.btn_dk)}{$smarty.post.email}{/if}"/>
	  	</div>
            {if isset($smarty.post.btn_dk) &&  !$m_nguoi_dung->test_email($smarty.post.email)}
    <div class="bao_loi_php">
      <div class="thanh-loi">Hãy nhập email đúng định dạng</div>
      <div class="clear"></div>
    </div>
    {/if}
    
        <div class="form-group">
		    <label class="info-title" for="exampleOrderIgt">Giới tính &nbsp;&nbsp;</label>
		    <label>Nam &nbsp;<input checked="checked" type="radio" {if isset($smarty.post.btn_dk)}{$m_nguoi_dung->echo_gt(0)}{/if} name="gender" value="0"/></label>&nbsp;&nbsp; 
            <label>Nữ &nbsp;<input type="radio" name="gender" value="1" {if isset($smarty.post.btn_dk)}{$m_nguoi_dung->echo_gt(1)}{/if}/></label>
		</div>
        
        <div class="form-group">
      		<label class="info-title">Ngày sinh:</label>
          	<div style="min-height:44px">
            <select class="ngay_sinh" name="ngay_sinh">
              <option class="op_ngaysinh" value="">Ngày</option>
    
            {for $i=1 to 31 step 1}
              <option class="op_ngaysinh" value="{$i}"
               {if isset($smarty.post.btn_dk)}{$m_nguoi_dung->date_selected($i,$smarty.post.ngay_sinh)}{/if}>
                    {$i}
               </option>
              {/for}
              
            </select>
            <select class="thang_sinh" name="thang_sinh">
              <option class="op_thangsinh" value="">Tháng</option>
              {for $i=1 to 12 step 1}
              <option class="op_thangsinh" value="{$i}"
              {if isset($smarty.post.btn_dk)}{$m_nguoi_dung->date_selected($i,$smarty.post.thang_sinh)}{/if}>
                {$i}
               </option>
              {/for}
            </select>
            <select class="nam_sinh" name="nam_sinh">
              <option class="op_namsinh" value="">Năm</option>
              {$i = date('Y')}
              {while $i>=1900}
              <option class="op_namsinh" value="{$i}" 
              {if isset($smarty.post.btn_dk)}{$m_nguoi_dung->date_selected($i,$smarty.post.nam_sinh)}{/if}>
                {$i}
              </option>
              {$i--}
              {/while}
            </select>
          </div>
    	</div>
    
    {if isset($smarty.post.btn_dk) && !$m_nguoi_dung->kiem_tra_ngay($smarty.post.ngay_sinh,$smarty.post.thang_sinh,$smarty.post.nam_sinh)}
    	<div class="bao_loi_php">
      		<div class="thanh-loi">Hãy chọn ngày tháng hợp lệ</div>
      		<div class="clear"></div>
    	</div>
    {/if}
	  	<button type="submit" name="btn_dk" class="btn-upper btn btn-primary checkout-page-button">Đăng ký</button>
	</form>
	
</div>	
<!-- create a new account -->			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
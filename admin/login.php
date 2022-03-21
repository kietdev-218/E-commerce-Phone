<?php
include 'models/m_sess_cook.php';
$m_sess_cook = new M_sess_cook();
if($m_sess_cook->exist_sess())
{
	$m_sess_cook->sess_cook_chuyen_trang();
}

if(isset($_COOKIE['ad_login']) && $_COOKIE['ad_login'] == true)
{
	$m_sess_cook->exist_cook();
}
include_once 'models/m_nguoi_dung.php';
$m_nguoi_dung = new M_nguoi_dung();
$m_nguoi_dung->kiem_tra_dang_nhap();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị Thanh Thanh | Đăng nhập</title>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/invalid.css" type="text/css" media="screen" />	
<script type="text/javascript" src="scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="scripts/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="scripts/facebox.js"></script>
<script type="text/javascript" src="scripts/jquery.wysiwyg.js"></script>
</head>
<body id="login">
		
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
			
				<div id="tieu_de_chinh">Quản trị Thanh Thanh</div>
				<!-- Logo (221px width) -->
				<div style="width:100%"><img style="width:15%" src="images/logo.png" alt="logo" /></div>
			</div> <!-- End #logn-top -->
			
                	<?php
					if(isset($_COOKIE['ad_login_false']) && $_COOKIE['ad_login_false'] ==1)
					{
					?>
                    
						<p style="color:#F00; font-style:italic; border:1px #F00 solid; text-indent:5px; padding:10px 0; margin:10px auto; width:70%">Tên đăng nhập hoặc mật khẩu không đúng, hoặc bạn không có quyền truy cập vào đây</p>
                     <?php
						setcookie('ad_login_false',NULL,time()-1);
					}
					?>
                 
			<div id="login-content">
				
				<form action="" name="frm_login" method="post">
				
					<div class="notification information png_bg">
						<div>
							Đăng nhập hệ thống.(Thông tin tên và mật khẩu phải nhập) 
						</div>
					</div>
					
					<p>
						<label>Tên đăng nhập :</label>
						<input name="ten_dang_nhap" class="text-input" type="text" />
					</p>
					<div class="clear"></div>
					<p>
						<label>Mật khẩu :</label>
						<input name="mat_khau" class="text-input" type="password" />
					</p>
					<div class="clear"></div>
					<p id="remember-password">
						<input name="remember" type="checkbox" value="Có"/>Ghi nhớ :
					</p>
					<div class="clear"></div>
					<p>
						<input name="btn_login" class="button" type="submit" value="Đăng nhập" />
					</p>
					
				</form>
			</div> <!-- End #login-content -->
			
		</div> <!-- End #login-wrapper -->

  </body>
</html>

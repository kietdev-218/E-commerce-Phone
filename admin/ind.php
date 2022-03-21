<?php
include 'config_src.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>
<title>Danh sách sản phẩm</title>
<link rel="stylesheet" href="<?php echo CSS;?>/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo CSS;?>/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo CSS;?>/invalid.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo CSS;?>/form.css"/>	
<script type="text/javascript" src="<?php echo JS;?>/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php echo JS;?>/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="<?php echo JS;?>/facebox.js"></script>
<script type="text/javascript" src="<?php echo JS;?>/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="<?php echo JS;?>/jquery.datePicker.js"></script>
<script type="text/javascript" src="<?php echo JS;?>/jquery.date.js"></script>
<script src="<?php echo JS;?>/ajax.js"></script>
</head>
	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->

<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
		  
			<!-- Logo (221px wide) -->
			<a href="quantri.php"><img id="logo" src="images/logo.png" alt="logo" style="width:200px" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Xin chào, <a href="#" title="">phuong</a><br />
				<br />
				<a href="" title="View the Site">View the Site</a> | <a href="logout.php" title="Sign Out">Đăng xuất</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->

				<li> 
					<a href="" class="nav-top-item current"> <!-- Add the class "current" to current menu item -->
					Quản trị
					</a>
				</li>
				
				<li>
					<a href="" class="nav-top-item">
						Tin tức
					</a>
					<ul>
						<li><a href="tin_tuc.php">Danh sách bài viết</a></li>
						<li><a href="cap_nhat_tin_tuc.php">Thêm tin tức</a></li>
					</ul>
				</li>
				
				<li>
					<a href="" class="nav-top-item">
						Sản phẩm
					</a>
					<ul>
						<li><a href="san_pham.php">Danh sách sản phẩm</a></li>
						<li><a href="cap_nhat_san_pham.php">Thêm sản phẩm</a></li>
					</ul>
				</li>
				
				<li>
					<a href="khach_hang.php" class="nav-top-link">
						Khách hàng
					</a>
				</li>
				
				<li>
					<a href="hoa_don.php" class="nav-top-link">
						Hóa đơn <span id="hoa_don_moi">(0)</span>
					</a>
				</li>   
                
                <li>
					<a href="nguoi_dung.php" class="nav-top-link">
						Người dùng
					</a>
				</li>   
                
                <li>
					<a href="lien_he.php" class="nav-top-link">
						Liên hệ <span id="lien-he-moi">(0)</span>
					</a>
				</li>    
				
			</ul> <!-- End #main-nav -->
			
			<div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
				
				<h3>3 Messages</h3>
			 
				<p>
					<strong>17th May 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>2nd May 2009</strong> by Jane Doe<br />
					Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>25th April 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
				
				<form action="#" method="post">
					
					<h4>New Message</h4>
					
					<fieldset>
						<textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
					</fieldset>
					
					<fieldset>
					
						<select name="dropdown" class="small-input">
							<option value="option1">Send to...</option>
							<option value="option2">Everyone</option>
							<option value="option3">Admin</option>
							<option value="option4">Jane Doe</option>
						</select>
						
						<input class="button" type="submit" value="Send" />
						
					</fieldset>
					
				</form>
				
			</div> <!-- End #messages -->
			
		</div></div>

<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2>Xin chào phuong</h2>
			
			<ul class="shortcut-buttons-set">
				
				<li><a class="shortcut-button" href="cap_nhat_bai_viet.php"><span>
					<img src="images/icons/pencil_48.png" alt="icon" /><br />
					Thêm <br />bài viết
				</span></a></li>
				
				<li><a class="shortcut-button" href="bai_viet.php"><span>
					<img src="images/icons/paper_content_pencil_48.png" alt="icon" /><br />
					Danh sách<br/> bài viết
				</span></a></li>
				
				<li><a class="shortcut-button" href="cap_nhat_san_pham.php"><span>
					<img src="images/icons/add-icon.png" alt="icon" width="48px"/><br />
					Thêm <br/>sản phẩm
				</span></a></li>
                
                <li><a class="shortcut-button" href="san_pham.php"><span>
					<img src="images/icons/product_icon.png" alt="icon" width="48px"/><br />
					Danh sách<br/> sản phẩm
				</span></a></li>
				
			</ul><!-- End .shortcut-buttons-set -->
			
			<div class="clear"></div> <!-- End .clear -->
<script>
function Hoi_xoa(ma_dien_thoai)
{
	if(confirm("Bạn muốn xóa sp này?"))
	{
		window.location='xoa_san_pham.php?ma_dien_thoai=' + ma_dien_thoai;	
	}	
}
</script>
<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Danh sách điện thoại</h3>
                    <div style="width:200px; float:left; padding:10px 0">
                    	<input name="thanh_tim" type="text" id="thanh_tim" placeholder="Nhập tên sản phẩm"/>
                    </div>
                    <h3 style="color:#F00; text-align:center; padding:10px 0">
                                        	</h3>
                    
                    <h3 style="color:#F00; text-align:center; padding:10px 0">
                                        	</h3>
                    <div style="clear:both"></div>
                    
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						<table id="bang">
							
							<thead>
								<tr>
								   <th><input class="check-all" type="checkbox" /></th>
								   <th>Mã sản phẩm</th>
								   <th>Tên sản phẩm</th>
								   <th>Nhà sản xuất</th>
                                   <th>Đơn giá</th>
                                   <th>Hình</th>
                                   <th>Lượt xem</th>
                                   <th>Lượt mua</th>
                                   <th></th>
								</tr>
								
							</thead>

							<tbody>
                            	<tr class="">
									<td><input value="43" class="chon_xoa" type="checkbox" /></td>
									<th>43</th>
								   <th>Apple iPad Air 2 32GB Wifi Cellular</th>
								   <th>Apple</th>
                                   <th>12300000</th>
                                   <th><img width="100px" src="../assets/images/products/1501246418ipad3.jpg"/></th>
                                   <th>1</th>
                                   <th>1</th>
									<th>
										<!-- Icons -->
										 <a href="javascript:Hoi_xoa(43)" title="Delete"><img src="<?php echo IMG_AD?>/icons/cross.png" alt="Delete" /></a> 
                                         <a href="cap_nhat_san_pham.php?ma_san_pham=43" title="Edit"><img src="<?php echo IMG_AD?>/icons/pencil.png" alt="Edit" /></a>
                                         <a href="../sp_apple-ipad-air-2-32gb-wifi-cellular.43.html" title="Xem chi tiết"><img src="images/icons/view-details.png" width="16px"/></a> 
									</th>
								</tr>
                                								<tr class="">
									<td><input value="34" class="chon_xoa" type="checkbox" /></td>
									<th>34</th>
								   <th>Apple iPad 2017 Wifi Cellular 128GB</th>
								   <th>Apple</th>
                                   <th>13958400</th>
                                   <th><img width="100px" src="<?php echo IMG;?>/products/1501246228ipad2.jpg"/></th>
                                   <th>1</th>
                                   <th>2</th>
									<td>
										<!-- Icons -->
										 <a href="javascript:Hoi_xoa(34)" title="Delete"><img src="images/icons/cross.png" alt="Delete" /></a> 
                                         <a href="cap_nhat_san_pham.php?ma_san_pham=34" title="Edit"><img src="images/icons/pencil.png" alt="Edit" /></a>
                                         <a href="../sp_apple-ipad-2017-wifi-cellular-128gb.34.html" title="Xem chi tiết"><img src="images/icons/view-details.png" width="16px"/></a> 
									</td>
								</tr>
                                								<tr class="">
									<td><input value="33" class="chon_xoa" type="checkbox" /></td>
									<th>33</th>
								   <th>Apple iPad 2017 Wifi 32GB</th>
								   <th>Apple</th>
                                   <th>8850000</th>
                                   <th><img width="100px" src="../assets/images/products/1501245366ipad1.png"/></th>
                                   <th>1</th>
                                   <th>1</th>
									<td>
										<!-- Icons -->
										 <a href="javascript:Hoi_xoa(33)" title="Delete"><img src="images/icons/cross.png" alt="Delete" /></a> 
                                         <a href="cap_nhat_san_pham.php?ma_san_pham=33" title="Edit"><img src="images/icons/pencil.png" alt="Edit" /></a>
                                         <a href="../sp_apple-ipad-2017-wifi-32gb.33.html" title="Xem chi tiết"><img src="images/icons/view-details.png" width="16px"/></a> 
									</td>
								</tr>
                                								<tr class="">
									<td><input value="32" class="chon_xoa" type="checkbox" /></td>
									<th>32</th>
								   <th>Sony Xperia C4 Dual</th>
								   <th>Sony</th>
                                   <th>5900000</th>
                                   <th><img width="100px" src="../assets/images/products/300_sony-xperia-c4-1.jpg"/></th>
                                   <th>4</th>
                                   <th>0</th>
									<td>
										<!-- Icons -->
										 <a href="javascript:Hoi_xoa(32)" title="Delete"><img src="images/icons/cross.png" alt="Delete" /></a> 
                                         <a href="cap_nhat_san_pham.php?ma_san_pham=32" title="Edit"><img src="images/icons/pencil.png" alt="Edit" /></a>
                                         <a href="../sp_sony-xperia-c4-dual.32.html" title="Xem chi tiết"><img src="images/icons/view-details.png" width="16px"/></a> 
									</td>
								</tr>
                                								<tr class="">
									<td><input value="31" class="chon_xoa" type="checkbox" /></td>
									<th>31</th>
								   <th>Sony Xperia X (F5122)</th>
								   <th>Sony</th>
                                   <th>6952000</th>
                                   <th><img width="100px" src="../assets/images/products/300_sony-xperia-x-2.jpg"/></th>
                                   <th>4</th>
                                   <th>0</th>
									<td>
										<!-- Icons -->
										 <a href="javascript:Hoi_xoa(31)" title="Delete"><img src="images/icons/cross.png" alt="Delete" /></a> 
                                         <a href="cap_nhat_san_pham.php?ma_san_pham=31" title="Edit"><img src="images/icons/pencil.png" alt="Edit" /></a>
                                         <a href="../sp_sony-xperia-x-f5122.31.html" title="Xem chi tiết"><img src="images/icons/view-details.png" width="16px"/></a> 
									</td>
								</tr>
                                								<tr class="">
									<td><input value="30" class="chon_xoa" type="checkbox" /></td>
									<th>30</th>
								   <th>Sony Xperia XA (F3116)</th>
								   <th>Sony</th>
                                   <th>4490000</th>
                                   <th><img width="100px" src="../assets/images/products/300_sony-xperia-xa-2.jpg"/></th>
                                   <th>12</th>
                                   <th>1</th>
									<td>
										<!-- Icons -->
										 <a href="javascript:Hoi_xoa(30)" title="Delete"><img src="images/icons/cross.png" alt="Delete" /></a> 
                                         <a href="cap_nhat_san_pham.php?ma_san_pham=30" title="Edit"><img src="images/icons/pencil.png" alt="Edit" /></a>
                                         <a href="../sp_sony-xperia-xa-f3116.30.html" title="Xem chi tiết"><img src="images/icons/view-details.png" width="16px"/></a> 
									</td>
								</tr>
                                								<tr class="">
									<td><input value="29" class="chon_xoa" type="checkbox" /></td>
									<th>29</th>
								   <th>Sony Xperia XA Ultra</th>
								   <th>Sony</th>
                                   <th>6591200</th>
                                   <th><img width="100px" src="../assets/images/products/300_sony-xperia-xa-ultra-2.jpg"/></th>
                                   <th>9</th>
                                   <th>0</th>
									<td>
										<!-- Icons -->
										 <a href="javascript:Hoi_xoa(29)" title="Delete"><img src="images/icons/cross.png" alt="Delete" /></a> 
                                         <a href="cap_nhat_san_pham.php?ma_san_pham=29" title="Edit"><img src="images/icons/pencil.png" alt="Edit" /></a>
                                         <a href="../sp_sony-xperia-xa-ultra.29.html" title="Xem chi tiết"><img src="images/icons/view-details.png" width="16px"/></a> 
									</td>
								</tr>
                                								<tr class="">
									<td><input value="28" class="chon_xoa" type="checkbox" /></td>
									<th>28</th>
								   <th>Sony Xperia XZ</th>
								   <th>Sony</th>
                                   <th>12900000</th>
                                   <th><img width="100px" src="../assets/images/products/300_sony-xperia-xz-1.jpg"/></th>
                                   <th>4</th>
                                   <th>0</th>
									<td>
										<!-- Icons -->
										 <a href="javascript:Hoi_xoa(28)" title="Delete"><img src="images/icons/cross.png" alt="Delete" /></a> 
                                         <a href="cap_nhat_san_pham.php?ma_san_pham=28" title="Edit"><img src="images/icons/pencil.png" alt="Edit" /></a>
                                         <a href="../sp_sony-xperia-xz.28.html" title="Xem chi tiết"><img src="images/icons/view-details.png" width="16px"/></a> 
									</td>
								</tr>
                                                                <tr>
                                	<td colspan="11">
                                    	<div style="width:150px; margin:auto">
                                        	<input style="height:40px; cursor:pointer" type="button" name="btn_xoa_sp" class="btn_xoa_sp" value="Xóa sản phẩm"/>
                                        </div>
                                     </td>
                               </tr>
                               <tr><td colspan="11"><div class="pages_list"><span id="page-active" class="page-button">1</span><a href="/project3/admin/san_pham.php?page=2"><span class="page-button">2</span></a><a href="/project3/admin/san_pham.php?page=3"><span class="page-button">3</span></a><a href="/project3/admin/san_pham.php?page=4"><span class="page-button">4</span></a><a href="/project3/admin/san_pham.php?page=5"><span class="page-button">5</span></a><a href="/project3/admin/san_pham.php?page=2"><span class="page-button">></span></a><a href="/project3/admin/san_pham.php?page=5"><span class="page-button">Trang cuối</span></a></div></td></tr>
							</tbody>
                            <script>
							  $('.btn_xoa_sp').click(function(){
								  var count_chon_xoa = $('.chon_xoa').filter(':checked').length;
								  var mang_chon_xoa = [];
								  
								  for(var i = 0; i<count_chon_xoa; i++)
								  {
									  var val = $('.chon_xoa').filter(':checked').eq(i).val();
									  mang_chon_xoa.push(val);
								  }
								  var ma_san_pham = mang_chon_xoa.join();
								  if(ma_san_pham != '')
									  Hoi_xoa(ma_san_pham);
								  else
									  alert('Hãy chọn sp cần xóa');
							  })	
							  
							  $('#thanh_tim').keyup(function(){
						  
								  var $gt_tim =$(this).val();
								  var form_data = {
									  gt_tim:$gt_tim
								  };
						
								  $.ajax({
								  url: "xl_tim_sp.php",
								  type: 'POST',
								  data: form_data,
								  success: function(data) {
									  $( "#bang" ).html(data);
									  }
								  });
						
							  })
							</script>
						</table>
						
					</div> <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->
				
			</div>
 			


<div id="footer"> <small> <!-- Remove this notice or replace it with whatever you want --> 
  &#169; Copyright 2009 Your Company | Powered by <a href="">Thanh Thanh</a> | <a href="#">Top</a> </small> </div>
<!-- End #footer -->

</div>
			
		</div> <!-- End #main-content -->
	</div></body>
</html>
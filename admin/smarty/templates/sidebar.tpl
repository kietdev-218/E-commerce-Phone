<div id="sidebar">
  <div id="sidebar-wrapper"> <!-- Sidebar with logo and menu --> 
    
    <!-- Logo (221px wide) --> 
    <a href="home_page.php"><img id="logo" src="images/logo.png" alt="logo" style="width:200px" /></a> 
    
    <!-- Sidebar Profile links -->
    <div id="profile-links"> Xin chào, <a href="cap_nhat_user.php" title="">{$smarty.session.ad_name}</a><br />
      <br />
      <a href="" title="View the Site">View the Site</a> | <a href="logout.php" title="Sign Out">Đăng xuất</a> </div>
    <ul id="main-nav">
      <!-- Accordion Menu -->
      
      <li> <a href="" class="nav-top-item current"> <!-- Add the class "current" to current menu item --> 
        Quản trị </a> </li>
      <li> <a href="" class="nav-top-item">Bài viết</a>
        <ul>
          <li><a href="ds_bai_viet.php">Danh sách bài viết</a></li>
          <li><a href="cap_nhat_bai_viet.php">Thêm bài viết</a></li>
        </ul>
      </li>
      
      <li> <a href="" class="nav-top-item">Loại bài viết</a>
        <ul>
          <li><a href="ds_loai_bai_viet.php">Danh sách loại bài viết</a></li>
          <li><a href="cap_nhat_loai_bai_viet.php">Thêm loại bài viết</a></li>
        </ul>
      </li>
      
      <li> <a href="" class="nav-top-item"> Sản phẩm </a>
        <ul>
          <li><a href="san_pham.php">Danh sách sản phẩm</a></li>
          <li><a href="cap_nhat_san_pham.php">Thêm sản phẩm</a></li>
        </ul>
      </li>
      
      <li> <a href="" class="nav-top-item"> Loại sản phẩm </a>
        <ul>
          <li><a href="ds_loaisp.php">Danh sách loại sản phẩm</a></li>
          <li><a href="cap_nhat_loaisp.php">Thêm loại sản phẩm</a></li>
        </ul>
      </li>
      <li> <a href="" class="nav-top-item">Hãng sản xuất</a>
        <ul>
          <li><a href="ds_hang.php">Danh sách hãng</a></li>
          <li><a href="cap_nhat_hangsx.php">Thêm hãng</a></li>
        </ul>
      </li>
      <li> <a href="" class="nav-top-item">Slider</a>
        <ul>
          <li><a href="ds_hinh_slider.php">Danh sách hình - Thêm hình</a></li>
          <li><a href="sap_xep_slider.php">Sắp xếp slider</a></li>
          <li><a href="them_bot_hinh_slider.php">Thêm bớt hình slider</a></li>
        </ul>
      </li>
      <li> <a href="ds_tag.php" class="nav-top-link">Tag</a> </li>
      <li> <a href="khach_hang.php" class="nav-top-link"> Khách hàng </a> </li>
      <li> <a href="hoa_don.php" class="nav-top-link"> Hóa đơn <span id="hoa_don_moi">{$m_hoa_don->so_hd_chua_xem()}</span> </a> </li>
      <li> <a href="nguoi_dung.php" class="nav-top-link"> Người dùng </a> </li>
      <li> <a href="lien_he.php" class="nav-top-link"> Liên hệ <span id="lien-he-moi">{$m_lien_he->so_lh_chua_xem()}</span> </a> </li>
      <li> <a href="danh_gia.php" class="nav-top-link">Xem đánh giá</a> </li>
    </ul>
    <!-- End #main-nav -->
    
    <div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
      
      <h3>3 Messages</h3>
      <p> <strong>17th May 2009</strong> by Admin<br />
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small> </p>
      <p> <strong>2nd May 2009</strong> by Jane Doe<br />
        Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small> </p>
      <p> <strong>25th April 2009</strong> by Admin<br />
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small> </p>
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
    </div>
    <!-- End #messages --> 
    
  </div><!--end Sidebar with logo and menu --> 
</div><!-- end sidebar-->

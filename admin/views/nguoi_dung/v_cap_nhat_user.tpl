<h3 style="color:#00F; text-align:center; padding:10px 0; text-indent:10px">
    {if isset($smarty.cookies.sua_user)}
    {$smarty.cookies.sua_user}
    {$m_common->del_cook(sua_user)}
    {/if}
</h3>
<h3 style="text-align:center">Cập nhật thông tin</h3>
{if isset($smarty.post.btn_cap_nhat)}{$m_nguoi_dung->error_trung_user_update()}{/if}
	<p class="">Ngày đăng ký : {date("d/m/Y",strtotime($nguoi_dung->ngay_dang_ky))}</p>
<form method="post" name="frm_cap_nhat" enctype="multipart/form-data">
<table>
	<tr>
    	<td>Họ tên: </td>
        <td>
        	<input type="text" name="ho_ten" class="ho_ten" value="{if isset($smarty.post.btn_cap_nhat)}{$smarty.post.ho_ten}{else}{$nguoi_dung->ho_ten}{/if}" required="required"/>
            {if isset($smarty.post.btn_cap_nhat) && !$m_nguoi_dung->test_error($smarty.post.ho_ten,6,32,'btn_cap_nhat')}
            <p style="color:#F00; font-style:italic">Họ tên tối thiểu là 6 ký tự trở lên và tối đa 32 ký tự</p>
        {/if}
        </td>
    </tr>
    
    <tr>
    	<td>Tên đăng nhập: </td>
        <td>
        	<input type="text" name="ten_dang_nhap" class="ten_dang_nhap" value="{if isset($smarty.post.btn_cap_nhat)}{$smarty.post.ten_dang_nhap}{else}{$nguoi_dung->ten_dang_nhap}{/if}" required="required"/>
            {if isset($smarty.post.btn_cap_nhat) && !$m_nguoi_dung->test_error($smarty.post.ten_dang_nhap,6,32,'btn_cap_nhat')}
          <p style="color:#F00; font-style:italic">Tên đăng nhập phải ít nhất 6 ký tự và tối đa 32 ký tự</p>
          {/if}
        </td>
    </tr>
    
    <tr>
    	<td>Email: </td>
        <td>
        	<input type="email" name="email" class="email" value="{if isset($smarty.post.btn_cap_nhat)}{$smarty.post.email}{else}{$nguoi_dung->email}{/if}" required="required"/>
            {if isset($smarty.post.btn_cap_nhat) &&  !$m_nguoi_dung->test_email($smarty.post.email)}
          <p style="color:#F00; font-style:italic">Hãy nhập email đúng định dạng</p>
        {/if}
        </td>
    </tr>
    
    <tr>
    	<td>Giới tính: </td>
        <td>
        	<label class="info-title" for="exampleOrderIgt">Giới tính &nbsp;&nbsp;</label>
		    <label>Nam &nbsp;<input type="radio" {if isset($smarty.post.gender)}{$m_nguoi_dung->echo_gt(1)}{else}{$m_nguoi_dung->echo_gt_cap_nhat(1,$nguoi_dung->gioi_tinh)}{/if} name="gender" value="1"/></label>&nbsp;&nbsp; 
            <label>Nữ &nbsp;<input type="radio" name="gender" value="0" {if isset($smarty.post.gender)}{$m_nguoi_dung->echo_gt(0)}{else}{$m_nguoi_dung->echo_gt_cap_nhat(0,$nguoi_dung->gioi_tinh)}{/if}/></label>
        </td>
    </tr>
    
    <tr>
    	<td>Ngày sinh: </td>
        <td>
        	<label class="info-title">Ngày sinh:</label>
          	<div style="min-height:44px">
            <select class="ngay_sinh" name="ngay_sinh">
              <option class="op_ngaysinh" value="">Ngày</option>
    
            {for $i=1 to 31 step 1}
              <option class="op_ngaysinh" value="{$i}"
               {if isset($smarty.post.btn_cap_nhat)}{$m_nguoi_dung->date_selected($i,$smarty.post.ngay_sinh)}
               {else}{$m_nguoi_dung->date_selected($i,$m_nguoi_dung->lay_ngay_sinh($nguoi_dung->birthdate))}
               {/if}>
                    {$i}
               </option>
              {/for}
              
            </select>
            <select class="thang_sinh" name="thang_sinh">
              <option class="op_thangsinh" value="">Tháng</option>
              {for $i=1 to 12 step 1}
              <option class="op_thangsinh" value="{$i}"
              {if isset($smarty.post.btn_cap_nhat)}{$m_nguoi_dung->date_selected($i,$smarty.post.thang_sinh)}
              {else}{$m_nguoi_dung->date_selected($i,$m_nguoi_dung->lay_thang_sinh($nguoi_dung->birthdate))}{/if}>
                {$i}
               </option>
              {/for}
            </select>
            <select class="nam_sinh" name="nam_sinh">
              <option class="op_namsinh" value="">Năm</option>
              {$i = date('Y')}
              {while $i>=1900}
              <option class="op_namsinh" value="{$i}" 
              {if isset($smarty.post.btn_cap_nhat)}{$m_nguoi_dung->date_selected($i,$smarty.post.nam_sinh)}
              {else}{$m_nguoi_dung->date_selected($i,$m_nguoi_dung->lay_nam_sinh($nguoi_dung->birthdate))}
              {/if}>
                {$i}
              </option>
              {$i--}
              {/while}
            </select>
                {if isset($smarty.post.btn_cap_nhat) && !$m_nguoi_dung->kiem_tra_ngay($smarty.post.ngay_sinh,$smarty.post.thang_sinh,$smarty.post.nam_sinh)}
                    <p style="color:#F00; font-style:italic">Hãy chọn ngày tháng hợp lệ</p>
                {/if}
        </td>
    </tr>
    
    <tr>
    	<td colspan="2"><div style="width:150px; margin:auto"><input type="submit" name="btn_cap_nhat" value="Cập nhật thông tin"/></div></td>
    </tr>
</table>
</form>

<h3 style="color:#00F; text-align:center; padding:10px 0; text-indent:10px">
    {if isset($smarty.cookies.doi_mat_khau_xong)}
    {$smarty.cookies.doi_mat_khau_xong}
    {$m_common->del_cook(doi_mat_khau_xong)}
    {/if}
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
            {if isset($smarty.post.btn_change_pass) && !$m_nguoi_dung->kiem_tra_mat_khau_hien_tai()}
            <p style="color:#F00; font-style:italic">Hãy nhập chính xác mật khẩu hiện tại</p>
            {/if}
            </td>
        </tr>
        
        <tr>
        	<td>Mật khẩu mới:</td>
            <td>
            <input name="mat_khau" type="password" class="mat_khau" />
            {if isset($smarty.post.btn_change_pass) && !$m_nguoi_dung->test_error($smarty.post.mat_khau,5,32,'btn_change_pass')}
            <p style="color:#F00; font-style:italic">Mật khẩu mới phải ít nhất 5 ký tự và tối đa 32 ký tự</p>
            {/if}
            {if isset($smarty.post.btn_change_pass)}
            <p style="color:#F00; font-style:italic">{$m_nguoi_dung->error_trung_mat_khau()}</p>
            {/if}
            </td>
        </tr>
        
        <tr>
        	<td>Nhập lại mật khẩu mới:</td>
            <td>
            <input name="re_pass_dk" type="password" class="mat_khau" />
            {if isset($smarty.post.btn_change_pass) &&  !$m_nguoi_dung->check_re_pass()}
            <p style="color:#F00; font-style:italic">Hãy nhập lại mật khẩu mới</p>
            {/if}
            </td>
        </tr>
        
        <tr>
        	<td colspan="2">
            	<div style="width:150px; margin:auto"><input type="submit" name="btn_change_pass" value="Cập nhật mật khẩu"/></div>
            </td>
        </tr>
    </tbody>
</table>
</form>
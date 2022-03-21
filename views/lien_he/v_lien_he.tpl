{if !isset($smarty.cookies.lien_he)}
<div class="track-order-page inner-bottom-sm">
			<div class="row">
				<div class="col-md-12">
	<h2 style="font-family:Tahoma, Geneva, sans-serif; font-weight:bold">Liên hệ</h2>
	
	<form method="post" class="register-form outer-top-xs" role="form" name="frm_dat_hang">
		<div class="form-group">
		    <label class="info-title" for="exampleOrderId1">Họ và tên</label>
		    <input name="ten_nguoi_gui" required="required" type="text" class="form-control unicase-form-control text-input" id="exampleOrderId1" value="{if isset($smarty.post.btn_lien_he)}{$smarty.post.ten_nguoi_gui}{/if}" >
		</div>
        <div class="form-group">
		    <label class="info-title" for="exampleOrderId1">Giới tính &nbsp;&nbsp;</label>
		    <label>Nam &nbsp;<input type="radio" checked="checked" name="gender" value="0"/></label>&nbsp;&nbsp; 
            <label>Nữ &nbsp;<input type="radio" name="gender" value="1"/></label>
		</div>
        
        <div class="form-group">
		    <label class="info-title" for="exampleOrderId1">Điện thoại</label>
		    <input name="dien_thoai" required="required" type="text" class="form-control unicase-form-control text-input" id="exampleOrderIdt" value="{if isset($smarty.post.btn_lien_he)}{$smarty.post.dien_thoai}{/if}" >
            {if isset($smarty.post.dat_hang) && !$m_xl_chung->check_number($smarty.post.dien_thoai)}
            <p style="font-style:italic; color:#F00">Hãy nhập số điện thoại hợp lệ</p>
            {/if}
		</div>
        {if isset($smarty.post.btn_lien_he) &&  (!is_numeric($smarty.post.dien_thoai) || $smarty.post.dien_thoai == '' || !$m_nguoi_dung->kiem_tra_so_nguyen($smarty.post.dien_thoai))}
      <div class="bao_loi_php">
        <div class="thanh-loi">Hãy nhập số điện thoại hợp lệ</div>
        <div class="clear"></div>
      </div>
     {/if}
	  	<div class="form-group">
		    <label class="info-title" for="exampleBillingEmail1">Email</label>
		    <input name="email" required="required" type="email" class="form-control unicase-form-control text-input" id="exampleBillingEmail1" value="{if isset($smarty.post.btn_lien_he)}{$smarty.post.email}{/if}" >
		</div>
        <div class="form-group">
		    <label class="info-title">Tiêu đề</label>
		    <input name="tieu_de" required="required" type="text" class="form-control unicase-form-control text-input" value="{if isset($smarty.post.btn_lien_he)}{$smarty.post.tieu_de}{/if}" >
		</div>
        
        <div class="form-group">
		    <label class="info-title">Nội dung:</label>
		    <div style="width:100%"><textarea style="width:100%" name="noi_dung" class="noi_dung_lien_he" rows="12">{if isset($smarty.post.btn_lien_he)}{$smarty.post.noi_dung}{/if}</textarea></div>
		</div>
        
        
	  	<button name="btn_lien_he" type="submit" class="btn-upper btn btn-primary checkout-page-button">Gửi</button>
	</form>	
</div>			</div><!-- /.row -->
		</div>
{else}
<h2 style="color:#00F; text-align:center">Cảm ơn bạn đã gửi ý kiến</h2>
{$m_lien_he->xoa_cook_lien_he()}
{/if}
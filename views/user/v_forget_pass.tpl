
<div class="track-order-page inner-bottom-sm">
			<div class="row">
				<div class="col-md-12">
                
	<h2 style="font-family:Tahoma, Geneva, sans-serif; font-weight:bold">Quên mật khẩu</h2>
	{if isset($smarty.post.btn_xac_nhan)}
{$m_nguoi_dung->loi_xac_nhan_email}
{/if}
{if isset($smarty.cookies.gui_lai_mk)}
<h3 style="color:#00F">{$smarty.cookies.gui_lai_mk}</h3>
{$m_nguoi_dung->xoa_cookie(gui_lai_mk)}
{/if}
	<form method="post" class="register-form outer-top-xs" role="form">
	  	<div class="form-group">
		    <label class="info-title" for="exampleBillingEmail1">Hãy nhập Email của bạn</label>
		    <input name="email" type="email" class="form-control unicase-form-control text-input" id="exampleBillingEmail1" />
		</div>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button" name="btn_xac_nhan">Xác nhận</button>
	</form>	
</div>			</div><!-- /.row -->
		</div>
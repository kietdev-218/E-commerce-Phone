
<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>{$title}</h3>
                    <div style="clear:both"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
                
                <h3 style="color:#00F">
                {if isset($smarty.cookies.tra_loi_xong)}
                {$smarty.cookies.tra_loi_xong}
                {/if}
                </h3>
					<form name="frm_lh" method="post">
					<div class="tab-content default-tab" id="tab1">
                    	<div style="padding:10px 0">
                        	<div style="width:10%; float:left">Tên người gửi:</div>
                            <div style="width:90%; float:left; color:#00F">{$xem_lien_he->ten_nguoi_gui}</div>
                            <div style="clear:both"></div>
                        </div>
                        
                        <div style="padding:10px 0">
                          <div style="width:10%; float:left">Nội dung:</div>
                          <div style="width:90%; border:1px solid #999; float:left; box-sizing:border-box">
                              <div style="width:97%; margin:auto; padding:10px 0">
                              {$xem_lien_he->noi_dung}
                              </div>
                          </div>
                          <div style="clear:both"></div>
                        </div>
                        {if $xem_lien_he->trang_thai ==2}
                        <div style="padding:10px 0">
                          <div style="width:10%; float:left">Đã trả lời:</div>
                          <div style="width:90%; float:left">
                          	<textarea class="tra_loi_lh" name="tra_loi_lh" readonly="readonly"
                               style="width:100%; box-sizing:border-box">{$xem_lien_he->tra_loi}</textarea>
                             <p>
                             {if !empty($m_common->select_single_id('nguoi_dung','ma_nguoi_dung',$xem_lien_he->ma_nguoi_dung))}
                             	Người trả lời: {$m_common->select_single_id('nguoi_dung','ma_nguoi_dung',$xem_lien_he->ma_nguoi_dung)->ten_dang_nhap}
                             {else}
                             Người trả lời: user
                             {/if}
                             </p>
                          </div>
                          <div style="clear:both"></div>
                        </div>
                        {else}
                        <div style="padding:10px 0">
                          <div style="width:10%; float:left">Trả lời:</div>
                          <div style="width:90%; float:left">
                              <textarea class="tra_loi_lh" name="tra_loi_lh" rows="12" 
                              style="width:100%; box-sizing:border-box"></textarea>
                              {if isset($smarty.post.btn_tra_loi) && strlen(trim($smarty.post.tra_loi_lh)) == 0}
                              <p style="color:#F00; font-style:italic">Hãy nhập nội dung trả lời</p>
                              {/if}
                          </div>
                          <div style="clear:both"></div>
                        </div>
                        {/if}

                        <div style="width:320px; margin:auto">
                        	<input type="hidden" value="{$xem_lien_he->ma_lien_he}" class="ma_lh"/>
                            <input type="hidden" name="email" value="{$xem_lien_he->email}" class="email_lh"/>
                            <input style="height:40px; cursor:pointer" type="button" name="btn_xoa_lien_he" class="btn_xoa_lien_he" value="Xóa liên hệ" onclick="Hoi_xoa('lien_he','ma_lien_he',{$ma_lien_he},'lien_he.php','liên hệ')"/>
                         {if $xem_lien_he->trang_thai !=2}   
                            <input type="submit" style="height:40px; cursor:pointer; margin-left:10px" name="btn_tra_loi" class="btn_tra_loi" value="Trả lời"/>
                          {/if}
                         </div>
                    </div> <!-- End #tab1 -->      
					</form>
				</div> <!-- End .content-box-content -->
				
			</div>
            {include file="views/xl_ajax/v_script_phan_tu.tpl"}
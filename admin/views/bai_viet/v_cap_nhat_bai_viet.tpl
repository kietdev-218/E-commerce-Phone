<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<div class="content-box"><!-- Start Content Box -->
	
				<div class="content-box-header">

					<h3>{$title}</h3>
  
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					<h3 style="color:#00F">
                    {if isset($smarty.cookies.sua_bai_xong)}
                    {$smarty.cookies.sua_bai_xong}
                    {$m_common->del_cook('sua_bai_xong')}
                    {/if}
                    </h3>
                    
                    <div style="color:#F00">{if isset($smarty.post.btn_them_bv)}{$m_bai_viet->loi_hinh}{/if}</div>
                    
					<div class="tab-content default-tab" id="tab1"> 
                    	<form class="form-sua-bai" name="form_sua_bai" action="" method="post" enctype="multipart/form-data">
                            <div class="container-form">
                              <div class="dong-input">
                                <div class="ten-input">Tựa đề:</div>
                                <div class="thanh-input">
                                  <input class="khung-input" type="text" name="ten_bai_viet"
                                   value="{if isset($smarty.post.btn_them_bv)}{$smarty.post.ten_bai_viet}{else if isset($smarty.get.ma_bai_viet)}{$bai_viet->ten_bai_viet}{/if}" required="required"/>
                                </div>
                                <div class="clear"></div>
                              </div>
                              {if isset($smarty.post.btn_them_bv) && strlen(trim($smarty.post.ten_bai_viet)) == 0}
                              <div class="bao_loi_php">
                                <div class="thanh-loi">Hãy nhập tựa đề</div>
                                <div class="clear"></div>
                              </div>
                              {/if}
                              
                              <div class="dong-input">
                                <div class="ten-input">Loại bài viết:</div>
                                
                                <div class="thanh-input">
                                
                                  <select name="ma_loai_bai" style="padding:10px 0; box-sizing:border-box" >
                                  {if count($ds_loai_bai)>0}
                                  {foreach $ds_loai_bai as $loai}
                                  	<option class="loai_bai" value="{$loai->ma_loai_bai}" {$m_common->selected_2('ma_bai_viet','ma_loai_bai',$ma_loai_bai_ht,$loai->ma_loai_bai)}>
                                    	{$loai->ten_loai_bai}
                                    </option>
                                    {/foreach}
                                  {/if}
                                  </select>
                                 
                                </div>
                                
                               </div>
                              <div style="margin-top:50px; margin-bottom:20px">
                                  <label style="font-size:18px">Upload hình chính của bài viết : </label>
                                  <input type="file" name="hinh_bv" class="hinh_bv"/>
                              </div>
                              {if isset($smarty.get.ma_bai_viet)}
                              <p>
                              <img width="250px" src="../assets/images/news/{$bai_viet->hinh}"/>
                              </p>
                              {if $bai_viet->hinh != 'hinh_dang_cn.jpg'}
                              <input onclick="xoa_hinh('bai_viet','hinh','ma_bai_viet',{$ma_bai_viet},'hinh_dang_cn.jpg','{$link}')" type="button" class="xoa_hinh" value="Xóa hình"/>
                                {/if}
                                {/if}
                                
                               <div class="dong-input">
                                <div class="ten-input">Nội dung tóm tắt:</div>
                                <div class="clear"></div>
                                <div style="width:100%; float:none; margin:15px auto" class="thanh-input">
                                  <textarea id="noi_dung_tom_tat" class="ckeditor" name="noi_dung_tom_tat" rows="20" style="width:100%"><script>ckeditor.replace("noi_dung_tom_tat");</script>{if isset($smarty.post.btn_them_bv)}{$smarty.post.noi_dung_tom_tat}{else if isset($smarty.get.ma_bai_viet)}{$bai_viet->noi_dung_tom_tat}{/if}</textarea>
                                </div>
                                
                              </div>
                              {if isset($smarty.post.btn_them_bv) && strlen(trim($smarty.post.noi_dung_tom_tat)) ==0 }
                              <div class="bao_loi_php">
                                <div class="thanh-loi">Hãy nhập nội dung tóm tắt</div>
                                <div class="clear"></div>
                              </div>
                              {/if}
                              
                                 <div class="dong-input">
                                <div class="ten-input">Nội dung chi tiết:</div>
                                <div class="clear"></div>
                                <div style="width:100%; float:none; margin:15px auto" class="thanh-input">
                                  <textarea id="noi_dung_chi_tiet" class="ckeditor" name="noi_dung_chi_tiet" rows="100" style="width:100%"><script>ckeditor.replace("noi_dung_chi_tiet");</script>{if isset($smarty.post.btn_them_bv)}{$smarty.post.noi_dung_chi_tiet}{else if isset($smarty.get.ma_bai_viet)}{$bai_viet->noi_dung_chi_tiet}{/if}</textarea>
                                </div>
                                
                              </div>
                              {if isset($smarty.post.btn_them_bv) && strlen(trim($smarty.post.noi_dung_chi_tiet)) ==0}
                              <div class="bao_loi_php">
                                <div class="thanh-loi">Hãy nhập nội dung chi tiết</div>
                                <div class="clear"></div>
                              </div>
                              {/if}

                              <div class="dong-input">
                                <div style="width:100px; margin:auto">
                                  <input name="btn_them_bv" type="submit" class="nut-submit" value="Lưu"/>
                                </div>
                              </div>
                            </div>
                          </form>
                          <!--end form dk-->
					</div> <!-- End #tab1 -->  
					
				</div> <!-- End .content-box-content -->
			</div>


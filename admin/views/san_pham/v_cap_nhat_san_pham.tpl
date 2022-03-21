<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<div class="content-box"><!-- Start Content Box -->
	
				<div class="content-box-header">
					{if isset($smarty.get.ma_san_pham)}
                    <input id="ma_san_pham" type="hidden" value="{$smarty.get.ma_san_pham}"/>
                    {/if}
					<h3>{$tieu_de}</h3>
  
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					<h3 style="color:#00F">
                    {if isset($smarty.cookies.sua_sp_xong)}
                    {$smarty.cookies.sua_sp_xong}
                    {$m_common->del_cook('sua_sp_xong')}
                    {/if}
                    </h3>
                    
                    <div style="color:#F00">{if isset($smarty.post.btn_them_sp)}{$m_san_pham->loi_hinh}{/if}</div>
                    <div style="color:#F00">{if isset($smarty.post.btn_them_sp)}{$m_san_pham->loi_hinh_phu}{/if}</div>
					<div class="tab-content default-tab" id="tab1"> 
                    	<form class="form-sua-bai" name="form_sua_sp" action="" method="post" enctype="multipart/form-data">
                            <div class="container-form">
                              <div class="dong-input">
                                <div class="ten-input">Tên sản phẩm:</div>
                                <div class="thanh-input">
                                  <input class="khung-input" type="text" name="ten_san_pham"
                                   value="{if isset($smarty.post.btn_them_sp)}{$smarty.post.ten_san_pham}{else if isset($smarty.get.ma_san_pham)}{$san_pham->ten_san_pham}{/if}" required="required"/>
                                </div>
                                <div class="clear"></div>
                              </div>
                              {if isset($smarty.post.btn_them_sp) && strlen(trim($smarty.post.ten_san_pham)) == 0}
                              <div class="bao_loi_php">
                                <div class="thanh-loi">Hãy nhập tên sản phẩm</div>
                                <div class="clear"></div>
                              </div>
                              {/if}
                              
                              <div class="dong-input">
                                <div class="ten-input">Loại sản phẩm/Hãng:</div>
                                
                                <div class="thanh-input">
                                  <select name="ma_nha_san_xuat" style="padding:10px 0; box-sizing:border-box" >
                                  {foreach $ds_hang as $hang}
                                  	<option value="{$hang->ma_nha_san_xuat}" {if isset($smarty.post.btn_them_sp) && $hang->ma_nha_san_xuat==$smarty.post.ma_nha_san_xuat}{'selected'}{else if isset($smarty.get.ma_san_pham)}{$m_san_pham->sua_ma_loai($hang->ma_nha_san_xuat,$san_pham->ma_nha_san_xuat)}{/if}>
                                    	{$m_san_pham->loai_nsx($hang->ma_loai)} - {$hang->ten_nha_san_xuat}
                                    </option>
                                  {/foreach}
                                  </select>
                                </div>
                                
                               </div>
                              <div style="margin-top:50px; margin-bottom:20px">
                                  <label style="font-size:18px">Upload hình chính của sản phẩm : </label>
                                  <input type="file" name="hinh_sp" class="hinh_sp"/>
                              </div>
                              {if isset($smarty.get.ma_san_pham)}
                              <p>
                              <img width="250px" src="../assets/images/products/{$san_pham->hinh}"/>
                              </p>
                              {if $san_pham->hinh != 'hinh_dang_cn.jpg'}
                              <input onclick="xoa_hinh('san_pham','hinh','ma_san_pham',{$smarty.get.ma_san_pham},'hinh_dang_cn.jpg','{$link}')" type="button" class="xoa_hinh" value="Xóa hình"/>
                              {/if}
                                {/if}
                                
                                <div style="margin-top:50px; margin-bottom:20px">
                                  <label style="font-size:18px">Upload thêm hình phụ : </label>
                                  <input multiple="multiple" type="file" name="hinh_phu[]" class="hinh_sp"/>
                              </div>
                              {if isset($smarty.get.ma_san_pham) && isset($hinh_chi_tiet) && count($hinh_chi_tiet) > 0}
                              <div class="container-hinhphu">
                              {foreach $hinh_chi_tiet as $hinhct}
                              	<div class="cont-img">
                                	<div class="box-img">
                                    <img src="../assets/images/products/{$hinhct->ten_hinh}"/>
                                    </div>
                                    <label><input class="xoa_hinh" type="checkbox" value="{$hinhct->khoa_chinh}"/>Xóa</label>
                                </div>
                                {/foreach}
                                <div class="clear"></div>
                                <div style="width:100%; text-align:center">
                                <input class="nut_xoa_hinh_chon" type="button" value="Xóa những hình chọn"/>
                                </div>
                              </div>
                                {/if}
                                <p>Chỉ upload hình ảnh có định dạng jpg,png,bmp,jpeg và kích thước tối đa 1 Mb</p>
                                  <div class="dong-input">
                                <div class="ten-input">Mô tả:</div>
                                <div class="clear"></div>
                                <div style="width:100%; float:none; margin:15px auto" class="thanh-input">
                                  <textarea id="mo_ta_chi_tiet" class="ckeditor" name="mo_ta_chi_tiet" rows="100" style="width:100%">
                                  	<script>
            							ckeditor.replace("mo_ta_chi_tiet");
            						</script>
                                    {if isset($smarty.post.btn_them_sp)}{$smarty.post.mo_ta_chi_tiet}{else if isset($smarty.get.ma_san_pham)}{$san_pham->mo_ta}{/if}
                                  </textarea>
                                </div>
                                
                              </div>
                              {if isset($smarty.post.btn_them_sp) && strlen(trim($smarty.post.mo_ta_chi_tiet)) ==0 }
                              <div class="bao_loi_php">
                                <div class="thanh-loi">Hãy nhập mô tả chi tiết</div>
                                <div class="clear"></div>
                              </div>
                              {/if}
                              
                                 <div class="dong-input">
                                <div class="ten-input">Tóm tắt thông số:</div>
                                <div class="clear"></div>
                                <div style="width:100%; float:none; margin:15px auto" class="thanh-input">
                                  <textarea id="tom_tat_thong_so" class="ckeditor" name="tom_tat_thong_so" rows="100" style="width:100%">
                                  	<script>
            							ckeditor.replace("tom_tat_thong_so");
            						</script>
                                    {if isset($smarty.post.btn_them_sp)}{$smarty.post.tom_tat_thong_so}{else if isset($smarty.get.ma_san_pham)}{$san_pham->tom_tat_thong_so}{/if}
                                  </textarea>
                                </div>
                                
                              </div>
                              {if isset($smarty.post.btn_them_sp) && strlen(trim($smarty.post.tom_tat_thong_so)) ==0}
                              <div class="bao_loi_php">
                                <div class="thanh-loi">Hãy nhập tóm tắt thông số</div>
                                <div class="clear"></div>
                              </div>
                              {/if}
                              
                              <div class="dong-input">
                                <div class="ten-input">Đơn giá :</div>
                                <div class="thanh-input">
                                  <input class="khung-input" type="number" name="don_gia"
                                   value="{if isset($smarty.post.btn_them_sp)}{$smarty.post.don_gia}{else if isset($smarty.get.ma_san_pham)}{$san_pham->don_gia}{else}0{/if}"/>
                                </div>
                                <div class="clear"></div>
                              </div>
                              {if isset($smarty.post.btn_them_sp) && $smarty.post.don_gia <= 0}
                              <div class="bao_loi_php">
                                <div class="thanh-loi">Đơn giá phải lớn hơn 0</div>
                                <div class="clear"></div>
                              </div>
                              {/if}
                              <div style="font-size:18px; margin:10px auto">
                              	<label>Khuyến mãi: <input type="number" name="km" value="{if isset($smarty.post.btn_them_sp)}{$smarty.post.km}{else if isset($smarty.get.ma_san_pham)}{$san_pham->khuyen_mai}{else}0{/if}"/></label>
                                <label>Số lượng: <input type="number" name="so_luong" value="{if isset($smarty.post.btn_them_sp)}{$smarty.post.so_luong}{else if isset($smarty.get.ma_san_pham)}{$san_pham->so_luong}{else}0{/if}"/></label>
                              </div>
                              
                              {if isset($smarty.post.btn_them_sp) && ($smarty.post.km <0 || $smarty.post.km == '')}
                              <div class="bao_loi_php">
                                <div class="thanh-loi">Giá khuyến mãi không được nhỏ hơn 0 hay bằng rỗng</div>
                                <div class="clear"></div>
                              </div>
                              {/if}
                              {if isset($smarty.post.btn_them_sp) && ($smarty.post.so_luong <0 || $smarty.post.so_luong == '')}
                              <div class="bao_loi_php">
                                <div class="thanh-loi">Số lượng không được nhỏ hơn 0 hay bằng rỗng</div>
                                <div class="clear"></div>
                              </div>
                              {/if}
                              <div class="dong-input">
                                <div style="width:100px; margin:auto">
                                  <input name="btn_them_sp" type="submit" class="nut-submit" value="Lưu"/>
                                </div>
                              </div>
                            </div>
                          </form>
                          <!--end form dk-->
					</div> <!-- End #tab1 -->  
					
				</div> <!-- End .content-box-content -->
			</div>
            
            <script>
            $('.nut_xoa_hinh_chon').click(function(){
				var count_chon_xoa = $('.xoa_hinh').filter(':checked').length;
				var mang_chon_xoa = [];
				var ma_san_pham = $('#ma_san_pham').val();
				
				for(var i = 0; i<count_chon_xoa; i++)
				{
					var val = $('.xoa_hinh').filter(':checked').eq(i).val();
					mang_chon_xoa.push(val);
				}
				var khoa_chinh = mang_chon_xoa.join();
				if(khoa_chinh != '')
					window.location.href = 'xoa_hinh_chi_tiet.php?khoa_chinh='+khoa_chinh+'&ma_san_pham='+ma_san_pham;
				else
					alert("Hãy chọn hình cần xóa");
			})
			
            
            </script>

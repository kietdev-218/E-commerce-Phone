<h3 style="color:#00F; text-align:center; padding:10px 0; text-indent:10px">
    {if isset($smarty.cookies.sua_loaisp)}
    {$smarty.cookies.sua_loaisp}
    {$m_common->del_cook(sua_loaisp)}
    {/if}
</h3>
<form method="post" name="frm_cap_nhat_ten_loai" enctype="multipart/form-data">
<table>
	<tr>
    	<td>Tên loại sản phẩm: </td>
        <td>
        	<input type="text" name="ten_nha_san_xuat" class="ten_nha_san_xuat" value="{$m_common->show_value('ma_loai','ten_nha_san_xuat',$ten_nha_san_xuat)}"/>
            <p style="color:#F00; font-style:italic">{$m_san_pham->loi_cap_nhat_hang}</p>
        </td>
    </tr>
    <tr>
    	<td>Upload Logo : </td>
        <td>
            <input type="file" name="logo" class="logo"/>
            <p style="color:#F00; font-style:italic">{$m_san_pham->loi_up_hinh}</p>
        </td>
    </tr>
    {if isset($smarty.get.ma_loai)}
    <tr>
    	<td>Logo: </td>
        <td>
        	<img width="150px" src="{$smarty.const.IMG}/logos/{$loaisp->logo}"/><br /><br />
            {if $loaisp->logo != 'hinh_dang_cn.jpg'}
            <input onclick="xoa_hinh('nha_san_xuat','logo','ma_nha_san_xuat',{$ma_loai},'hinh_dang_cn.jpg','{$link}')" type="button" class="xoa_logo" value="Xóa logo"/>{/if}
        </td>
    </tr>
    {/if}
    
    <tr>
    	<td colspan="2"><input type="submit" name="btn_cap_nhat_loai_sp" value="Gửi"/></td>
    </tr>
</table>
</form>
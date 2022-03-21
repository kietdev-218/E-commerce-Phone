<h3 style="color:#00F; text-align:center; padding:10px 0; text-indent:10px">
    {if isset($smarty.cookies.sua_hangsx)}
    {$smarty.cookies.sua_hangsx}
    {$m_common->del_cook(sua_hangsx)}
    {/if}
</h3>
<form method="post" name="frm_cap_nhat_ten_loai" enctype="multipart/form-data">
<table>
	<tr>
    	<td>Tên nhà sản xuất: </td>
        <td>
        	<input type="text" name="ten_nha_san_xuat" class="ten_nha_san_xuat" value="{$m_common->show_value('ma_nha_san_xuat','ten_nha_san_xuat',$ten_nha_san_xuat)}"/>
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
    {if isset($smarty.get.ma_nha_san_xuat)}
    <tr>
    	<td>Logo: </td>
        <td>
        	<img width="150px" src="{$smarty.const.IMG}/logos/{$hangsx->logo}"/><br /><br />
            {if $hangsx->logo != 'hinh_dang_cn.jpg'}
            <input onclick="xoa_hinh('nha_san_xuat','logo','ma_nha_san_xuat',{$ma_nha_san_xuat},'hinh_dang_cn.jpg','{$link}')" type="button" class="xoa_logo" value="Xóa logo"/>{/if}
        </td>
    </tr>
    {/if}
    <tr>
    	<td>Loại sản phẩm: </td>
        <td>
        	<select name="loai_sp">
            {foreach $ds_loai_sp as $loai}
            <option {$m_common->selected_2('ma_nha_san_xuat','loai_sp',$ma_loai,$loai->ma_nha_san_xuat)} value="{$loai->ma_nha_san_xuat}">
            {$loai->ten_nha_san_xuat}</option>
            {/foreach}
            </select>
        </td>
    </tr>
    <tr>
    	<td colspan="2"><input type="submit" name="btn_cap_nhat_hangsx" value="Gửi"/></td>
    </tr>
</table>
</form>

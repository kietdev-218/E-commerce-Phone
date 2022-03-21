<h3 style="color:#00F; text-align:center; padding:10px 0; text-indent:10px">
    {if isset($smarty.cookies.sua_loaibv)}
    {$smarty.cookies.sua_loaibv}
    {$m_common->del_cook(sua_loaibv)}
    {/if}
</h3>
<h3 style="color:#00F; text-align:center; padding:10px 0">
    {if isset($smarty.cookies.them_loaibv)}
    {$smarty.cookies.them_loaibv}
    {$m_common->del_cook(them_loaibv)}
    {/if}
</h3>
<form method="post" name="frm_cap_nhat_ten_loai" enctype="multipart/form-data">
<table>
	<tr>
    	<td>Tên loại bài: </td>
        <td>
        	<input type="text" name="ten_loai_bai" class="ten_loai_bai" value="{$m_common->show_value('ma_loai_bai','ten_loai_bai',$ten_loai_ht)}" required="required"/>
            <p style="color:#F00; font-style:italic">{$m_bai_viet->loi_trung_ten}</p>
        </td>
    </tr>
    
    <tr>
    	<td colspan="2"><input type="submit" name="btn_cap_nhat_loai_bv" value="Gửi"/></td>
    </tr>
</table>
</form>
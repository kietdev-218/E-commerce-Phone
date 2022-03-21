<h3 class="section-title">Danh mục</h3>
<div class="sidebar-filter"> 
  <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
  <div class="sidebar-widget wow fadeInUp outer-bottom-xs ">
    <div class="sidebar-widget-body m-t-10">
      <div class="accordion"> {foreach $ds_loai_sp as $k => $loai}
        <div class="accordion-group">
          <div class="accordion-heading"> <a href="#collapse{$k}" data-toggle="collapse" class="accordion-toggle collapsed"> {$loai->ten_nha_san_xuat} </a> </div>
          <!-- /.accordion-heading -->
          
          <div class="accordion-body collapse" id="collapse{$k}" style="height: 0px;">
            <div class="accordion-inner">
              <ul>
                {$ds_hang_sx = $m_san_pham->ds_loai_sp($loai->ma_nha_san_xuat)}
                {foreach $ds_hang_sx as $hang}
                <li><a href="hang_{thu_vien::bo_dau($hang->ten_nha_san_xuat)}.{$hang->ma_nha_san_xuat}">{$hang->ten_nha_san_xuat}</a></li>
                {/foreach}
              </ul>
            </div>
            <!-- /.accordion-inner --> 
          </div>
          <!-- /.accordion-body --> 
        </div>
        <!-- /.accordion-group --> 
        {/foreach} </div>
      <!-- /.accordion --> 
    </div>
    <!-- /.sidebar-widget-body --> 
  </div>
  <!-- /.sidebar-widget --> 
</div>

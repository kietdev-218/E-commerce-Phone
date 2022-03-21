<?php /* Smarty version Smarty-3.1.14, created on 2018-04-05 14:47:38
         compiled from "smarty\templates\main_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119065a2cfdd44bbfd0-77302854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e89bda0d04e0ebfeea047d6756b5abf27de88bd' => 
    array (
      0 => 'smarty\\templates\\main_content.tpl',
      1 => 1522494022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119065a2cfdd44bbfd0-77302854',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2cfdd44f8974_28839417',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2cfdd44f8974_28839417')) {function content_5a2cfdd44f8974_28839417($_smarty_tpl) {?><div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2>Xin chào <?php echo $_SESSION['ad_name'];?>
</h2>
			
			<ul class="shortcut-buttons-set">
				
				<li><a class="shortcut-button" href="cap_nhat_bai_viet.php"><span>
					<img src="images/icons/pencil_48.png" alt="icon" /><br />
					Thêm <br />bài viết
				</span></a></li>
				
				<li><a class="shortcut-button" href="ds_bai_viet.php"><span>
					<img src="images/icons/paper_content_pencil_48.png" alt="icon" /><br />
					Danh sách<br/> bài viết
				</span></a></li>
				
				<li><a class="shortcut-button" href="cap_nhat_san_pham.php"><span>
					<img src="images/icons/add-icon.png" alt="icon" width="48px"/><br />
					Thêm <br/>sản phẩm
				</span></a></li>
                
                <li><a class="shortcut-button" href="san_pham.php"><span>
					<img src="images/icons/product_icon.png" alt="icon" width="48px"/><br />
					Danh sách<br/> sản phẩm
				</span></a></li>
				
			</ul><!-- End .shortcut-buttons-set -->
			
			<div class="clear"></div> <!-- End .clear --><?php }} ?>
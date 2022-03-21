<?php /* Smarty version Smarty-3.1.18, created on 2018-04-05 14:54:44
         compiled from "views\bai_viet\v_ban_tin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1701359edac11cce8c4-62526704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcb292948d1d033fb315fd67982cdb53d3c70583' => 
    array (
      0 => 'views\\bai_viet\\v_ban_tin.tpl',
      1 => 1522848342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1701359edac11cce8c4-62526704',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59edac11cf04d3_21732584',
  'variables' => 
  array (
    'ban_tin' => 0,
    'm_nguoi_dung' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59edac11cf04d3_21732584')) {function content_59edac11cf04d3_21732584($_smarty_tpl) {?>
<div class="row">
  <div class="blog-page">
    <div class="col-md-9">
      <div class="blog-post wow fadeInUp">
        <h1><?php echo $_smarty_tpl->tpl_vars['ban_tin']->value->ten_bai_viet;?>
</h1>
        <span class="author"><?php if (!empty($_smarty_tpl->tpl_vars['m_nguoi_dung']->value->nguoi_dung($_smarty_tpl->tpl_vars['ban_tin']->value->ma_nguoi_dung))) {?><?php echo $_smarty_tpl->tpl_vars['m_nguoi_dung']->value->nguoi_dung($_smarty_tpl->tpl_vars['ban_tin']->value->ma_nguoi_dung)->ten_dang_nhap;?>
<?php } else { ?>user<?php }?></span> <span class="review"><?php echo $_smarty_tpl->tpl_vars['ban_tin']->value->luot_xem;?>
</span> 
        <span class="date-time"><?php echo date('d-m-Y',strtotime($_smarty_tpl->tpl_vars['ban_tin']->value->ngay_dang));?>
</span>
        <?php echo $_smarty_tpl->tpl_vars['ban_tin']->value->noi_dung_chi_tiet;?>

      </div>
      <script>
	  $('.blog-post img').css({
		  'width':'90%','height':'auto'
		  })
	  </script>
      <!--<div class="blog-post-author-details wow fadeInUp">
        <div class="row">
          <div class="col-md-2"> <img src="assets/images/blog-post/author.png" alt="Responsive image" class="img-circle img-responsive"> </div>
          <div class="col-md-10">
            <h4>Michael Lee</h4>
            <div class="btn-group author-social-network pull-right"> <span>Follow me on</span>
              <button type="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="twitter-icon fa fa-twitter"></i> <span class="caret"></span> </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#"><i class="icon fa fa-facebook"></i>Facebook</a></li>
                <li><a href="#"><i class="icon fa fa-linkedin"></i>Linkedin</a></li>
                <li><a href=""><i class="icon fa fa-pinterest"></i>Pinterst</a></li>
                <li><a href=""><i class="icon fa fa-rss"></i>RSS</a></li>
              </ul>
            </div>
            <span class="author-job">Web Designer</span>
            <p>Integer sit amet commodo eros, sed dictum ipsum. Integer sit amet commodo eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibul um quis convallis lorem, ac volutpat magna. Suspendisse potenti.</p>
          </div>
        </div>
      </div>
      <div class="blog-review wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="title-review-comments">16 comments</h3>
          </div>
          <div class="col-md-2 col-sm-2"> <img src="assets/images/blog-post/c1.jpg" alt="Responsive image" class="img-rounded img-responsive"> </div>
          <div class="col-md-10 col-sm-10 blog-comments outer-bottom-xs">
            <div class="blog-comments inner-bottom-xs">
              <h4>Jone doe</h4>
              <span class="review-action pull-right"> 03 Day ago &sol; <a href=""> Repost</a> &sol; <a href=""> Reply</a> </span>
              <p>Integer sit amet commodo eros, sed dictum ipsum. Integer sit amet commodo eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibul um quis convallis lorem, ac volutpat magna. Suspendisse potenti.</p>
            </div>
            <div class="blog-comments-responce outer-top-xs ">
              <div class="row">
                <div class="col-md-2 col-sm-2"> <img src="assets/images/blog-post/c2.jpg" alt="Responsive image" class="img-rounded img-responsive"> </div>
                <div class="col-md-10 col-sm-10 outer-bottom-xs">
                  <div class="blog-sub-comments inner-bottom-xs">
                    <h4>mike</h4>
                    <span class="review-action pull-right"> 03 Day ago &sol; <a href=""> Repost</a> &sol; <a href=""> Reply</a> </span>
                    <p>Integer sit amet commodo eros, sed dictum ipsum. Integer sit amet commodo eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
                <div class="col-md-2 col-sm-2"> <img src="assets/images/blog-post/c3.jpg" alt="Responsive image" class="img-rounded img-responsive"> </div>
                <div class="col-md-10 col-sm-10">
                  <div class=" inner-bottom-xs">
                    <h4>mike</h4>
                    <span class="review-action pull-right"> 03 Day ago &sol; <a href=""> Repost</a> &sol; <a href=""> Reply</a> </span>
                    <p>Integer sit amet commodo eros, sed dictum ipsum. Integer sit amet commodo eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-2"> <img src="assets/images/blog-post/c4.jpg" alt="Responsive image" class="img-rounded img-responsive"> </div>
          <div class="col-md-10 col-sm-10">
            <div class="blog-comments inner-bottom-xs outer-bottom-xs">
              <h4>onrents</h4>
              <span class="review-action pull-right"> 03 Day ago &sol; <a href=""> Repost</a> &sol; <a href=""> Reply</a> </span>
              <p>Integer sit amet commodo eros, sed dictum ipsum. Integer sit amet commodo eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibul um quis convallis lorem, ac volutpat magna. Suspendisse potenti.</p>
            </div>
          </div>
          <div class="col-md-2 col-sm-2"> <img src="assets/images/blog-post/c5.jpg" alt="Responsive image" class="img-rounded img-responsive"> </div>
          <div class="col-md-10 col-sm-10">
            <div class="blog-comment inner-bottom-xs">
              <h4>michael lee</h4>
              <span class="review-action pull-right"> 03 Day ago &sol; <a href=""> Repost</a> &sol; <a href=""> Reply</a> </span>
              <p>Integer sit amet commodo eros, sed dictum ipsum. Integer sit amet commodo eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibul um quis convallis lorem, ac volutpat magna. Suspendisse potenti.</p>
            </div>
          </div>
          <div class="post-load-more col-md-12"><a class="btn btn-upper btn-primary" href="#">Load more</a></div>
        </div>
      </div>
      <div class="blog-write-comment m-t-20">
        <div class="row">
          <div class="col-md-12">
            <h4>leave a comment</h4>
          </div>
          <div class="col-md-4">
            <form class="register-form" role="form">
              <div class="form-group">
                <label class="info-title" for="exampleInputName">Your Name <span>*</span></label>
                <input type="email" class="form-control unicase-form-control text-input" id="exampleInputName" placeholder="Name">
              </div>
            </form>
          </div>
          <div class="col-md-4">
            <form class="register-form" role="form">
              <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="admin@unicase.com">
              </div>
            </form>
          </div>
          <div class="col-md-4">
            <form class="register-form" role="form">
              <div class="form-group">
                <label class="info-title" for="exampleInputTitle">Title <span>*</span></label>
                <input type="email" class="form-control unicase-form-control text-input" id="exampleInputTitle" placeholder="Mr / Mrs">
              </div>
            </form>
          </div>
          <div class="col-md-12">
            <form class="register-form" role="form">
              <div class="form-group">
                <label class="info-title" for="exampleInputComments">Your Comments <span>*</span></label>
                <textarea class="form-control unicase-form-control" id="exampleInputComments" ></textarea>
              </div>
            </form>
          </div>
          <div class="col-md-12 outer-bottom-small m-t-20">
            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Submit Comment</button>
          </div>
        </div>
      </div>-->
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("views/bai_viet/v_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </div>
</div>
<?php }} ?>

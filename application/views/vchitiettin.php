<div id="haru-content-main" class="clearfix">
            
    <div class="haru-page-title-section" style="background-image: url(http://demo.harutheme.com/pangja/wp-content/themes/pangja/framework/admin-assets/images/theme-options/bg-page-title.jpg)">
            <section class="haru-page-title-wrapper page-title-wrapper-bg">
            <div class="container">
                <div class="page-title-inner">
                    <div class="block-center-inner">
                        <h2></h2>
                                            </div>
                </div>
            </div>
        </section>
                <div class="haru-breadcrumb-wrapper">
            <div class="container">
                    <ul class="breadcrumbs"><li><a href="http://demo.harutheme.com/pangja/" class="home">Trang chủ</a></li><li><a href="#" title="Calendars">Tin tức</a></li><li><span><?php echo $chitiettin['tieude'];?></span></li></ul>            </div>
        </div>
        </div>
<div class="haru-single-blog">
        <div class="container clearfix">
                    <div class="row clearfix">
        
            <!-- Single content -->
            <div class="single-content col-md-9  has-right-sidebar  col-sm-12 col-xs-12">
                <div class="single-wrapper">
                    <article id="post-124" class="post-124 post type-post status-publish format-standard has-post-thumbnail hentry category-calendars category-copies-documents tag-cup tag-invitation tag-poster clearfix">
    <div class="post-wrapper">
        <div class="post-meta-wrapper">
            
<div class="post-meta-info">
    <h3 class="post-title"><?php echo $chitiettin['tieude'];?></h3>
    <div class="post-info">
               
        <div class="post-meta-date" style="border:0"><?php echo substr($chitiettin['ngaythang'],11,2).":".substr($chitiettin['ngaythang'],14,2)." ngày ".substr($chitiettin['ngaythang'],0,2)."/".substr($chitiettin['ngaythang'],3,2)."/".substr($chitiettin['ngaythang'],6,4); ?></div>
             
            </div>
</div>        
</div>
                   
                <div class="post-content-wrapper">
            <div class="post-content">
                
            <?php echo $chitiettin['noidung'];?>

            </div>
            
        </div>
    </div>
</article>

                </div>
            </div>
                                        <div class="single-sidebar right-sidebar col-md-3 col-sm-12 col-xs-12">
                    <aside id="categories-2" class="widget widget_categories"><h4 class="widget-title"><span>Danh mục tin</span></h4>		
                    <ul>
                <?php foreach($menudanhmuc as $itemdanhmuc){
                                
                                ?>

				<li class="cat-item cat-item-16"><a href="<?php echo base_url();?>danh-muc-tin-tuc/<?php echo $itemdanhmuc['slug'];?>-<?php echo $itemdanhmuc['iddmtintuc'];?>.html"><?php echo $itemdanhmuc['tendmtintuc']; ?></a> 
                </li>
                <?php }?>
		</ul>
			</aside>
            <aside id="haru_widget_post_thumbnail-2" class="widget widget-post-thumbnail">
            <h4 class="widget-title"><span>TIN TỨC LIÊN QUAN</span></h4>
            <ul class="posts-thumbnail-list thumb_left">
            <?php foreach($tinlienquan as $itemlienquan){
									
									?>
                <li class="clearfix">
                    <div class="posts-thumbnail-image">
                        <a href="<?php echo base_url();?>tin-tuc/<?php echo $itemlienquan['slugtintuc'];?>-<?php echo $itemlienquan['idtintuc'];?>.html">
                            <img width="150" height="150" src="<?php echo base_url();?>uploads/<?php echo $itemlienquan['hinhdaidien'];?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="<?php echo $itemlienquan['tieude'];?>" title="<?php echo $itemlienquan['tieude'];?>">
                        </a>
                    </div>
                    <div class="posts-thumbnail-content">
                        <h4><a href="<?php echo base_url();?>tin-tuc/<?php echo $itemlienquan['slugtintuc'];?>-<?php echo $itemlienquan['idtintuc'];?>.html" title="<?php echo $itemlienquan['tieude'];?>"><?php echo $itemlienquan['tieude'];?></a></h4>
                        <div class="posts-thumbnail-meta"><span class="datetime"><?php echo substr($itemlienquan['ngaythang'],11,2).":".substr($itemlienquan['ngaythang'],14,2)." ngày ".substr($itemlienquan['ngaythang'],0,2)."/".substr($itemlienquan['ngaythang'],3,2)."/".substr($itemlienquan['ngaythang'],6,4); ?></span></div>
                    </div>
                </li>
                <?php }?>

            </ul>
            </aside>
                           </div>
                            </div>
                </div>
    </div>                        </div>
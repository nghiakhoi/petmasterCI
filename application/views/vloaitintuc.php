<div id="haru-content-main" class="clearfix">
            
    <div class="haru-page-title-section" style="background-image: url(http://demo.harutheme.com/pangja/wp-content/themes/pangja/framework/admin-assets/images/theme-options/bg-page-title.jpg);">
                    <section class="haru-page-title-wrapper page-title-wrap-bg">
                <div class="container">
                    <div class="page-title-inner">
                        <div class="block-center-inner">
                            <h2>Tin tức</h2>
                                                    </div>
                    </div>
                </div>
            </section>
            <div class="haru-breadcrumb-wrapper">
                <div class="container">
                <ul class="breadcrumbs"><li><a href="http://demo.harutheme.com/pangja/" class="home">Trang chủ</a></li><li><a href="#" title="Calendars">Tin tức</a></li></ul>            </div>
            </div>             
            </div>
<div class="haru-archive-blog">
            <div class="container ">
                        <div class="row">
                    
                <!-- Archive content -->
                <div class="archive-content col-md-9  has-right-sidebar col-sm-12 col-xs-12">
                    <div class="archive-content-layout layout-style-large-image">
                        
                        <div class="row">
                        <?php foreach($alltintuc as $item){

?>
                           
                            <article id="post-155" class="large-image col-md-12 col-sm-12 col-xs-12 post-155 post type-post status-publish format-image has-post-thumbnail sticky hentry category-invitations tag-apparel tag-banner tag-business-card tag-cup tag-invitation tag-poster post_format-post-format-image clearfix">
    <div class="post-wrapper clearfix">
                    <div class="post-thumbnail-wrapper">
                <div class="post-thumbnail">
                                <a href="<?php echo base_url();?>tin-tuc/<?php echo $item['slugtintuc'];?>-<?php echo $item['idtintuc'];?>.html" class="post-thumbnail-overlay">
                                    <img class="img-responsive" src="<?php echo base_url();?>uploads/<?php echo $item['hinhdaidien'];?>" alt="<?php echo $item['tieude'];?>">
                                </a>
                            </div>                
            </div>
                <div class="post-content-wrapper">
            <div class="post-detail">
                <div class="post-meta-info">
                   
<div class="post-meta-date">
    <i class="icon-calendar"></i>Ngày <?php echo substr($item['ngaythang'],0,2); ?>/<?php echo substr($item['ngaythang'],3,2); ?>/<?php echo substr($item['ngaythang'],6,4); ?></div>
                </div>
                <div class="post-detail-content">
                    <h3 class="post-title">
                        <a href="<?php echo base_url();?>tin-tuc/<?php echo $item['slugtintuc'];?>-<?php echo $item['idtintuc'];?>.html" rel="bookmark" title="<?php echo $item['tieude'];?>"><?php echo $item['tieude'];?></a>
                    </h3>
                    <div class="post-excerpt">
                    <?php echo $item['motangan'];?>                   </div>
                    <div class="post-read-more">
                        <a href="<?php echo base_url();?>tin-tuc/<?php echo $item['slugtintuc'];?>-<?php echo $item['idtintuc'];?>.html" class="read-more" rel="bookmark" title="<?php echo $item['tieude'];?>">Xem thêm<i class="ion ion-md-arrow-forward"></i></a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</article>            
<?php }?>    

       </div>
                                                    <div class="archive-paging default">
                                <ul class="page-numbers">

    <?php
                    if($num_rows>0){
                        echo $link;
                    }?>

</ul>
                            </div>
                        
                    </div>
                </div>
                                        <div class="archive-sidebar right-sidebar col-md-3 col-sm-12 col-xs-12">
                    <aside id="categories-2" class="widget widget_categories"><h4 class="widget-title"><span>Danh mục tin</span></h4>		
<ul>
<?php foreach($menudanhmuc as $itemdanhmuc){
                                
                                ?>
				<li class="cat-item cat-item-16"><a href="<?php echo base_url();?>danh-muc-tin-tuc/<?php echo $itemdanhmuc['slug'];?>-<?php echo $itemdanhmuc['iddmtintuc'];?>.html"><?php echo $itemdanhmuc['tendmtintuc']; ?></a> 
                </li>
                <?php }?>
	
		</ul>
			</aside>
               </div>
                                </div>
                    </div>
    </div>                        </div>
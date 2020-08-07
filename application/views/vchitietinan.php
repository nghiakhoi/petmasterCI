<div id="haru-content-main" class="clearfix">
            

    <div class="haru-page-title-section" style="background-image: url(http://demo.harutheme.com/pangja/wp-content/themes/pangja/framework/admin-assets/images/theme-options/bg-page-title.jpg)">
            <section  class="haru-page-title-wrapper page-title-wrapper-bg" >
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
                    <ul class="breadcrumbs"><li><a href="<?php echo base_url();?>" class="home">Trang chủ</a></li><li><span><?php echo $chitiettin['tendanhmuc']; ?></span></li></ul>            </div>
        </div>
        </div>
<div class="haru-single-product">

    <div class="container clearfix">

                <div class="row clearfix">
        
            <div class="single-product-content col-md-12   col-sm-12 col-xs-12">
                                <div class="single-product-inner">
                    
                        
<div class="woocommerce-notices-wrapper"></div>
<div id="product-104" class="post-104 product type-product status-publish has-post-thumbnail product_cat-business-cards product_cat-tickets product_tag-calendar product_tag-cup product_tag-invitation product_tag-magazine clearfix first instock shipping-taxable purchasable product-type-simple">
    <div class="single-product-top">
        <div class="single-product-image-wrap horizontal thumbnail-left">
            <div class="product-label">



</div>
<div class="single-product-image-inner">
    <div id="product-images1" class="slider-for" 
        data-slick='{"slidesToShow" : 1, "slidesToScroll": 1, "infinite" : false, "asNavFor" : ".slider-nav" }'>
        
        <?php $hinhanh=explode("|", $chitiettin['hinhanhphu']); ?>

        <?php 
	for($j=0;$j<count($hinhanh);$j++)
	{
	if($hinhanh[$j]!=null)
	{
?>
<div class="woocommerce-image-zoom"><a href="<?php echo base_url();?>uploads/<?php echo $hinhanh[$j];?>" itemprop="image" class="woocommerce-main-image" title="" data-rel="prettyPhoto[product-gallery]" data-index="0"><i class="icon-magnifier"></i></a><img width="555" height="555" src="<?php echo base_url();?>uploads/<?php echo $hinhanh[$j];?>" class="attachment-shop_single size-shop_single" alt="" srcset="<?php echo base_url();?>uploads/<?php echo $hinhanh[$j];?> 555w, <?php echo base_url();?>uploads/<?php echo $hinhanh[$j];?> 150w, <?php echo base_url();?>uploads/<?php echo $hinhanh[$j];?> 300w, <?php echo base_url();?>uploads/<?php echo $hinhanh[$j];?> 575w" sizes="(max-width: 555px) 100vw, 555px" /></div>   

    <?php }else break;}?>
         </div>
            
           

        <div id="product-thumbnails1" class="slider-nav" 
    data-slick='{"slidesToShow" : 4, "slidesToScroll" : 1, "arrows" : true, "infinite" : false, "centerMode" : false, "focusOnSelect" : true, "vertical" : false, "asNavFor" : ".slider-for", "responsive" : [{"breakpoint": 767,"settings":{"slidesToShow": 3}}] }'>
        
    <?php 
	for($j=0;$j<count($hinhanh);$j++)
	{
	if($hinhanh[$j]!=null)
	{
?>
        <div class="thumbnail-image"><a href="javascript:;" itemprop="image" class="woocommerce-thumbnail-image" title="" data-index="0"><img width="150" height="150" src="<?php echo base_url();?>uploads/<?php echo $hinhanh[$j];?>" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" srcset="<?php echo base_url();?>uploads/<?php echo $hinhanh[$j];?> 150w, <?php echo base_url();?>uploads/<?php echo $hinhanh[$j];?> 300w, <?php echo base_url();?>uploads/<?php echo $hinhanh[$j];?> 555w, <?php echo base_url();?>uploads/<?php echo $hinhanh[$j];?> 575w" sizes="(max-width: 150px) 100vw, 150px" /></a></div>  
        <?php }else break;}?>

         </div>
</div>        </div>
        <div class="summary entry-summary">
            <h1 class="product_title entry-title"><?php echo $chitiettin['tendanhmuc']; ?></h1>
	

<div class="woocommerce-product-details__short-description">
	<p><?php echo $chitiettin['motangan']; ?></p>
</div>
	
	

	
<div class="post-social-share">
            <div class="social-share-wrapper">
            
            <ul class="social-share">
                <li class="social-label">
                    Share:                 </li>
                                    <li>
                        <a onclick="window.open('https://www.facebook.com/sharer.php?s=100&amp;p[url]=<?php echo base_url();?><?php echo $_SERVER['REQUEST_URI'];?>','sharer', 'toolbar=0,status=0,width=620,height=280');"  href="javascript:;">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                
                                    <li>
                        <a onclick="popUp=window.open('http://twitter.com/home?status=Business+Card+Blue <?php echo base_url();?><?php echo $_SERVER['REQUEST_URI'];?>','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;"  href="javascript:;">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                
                                    <li>
                        <a href="javascript:;" onclick="popUp=window.open('https://plus.google.com/share?url=<?php echo base_url();?><?php echo $_SERVER['REQUEST_URI'];?>','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;">
                            <i class="fa fa-google"></i>
                        </a>
                    </li>
                
                                    <li>
                        <a onclick="popUp=window.open('http://linkedin.com/shareArticle?mini=true&amp;url=<?php echo base_url();?><?php echo $_SERVER['REQUEST_URI'];?>&amp;title=Business+Card+Blue','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" href="javascript:;">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                
                                    <li>
                        <a onclick="popUp=window.open('http://www.tumblr.com/share/link?url=<?php echo base_url();?><?php echo $_SERVER['REQUEST_URI'];?>&amp;name=Business+Card+Blue&amp;description=Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+In+tristique+malesuada+elit%2C+ut+facilisis+tellus+elementum+id.+Nullam+id+consectetur+diam.+Pellentesque+nec+tristique+sapien.+Etiam+non+augue+lacus.+Nunc+condimentum+lacus+a+molestie+vestibulum.+In+pharetra+turpis+ut+blandit+bibendum+dictum+felis+sed+lobortis.','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" href="javascript:;">
                            <i class="fa fa-tumblr"></i>
                        </a>
                    </li>

                
                                    <li>
                        <a onclick="popUp=window.open('http://pinterest.com/pin/create/button/?url=<?php echo base_url();?><?php echo $_SERVER['REQUEST_URI'];?>&amp;description=Business+Card+Blue&amp;media=http://demo.harutheme.com/pangja/wp-content/uploads/2019/01/ticket-2.jpg','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" href="javascript:;">
                            <i class="fa fa-pinterest"></i>
                        </a>
                    </li>
                            </ul>
        </div>
    </div>

        </div><!-- .summary -->
    </div>
    <div class="single-product-bottom">
        
	<div class="woocommerce-tabs wc-tabs-wrapper">
		<ul class="tabs wc-tabs" role="tablist">
							<li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
					<a href="javascript:">Description</a>
				</li>
							
					</ul>
					<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
				
  <h2>Description</h2>


  <?php echo $chitiettin['noidungdichvu']; ?>


			</div>
					
			</div>

    </div>
    </div><!-- #product-104 -->


    <section class="related products">

        <h2>Sản phẩm liên quan</h2>

        <ul class="haru-carousel related-products owl-carousel owl-theme"
            data-items="4"
            data-items-tablet="3"
            data-items-mobile="2"
            data-margin="30"
            data-autoplay="false"
            data-slide-duration="6000"
        >
            
        <?php foreach($tinlienquan as $item){?>

                <li class="post-89 product type-product status-publish has-post-thumbnail product_cat-business-cards product_cat-calendars product_cat-cateloge product_tag-calendar product_tag-cup product_tag-invitation product_tag-magazine clearfix last instock shipping-taxable purchasable product-type-simple">
    <div class="product-inner">
                <div class="product-thumbnail">
            <a href="<?php echo base_url();?>in-an/<?php echo $item['slug'];?>-<?php echo $item['id'];?>.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><div class="product-label">



</div>                            <div class="product-thumb-primary">
                    <img width="300" height="300" src="<?php echo base_url();?>uploads/<?php echo $item["hinhdaidien"];?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="<?php echo base_url();?>uploads/<?php echo $item["hinhdaidien"];?> 300w, <?php echo base_url();?>uploads/<?php echo $item["hinhdaidien"];?> 150w, <?php echo base_url();?>uploads/<?php echo $item["hinhdaidien"];?> 555w, <?php echo base_url();?>uploads/<?php echo $item["hinhdaidien"];?> 575w" sizes="(max-width: 300px) 100vw, 300px" />                </div>
                                        <div class="product-thumb-secondary">
                    <img width="300" height="300" src="<?php echo base_url();?>uploads/<?php echo $item["hinhdaidien"];?>" class="attachment-shop_catalog size-shop_catalog" alt="" />                </div>
                    </a>            

        </div>
        
        <div class="product-info">
            <a href="<?php echo base_url();?>in-an/<?php echo $item['slug'];?>-<?php echo $item['id'];?>.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><h2 class="woocommerce-loop-product__title"><?php echo $item["tendanhmuc"];?></h2></a>            <div class="product-info-bottom clearfix">
                
	        </div>
            

        </div>
            </div>
        </li>
        <?php }?>
                    </ul>

    </section>


                                    </div>
                            </div>

            
            
                </div>
        
    </div>

</div>
                        </div>
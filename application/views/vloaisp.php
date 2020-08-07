<div id="haru-content-main" class="clearfix">
            <div id="primary" class="content-area"><main id="main" class="site-main" role="main">
    <div class="haru-page-title-section" style="background-image: url(http://demo.harutheme.com/pangja/wp-content/themes/pangja/framework/admin-assets/images/theme-options/bg-page-title.jpg);">
            <section class="haru-page-title-wrapper page-title-wrap-bg">
            <div class="container">
                <div class="page-title-inner">
                    <div class="block-center-inner">
                        <h2>Sản phẩm in ấn</h2>
                                            </div>
                </div>
            </div>
        </section>
                <div class="haru-breadcrumb-wrapper breadcrumb-archive-product-wrap">
            <div class="container">
                    <ul class="breadcrumbs"><li><a href="<?php echo base_url();?>" class="home">Trang chủ</a></li><li><a href="#">Sản phẩm in ấn</a></li></ul>            </div>
        </div>
        </div>

<div class="haru-archive-product">
    
            <div class="container clearfix">
    
        
                <div class="row clearfix">
        
            <div class="col-md-9 has-left-sidebar  col-sm-12 col-xs-12">
                
                <div class="archive-product-wrapper clearfix">

                    
                        

                        <ul class="products archive-product-columns-3 clearfix grid" style="position: relative; height: 1155.47px;">
                        <?php foreach($allsanpham as $item){

?>
                        <li class="post-89 product type-product status-publish has-post-thumbnail product_cat-business-cards product_cat-calendars product_cat-cateloge product_tag-calendar product_tag-cup product_tag-invitation product_tag-magazine clearfix first instock shipping-taxable purchasable product-type-simple" style="position: absolute; left: 0px; top: 0px;">
    <div class="product-inner">
                <div class="product-thumbnail">
            <a href="<?php echo base_url(); ?>in-an/<?php echo $item["slug"];?>-<?php echo $item["id"];?>.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
            <div class="product-label">
</div>          <div class="product-thumb-primary">
                    <img width="300" height="300" src="<?php echo base_url();?>uploads/<?php echo $item["hinhdaidien"];?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" 
                    srcset="<?php echo base_url();?>uploads/<?php echo $item["hinhdaidien"];?> 300w, <?php echo base_url();?>uploads/<?php echo $item["hinhdaidien"];?> 150w, <?php echo base_url();?>uploads/<?php echo $item["hinhdaidien"];?> 555w, <?php echo base_url();?>uploads/<?php echo $item["hinhdaidien"];?> 575w" sizes="(max-width: 300px) 100vw, 300px">               
                </div>                                       
            </a>
        </div>
        
        <div class="product-info">
            <a href="<?php echo base_url(); ?>in-an/<?php echo $item["slug"];?>-<?php echo $item["id"];?>.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><h2 class="woocommerce-loop-product__title"><?php echo $item["tendanhmuc"];?></h2></a>            
            <div class="product-info-bottom clearfix">
            </div>
        </div>
            </div>
</li>
<?php } ?>

</ul>

                        
                    
                </div>
            </div>

                            <div class="archive-product-sidebar woocommerce-sidebar left-sidebar col-xs-12 col-sm-12 col-md-3">
                    <aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><h4 class="widget-title"><span>Danh sách</span></h4>
					
                    <ul class="product-categories">
                    <?php foreach($allsanphammenu as $item){

?>
                        <li class="cat-item cat-item-33"><a href="<?php echo base_url(); ?>danh-muc/<?php echo $item["slug"];?>-<?php echo $item["id"];?>.html"><?php echo $item["tendanhmuc"];?></a></li>
                    <?php } ?>
                    </ul>	
		
</aside>              
 </div>
            
            
                    </div>
        
            </div>
    
    </div>
</main></div>                        </div>
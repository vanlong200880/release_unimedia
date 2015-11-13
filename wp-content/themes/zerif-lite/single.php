<?php
/**
 * The Template for displaying all single posts.
 */
global $post;
//                var_dump($post);
$category = get_the_category($post->ID);
if(empty($category[0]->category_parent)):
get_header(); ?>
<section id="wrap-new-adv">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <?php get_template_part('template-small/advertisement'); ?>
            </div><!-- /col-md-6 -->

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="row">
                    <?php get_template_part('template-small/advertisement_four'); ?>
                    <!--end top-sub-adv-->								
                </div>
            </div><!-- /col-md-6 -->
        </div>
    </div>
</section><!--end wrap-new-adv-->


<section id="wrap-magazine">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <?php get_template_part('template-small/magazine'); ?>
                <!--end show-magazine-->
            </div>
        </div>
    </div>
</section><!--end wrap-magazine-->



<section id="wrapp-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="wrapp-breadcrumb">
                    <ol class="breadcrumb">
                        <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
                    </ol>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-8">
                <div class="show-details">
                        <?php while ( have_posts() ) : the_post(); 
                            get_template_part( 'content', 'single' );
                       endwhile; // end of the loop. ?>
                </div>
            </div>
            <?php 
                $featured = array (					 
                    'post_status'    => 'publish',		
                    'order'          => 'DESC',
                    'orderby'        => 'date',
                    'post_type'      => 'post',
                    'category_name'  => $category[0]->slug,
                    'posts_per_page' => 10,
                    'post__not_in'   => array(get_the_ID()),
                );
                $featured_the_query = new WP_Query( $featured ); 
                if($featured_the_query){ ?>
                <div class="col-md-4 col-sm-4 col-xs-4 article-all">
                    <div class="page-header">
                        <h2><?php echo ($language =='vi')?'Bài liên quan':'Featured'; ?></h2>
                    </div>
                    <div class="row">
                        <div class="top-sub-featured">
                    <?php
                    while ($featured_the_query->have_posts()){
                        $featured_the_query->the_post(); ?>
                            <div class="col-md-6 col-sm-6 col-xs-6 mg-20 show-article">
                                <figure>
                                    <a href="<?php the_permalink() ?>">
                                         <?php
                                            $attachment_id = get_post_thumbnail_id(get_the_ID());
                                            if (!empty($attachment_id)) { 
                                                the_post_thumbnail(array(570, 380));
                                                ?>
                                            <?php }else{
                                                echo '<img src="'.get_stylesheet_directory_uri().'/images/no-img.jpg" alt="">';
                                            }
                                        ?>
                                        
                                    </a>
                                    <figcaption>
                                        <a href="<?php the_permalink() ?>" title="<?php echo get_the_title(); ?>">
                                            <?php echo filter_character(get_the_title(), 8); ?>
                                        </a>
                                        <p>
											<?php 
												$str = get_post_custom_values('excerpt', get_the_ID());
												$str = (empty($str))? get_the_excerpt() : $str[0];
												echo filter_character($str, 16);
											?>
                                            
                                        </p>
                                        <div class="readmore">
                                            <span class="left"></span>
                                            <a href="<?php the_permalink() ?>">read more <span class="arrow">&rsaquo;&rsaquo;</span></a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                    <?php } ?>
                            </div><!--end top-sub-featured-->	
                        </div>
                    </div>
                <?php }?>
            
        </div>
    </div>
</section><!--end wrapp-details-->

<?php get_footer(); ?>
<?php    else: ?>

<?php while ( have_posts() ) : the_post(); 
        $listGalery = getGaleryFromPost($post);
        if($listGalery[0]){ ?>

<?php if(wpmd_is_notphone() == true): ?>
<!doctype html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
   
    <!-- viewport -->
    <meta content="width=device-width,initial-scale=1" name="viewport">
       
    <!-- title -->
    <title><?php the_title() ?></title>        
        
    <!-- add css and js for flipbook -->
    <link type="text/css" href="<?php echo get_template_directory_uri() ?>/slipbook/css/style.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Play:400,700">
    <script src="<?php echo get_template_directory_uri() ?>/slipbook/js/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/slipbook/js/turn.js"></script>              
	<script src="<?php echo get_template_directory_uri() ?>/slipbook/js/jquery.fullscreen.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/slipbook/js/jquery.address-1.6.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/slipbook/js/wait.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/slipbook/js/onload.js"></script>


    <!-- style css  -->
	<style>	
	    html,body {
          margin: 0;
          padding: 0;
		  overflow:auto !important;
        }
	</style>
      
	</head>
 
<body>



 
<!-- DIV YOUR WEBSITE --> 
<div style="width:100%;margin:0 auto">
  <?php else: ?> 
    <?php get_header(); ?>
 <?php endif; ?>
<!-- BEGIN FLIPBOOK STRUCTURE -->  
<div id="fb5-ajax">	
         
         
      <!-- BEGIN HTML BOOK -->      
      <div data-current="magazine" class="fb5" id="fb5">      
            
  
      
                           
            <!-- BACKGROUND FOR BOOK -->  
            <div class="fb5-bcg-book"></div>                      
          
            <!-- BEGIN CONTAINER BOOK -->
            <div id="fb5-container-book">
     
                <!-- BEGIN deep linking -->  
                <section id="fb5-deeplinking">
                     <ul>
                        <?php 
                            foreach ($listGalery[0]['ids'] as $k => $galery) { 
                                if($k != 0){
?>
                          <li data-address="page<?php echo $k ?>" data-page="<?php echo $k; ?>"></li>
                                <?php } } ?>
                     </ul>
                 </section>
                <!-- END deep linking -->  
                
                <!-- BEGIN ABOUT -->
                <section id="fb5-about">
                    <?php 
                        foreach ($listGalery[0]['ids'] as $k => $galery) {
                            if($k === 0){
                                the_post_thumbnail(array(480, 635), array('id'    => 'id_'.$galery, 'alt' => trim(strip_tags(get_post_meta($galery, '_wp_attachment_image_alt', true))),));
                            }
                            
                            ?>
                   <?php } ?>
                </section>
                <!-- END ABOUT -->
                <!-- BEGIN BOOK -->
                <div id="fb5-book">
                <!-- BEGIN PAGE 1 -->
                <?php 
                        foreach ($listGalery[0]['ids'] as $k => $galery) {
                            if($k > 0){ ?>
                        <div data-background-image="<?php echo wp_get_attachment_url($galery); ?>" class="">
                             <!-- container page book --> 
                             <div class="fb5-cont-page-book">
                                 <!-- description for page --> 
                                 <div class="fb5-page-book"></div> 
                                <!-- number page and title  -->                
                                <div class="fb5-meta">
                                        <span class="fb5-num"><?php echo $k; ?></span>
                                 </div> 
                             </div> <!-- end container page book --> 
                        </div>
                            <?php } } ?>
                <!-- END PAGE 1 -->                          
              </div>
              <!-- END BOOK -->
                           
                
              <!-- arrows -->
              <a class="fb5-nav-arrow prev"></a>
              <a class="fb5-nav-arrow next"></a>
                
                
             </div>
             <!-- END CONTAINER BOOK -->
    
    
        <!-- BEGIN FOOTER -->
        <div id="fb5-footer">
        
            <div class="fb5-bcg-tools"></div>
             
            <a id="fb5-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="100" alt="<?php echo get_bloginfo('title'); ?>">
            </a>
            
            <div class="fb5-menu" id="fb5-center">
                <ul>                                        
                    
                    <!-- icon_zoom_in -->                              
                    <li>
                        <a title="ZOOM IN" class="fb5-zoom-in"></a>
                    </li>                               
                    
                    <!-- icon_zoom_out -->
                     
                    <li>
                        <a title="ZOOM OUT " class="fb5-zoom-out"></a>
                    </li>                                
                    
                    <!-- icon_zoom_auto -->
                    <li>
                        <a title="ZOOM AUTO " class="fb5-zoom-auto"></a>
                    </li>                                
                    
                    <!-- icon_zoom_original -->
                    <li>
                        <a title="ZOOM ORIGINAL (SCALE 1:1)" class="fb5-zoom-original"></a>
                    </li>
                                     
                    
                    <!-- icon_allpages -->
                    <li>
                        <a title="SHOW ALL PAGES " class="fb5-show-all"></a>
                    </li>
                                                    
                    
                    <!-- icon_home -->
                    <li>
                        <a title="SHOW HOME PAGE " class="fb5-home"></a>
                    </li>
                                    
                </ul>
            </div>
            
            <div class="fb5-menu" id="fb5-right">
                <ul> 
                    <!-- icon page manager -->                 
                    <li class="fb5-goto">
                        <label for="fb5-page-number" id="fb5-label-page-number">PAGE</label>
                        <input type="text" id="fb5-page-number">
                        <button type="button">GO</button>
                    </li>    
                            
                    <!-- icon fullscreen -->                 
                    <li>
                        <a title="FULL / NORMAL SCREEN" class="fb5-fullscreen"></a>
                    </li>                                       
                                    
                </ul>
            </div>
            
            
        
        </div>
        <!-- END FOOTER -->
    
    
        <!-- BEGIN ALL PAGES -->
          <div id="fb5-all-pages" class="fb5-overlay">
    
          <section class="fb5-container-pages">
    
            <div id="fb5-menu-holder">
    
                <ul id="fb5-slider">
                        <?php 
                        foreach ($listGalery[0]['ids'] as $k => $galery) {
                            if($k > 0){ ?>
                    
                            <li class="<?php echo $k; ?>">
                                <img alt="" data-src="<?php echo wp_get_attachment_url($galery, array(120,170)); ?>">
                            </li>
                            <?php } } ?>
                  </ul>
            
              </div>
    
          </section>
    
         </div>
         <!-- END ALL PAGES -->


   </div>
   <!-- END HTML BOOK -->


    <!-- CONFIGURATION FLIPBOOK -->
    <script>    
    jQuery('#fb5').data('config',
    {
    "page_width":"450",
    "page_height":"635",
	"email_form":"vanlong200880@gmail.com",
    "zoom_double_click":"1",
    "zoom_step":"0.06",
    "double_click_enabled":"true",
    "tooltip_visible":"true",
    "toolbar_visible":"true",
    "gotopage_width":"30",
    "deeplinking_enabled":"true",
    "rtl":"false",
    'full_area':'true',
	'lazy_loading_thumbs':'true',
	'lazy_loading_pages':'true'
    })
    </script>


</div>
<!-- END FLIPBOOK STRUCTURE -->    



</div> 
<!-- END DIV YOUR WEBSITE --> 

       

<?php if(wpmd_is_notphone() == true): ?>
</body>
</html>
<?php else: ?>
    <?php get_footer(); ?>
<?php endif; ?>
<?php }							
   endwhile;?>

<?php endif; ?>

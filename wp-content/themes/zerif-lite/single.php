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
<!DOCTYPE html>
<?php echo get_template_directory_uri(); ?>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
		<title>UNIMEDIA</title>

		<meta name="viewport" content="width = 1050, user-scalable = no" />
		<script src="<?php echo get_template_directory_uri() ?>/js/jquery.js"></script>
		<!-- <script type="text/javascript" src="extras/jquery.min.1.7.js"></script> -->
		<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/extras/modernizr.2.5.3.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/lib/hash.js"></script>
	</head>
	<body>

		<div id="canvas">
			<div class="zoom-icon zoom-icon-in"></div>
			<div class="magazine-viewport">
				<div class="container">
					<div class="magazine">
						<!-- Next button -->
						<div ignore="1" class="next-button"></div>
						<!-- Previous button -->
						<div ignore="1" class="previous-button"></div>
					</div>
				</div>
			</div>

			<!-- Thumbnails -->
			<div class="thumbnails">
				<div>
					<ul>
						<li class="i">
							<img src="<?php echo get_template_directory_uri() ?>/pages/1-thumb.jpg" width="76" height="100" class="page-1">
							<span>1</span>
						</li>
						<li class="d">
							<img src="<?php echo get_template_directory_uri() ?>/pages/2-thumb.jpg" width="76" height="100" class="page-2">
							<img src="<?php echo get_template_directory_uri() ?>/pages/3-thumb.jpg" width="76" height="100" class="page-3">
							<span>2-3</span>
						</li>
						<li class="d">
							<img src="<?php echo get_template_directory_uri() ?>/pages/4-thumb.jpg" width="76" height="100" class="page-4">
							<img src="<?php echo get_template_directory_uri() ?>/pages/5-thumb.jpg" width="76" height="100" class="page-5">
							<span>4-5</span>
						</li>
						<li class="d">
							<img src="<?php echo get_template_directory_uri() ?>/pages/6-thumb.jpg" width="76" height="100" class="page-6">
							<img src="<?php echo get_template_directory_uri() ?>/pages/7-thumb.jpg" width="76" height="100" class="page-7">
							<span>6-7</span>
						</li>
						<li class="d">
							<img src="<?php echo get_template_directory_uri() ?>/pages/8-thumb.jpg" width="76" height="100" class="page-8">
							<img src="<?php echo get_template_directory_uri() ?>/pages/9-thumb.jpg" width="76" height="100" class="page-9">
							<span>8-9</span>
						</li>
						<li class="d">
							<img src="<?php echo get_template_directory_uri() ?>/pages/10-thumb.jpg" width="76" height="100" class="page-10">
							<img src="<?php echo get_template_directory_uri() ?>/pages/11-thumb.jpg" width="76" height="100" class="page-11">
							<span>10-11</span>
						</li>
						<li class="i">
							<img src="<?php echo get_template_directory_uri() ?>/pages/12-thumb.jpg" width="76" height="100" class="page-12">
							<span>12</span>
						</li>
					</ul>
				</div>	
			</div>
		</div>

		
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/magazine-inline.js"></script>

	</body>
</html>

<?php while ( have_posts() ) : the_post(); 
        get_template_part( 'content', 'single' );
   endwhile; // end of the loop. ?>
<?php endif; ?>
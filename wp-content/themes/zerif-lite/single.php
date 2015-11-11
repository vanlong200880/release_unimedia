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
                                                $str = (empty(get_field('excerpt')))? get_the_excerpt() : get_field('excerpt');
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
lat trang
<?php endif; ?>
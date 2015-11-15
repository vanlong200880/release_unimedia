<?php
/**
 * The template for displaying Archive pages.
 */
global $language;
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


<!--<section id="wrap-magazine">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <?php //get_template_part('template-small/magazine'); ?>
            </div>
        </div>
    </div>
</section>-->

<?php if(is_category('magazine')){
    //get_template_part('template-small/magazine_related');
} ?>

<?php if(is_category('magazine')){
    //get_template_part('template-small/list_category');
} ?>

<?php 
$category = get_the_category();
$parent = get_category($category[0]->category_parent); 
?>
<?php if(!empty($category[0]->category_parent)):
    if($parent->slug == 'magazine'): ?>
    <section id="wrap-magazine">
        <div class="container">
            <div class="row">
                <div class="col-md-12">            
                    <div class="title magazine">
                        <h2><?php echo $parent->name; ?> / <?php echo $category[0]->name; ?></h2>
                        <div class="line">
                            <span class="icon-dotted-01"></span>
                        </div>
                    </div><!--end title-->
                    <div class="show-magazine show-magazine-list">
                        <ul id="owl-product-carousel-first" class="owl-carousel">
                            <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                            <li>
                                <figure>
                                    <a href="<?php the_permalink() ?>" title="<?php echo get_the_title(); ?>">
                                         <?php
                                            $attachment_id = get_post_thumbnail_id(get_the_ID());
                                            if (!empty($attachment_id)) { 
                                                the_post_thumbnail(array(436, 616));
                                                ?>
                                            <?php }else{
                                                echo '<img src="'.get_stylesheet_directory_uri().'/images/no-img.jpg" alt="">';
                                            }
                                        ?>
                                        <?php
//                                            $attachment_id = get_post_thumbnail_id(get_the_ID());
//                                            if (!empty($attachment_id)) {
//                                            echo swe_wp_get_attachment_image($attachment_id, $size = array(436, 616), $icon = 1, $attr = array(
//                                                                    'class' => 'adv-'.$attachment_id,
//                                                                    'id' => '',
//                                                                    'alt' => trim(strip_tags(get_post_meta($attachment_id, '_wp_attachment_image_alt', true))),
//                                                                ));
//                                            }else{
//                                                echo '<img src="'.get_stylesheet_directory_uri().'/images/no-img.jpg" alt="'.get_the_title().'">';
//                                            }
                                        ?>
                                    </a>
                                    <figcaption>
                                        <p><a href="<?php the_permalink()?>"><?php the_title() ?></a></p>
                                    </figcaption>
                                </figure>
                            </li>
                            <?php endwhile;  ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--end wrap-magazine-->

    <?php get_template_part('template-small/magazine_related'); ?>
    <?php endif; ?>

<?php else: ?>
 <?php if ( have_posts() ) : ?>
	<section id="four-seasons" class="article-all fix-top">
		<div class="container">
			<div class="row">
				<div class="wrapp-categories">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="title seasions">
							<h2>
								<?php
							if ( is_category() ){
								single_cat_title();
							}
							?>

							</h2>
							<div class="line">
								<span class="icon-dotted-01"></span>
							</div>
						</div><!--end title-->
					</div>
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="col-md-3 col-sm-3 col-xs-12 show-article">
						<figure>
							<a href="<?php the_permalink() ?>" title="<?php echo get_the_title(); ?>">
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
									<a href="<?php the_permalink() ?>"><?php echo ($language == 'vi')? 'Đọc thêm':'read more' ?> <span class="arrow">&rsaquo;&rsaquo;</span></a>
								</div>
							</figcaption>
						</figure>
					</div>
						<!--get_template_part( 'content', get_post_format() );-->

					<?php endwhile;  ?>


				</div><!--end wrapp-categories-->

			</div><!--end row-->

			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="paging">


						<nav>
							<?php wp_pagenavi() ;  ?>
						</nav>
					</div><!--end pagination-->
				</div>
			</div>

		</div>
	</section><!--end 4-seasons-->

	<?php endif; ?>
<?php endif; ?>
<?php get_footer(); ?>
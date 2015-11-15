<?php
global $language;
$heath_care = 'health-care';
$heath_care_args = array (					 
		'post_status'    => 'publish',		
		'order'          => 'DESC',
		'orderby'        => 'date',
        'post_type'      => 'post',
        'category_name'  => $heath_care,
        'posts_per_page' => 4,
	);
    $heath_care_the_query = new WP_Query( $heath_care_args ); 
    if($heath_care_the_query->have_posts()){ 
        $idObj = get_category_by_slug($heath_care); 
?>
<section id="health-taste" class="article-all animate-bounce-up health-taste" >
    <div class="container subject">
        <div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">          
    <div class="title health">
        <h2><a href="<?php echo get_category_link( $idObj->term_id ); ?>"><?php echo $idObj->name; ?></a></h2>
        <div class="line">
            <span class="icon-dotted-01"></span>
        </div>
    </div><!--end title-->
    <div class="show-article">
        <div class="row">
    <?php     $i = 0;
        while ($heath_care_the_query->have_posts()){
            $heath_care_the_query->the_post(); 
            if($i == 0):?>
            <div class="show-article col-md-12">
                <figure>
                    <a href="<?php the_permalink() ?>">
                        <?php
                            $attachment_id = get_post_thumbnail_id(get_the_ID());
                            if (!empty($attachment_id)) { 
                                the_post_thumbnail(array(767, 511));
                                ?>
                            <?php }else{
                                echo '<img src="'.get_stylesheet_directory_uri().'/images/no-img.jpg" alt="">';
                            }
                        ?>
                    </a>
                    <figcaption>
                        <a href="<?php the_permalink() ?>">
                            <?php the_title() ?>
                        </a>
                        <p>
                            <?php
                            $excerpt = get_post_custom_values('excerpt', get_the_ID());
                            if(!empty($excerpt)){
								$excerpt = $excerpt[0];
                            }else{
								$excerpt = get_the_excerpt();
                            }
							echo filter_character($excerpt, 16);
                            ?>
                        </p>
                        <div class="readmore">
                            <span class="left"></span>
                            <a href="<?php the_permalink() ?>"><?php echo ($language == 'vi')? 'Đọc thêm':'read more' ?> <span class="arrow">&rsaquo;&rsaquo;</span></a>
                        </div>
                    </figcaption>
                </figure>
            </div>
        <?php else: ?>
            <div class="show-article-thumb col-md-4 col-sm-4 col-xs-4">
                <figure>
                    <a href="<?php the_permalink() ?>">
                        <?php
                            $attachment_id = get_post_thumbnail_id(get_the_ID());
                            if (!empty($attachment_id)) { 
                                the_post_thumbnail(array(480, 320));
                                ?>
                            <?php }else{
                                echo '<img src="'.get_stylesheet_directory_uri().'/images/no-img.jpg" alt="">';
                            }
                        ?>
                    
                    </a>
                    <figcaption>
                        <p>
                            <a href="<?php the_permalink() ?>">
                                <?php the_title(); ?>
                            </a>
                        </p>
                    </figcaption>
                </figure>
            </div>
        <?php endif;
        $i++;
        } ?>
        </div>
    </div><!--end show-article-thumb-->
</div><!-- /col-md-6 -->
<?php }?>
<?php wp_reset_postdata(); ?>




<?php
$taste_event = 'taste-event';
$taste_event_args = array (					 
		'post_status'    => 'publish',		
		'order'          => 'DESC',
		'orderby'        => 'date',
        'post_type'      => 'post',
        'category_name'  => $taste_event,
        'posts_per_page' => 4,
	);
    $taste_event_the_query = new WP_Query( $taste_event_args ); 
    if($taste_event_the_query->have_posts()){ 
        $idObj = get_category_by_slug('taste-event'); 
?>
<div class="col-md-6 col-sm-6 col-xs-12">
                
    <div class="title health">
        <h2><a href="<?php echo get_category_link( $idObj->term_id ); ?>"><?php echo $idObj->name; ?></a></h2>
        <div class="line">
            <span class="icon-dotted-01"></span>
        </div>
    </div><!--end title-->
    <div class="show-article">
        <div class="row">
    <?php     $i = 0;
        while ($taste_event_the_query->have_posts()){
            $taste_event_the_query->the_post(); 
            if($i == 0):?>
            <div class="show-article col-md-12">
                <figure>
                    <a href="<?php the_permalink() ?>">
                        <?php
                            $attachment_id = get_post_thumbnail_id(get_the_ID());
                            if (!empty($attachment_id)) { 
                                the_post_thumbnail(array(767, 511));
                                ?>
                            <?php }else{
                                echo '<img src="'.get_stylesheet_directory_uri().'/images/no-img.jpg" alt="">';
                            }
                        ?>
                    </a>
                    <figcaption>
                        <a href="<?php the_permalink() ?>">
                            <?php the_title() ?>
                        </a>
                        <p>
                            <?php
                            $excerpt = get_post_custom_values('excerpt', get_the_ID());
                            if(!empty($excerpt)){
								$excerpt = $excerpt[0];
                            }else{
								$excerpt = get_the_excerpt();
                            }
							echo filter_character($excerpt, 16);
                            ?>
                        </p>
                        <div class="readmore">
                            <span class="left"></span>
                            <a href="<?php the_permalink() ?>"><?php echo ($language == 'vi')? 'Đọc thêm':'read more' ?> <span class="arrow">&rsaquo;&rsaquo;</span></a>
                        </div>
                    </figcaption>
                </figure>
            </div>
        <?php else: ?>
            <div class="show-article-thumb col-md-4 col-sm-4 col-xs-4">
                <figure>
                    <a href="<?php the_permalink() ?>">
                        <?php
                            $attachment_id = get_post_thumbnail_id(get_the_ID());
                            if (!empty($attachment_id)) { 
                                the_post_thumbnail(array(480, 320));
                                ?>
                            <?php }else{
                                echo '<img src="'.get_stylesheet_directory_uri().'/images/no-img.jpg" alt="">';
                            }
                        ?>
                    
                    </a>
                    <figcaption>
                        <p>
                            <a href="<?php the_permalink() ?>">
                                <?php the_title(); ?>
                            </a>
                        </p>
                    </figcaption>
                </figure>
            </div>
        <?php endif;
        $i++;
        } ?>
        </div>
    </div><!--end show-article-thumb-->
</div><!-- /col-md-6 -->
<?php }?>
<?php wp_reset_postdata(); ?>
</div>
    </div>
</section><!--end heath-taste-->
<?php
$real_estate_source = 'real-estate-source';
$real_estate_source_args = array (					 
		'post_status'    => 'publish',		
		'order'          => 'DESC',
		'orderby'        => 'date',
        'post_type'      => 'post',
        'category_name'  => $real_estate_source,
        'posts_per_page' => 4,
	);
    $real_estate_source_the_query = new WP_Query( $real_estate_source_args ); 
    if($real_estate_source_the_query->have_posts()){ 
        $idObj = get_category_by_slug( $real_estate_source ); 
?>
<section id="real-estate" class="article-all animate-bounce-up">
    <div class="container subject">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="title real">
                    <h2><a href="<?php echo get_category_link( $idObj->term_id ); ?>"><?php echo $idObj->name; ?></a></h2>
                    <div class="line">
                        <span class="icon-dotted-01"></span>
                    </div>
                </div><!--end title-->
            </div>

    <?php 
        while ($real_estate_source_the_query->have_posts()){
            $real_estate_source_the_query->the_post(); 
            ?>
            <div class="col-md-3 col-sm-3 col-xs-6 show-article">
                <figure>
                    <a href="<?php the_permalink() ?>">
                        <?php
                            $attachment_id = get_post_thumbnail_id(get_the_ID());
                            if (!empty($attachment_id)) { 
                                the_post_thumbnail(array(480, 320));
                                ?>
                            <?php }else{
                                echo '<img src="'.get_stylesheet_directory_uri().'/images/no-img.jpg" alt="">';
                            }
                        ?>
                    </a>
                    <figcaption>
                        <a href="<?php the_permalink() ?>">
                            <?php the_title() ?>
                        </a>
                        <p>
                            <?php
                            $excerpt = get_post_custom_values('excerpt', get_the_ID());
                            if(!empty($excerpt)){
                                //echo filter_character($excerpt[0], 16);
								$excerpt = $excerpt[0];
                            }else{
								$excerpt = get_the_excerpt();
                            }
							echo filter_character($excerpt, 16);
                            ?>
                        </p>
                        <div class="readmore">
                            <span class="left"></span>
                            <a href="<?php the_permalink() ?>"><?php echo ($language == 'vi')? 'Đọc thêm':'read more' ?><span class="arrow">&rsaquo;&rsaquo;</span></a>
                        </div>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
        </div>
    </div>
</section><!--end real-estate-->
<?php }?>
<?php wp_reset_postdata(); ?>


<?php
$travel_education = 'travel-education';
$travel_education_args = array (					 
		'post_status'    => 'publish',		
		'order'          => 'DESC',
		'orderby'        => 'date',
        'post_type'      => 'post',
        'category_name'  => $travel_education,
        'posts_per_page' => 4,
	);
    $travel_education_the_query = new WP_Query( $travel_education_args ); 
    if($travel_education_the_query->have_posts()){ 
        $idObj = get_category_by_slug( $travel_education ); 
?>
<section id="real-estate" class="article-all animate-bounce-up">
    <div class="container subject">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="title real">
                    <h2><a href="<?php echo get_category_link( $idObj->term_id ); ?>"><?php echo $idObj->name; ?></a></h2>
                    <div class="line">
                        <span class="icon-dotted-01"></span>
                    </div>
                </div><!--end title-->
            </div>

    <?php 
        while ($travel_education_the_query->have_posts()){
            $travel_education_the_query->the_post(); 
            ?>
            <div class="col-md-3 col-sm-3 col-xs-6 show-article">
                <figure>
                    <a href="<?php the_permalink() ?>">
                        <?php
                            $attachment_id = get_post_thumbnail_id(get_the_ID());
                            if (!empty($attachment_id)) { 
                                the_post_thumbnail(array(480, 320));
                                ?>
                            <?php }else{
                                echo '<img src="'.get_stylesheet_directory_uri().'/images/no-img.jpg" alt="">';
                            }
                        ?>
                    </a>
                    <figcaption>
                        <a href="<?php the_permalink() ?>">
                            <?php the_title() ?>
                        </a>
                        <p>
                            <?php
                            $excerpt = get_post_custom_values('excerpt', get_the_ID());
                            if(!empty($excerpt)){
                                //echo filter_character($excerpt[0], 16);
								$excerpt = $excerpt[0];
                            }else{
								$excerpt = get_the_excerpt();
                            }
							echo filter_character($excerpt, 16);
                            ?>
                        </p>
                        <div class="readmore">
                            <span class="left"></span>
                            <a href="<?php the_permalink() ?>"><?php echo ($language == 'vi')? 'Đọc thêm':'read more' ?> <span class="arrow">&rsaquo;&rsaquo;</span></a>
                        </div>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
        </div>
    </div>
</section><!--end real-estate-->
<?php }?>
<?php wp_reset_postdata(); ?>


<?php
$seasion_promotion = 'seasons-promotion';
$seasion_promotion_args = array (					 
		'post_status'    => 'publish',		
		'order'          => 'DESC',
		'orderby'        => 'date',
        'post_type'      => 'post',
        'category_name'  => $seasion_promotion,
        'posts_per_page' => 4,
	);
    $seasion_promotion_the_query = new WP_Query( $seasion_promotion_args ); 
    if($seasion_promotion_the_query->have_posts()){ 
        $idObj = get_category_by_slug( $seasion_promotion ); 
?>
<section id="real-estate" class="article-all animate-bounce-up ">
    <div class="container subject">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="title real">
                    <h2><a href="<?php echo get_category_link( $idObj->term_id ); ?>"><?php echo $idObj->name; ?></a></h2>
                    <div class="line">
                        <span class="icon-dotted-01"></span>
                    </div>
                </div><!--end title-->
            </div>

    <?php 
        while ($seasion_promotion_the_query->have_posts()){
            $seasion_promotion_the_query->the_post(); 
            ?>
            <div class="col-md-3 col-sm-3 col-xs-6 show-article">
                <figure>
                    <a href="<?php the_permalink() ?>">
                         <?php
                            $attachment_id = get_post_thumbnail_id(get_the_ID());
                            if (!empty($attachment_id)) { 
                                the_post_thumbnail(array(480, 320));
                                ?>
                            <?php }else{
                                echo '<img src="'.get_stylesheet_directory_uri().'/images/no-img.jpg" alt="">';
                            }
                        ?>
                    </a>
                    <figcaption>
                        <a href="<?php the_permalink() ?>">
                            <?php the_title() ?>
                        </a>
                        <p>
                            <?php
                            $excerpt = get_post_custom_values('excerpt', get_the_ID());
                            if(!empty($excerpt)){
                                //echo filter_character($excerpt[0], 16);
								$excerpt = $excerpt[0];
                            }else{
								$excerpt = get_the_excerpt();
                            }
							echo filter_character($excerpt, 16);
                            ?>
                        </p>
                        <div class="readmore">
                            <span class="left"></span>
                            <a href="<?php the_permalink() ?>"><?php echo ($language == 'vi')? 'Đọc thêm':'read more' ?> <span class="arrow">&rsaquo;&rsaquo;</span></a>
                        </div>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
        </div>
    </div>
</section><!--end real-estate-->
<?php }?>
<?php wp_reset_postdata(); ?>

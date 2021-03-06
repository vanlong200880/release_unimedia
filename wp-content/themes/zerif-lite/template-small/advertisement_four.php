<?php
    $list_four_id = array();
	// get list id heath_care 
    $four_heath_care_args = array (					 
		'post_status'    => 'publish',		
		'order'          => 'DESC',
		'orderby'        => 'date',
        'post_type'      => 'post',
        'category_name'  => 'advertisement',
        'meta_query'     => array(
            array(
                'key'		 => 'highlight',
                'value'      => true,
            ),
            array(
                'key'		 => 'group_advertisement',
                'value'      => 'fashion_health'
            ),
        ),
        'posts_per_page' => 4,
	);
    $four_heath_care_the_query = new WP_Query( $four_heath_care_args ); 
    if($four_heath_care_the_query->have_posts()){
        while ($four_heath_care_the_query->have_posts()){
            $four_heath_care_the_query->the_post();
            array_push($list_four_id, get_the_ID());
        }
    }
    wp_reset_postdata();
    
    // get list id taste_event 
    $four_taste_event_args = array (					 
		'post_status'    => 'publish',		
		'order'          => 'DESC',
		'orderby'        => 'date',
        'post_type'      => 'post',
        'category_name'  => 'advertisement',
        'meta_query'     => array(
            array(
                'key'		 => 'highlight',
                'value'      => true,
            ),
            array(
                'key'		 => 'group_advertisement',
                'value'      => 'taste_event'
            ),
        ),
        'posts_per_page' => 4,
	);
    $four_taste_event_the_query = new WP_Query( $four_taste_event_args ); 
    if($four_taste_event_the_query->have_posts()){
        while ($four_taste_event_the_query->have_posts()){
            $four_taste_event_the_query->the_post();
            array_push($list_four_id, get_the_ID());
        }
    }
    wp_reset_postdata();
    
    // get list id real_estate_source
    $four_real_estate_source_args = array (					 
		'post_status'    => 'publish',		
		'order'          => 'DESC',
		'orderby'        => 'date',
        'post_type'      => 'post',
        'category_name'  => 'advertisement',
        'meta_query'     => array(
            array(
                'key'		 => 'highlight',
                'value'      => true,
            ),
            array(
                'key'		 => 'group_advertisement',
                'value'      => 'real_estate_source'
            ),
        ),
        'posts_per_page' => 4,
	);
    $four_real_estate_source_the_query = new WP_Query( $four_real_estate_source_args ); 
    if($four_real_estate_source_the_query->have_posts()){
        while ($four_real_estate_source_the_query->have_posts()){
            $four_real_estate_source_the_query->the_post();
            array_push($list_four_id, get_the_ID());
        }
    }
    wp_reset_postdata();
    
    //get list id trevel_education
    $four_trevel_education_args = array (					 
		'post_status'    => 'publish',		
		'order'          => 'DESC',
		'orderby'        => 'date',
        'post_type'      => 'post',
        'category_name'  => 'advertisement',
        'meta_query'     => array(
            array(
                'key'		=> 'highlight',
                'value'     => true,
            ),
            array(
                'key'		=> 'group_advertisement',
                'value'     => 'home_electronics'
            ),
        ),
        'posts_per_page' => 4,
	);
    $four_trevel_education_the_query = new WP_Query( $four_trevel_education_args ); 
    if($four_trevel_education_the_query->have_posts()){
        while ($four_trevel_education_the_query->have_posts()){
            $four_trevel_education_the_query->the_post();
            array_push($list_four_id, get_the_ID());
        }
    }
    wp_reset_postdata();
	
	//get list id trevel_education
    $four_trevel_education_args = array (					 
		'post_status'    => 'publish',		
		'order'          => 'DESC',
		'orderby'        => 'date',
        'post_type'      => 'post',
        'category_name'  => 'advertisement',
        'meta_query'     => array(
            array(
                'key'		=> 'highlight',
                'value'     => true,
            ),
            array(
                'key'		=> 'group_advertisement',
                'value'     => 'vehicle_technology'
            ),
        ),
        'posts_per_page' => 4,
	);
    $four_trevel_education_the_query = new WP_Query( $four_trevel_education_args ); 
    if($four_trevel_education_the_query->have_posts()){
        while ($four_trevel_education_the_query->have_posts()){
            $four_trevel_education_the_query->the_post();
            array_push($list_four_id, get_the_ID());
        }
    }
    wp_reset_postdata();
    
    // get list id seasion_promotion
    $four_seasion_promotion_args = array (					 
		'post_status'    => 'publish',		
		'order'          => 'DESC',
		'orderby'        => 'date',
        'post_type'      => 'post',
        'category_name'  => 'advertisement',
        'meta_query'     => array(
            array(
                'key'		 => 'highlight',
                'value'      => true,
            ),
            array(
                'key'		 => 'group_advertisement',
                'value'      => 'seasons_promotion'
            ),
        ),
        'posts_per_page' => 4,
	);
    $four_seasion_promotion_the_query = new WP_Query( $four_seasion_promotion_args ); 
    if($four_seasion_promotion_the_query->have_posts()){
        while ($four_seasion_promotion_the_query->have_posts()){
            $four_seasion_promotion_the_query->the_post();
            array_push($list_four_id, get_the_ID());
        }
    }
    wp_reset_postdata();
    
    $four_args = array (					 
		'post_status'    => 'publish',		
		'order'          => 'DESC',
		'orderby'        => 'rand',
        'post_type'      => 'post',
        'category_name'  => 'advertisement',
        'post__in' => $list_four_id,
        'posts_per_page' => 4,
	);
    $four_adv_the_query = new WP_Query( $four_args );
    ?>	  
<?php if($four_adv_the_query -> have_posts()): ?>
<div class="top-sub-adv">
    <?php while ($four_adv_the_query->have_posts()) {  $four_adv_the_query->the_post();?>
    <div class="col-md-6 col-sm-6 col-xs-6 mg-20">
        <div class="show-adv">
            <figure>
                <?php
                    $attachment_id = get_post_thumbnail_id(get_the_ID());
                    if (!empty($attachment_id)) { 
                        the_post_thumbnail(array(480, 320));
                        ?>
                    <?php }else{
                        echo '<img src="'.get_stylesheet_directory_uri().'/images/no-img.jpg" alt="">';
                    }
                ?>
                <figcaption>
                    <p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
                    <p>
                         <?php $website = get_post_custom_values('website', get_the_ID()); ?>
                        <a href="<?php echo $website[0]; ?>" target="_blank"><?php echo $website[0]; ?></a>
                    </p>
                </figcaption>
            </figure>
        </div>
    </div>
    <?php }?>        
</div>
<?php endif; ?>
<?php wp_reset_postdata();?>

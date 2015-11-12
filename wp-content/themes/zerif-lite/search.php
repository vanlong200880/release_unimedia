<?php
/**
 * The template for displaying Search Results pages.
 */
get_header(); 
global $language;
?>


<section id="wrap-magazine" class="wrap-magazine-related">
    <div class="container">
        <div class="row">
            <div class="col-md-12"><h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'zerif-lite' ), '<span>' . get_search_query() . '</span>' ); ?></h1></div>
            <div class="col-md-12">    
<?php 

// search magazine
$keyword = $_GET['s'];
$type = $_GET['type'];
if($keyword):
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    switch ($type){
    case 'travel-education-magazine':
        break;
    case 'taste-event-magazine':
        break;
    case 'real-estate-source-magazine':
        break;
    case 'health-care-magazine':
        break;
    case '4-seasons-promotion':
        break;
    default :
        $args = array(
            'post_status'    => 'publish',		
            'order'          => 'DESC',
            'orderby'        => 'date',
            'post_type'      => 'post',
            'posts_per_page' => 10,
            'category_name'     => 'health-care,taste-event,real-estate-source, travel-education, seasons-promotion',
            's' => $keyword, 
            'lang' => 'en'
        );
        $the_query = new WP_Query( $args );	
        var_dump($the_query);
    }
    
	$parent_obj = get_category_by_slug('magazine');
    $args = array(
        'orderby'           => 'name', 
        'order'             => 'ASC',
        'parent'            => $parent_obj->term_id,
        'name__like'        => $keyword
    ); 
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $terms = get_terms('category', $args);
    if(!empty($terms)){
        $dataId = array();
        foreach ($terms as $value){
            array_push($dataId, $value->slug);
        }
        if($dataId){
            $magazine_args = array(
                'post_status'       => 'publish',		
                'post_type'         => 'post',
                'paged'             => $paged,
                'posts_per_page'    => 16,
                'category_name'     => implode(',', $dataId),
                'order'             => 'DESC',
                'orderby'           => 'date',
            );
            $magazine_the_query = new WP_Query( $magazine_args );
            if($magazine_the_query->have_posts()):?>
                <div class="title magazine">
                    <h2><?php echo ($language == 'vi') ? 'Tạp chí': 'Magazine'; ?></h2>
                    <div class="line">
                        <span class="icon-dotted-01"></span>
                    </div>
                </div><!--end title-->
                <div class="show-magazine" >
                    <ul id="owl-product-carousel1" class="row">
                        <?php
                        while ($magazine_the_query->have_posts()){
                            $magazine_the_query->the_post(); ?>
                            <li class="col-md-3">
                                <figure>
                                    <a href="<?php the_permalink() ?>">
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
//                                        $attachment_id = get_post_thumbnail_id(get_the_ID());
//                                        if (!empty($attachment_id)) {
//                                        echo swe_wp_get_attachment_image($attachment_id, $size = array(436, 616), $icon = 1, $attr = array(
//                                                                'class' => 'adv-'.$attachment_id,
//                                                                'id' => '',
//                                                                'alt' => trim(strip_tags(get_post_meta($attachment_id, '_wp_attachment_image_alt', true))),
//                                                            ));
//                                        }else{
//                                            echo '<img src="'.get_stylesheet_directory_uri().'/images/no-img.jpg" alt="">';
//                                        }
                                    ?>
                                    </a>
                                    <figcaption>
                                        <p><a href="<?php the_permalink() ?>"><?php the_title() ?></a></p>
                                    </figcaption>
                                </figure>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <!--- end search magazine -->
                <div class="row">
                    <div class="col-md-12">
                        <?php 
                        if(function_exists('wp_pagenavi')){
                        wp_pagenavi(array('query' => $magazine_the_query));
                        
                        } ?>
                    </div>
                </div>
    <?php    endif;
    
        }
    }
    
 ?> 
            </div>
            
        </div>
    </div>
</section>

<?php else: ?>
<div class="col-md-12"><?php get_template_part( 'content', 'none' ); ?></div>
<?php endif; ?>

<?php get_footer(); ?>
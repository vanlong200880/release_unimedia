<?php	get_header();      global $language;    $args = array(        'post_status'    => 'publish',				'order'          => 'DESC',		'orderby'        => 'date',		'post_type'      => 'post',		'posts_per_page' => 8,        'category_name'     => 'fashion-health,taste-event,real-estate-source, home-electronic, seasons-promotion, vihicle-technology',      );	$the_query = new WP_Query( $args );	?><section id="wrapp-details">    <div class="container">		<div class="row">            <div class="col-md-12 col-sm-12 col-xs-12">                <div class="wrapp-breadcrumb">                    <ol class="breadcrumb">                        <?php if(function_exists('bcn_display'))                        {                            bcn_display();                        }?>                    </ol>                </div>            </div>        </div>		<div class="row">			<div class="col-md-8 col-sm-8 col-xs-12">                <div class="show-details">                        <?php while ( have_posts() ) : the_post();                             get_template_part( 'content', 'page' );                       endwhile; // end of the loop. ?>                </div>            </div>                        <?php if($the_query->have_posts()){ ?>			<div id="sidebar" class="col-md-4 col-sm-4 col-xs-12 article-all">                    <div class="page-header">                        <h2><?php echo ($language =='vi')?'Bài liên quan':'Featured'; ?></h2>                    </div>                    <div class="row">                        <div class="top-sub-featured">                    <?php                    while ($the_query->have_posts()){                        $the_query->the_post(); ?>                            <div class="col-md-6 col-sm-6 col-xs-6 mg-20 show-article">                                <figure>                                    <a href="<?php the_permalink() ?>">                                        <?php                                            $attachment_id = get_post_thumbnail_id(get_the_ID());                                            if (!empty($attachment_id)) {                                                 the_post_thumbnail(array(570, 380));                                                ?>                                            <?php }else{                                                echo '<img src="'.get_stylesheet_directory_uri().'/images/no-img.jpg" alt="">';                                            }                                        ?>                                    </a>                                    <figcaption>                                        <a href="<?php the_permalink() ?>" title="<?php echo get_the_title(); ?>">                                            <?php echo filter_character(get_the_title(), 8); ?>                                        </a>                                        <p>                                                                                        <?php //                                                $str = get_post_custom_values('excerpt', get_the_ID());//                                                $str = (empty($str))? get_the_excerpt() : $str[0];//                                                echo filter_character($str, 8);                                            ?>                                        </p><!--                                        <div class="readmore">                                            <span class="left"></span>                                            <a href="<?php //the_permalink() ?>">read more <span class="arrow">&rsaquo;&rsaquo;</span></a>                                        </div>-->                                    </figcaption>                                </figure>                            </div>                    <?php } ?>                            </div><!--end top-sub-featured-->	                        </div>                    </div>                <?php } ?>		</div>	</div></section><?php get_footer(); ?><script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery-scrolltofixed.js"></script><script type="text/javascript">    var summaries = $('#sidebar');        summaries.each(function(i) {            var summary = $(summaries[i]);            var next = summaries[i + 1];            summary.scrollToFixed({                marginTop: 10,                limit: function() {                    var limit = 0;                    if (next) {                        limit = $(next).offset().top - $(this).outerHeight(true) - 10;                    } else {                        limit = $('footer').offset().top - $(this).outerHeight(true) - 10;                    }                    return limit;                },                zIndex: 999,            });        });</script>
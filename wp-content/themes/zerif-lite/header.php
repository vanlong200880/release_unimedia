<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="content">
 */
global $language;
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie.css" type="text/css">
<![endif]-->

<?php wp_head(); ?>
<?php if(is_front_page()): ?>
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/animate.css" rel="stylesheet">
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/animate-customize.css" rel="stylesheet">
<?php endif; ?>

<?php
$category = get_the_category($post->ID);
if(!empty($category)):
$taxonomy = get_term($category[0]->category_parent, 'category');
if(is_single() == true && $taxonomy->slug ==='magazine'){ ?>
<link type="text/css" href="<?php echo get_template_directory_uri() ?>/slipbook/css/style.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Play:400,700">
<script src="<?php echo get_template_directory_uri() ?>/slipbook/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/slipbook/js/turn.js"></script>              
<script src="<?php echo get_template_directory_uri() ?>/slipbook/js/jquery.fullscreen.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/slipbook/js/jquery.address-1.6.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/slipbook/js/wait.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/slipbook/js/onload.js"></script>
<?php     
}
endif;
?>
</head>

<body <?php body_class($language); ?>>

<div id="wrapper">
    <header id="header">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <?php
                            echo '<a href="'.esc_url( home_url( '/' ) ).'">';
                                echo '<img src="'.get_template_directory_uri().'/images/logo.png" alt="'.get_bloginfo('title').'">';
                            echo '</a>';
                        ?>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <ul class="unimedia-services pull-right">
                            <li>
                                <div class="services health">
                                    <p><span class="icon-health-01"></span></p>
                                    <p><a class="vi" href="<?php echo get_site_url() ?>/vi/category/magazine/health-care/">SỨC KHỎE & CHĂM SÓC</a></p>
                                    <p><a class="en" href="<?php echo get_site_url() ?>/en/category/magazine/health-care/">HEALTH & CARE</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="services taste">
                                    <p><span class="icon-taste-01"></span></p>
                                    <p><a class="vi" href="<?php echo get_site_url() ?>/vi/category/magazine/taste-event/">ẨM THỰC & TIỆC</a></p>
                                    <p><a class="en" href="<?php echo get_site_url() ?>/en/category/magazine/taste-event/">TASTE & EVENT</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="services real">
                                    <p><span class="icon-real-01"></span></p>
                                    <p><a class="vi" href="<?php echo get_site_url() ?>/vi/category/magazine/real-estate-source/">NGUỒN ĐỊA ỐC</a></p>
                                    <p><a class="en" href="<?php echo get_site_url() ?>/en/category/magazine/real-estate-source/">REAL ESTATE SOURCE</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="services travel-edu">
                                    <p><span class="icon-travel-01"></span></p>
                                    <p><a class="vi" href="<?php echo get_site_url() ?>/vi/category/magazine/travel-education/">DU LỊCH & GIÁO DỤC</a></p>
                                    <p><a class="en" href="<?php echo get_site_url() ?>/en/category/magazine/travel-education/">TRAVEL & EDUCATION</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="services four-seasons">
                                    <p><span class="icon-promotion-01"></span></p>
                                    <p><a class="vi" href="<?php echo get_site_url() ?>/vi/category/magazine/seasons-promotion/">4 MÙA & KHUYẾN MÃI</a></p>
                                    <p><a class="en" href="<?php echo get_site_url() ?>/en/category/magazine/seasons-promotion/">4 SEASONS & PROMOTION</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--end top-header-->

        <div class="top-header-sp">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="unimedia-services">
                            <li>
                                <div class="services health">	
                                    <div class="dropdown ">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <p><span class="icon-health-01"></span></p>
                                        </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <p>
                                                        <a class="vi" href="<?php echo get_site_url() ?>/vi/category/magazine/health-care/">SỨC KHỎE & CHĂM SÓC</a>
                                                    </p>
                                                    <p>
                                                        <a class="en" href="<?php echo get_site_url() ?>/en/category/magazine/health-care/">HEALTH & CARE</a>
                                                    </p>
                                                </li>
                                          </ul>
                                        </div>
                                </div>
                            </li>
                            <li>
                                <div class="services taste">	
                                    <div class="dropdown ">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <p><span class="icon-taste-01"></span></p>
                                        </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <p><a class="vi" href="<?php echo get_site_url() ?>/vi/category/magazine/taste-event/">ẨM THỰC & TIỆC</a></p>
                                                    <p><a class="en" href="<?php echo get_site_url() ?>/en/category/magazine/taste-event/">TASTE & EVENT</a></p>
                                                </li>
                                          </ul>
                                        </div>
                                </div>
                            </li>
                            <li>
                                <div class="services real">	
                                    <div class="dropdown ">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <p><span class="icon-real-01"></span></p>
                                        </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <p><a class="vi" href="<?php echo get_site_url() ?>/vi/category/magazine/real-estate-source/">NGUỒN ĐỊA ỐC</a></p>
                                                    <p><a class="en" href="<?php echo get_site_url() ?>/en/category/magazine/real-estate-source/">REAL ESTATE SOURCE</a></p>
                                                </li>
                                          </ul>
                                        </div>
                                </div>
                            </li>
                            <li>
                                <div class="services travel-edu">	
                                    <div class="dropdown ">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <p><span class="icon-travel-01"></span></p>
                                        </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <p><a class="vi" href="<?php echo get_site_url() ?>/vi/category/magazine/travel-education/">DU LỊCH & GIÁO DỤC</a></p>
                                                    <p><a class="en" href="<?php echo get_site_url() ?>/en/category/magazine/travel-education/">TRAVEL & EDUCATION</a></p>
                                                </li>
                                          </ul>
                                        </div>
                                </div>
                            </li>
                            <li>
                                <div class="services four-seasons">	
                                    <div class="dropdown ">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <p><span class="icon-promotion-01"></span></p>
                                        </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <p><a class="vi" href="<?php echo get_site_url() ?>/vi/category/magazine/seasons-promotion/">4 MÙA & KHUYẾN MÃI</a></p>
                                                    <p><a class="en" href="<?php echo get_site_url() ?>/en/category/magazine/seasonss-promotion/">4 SEASONS & PROMOTION</a></p>
                                                </li>
                                          </ul>
                                        </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--end top-header-sp-->

        <div class="navigation">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="row">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <?php
                                echo '<a class="navbar-brand" href="'.esc_url( home_url( '/' ) ).'">';
                                    echo '<img src="'.get_template_directory_uri().'/images/logo.png" alt="'.get_bloginfo('title').'">';
                                echo '</a>';
                            ?>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'primary',
                                    'menu'=> 'menu_top_private',
                                    'menu_class' => 'nav navbar-nav',
                                    'container_class' => '',
                                ) );
                            ?>
                            
                            <?php get_search_form(); ?>

                        </div><!-- /.navbar-collapse -->

                    </div>
                </div>
            </nav>
        </div><!-- /navigation -->

        <div class="wrapp-form-search-sp">
            <div class="container">
                <?php get_search_form(); ?>
            </div>
        </div><!--end wrapp-form-search-sp-->

    </header><!-- /header -->
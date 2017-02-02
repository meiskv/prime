<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
        <?php bloginfo('name');?>
    </title>

    <?php wp_head(); ?>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <section class="social">
        <div class="container">
            <nav class="navbar navbar-default navbar-right nav-social">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li class="social-link">
                            <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/social_fb.png" width="20" height="20" alt="prime facebook"></a>
                        </li>
                        <li class="social-link">
                            <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/social_google.png" width="20" height="20" alt="prime facebook"></a>
                        </li>
                        <li class="social-link">
                            <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/social_linkedin.png" width="20" height="20" alt="prime facebook"></a>
                        </li>
                        <li class="social-link">
                            <form class="navbar-form navbar-right">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>


    <section class="nnav">
        <div class="container gold-line">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri();?>/images/prime_logo.png" alt=""></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        
 

<?php
	wp_nav_menu( array(
        'container' => 'ul',
		'theme_location' => 'primary',
		'menu_class'     => 'nav navbar-nav navbar-left nav-main'
		 ) );
?>
<!--try ko lang to bro-->
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
    </section>

    <section class="slider">
        <div class="container-fluid">
            <div class="container">
                <div class="fsbanner" id="demo">
                    <div class="sImg" onclick="window.location.href='<?php echo get_permalink( 4 ); ?>'" style="background-image:url(<?php echo get_template_directory_uri();?>/images/slider/1.png)">
                        <span class="name divmod"><a href="#">Overview</a></span>
                    </div>
                    <div class="sImg sliderborder" onclick="window.location.href='<?php echo get_permalink( 95 ); ?>'" style="background-image:url(<?php echo get_template_directory_uri();?>/images/slider/2.png)">
                        <span class="name divmod"><a href="laboratories.html">Services</a></span>
                    </div>
                    <div class="sImg sliderborder" onclick="window.location.href='<?php echo get_permalink( 97 ); ?>'" style="background-image:url(<?php echo get_template_directory_uri();?>/images/slider/3.png)">
                        <span class="name"><a href="certification.html">Contact</a></span>
                    </div>

                </div>
            </div>
        </div>
    </section>

   <section class="main-content">

            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <?php if (have_posts()) : while (have_posts()) : the_post();?>
<!--                            <h1 class="content-header"><?php the_title();?></h1>-->
                            <div class="content-description">
                                <?php the_content(); ?>
                                <?php edit_post_link(); ?>
                            </div>
                            <?php endwhile; endif; ?>
                    </div>

                </div>

            </div>
            
</section>
<?php get_footer(); ?>
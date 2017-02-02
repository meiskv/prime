<?php
/*
    Template Name: Businesses Page Template
    Mikhail
*/
?>


    <?php get_header(); ?>

        <section class="main-content">

            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <?php if (have_posts()) : while (have_posts()) : the_post();?>
<!--                            <h1 class="content-header"><?php the_title();?></h1>-->
                            <div class="content-description">
                                <?php the_content(); ?>
                            </div>
                            <?php endwhile; endif; ?>
                    </div>

                </div>

            </div>
        
<div id="wrapper">
<?php
    $gtl = array('post_type' => 'post','p' => 115);
    $pcl = array('post_type' => 'post','p' => 117);
    $cert = array('post_type' => 'post','p' => 119);
    $train = array('post_type' => 'post','p' => 121);
    $prime = array('post_type' => 'post','p' => 123); 
    
    $gtl_q = new WP_Query( $gtl );
    $pcl_q = new WP_Query( $pcl );
    $cert_q = new WP_Query( $cert );
    $train_q = new WP_Query( $train );
    $prime = new WP_Query( $prime );
?>

  <table class="table-bordered">
      <tr class="tr-1">
        <td rowspan="2" valign="middle"><h1 class="tbl-h">Laboratories</h1></td>
        <td> 
            <a href="#" title=""><img src="<?php echo get_template_directory_uri();?>/images/gtl_logo.png" alt=""></a>
        </td>
        <td class="col-md-8 tbl-p">
            <?php if ( $gtl_q->have_posts() ) : $gtl_q->the_post(); ?>
            <?php the_content(); ?>
            <?php edit_post_link(); ?>
            <?php endif; ?>
        </p>

       </td>
      </tr>

      <tr class="tr-1">
       <td> <a href="#" title=""><img src="<?php echo get_template_directory_uri();?>/images/prime_consumer.png" alt=""></a></td>
        <td class="col-md-8 tbl-p">
            <?php if ( $pcl_q->have_posts() ) : $pcl_q->the_post(); ?>
            <?php the_content(); ?>
            <?php edit_post_link(); ?>
            <?php endif; ?>
        </td>
      </tr>

      <tr class="tr-1">
        <td valign="middle"><h1 class="tbl-h">Certification &amp; Inspections</h1></td>
        <td> 
           <a href="#" title=""><img src="<?php echo get_template_directory_uri();?>/images/prime_certification.png" alt=""></a>
        </td>
        <td class="col-md-8 tbl-p">
            <?php if ( $cert_q->have_posts() ) : $cert_q->the_post(); ?>
            <?php the_content(); ?>
            <?php edit_post_link(); ?>
            <?php endif; ?>
       </td>
      </tr>

      <tr class="tr-1">
        <td valign="middle"><h1 class="tbl-h">Training & Consultancy</h1></td>
        <td> 
          <a href="#" title=""><img src="<?php echo get_template_directory_uri();?>/images/prime_innova.png" alt=""></a>
        </td>
        <td class="col-md-8 tbl-p">
            <?php if ( $train_q->have_posts() ) : $train_q->the_post(); ?>
            <?php the_content(); ?>
            <?php edit_post_link(); ?>
            <?php endif; ?>
       </td>
      </tr>

      <tr class="tr-1">
        <td valign="middle"><h1 class="tbl-h">Facilities Management</h1></td>
        <td> 
<a href="#" title=""><img src="<?php echo get_template_directory_uri();?>/images/prime_waste.png" alt=""></a>
        </td>
        <td class="col-md-8 tbl-p">
            <?php if ( $prime->have_posts() ) : $prime->the_post(); ?>
            <?php the_content(); ?>
            <?php edit_post_link(); ?>
            <?php endif; ?>
       </td>
      </tr>
    
  </table>
    
  </section>

</div>


        <?php get_footer(); ?>
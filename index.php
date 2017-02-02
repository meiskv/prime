<?php get_header(); ?>

    <?php
    $about = array('page_id' => 4); $about_q = new WP_Query($about);
    $testi = array('page_id' => 172); $testi_q = new WP_Query($testi);
    $news = array(
        'cat' => 6,
        'post_type' => 'post',
        'order' => 'DESC'
    ); $news_q = new WP_Query($news);
?>
        <section class="main-content">

            <div class="container">

                <div class="row">
                    <div class="col-md-7">
                        <?php if ( $about_q->have_posts() ) : $about_q->the_post(); ?>
                            <div class="content-description">
                                <?php the_content(); ?>
                                    <?php edit_post_link(); ?>
                            </div>
                            <?php endif; ?>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <?php if ( $testi_q->have_posts() ) : $testi_q->the_post(); ?>
                                                <?php the_content(); ?>
                                                    <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                    </div>
                    <div class="col-md-5">
                        <h1 class="news-h1">Latest News</h1>
                        <div class="news-panel">
<?php if ( $news_q->have_posts() ) : $news_q->the_post(); ?>
                        <h2 class="news-h2"><?php the_date('l, F j, Y'); ?> </h2>
                        <div class="news-content">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            <a href="#" title=""><h1 class="news-h3"><?php the_title(); ?></h1></a>
                            <?php the_content(); ?>
                        </div>
                        <?php edit_post_link(); ?>
<?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">


                    </div>
                    <div class="col-md-6">

                    </div>
                </div>


            </div>

        </section>


        <section class="contact-form foot-border">
            <div class="container">
                <div class="col-md-6">
                    <form>
                        <div class="form-group row ">
                            <label for="name" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="textbox" class="form-control" id="name" placeholder="Name">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="company" class="col-sm-3 col-form-label">Name of the Company</label>
                            <div class="col-sm-9">
                                <input type="textbox" class="form-control" id="company" placeholder="Company Name">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="mobile" class="col-sm-3 col-form-label">Mobile</label>
                            <div class="col-sm-9">
                                <input type="textbox" class="form-control" id="mobile" placeholder="+971 56 123 4567">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="name" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="textbox" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="subject" class="col-sm-3 col-form-label">Subject</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="exampleSelect1">
                                    <option disabled selected>Please select</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="name" class="col-sm-3 col-form-label">Details</label>
                            <div class="col-sm-9">
                                <textarea name="details" class="form-control" id="" cols="30" rows="10">
                                </textarea>
                                <br/>
                                <small>Enter both words below, separated by a space.</small>
                                <div class="g-recaptcha" data-sitekey="6LdwyxIUAAAAAGypHuNzWjYL80TML9kGkuoS-V5r"></div>

                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-md-6">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d70163.60622887449!2d55.31241071662288!3d25.231035148885102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scoffee!5e0!3m2!1sen!2sae!4v1484645315614" width="100%" height="560" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        <?php get_footer(); ?>
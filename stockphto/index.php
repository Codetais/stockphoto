<?php get_header()?>
<!--Slider section start-->
<div class="slider">
    <div class="slider-content">
        <h2>Find free stock photos online</h2>
        <?php get_search_form()?>
        <?php the_category();?>
    </div>
</div>
<!--Slider section end-->
<!--Stock images section start-->
<div class="container">
    <div class="row">
        <h2 class="mt-4 mb-5 stock-text">Royalty-free stock image or photos</h2>
        <div class="stock-photo">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                if (have_posts()){
                    while (have_posts()){
                        the_post();
                        ?>
                        <div class="col">
                            <div class="card h-100">
                                <a href="<?php the_permalink();?>"><?php the_post_thumbnail('',array('class'=>'img-fluid'));?></a>
                                <div class="card-body">
                                    <a href="<?php the_permalink();?>"><h5 class="card-title"><?php the_title()?></h5></a>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted"><?php echo get_the_date()?></small>
                                </div>
                            </div>
                        </div>
                            <?php
                    }
                }
                ?>
            </div>
            <div class="pagination-item mt-5">
                <nav  class="d-flex justify-content-center" aria-label="Page navigation example">
                    <?php bootstrap_pagination()?>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--Stock images section start-->
<!--Our customer start-->
<div class="container">
    <h2 class="d-flex justify-content-center mt-4 mb-5 customer-text">Our Customers</h2>
    <div class="row">
        <?php
        $customers_post=['post_type'=>'customers'];
        $customers_query=new WP_Query($customers_post);
        while ($customers_query->have_posts()){
            $customers_query->the_post();
            ?>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <?php the_post_thumbnail('',array('class'=>'img-fluid'));?></div>
	        <?php
        }
        wp_reset_postdata();
        ?>
    </div>
</div>
<!--Our customer end-->
<!--About section start-->
<div class="container">
    <div class="row about-text">
        <figure>
            <blockquote class="blockquote">
                <?php dynamic_sidebar('about_us')?>
            </blockquote>
        </figure>
    </div>
</div>
<!--About section end-->
<?php get_footer()?>
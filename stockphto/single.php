<?php get_header()?>
<div class="container">
    <div class="row mt-4">
        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
            <div class="single-slider">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <?php
                    $image_one=get_field('image_one');
                    $image_two=get_field('image_two');
                    $download_file=get_field('download_file');
                    ?>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <?php the_post_thumbnail('',array('class'=>'d-block w-100 img-fluid'));?>
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo esc_url($image_one['url'])?>" class="d-block w-100 img-fluid">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo esc_url($image_two['url'])?>" class="d-block w-100 img-fluid">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="slider-title">
                <h2 class="mb-3 mt-4"><?php the_title()?></h2>
                <div class="tag">
                    <?php the_category();?>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <figure>
                <blockquote class="blockquote">
                    <p><?php the_content();?></p>
                    <button class="btn btn-success btn-lg d-grid gap-2 col-6 mx-auto download-btn">
                        <a href="<?php echo $download_file['url']?>">Download now</a></button>
                </blockquote>
            </figure>
        </div>
    </div>
</div>
<?php get_footer()?>
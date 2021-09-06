<?php get_header()?>
    <div class="container">
        <div class="row mt-4">
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
<?php get_footer()?>
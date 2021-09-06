<!--Footer section start-->
<footer>
	<div class="container mt-5">
		<div class="row">
            <div class="col-12 col-md-6 col-xl-3 footer1">
				<?php dynamic_sidebar('footer1')?>
            </div>
            <div class="col-12 col-md-6 col-xl-3 footer1">
				<?php dynamic_sidebar('footer2')?>
            </div>
            <div class="col-12 col-md-6 col-xl-3 footer1">
				<?php dynamic_sidebar('footer3')?>
            </div>
            <div class="col-12 col-md-6 col-xl-3 footer1">
				<?php dynamic_sidebar('footer4')?>
            </div>
            <div class="mt-3 d-flex justify-content-center copyright">
                <?php dynamic_sidebar('copyright')?>
            </div>
		</div>
	</div>
</footer>
<?php wp_footer();?>
</body>
</html>

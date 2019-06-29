<section class="page-section">
	<div class="container">
		<div class="page-section__header">
			<h2><span>our portfolio</span></h2>
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, temporibus.
			</p>
		</div>
		<div class="gallery">
			<div class="row">
				<div class="col-md-3">
					<h2 class="title-base">choose category</h2>
					<ul class="gallery-nav js-gallery-nav">
						<li class="gallery-nav__item">
							<button class="gallery-nav__btn is-active" data-filter="*">
								All
							</button>
						</li>
						<li class="gallery-nav__item">
							<button class="gallery-nav__btn" data-filter=".webdesign">
								webdesign
							</button>
						</li>
						<li class="gallery-nav__item">
							<button class="gallery-nav__btn" data-filter=".graphic">
								graphic design
							</button>
						</li>
						<li class="gallery-nav__item">
							<button class="gallery-nav__btn" data-filter=".fashion">
								fashion
							</button>
						</li>
						<li class="gallery-nav__item">
							<button class="gallery-nav__btn" data-filter=".logo">
								logo design
							</button>
						</li>
					</ul>
				</div>
				<a class="col-md-9">
					<a class="gallery-box js-gallery-box">

						<?php
						$args = array(
							'post_type' => 'portfolio'
						);

						$post_query = new WP_Query($args);

						if ( $post_query->have_posts() ) {while ( $post_query->have_posts() ) { $post_query->the_post();
						?>

						<a href="<?php echo get_field('portfolio_image') ?>" class="gallery-item <?php echo get_field('portfolio_category')  ?>">
							<img src="<?php echo get_field('portfolio_image')  ?>" alt="">
						</a>

						<?php } } else { ?>
						<p>Записей нет.</p>
						<?php } ?>

					</a>
				</div>
			</div>
		</div>
	</div>
</section>
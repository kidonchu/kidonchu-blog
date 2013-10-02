<?php get_header() ?>
						<div class="content">

							<?php if (have_posts()) : while (have_posts()) : the_post();

								get_template_part('loop', 'index');

							endwhile ?>

							<div class="row">
								<div class="col-md-12 cf">
									<span class="more-post-link pull-left">
										<?php next_posts_link(__('&laquo; Older Entries', 'themezee_lang')) ?>
									</span>
									<span class="more-post-link pull-right">
										<?php previous_posts_link (__('Newer Entries &raquo;', 'themezee_lang')) ?>
									</span>
								</div>
							</div>

							<?php endif ?>

						</div>
<?php get_footer() ?>
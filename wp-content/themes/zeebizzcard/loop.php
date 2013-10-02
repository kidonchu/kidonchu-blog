							<div id="post-<?php the_ID() ?>" <?php post_class() ?> class="cf">

								<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title() ?></a></h2>

								<div class="postmeta blog-postmeta"><?php themezee_display_postmeta() ?></div>

								<div class="entry">
									<?php the_post_thumbnail('thumbnail', array('class' => 'alignleft')) ?>
									<?php the_content(__('Read more', 'themezee_lang')) ?>
									<?php wp_link_pages() ?>
								</div>

							</div>

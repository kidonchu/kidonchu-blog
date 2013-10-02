
	<div class="headwrap">


	<?php
	if(is_page()) :
		if(is_active_sidebar('sidebar-pages')) : ?>

		<div class="sidewrap">
			<div class="sidebar">
				<?php themezee_widgets_before(); // hook before sidebar widgets ?>
				<ul>
				<?php dynamic_sidebar('sidebar-pages'); endif; ?>
				</ul>
				<?php themezee_widgets_after(); // hook after sidebar widgets ?>
			</div>
		</div>
	<?php
	else:
		if(is_active_sidebar('sidebar-blog')) : ?>

		<div class="sidewrap">
			<div class="sidebar">
				<?php themezee_widgets_before(); // hook before sidebar widgets ?>
				<ul>
				<?php dynamic_sidebar('sidebar-blog'); endif; ?>
				</ul>
				<?php themezee_widgets_after(); // hook after sidebar widgets ?>
			</div>
		</div>
	<?php endif; ?>

	<div class="clear"></div>
</div><!-- end #wrapper -->
<?php themezee_wrapper_after(); // hook after #wrapper ?>

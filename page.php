<?php

$page = NEW WP_Query(array(

		'post_type' => array('page'),

	));
	



	while($page->have_posts()):$page->the_post();

	the_title();



		endwhile;

?>
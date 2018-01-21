<?php 


/*

Template Name: slider 

*/ 

$slidermy = NEW WP_Query(array(

			'post_type' => array('slider'),


	));


while($slidermy->have_posts()):$slidermy->the_post();


the_title();

the_post_thumbnail();

endwhile;

?>
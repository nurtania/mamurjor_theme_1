





<?php $the_queryv =  new WP_Query(array(
		'post_type'=>array('post'),

)); 

?>

<table>
 	


 	<td>
 	 <?php 

 	 	get_sidebar("left");
 	 ?>
 	</td>

 	<td>
<?php 


global $shafin;



echo $shafin['content_num'];
echo $shafin['mail'].'</br>';


if($the_queryv->have_posts()):

	while($the_queryv->have_posts()):$the_queryv->the_post();
		echo '<h1>'.get_the_title().'</h1></br>';
		echo '<p>'.the_content().'</p></br>';

		$cell = get_post_meta(get_the_ID(),'cell',true);
		$name = get_post_meta(get_the_ID(),'_name',true);
		$medium = get_post_meta(get_the_ID(),'_medium',true);
		$mail = get_post_meta(get_the_ID(),'_mail',true);
		$url = get_post_meta(get_the_ID(),'_url',true);
		$money = get_post_meta(get_the_ID(),'_money',true);
		$textarea = get_post_meta(get_the_ID(),'_textarea',true);
		$textarea_small = get_post_meta(get_the_ID(),'_textarea_small',true);
		$textarea_code = get_post_meta(get_the_ID(),'_textarea_code',true);
		$text_time = get_post_meta(get_the_ID(),'_text_time',true);
		$select_timezone = get_post_meta(get_the_ID(),'_select_timezone',true);
		$text_date = get_post_meta(get_the_ID(),'_text_date',true);

		if ($cell || $name || $medium || $mail|| $url || $money || $textarea || $textarea_small||$textarea_code || $text_time ||$select_timezone== true) {
			echo '<p> cell number :'. $cell. '</p>';
			echo '<p> name : '. $name. '</p>';
			echo '<p> medium : '. $medium. '</p>';
			echo '<p> mail : '. $mail. '</p>';
			echo '<p> mail : '. $url. '</p>';
			echo '<p> money : '. $money. '</p>';
			echo '<p> textarea : '. $textarea. '</p>';
			echo '<p> textarea_small : '. $textarea_small. '</p>';
			echo '<p> textarea_code : '. $textarea_code. '</p>';
			echo '<p> text_time : '. $text_time. '</p>';
			echo '<p> select_timezone : '. $select_timezone. '</p>';
			echo '<p> text_date : '. $text_date. '</p>';
		}
		




		endwhile;
		wp_reset_postdata();
else:
	echo 'nothing found';
endif;







?>



 		
 	</td>
	<td>
		<?php

			get_sidebar("right");
		?>
	</td>



 	
 </table>























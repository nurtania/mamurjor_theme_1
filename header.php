<!DOCTYPE html>
<html>
<head>
<?php wp_head(); ?>
</head>
<body>

<div>
    

</div>

<meta charset="<?php bloginfo('charset'); ?>" >
<div class="container">

<header>
   <h1>City Gallery</h1>

<!--   <ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  </ul> -->

<?php

wp_nav_menu(array(

	'theme_location' =>		'nav'




	));



?>

</header>
  


<?php
/*
Template Name: Main
*/
?>

<?php get_header(); ?>

<section id="welcome">
	<?php get_template_part('blocks/welcome') ?>	
</section>
<section id="about">
	<?php get_template_part('blocks/about') ?>	
</section>

<section id="works">
	<?php get_template_part('blocks/works') ?>
</section>

<section id="use">
	<?php get_template_part('blocks/use') ?>
</section>

<section id="reviews">
	<?php get_template_part('blocks/reviews') ?>
</section>

<?php get_footer(); ?>
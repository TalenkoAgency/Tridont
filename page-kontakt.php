<?php
/* Template Name: Kontakt */
get_header(); ?>

<?php if(have_rows('kontakti')):
while(have_rows('kontakti')):the_row(); 
$titulli = get_sub_field('titulli');
$teksti = get_sub_field('teksti');
$imazhi_mobile = get_sub_field('imazhi_i_hartes_mobile');
$imazhi_desktop = get_sub_field('imazhi_i_hartes_desktop');
$lokacionet = get_sub_field('lokacionet');?>
<main class="container animation-trigger p-kontakt-section">
	<?php get_template_part('template-parts/content', 'kontakt', array(
		'titulli'=>$titulli,
		'teksti'=>$teksti,
		'imazhi_mobile'=>$imazhi_mobile,
		'imazhi_desktop'=>$imazhi_desktop,
		'lokacionet'=>$lokacionet
	)); ?>
	</main>
<?php endwhile;
endif; ?>

<?php get_footer(); ?>
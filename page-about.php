<?php

/* Template Name: About */ 
get_header(); ?>
<?php if(have_rows('hero')):the_row(); 
$titulli = get_sub_field('titulli');
$teksti = get_sub_field('teksti');
$foto_mobile = get_sub_field('foto_mobile');
$foto_desktop = get_sub_field('foto_desktop');
$linkat = get_sub_field('linkat');?>
<?php get_template_part('template-parts/content', 'hero', array(
	'titulli'=>$titulli,
	'teksti'=>$teksti,
	'foto_mobile'=>$foto_mobile,
	'foto_desktop'=>$foto_desktop,
	'linkat'=>$linkat
)); ?>

<?php endif; ?>
<?php 
$images = []; ?>
<?php if(have_rows('historiku', 178)): 
while(have_rows('historiku', 178)):the_row();
    $images = get_sub_field('imazhet');

?>

<?php endwhile;
endif;
wp_reset_postdata(); 
?>
<?php if(have_rows('historiku')):the_row();
$titulli = get_sub_field('titulli');
$imazhet = get_sub_field('imazhet'); ?>
<section class='container-fluid animation-trigger px-0 p-about-history spacing-top'>
    <div class="container">
        <div class="row">
            <div class="col-12 animated-items-holder">
                <div class="p-about-history-title">
                    <h2 class="heading with-clip"><?php echo $titulli; ?></h2>
                </div>

                <div class="p-about-texts">
                    <?php if(have_rows('tekstet')):
                    while(have_rows('tekstet')):the_row();
                    $teksti = get_sub_field('teksti'); ?>
                        <p class="body-text">
                            <?php echo $teksti; ?>
                        </p>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>

 
        <div class="swiper history-slider">
            <div class="swiper-wrapper">
                <?php foreach($images as $image):
       
                $imazhi_mobile = $image['imazhi_mobile'];
                $imazhi_desktop = $image['imazhi_desktop']; ?>
                    <div class="swiper-slide">
                        <div class="p-about-history-image">
                            <picture>
                                <source media="(min-width:431px)" srcset="<?php echo $imazhi_desktop['url']; ?>" />
                                <img src="<?php echo $imazhi_mobile['url']; ?>" alt="<?php echo $imazhi_mobile['alt']; ?>" />
                            </picture>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="container p-history-slider-navs">
            <div class="row">
                <div class="col-12">
                    <div class="p-history-slider-navs-content">
                        <div class="count-holder">

                       
                        <span id="count" class=" body-text">1</span> <span class="body-text">/</span> <span class="body-text"><?php echo count($images); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>



</section>
<?php endif; ?>

<?php if(have_rows('historiku2')):the_row();
$titulli = get_sub_field('titulli');
$counter = get_sub_field('historiku');
$count = count($counter); ?>
<section class='container animation-trigger p-about-dhembet spacing-top'>
    <div class="row">
        <div class="col-12">
            <div class="p-about-dhembet-titulli animated-items-holder">
                <h3 class="heading with-clip"><?php echo $titulli; ?></h3>
            </div>
        </div>

        <div class="col-12 p-about-dhembet-content">
            <div class="p-about-dhembet-holder">
                <?php if(have_rows('historiku')): $i=0;
           
                while(have_rows('historiku')):the_row();
                $viti = get_sub_field('viti');
                $titulli = get_sub_field('titulli');
                $teksti = get_sub_field('teksti'); ?>
                    <div class="p-about-dhembet-single <?php if($i===$count-1){ echo "last"; } ?> <?php if($i==1 || $i%2===1){echo "left-fade";}else{echo "right-fade";} ?> ">
                        <div class="p-about-dhembi-title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="43" height="45" viewBox="0 0 43 45" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.522 4.47679C14.6923 4.47679 -5.05309 -7.0188 2.99382 18.8801C2.99382 25.1012 4.48148 43.8999 10.635 43.8999C16.7885 43.8999 14.8951 28.0089 21.522 28.0089C28.1489 28.0089 26.2555 43.8999 32.409 43.8999C38.6301 43.8999 39.9149 24.966 39.9149 18.7448C47.6238 -6.81594 28.4194 4.47679 21.522 4.47679Z" fill="white" stroke="#C29078" stroke-width="2.13745"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4512 3.53003C16.4512 3.53003 24.4305 4.47672 25.58 8.66923L16.4512 3.53003Z" fill="white"/>
                        <path d="M16.4512 3.53003C16.4512 3.53003 24.4305 4.47672 25.58 8.66923" stroke="#C29078" stroke-width="2.13745"/>
                        </svg>
                        <span class="body-text"><?php echo $viti; ?></span>
                       </div>

                       <div class="p-about-dhembi-first-line">

                       </div>

                       <div class="p-about-dhembi-second-line">

                       </div>

                       <div class="p-about-dhembi-single-content">
                            <div class="p-about-dhembi-single-content-title">
                                <span class="body-text"><?php echo $titulli; ?></span>
                            </div>

                            <div class="p-about-dhembi-single-content-text">
                                <p class="body-text"><?php echo $teksti; ?></p>
                            </div>
                       </div>
                    </div>
                <?php $i++;
                endwhile;
                endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>


<?php if(have_rows('specialistet')):the_row();
	$titulli = get_sub_field('titulli');
	$tekst = get_sub_field('tekst');
	$ekipa = get_sub_field('ekipa'); ?>
	<?php get_template_part('template-parts/content', 'ekipa', array(
		'titulli'=>$titulli,
		'tekst'=>$tekst,
		'ekipa'=>$ekipa
	) ); ?>
<?php endif; ?>

<?php if(have_rows('kontakt')):the_row();
$titulli = get_sub_field('titulli');
$linku_tekst = get_sub_field('linku_tekst');
$linku_url = get_sub_field('linku_url');
$imazhi_mobile = get_sub_field('imazhi_mobile');
$imazhi_desktop = get_sub_field('imazhi_desktop'); ?>
<?php get_template_part('template-parts/content', 'sharedcontact', array(
    'titulli'=>$titulli,
    'linku_tekst'=>$linku_tekst,
    'linku_url'=>$linku_url,
    'imazhi_mobile'=>$imazhi_mobile,
    'imazhi_desktop'=>$imazhi_desktop,
    'no_spacing'=>false
)); ?>
<?php endif; ?>

<?php get_footer(); ?>
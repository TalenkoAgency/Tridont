<?php
/* Template Name: Pacientet */

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
$current_language = pll_current_language();
if(have_rows('transformimet')):the_row();
$titulli = get_sub_field('titulli');
$tekst = get_sub_field('tekst');
$dropdown_tekst = get_sub_field('dropdown_tekst');
$foto_mobile = get_sub_field('foto_mobile');
$foto_desktop = get_sub_field('foto_desktop');
$tekst_per_hover = get_sub_field('tekst_per_hover'); ?>
<section class="container-fluid px-0 animation-trigger margin-spacing-top pacientet-container">
    <div class="pacientet-bg">
        <picture>
            <source media="(min-width:431px)" srcset="<?php echo $foto_desktop['url']; ?>" />
            <img src="<?php echo $foto_mobile['url']; ?>" alt="<?php echo $foto_mobile['alt']; ?>" />
        </picture>
    </div>
    <div class="container pacientet-content">
    <div class='row'>
        <div class='col-12'>

            <div class="p-transformimet-texts animated-items-holder">

                <div class="p-transformimet-title">
                    <h2 class="heading with-clip"><?php echo $titulli; ?></h2>
                </div>

                <div class="p-transformimet-text">
                    <p class="body-text"><?php echo $tekst; ?></p>
                    <span class="body-text"><?php echo $tekst_per_hover; ?></span>
                </div>


            </div>

            <div class="p-transformimet-dropdown">
                <div class="dropdown-holder">
                    <div class="dropdown-title">

                        <span class="body-text"><?php echo $dropdown_tekst; ?></span>

                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7" viewBox="0 0 12 7" fill="none">
                            <path d="M5.46967 6.62818C5.76256 6.92108 6.23744 6.92108 6.53033 6.62818L11.3033 1.85521C11.5962 1.56232 11.5962 1.08744 11.3033 0.794551C11.0104 0.501658 10.5355 0.501658 10.2426 0.794551L6 5.03719L1.75736 0.794551C1.46447 0.501658 0.989593 0.501658 0.696699 0.794551C0.403806 1.08744 0.403806 1.56232 0.696699 1.85521L5.46967 6.62818ZM5.25 6.01318V6.09785L6.75 6.09785V6.01318L5.25 6.01318Z" fill="#022C3D"/>
                        </svg>
                    </div>

                    <div class="dropdown-box">
                    <?php 
                        $args = array(
                            'post_type'      => 'sherbime', // Replace 'your_custom_post_type' with your actual custom post type name
                            'posts_per_page' => -1, // Limit to 8 posts
                            'orderby'        => 'date', // Sort by date
                            'order'          => 'DESC',
                        // Order by descending date (newest first)
                        );
                        $query = new WP_Query($args);
                    ?>

                    <?php if($query->have_posts()): $j=0;
                        while($query->have_posts()):$query->the_post();
                        $titulli_en = '';
                        $titulli_it = ''; ?>
                            <?php if(have_rows('pershkrimet')):
                            while(have_rows('pershkrimet')):the_row();
                            $titulli_en = get_sub_field('titulli_en');
                            $titulli_it = get_sub_field('titulli_it'); ?>

                            <?php endwhile;
                            endif; ?>
                            <button type="button" class="button-here <?php if($j===0){echo "active-s-service-button";} ?>" id="service-btn-target-<?= the_ID(); ?>" data-target="<?php echo the_ID(); ?>">
                            <?php if(have_rows('icon')):
                            while(have_rows('icon')):the_row();
                            $icon_transparent = get_sub_field('ikona_e_kalter');
                            $icona_tjeter = get_sub_field('ikona_tjeter');
                            $icon_white = get_sub_field('ikona_e_bardh'); ?>
                                <div class="two-icons-holder p-pacientet-icon">
                                    <div class='p-pacientet-visible-first-icon absolute-icon'>
                                        <img src="<?php echo $icon_transparent['url']; ?>" alt="<?php echo $icon_transparent['alt']; ?>" loading="lazy" />
                                    </div>

                                    <div class="p-pacientet-not-visible-icon absolute-icon">
                                        <img src="<?php echo $icona_tjeter['url']; ?>" alt="<?php echo $icona_tjeter['alt']; ?>" loading="lazy" />
                                    </div>

                                    <div class="p-pacientent-not-visible-mobile-icon absolute-icon">
                                        <img src="<?php echo $icon_white['url']; ?>" alt="<?php echo $icon_white['alt']; ?>" loading="lazy" />
                                    </div>
                                </div>

                                <div class="p-pacientet-title-sherbim">
                                    <span class="body-text"><?php if($current_language==='sq'){echo the_title();}else if($current_language==='en'){ echo $titulli_en; }else{ echo $titulli_it; } ?></span>
                                </div>

                            <?php endwhile;
                            endif; ?>
                             
                            </button>
                        <?php $j++;
                        endwhile;
                        endif; 
                        wp_reset_postdata();?>
                    </div>

                </div>
            </div>

        </div>

        <div class="col-12">
            <div class="p-pacientet-sherbimet">
            <?php if($query->have_posts()): $i=0;
                        while($query->have_posts()):$query->the_post(); ?>
                    <div class="p-pacientet-single-sherbim   <?php if($i===0){echo "active-pacientet-sherbim";} ?>"  data-id="<?php echo the_ID(); ?>" id="<?php echo the_ID(); ?>">
                        <?php if(have_rows('pacientet')):
                            while(have_rows('pacientet')):the_row();
                            $imazhet = get_sub_field('imazhet');
                            if(!$imazhet){
                                $imazhet = [];
                            }
                            $myCount = count($imazhet);
                                 ?>
                                <div class="p-pacientet-teeth-wrapper a<?php echo the_ID(); ?>" id="<?php echo the_ID(); ?>">
                            <?php if(have_rows('imazhet')): $i=0;
                            while(have_rows('imazhet') && $i<8):the_row();
                            $pas_mobile = get_sub_field('pas_mobile');
                            $pas_desktop = get_sub_field('pas_desktop');
                            $para_mobile = get_sub_field('para_mobile');
                            $para_desktop = get_sub_field('para_desktop'); ?>
                            	<?php get_template_part('template-parts/content', 'teeth', array(
								'after_mobile' => $pas_mobile,
								'after_desktop' =>$pas_desktop,
								'before_mobile' => $para_mobile,
								'before_desktop' => $para_desktop
							)); ?>
                            <?php $i++;
                            endwhile;
                            endif; ?>
                                </div>
                            <?php if($myCount>8): ?>
                            <div class="load-more-button ">
                                <button type="button" class="linear-link cream-linear"  data-target="<?php echo the_ID(); ?>" data-index="1" data-count="<?php echo $myCount; ?>">
                                    <span><?php if($current_language==='sq'){ echo 'Shiko më shumë';}else if($current_language==='en'){echo 'See more';}else{ echo 'Vedi altro';} ?></span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7" viewBox="0 0 12 7" fill="none">
                                        <path d="M5.51801 6.62553C5.8109 6.91842 6.28578 6.91842 6.57867 6.62553L11.3516 1.85256C11.6445 1.55967 11.6445 1.08479 11.3516 0.791899C11.0587 0.499005 10.5839 0.499005 10.291 0.791899L6.04834 5.03454L1.8057 0.791899C1.51281 0.499005 1.03793 0.499005 0.745039 0.791899C0.452146 1.08479 0.452146 1.55967 0.745039 1.85256L5.51801 6.62553ZM5.29834 6V6.0952H6.79834V6H5.29834Z" fill="white"/>
                                    </svg>
                                </button>
                            </div>
                        <?php endif; ?>
                        <?php endwhile;
                    endif; ?>
                    </div>
                <?php $i++;
                endwhile;
                endif;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    </div>
</section>
<?php endif;
 ?>


<?php
$shkrimet = []; ?>
	<?php if(have_rows('klientet', 6)):
	while(have_rows('klientet', 6)):the_row();
		$shkrimet = get_sub_field('shkrimet');  ?>
<?php endwhile;
endif; 
wp_reset_postdata();?>
<?php if(have_rows('klientet')):the_row();
	$titulli = get_sub_field('titulli');
	$imazhi_mobile = get_sub_field('imazhi_mobile');
	$imazhi_desktop = get_sub_field('imazhi_desktop');
	?>


	
	<?php get_template_part('template-parts/content', 'klientet', array(
		'titulli'=>$titulli,
		'imazhi_mobile'=>$imazhi_mobile,
		'imazhi_desktop'=>$imazhi_desktop,
		'shkrimet'=>$shkrimet

	)); ?>


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
    'no_spacing'=>true
)); ?>
<?php endif; ?>



<?php get_footer(); ?>
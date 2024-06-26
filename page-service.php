<?php 
/* Template Name: Sherbimet */
get_header(); 
?>
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

<?php if(have_rows('sherbime')):the_row();
$titulli = get_sub_field('titulli'); ?>
<section class="container animation-trigger spacing-top">
    <div class="row">
        <div class="col-12 col-lg-6 animated-items-holder">
            <div class="p-service-sherbime-title">
                <h2 class="heading with-clip"><?php echo $titulli; ?></h2>
            </div>
</div>
<?php $current_language = pll_current_language(); ?>
<div class="col-12">
            <div class="p-service-triggers-holder">
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

    <?php if($query->have_posts()): $i=0;
        while($query->have_posts()):$query->the_post(); 
        $title_en = "";
        $title_it = "";?>
        <?php if(have_rows('pershkrimet')):the_row(); 
        $title_en = get_sub_field('titulli_en');
        $title_it = get_sub_field('titulli_it');?>
        
        <?php endif; ?>
            <button type="button" data-target="<?php echo $i; ?>" data-id="<?php echo the_ID(); ?>" class="single-sherbim <?php if($i===0){echo "active-s-sherbim";} ?>">
                <?php if(have_rows('icon')):
                while(have_rows('icon')):the_row();
                $icon_transparent = get_sub_field('ikona_e_kalter');
                $icona_tjeter = get_sub_field('ikona_tjeter'); ?>
                    <div class="two-icons-holder">
                        <div class='visible-first-icon absolute-icon'>
                            <img src="<?php echo $icon_transparent['url']; ?>" alt="<?php echo $icon_transparent['alt']; ?>" />
                        </div>

                        <div class="not-visible-icon absolute-icon">
                            <img src="<?php echo $icona_tjeter['url']; ?>" alt="<?php echo $icona_tjeter['alt']; ?>" />
                        </div>
                    </div>

                    <div class="title-sherbim">
                        <p class="body-text"><?php if($current_language==='sq'){echo the_title();}else if($current_language==='en'){echo $title_en;}else{echo  $title_it; } ?></p>
                    </div>

                <?php endwhile;
                endif; ?>
            </button>
        <?php 
        $i++;    
    endwhile;
    endif;
    wp_reset_postdata(); ?>
            </div>
        </div>

        <div class="col-12 p-service-items">
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

    <?php if($query->have_posts()): $i=0;
        while($query->have_posts()):$query->the_post(); ?>
        <?php if(have_rows('pershkrimet')):the_row(); 
        $imazhi_mobile = get_sub_field('imazhi_mobile');
        $imazhi_desktop = get_sub_field('imazhi_desktop');
        $language_en = get_sub_field('titulli_en');
        $language_it = get_sub_field('titulli_it');
        ?>
        <div class='p-service-single-item <?php if($i===0){ echo "p-service-active-item";} ?>' id="<?php echo the_ID(); ?>" data-id="<?php echo the_ID(); ?>" data-target="<?php echo $i; ?>">
            <div class="p-service-single-item-image">
                <picture>
                    <source media="(min-width:431px)" srcset="<?php echo $imazhi_desktop['url']; ?>" />
                    <img src="<?php echo $imazhi_mobile['url']; ?>" alt="<?php echo $imazhi_mobile['alt']; ?>" />
                </picture>
            </div>

            <?php if($current_language==='sq'){ ?> 

            <div class="p-service-single-item-texts-link">
                <div class="p-service-single-item-text">
                    <div class="p-service-single-item-title">
                        <span class="body-text"><?php echo the_title(); ?></span>
                    </div>
                    <?php if(have_rows('tekstet')):
                    while(have_rows('tekstet')):the_row();
                    $tekst = get_sub_field('tekst'); ?>
                        <p class="body-text"><?php echo $tekst; ?></p>
                    <?php endwhile;
                    endif; ?>
                </div>

                <div class="p-service-single-item-links">
                    <?php if(have_rows('linkat')): $j=0;
                    while(have_rows('linkat')):the_row();
                    $teksti_i_linkut = get_sub_field('teksti_i_linkut');
                    $linku = get_sub_field('linku'); ?>
                    <a href="<?php echo $linku; ?>" class="linear-link <?php if($j===1){ echo "white-link";} ?>">
                                        <span><?php echo $teksti_i_linkut; ?></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                                        <path d="M6.31449 6.96295C6.60739 6.67005 6.60739 6.19518 6.31449 5.90229L1.54152 1.12932C1.24863 0.836423 0.773756 0.836424 0.480863 1.12932C0.18797 1.42221 0.18797 1.89708 0.480863 2.18998L4.7235 6.43262L0.480864 10.6753C0.187971 10.9682 0.187971 11.443 0.480864 11.7359C0.773757 12.0288 1.24863 12.0288 1.54152 11.7359L6.31449 6.96295ZM5.68896 7.18262L5.78416 7.18262L5.78416 5.68262L5.68896 5.68262L5.68896 7.18262Z" fill="white"/>
                                        </svg>
                                    </a>
                    <?php $j++;
                    endwhile;
                    endif; ?>
                </div>
            </div>

            <?php }else if($current_language==='en'){ ?>
                <div class="p-service-single-item-texts-link">
                <div class="p-service-single-item-text">
                    <div class="p-service-single-item-title">
                        <span class="body-text"><?php echo $language_en; ?></span>
                    </div>
                    <?php if(have_rows('tekstet_en')):
                    while(have_rows('tekstet_en')):the_row();
                    $tekst = get_sub_field('tekst'); ?>
                        <p class="body-text"><?php echo $tekst; ?></p>
                    <?php endwhile;
                    endif; ?>
                </div>

                <div class="p-service-single-item-links">
                    <?php if(have_rows('linkat_en')): $j=0;
                    while(have_rows('linkat_en')):the_row();
                    $teksti_i_linkut = get_sub_field('teksti_i_linkut');
                    $linku = get_sub_field('linku'); ?>
                    <a href="<?php echo $linku; ?>" class="linear-link <?php if($j===1){ echo "white-link";} ?>">
                                        <span><?php echo $teksti_i_linkut; ?></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                                        <path d="M6.31449 6.96295C6.60739 6.67005 6.60739 6.19518 6.31449 5.90229L1.54152 1.12932C1.24863 0.836423 0.773756 0.836424 0.480863 1.12932C0.18797 1.42221 0.18797 1.89708 0.480863 2.18998L4.7235 6.43262L0.480864 10.6753C0.187971 10.9682 0.187971 11.443 0.480864 11.7359C0.773757 12.0288 1.24863 12.0288 1.54152 11.7359L6.31449 6.96295ZM5.68896 7.18262L5.78416 7.18262L5.78416 5.68262L5.68896 5.68262L5.68896 7.18262Z" fill="white"/>
                                        </svg>
                                    </a>
                    <?php $j++;
                    endwhile;
                    endif; ?>
                </div>
            </div>
                <?php }else{ ?> 
                
                    <div class="p-service-single-item-texts-link">
                <div class="p-service-single-item-text">
                    <div class="p-service-single-item-title">
                        <span class="body-text"><?php echo $language_it; ?></span>
                    </div>
                    <?php if(have_rows('tekstet_it')):
                    while(have_rows('tekstet_it')):the_row();
                    $tekst = get_sub_field('tekst'); ?>
                        <p class="body-text"><?php echo $tekst; ?></p>
                    <?php endwhile;
                    endif; ?>
                </div>

                <div class="p-service-single-item-links">
                    <?php if(have_rows('linkat_it')): $j=0;
                    while(have_rows('linkat_it')):the_row();
                    $teksti_i_linkut = get_sub_field('teksti_i_linkut');
                    $linku = get_sub_field('linku'); ?>
                    <a href="<?php echo $linku; ?>" class="linear-link <?php if($j===1){ echo "white-link";} ?>">
                                        <span><?php echo $teksti_i_linkut; ?></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                                        <path d="M6.31449 6.96295C6.60739 6.67005 6.60739 6.19518 6.31449 5.90229L1.54152 1.12932C1.24863 0.836423 0.773756 0.836424 0.480863 1.12932C0.18797 1.42221 0.18797 1.89708 0.480863 2.18998L4.7235 6.43262L0.480864 10.6753C0.187971 10.9682 0.187971 11.443 0.480864 11.7359C0.773757 12.0288 1.24863 12.0288 1.54152 11.7359L6.31449 6.96295ZM5.68896 7.18262L5.78416 7.18262L5.78416 5.68262L5.68896 5.68262L5.68896 7.18262Z" fill="white"/>
                                        </svg>
                                    </a>
                    <?php $j++;
                    endwhile;
                    endif; ?>
                </div>
            </div>

                <?php
            
            } ?>
        </div>

        <?php endif; ?>
    <?php $i++;
    endwhile;
    endif; 
    wp_reset_postdata();?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if(have_rows('pyetjet')):the_row();
$titulli = get_sub_field('titulli'); ?>

<section class="container animation-trigger spacing-top">
    <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2 col-xxl-6 offset-xxl-3 animated-items-holder">
            <div class="p-service-questions-main-title">
                <h3 class="heading with-clip"><?php echo $titulli; ?></h3>
            </div>
        </div>

        <div class="col-12 col-lg-10 offset-lg-1">
            <div class="p-service-questions-wrapper">
                <?php if(have_rows('pyetje')): $i=0;
                while(have_rows('pyetje')):the_row();
                $pyetja = get_sub_field('pyetja'); ?>
                    <div class="p-service-single-question" data-target="<?php echo $i; ?>">
                        <div class="p-service-single-question-title <?php if($i>0){ echo "p-service-single-question-border";} ?>" >
                            <p class="body-text"><?php echo $pyetja; ?></p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M26 12.4348C26 12.5848 25.9405 12.7285 25.8345 12.8345C25.7285 12.9405 25.5847 13.0001 25.4348 13.0001H0.565217C0.415312 13.0001 0.271547 12.9405 0.165548 12.8345C0.0595496 12.7285 0 12.5848 0 12.4348C0 12.2849 0.0595496 12.1412 0.165548 12.0352C0.271547 11.9292 0.415312 11.8696 0.565217 11.8696H25.4348C25.5847 11.8696 25.7285 11.9292 25.8345 12.0352C25.9405 12.1412 26 12.2849 26 12.4348Z" fill="#C29078"/>
                            <path class="remove-upper" d="M13.5652 7.15256e-07C13.7151 7.15256e-07 13.8589 0.0595498 13.9649 0.165549C14.0709 0.271547 14.1304 0.415313 14.1304 0.565218L14.1304 25.4348C14.1304 25.5847 14.0709 25.7285 13.9649 25.8345C13.8589 25.9405 13.7151 26 13.5652 26C13.4153 26 13.2715 25.9405 13.1655 25.8345C13.0595 25.7285 13 25.5847 13 25.4348L13 0.565218C13 0.415313 13.0595 0.271547 13.1655 0.165549C13.2715 0.0595498 13.4153 7.15256e-07 13.5652 7.15256e-07Z" fill="#C29078"/>
                            </svg>
                        </div>

                        <div class="p-service-single-question-answer">
                            <?php if(have_rows('pergjigje')):
                            while(have_rows('pergjigje')):the_row(); 
                            $tekst = get_sub_field('tekst');?>
                                <p class="body-text"><?php echo $tekst; ?></p>
                            <?php endwhile;
                            endif; ?>
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
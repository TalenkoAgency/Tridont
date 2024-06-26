<?php
/* Template Name: Home */

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


<?php
$current_language = pll_current_language();
if(have_rows('sherbime')):
while(have_rows('sherbime')):the_row();
$titulli = get_sub_field('titulli');
$tekst = get_sub_field('tekst');
$link_tekst = get_sub_field('link_tekst');
$linku = get_sub_field('linku'); ?>

<section class="container animation-trigger spacing-top sherbime-container spacing-bottom">
	<div class="row">
		<div class="col-12 col-lg-6 animated-items-holder">
			<div class="sherbime-items">
				<h2 class="heading with-clip"><?php echo $titulli; ?></h2>
				<p class="body-text"><?php echo $tekst; ?></p>
			</div>
			<div class="sherbime-link">
			<a href="<?php echo $linku; ?>" class="linear-link <?php if($i===1){ echo "white-link";} ?>">
                                        <span><?php echo $link_tekst; ?></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                                        <path d="M6.31449 6.96295C6.60739 6.67005 6.60739 6.19518 6.31449 5.90229L1.54152 1.12932C1.24863 0.836423 0.773756 0.836424 0.480863 1.12932C0.18797 1.42221 0.18797 1.89708 0.480863 2.18998L4.7235 6.43262L0.480864 10.6753C0.187971 10.9682 0.187971 11.443 0.480864 11.7359C0.773757 12.0288 1.24863 12.0288 1.54152 11.7359L6.31449 6.96295ZM5.68896 7.18262L5.78416 7.18262L5.78416 5.68262L5.68896 5.68262L5.68896 7.18262Z" fill="white"/>
                                        </svg>
                                    </a>
			</div>
		</div>
		<div class="col-12 col-lg-5 offset-lg-1">
			<div class="sherbime-items-wrapper">

			
			<?php 
					$args = array(
						'post_type'      => 'sherbime', // Replace 'your_custom_post_type' with your actual custom post type name
						'posts_per_page' => 2, // Limit to 8 posts
						'orderby'        => 'date', // Sort by date
						'order'          => 'DESC', // Order by descending date (newest first)
					);
					$query = new WP_Query($args);
			?>

			<?php if($query->have_posts()):
				while($query->have_posts()):$query->the_post(); ?>
				<?php if($current_language==='sq'){ ?> 
					<a href="/sherbimet/#<?php echo the_ID(); ?>" class="single-sherbim">
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
								<p class="body-text"><?php echo the_title(); ?></p>
							</div>

							<div class="lexo-me-shume-holder">
								<span class="body-text">Lexo më shumë</span>
								<svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
									<path d="M8.70711 8.70711C9.09763 8.31658 9.09763 7.68342 8.70711 7.29289L2.34315 0.928932C1.95262 0.538408 1.31946 0.538408 0.928932 0.928932C0.538408 1.31946 0.538408 1.95262 0.928932 2.34315L6.58579 8L0.928932 13.6569C0.538408 14.0474 0.538408 14.6805 0.928932 15.0711C1.31946 15.4616 1.95262 15.4616 2.34315 15.0711L8.70711 8.70711ZM7 9H8V7H7V9Z" fill="#022B3C"/>
								</svg>
							</div>
						<?php endwhile;
						endif; ?>
					</a>

					<?php }elseif($current_language==='en') {?> 
						
						<a href="/en/services/#<?php echo the_ID(); ?>" class="single-sherbim">
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
							<?php endwhile;
						endif; ?>

						<?php if(have_rows('pershkrimet')):
						while(have_rows('pershkrimet')):the_row();
						$title = get_sub_field('titulli_en'); ?>

						

							<div class="title-sherbim">
								<p class="body-text"><?php echo $title; ?></p>
							</div>

							<div class="lexo-me-shume-holder">
								<span class="body-text">Read more</span>
								<svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
									<path d="M8.70711 8.70711C9.09763 8.31658 9.09763 7.68342 8.70711 7.29289L2.34315 0.928932C1.95262 0.538408 1.31946 0.538408 0.928932 0.928932C0.538408 1.31946 0.538408 1.95262 0.928932 2.34315L6.58579 8L0.928932 13.6569C0.538408 14.0474 0.538408 14.6805 0.928932 15.0711C1.31946 15.4616 1.95262 15.4616 2.34315 15.0711L8.70711 8.70711ZM7 9H8V7H7V9Z" fill="#022B3C"/>
								</svg>
							</div>
							<?php endwhile;
						endif; ?>
					</a>
					<?php }else { ?>
						
						<a href="/it/servizi/#<?php echo the_ID(); ?>" class="single-sherbim">
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
							<?php endwhile;
						endif; ?>

						<?php if(have_rows('pershkrimet')):
						while(have_rows('pershkrimet')):the_row();
						$title = get_sub_field('titulli_it'); ?>

						

							<div class="title-sherbim">
								<p class="body-text"><?php echo $title; ?></p>
							</div>

							<div class="lexo-me-shume-holder">
								<span class="body-text">Leggi di più</span>
								<svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
									<path d="M8.70711 8.70711C9.09763 8.31658 9.09763 7.68342 8.70711 7.29289L2.34315 0.928932C1.95262 0.538408 1.31946 0.538408 0.928932 0.928932C0.538408 1.31946 0.538408 1.95262 0.928932 2.34315L6.58579 8L0.928932 13.6569C0.538408 14.0474 0.538408 14.6805 0.928932 15.0711C1.31946 15.4616 1.95262 15.4616 2.34315 15.0711L8.70711 8.70711ZM7 9H8V7H7V9Z" fill="#022B3C"/>
								</svg>
							</div>
							<?php endwhile;
						endif; ?>
					</a>
						<?php } ?>
				<?php endwhile;
			endif;
			wp_reset_postdata(); ?>
		</div>
		</div>

		<div class="col-12">
		<div class="second-sherbime">

			
<?php 
		$args = array(
			'post_type'      => 'sherbime', // Replace 'your_custom_post_type' with your actual custom post type name
			'posts_per_page' => 5, // Limit to 8 posts
			'orderby'        => 'date', // Sort by date
			'order'          => 'DESC',
			'offset'=>2 // Order by descending date (newest first)
		);
		$query = new WP_Query($args);
?>

<?php if($query->have_posts()):
	while($query->have_posts()):$query->the_post();
	$title_en =""; ?>
	<?php if(have_rows('pershkrimet')):
	while(have_rows('pershkrimet')):the_row();
	$title_en = get_sub_field('titulli_en'); ?>

	<?php endwhile;
	endif; ?>
	<?php if($current_language==='sq'){ ?> 
					<a href="/sherbimet/#<?php echo the_ID(); ?>" class="single-sherbim">
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
								<p class="body-text"><?php echo the_title(); ?></p>
							</div>

							<div class="lexo-me-shume-holder">
								<span class="body-text">Lexo më shumë</span>
								<svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
									<path d="M8.70711 8.70711C9.09763 8.31658 9.09763 7.68342 8.70711 7.29289L2.34315 0.928932C1.95262 0.538408 1.31946 0.538408 0.928932 0.928932C0.538408 1.31946 0.538408 1.95262 0.928932 2.34315L6.58579 8L0.928932 13.6569C0.538408 14.0474 0.538408 14.6805 0.928932 15.0711C1.31946 15.4616 1.95262 15.4616 2.34315 15.0711L8.70711 8.70711ZM7 9H8V7H7V9Z" fill="#022B3C"/>
								</svg>
							</div>
						<?php endwhile;
						endif; ?>
					</a>

					<?php }else if($current_language==='en') {?> 
						
						<a href="/en/services/#<?php echo the_ID(); ?>" class="single-sherbim">
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
							<?php endwhile;
						endif; ?>

						<?php if(have_rows('pershkrimet')):
						while(have_rows('pershkrimet')):the_row();
						$title = get_sub_field('titulli_en'); ?>

						

							<div class="title-sherbim">
								<p class="body-text"><?php echo $title; ?></p>
							</div>

							<div class="lexo-me-shume-holder">
								<span class="body-text">Read more</span>
								<svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
									<path d="M8.70711 8.70711C9.09763 8.31658 9.09763 7.68342 8.70711 7.29289L2.34315 0.928932C1.95262 0.538408 1.31946 0.538408 0.928932 0.928932C0.538408 1.31946 0.538408 1.95262 0.928932 2.34315L6.58579 8L0.928932 13.6569C0.538408 14.0474 0.538408 14.6805 0.928932 15.0711C1.31946 15.4616 1.95262 15.4616 2.34315 15.0711L8.70711 8.70711ZM7 9H8V7H7V9Z" fill="#022B3C"/>
								</svg>
							</div>
							<?php endwhile;
						endif; ?>
					</a>
					<?php }else{  ?>
						<a href="/it/servizi/#<?php echo the_ID(); ?>" class="single-sherbim">
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
							<?php endwhile;
						endif; ?>

						<?php if(have_rows('pershkrimet')):
						while(have_rows('pershkrimet')):the_row();
						$title = get_sub_field('titulli_it'); ?>

						

							<div class="title-sherbim">
								<p class="body-text"><?php echo $title; ?></p>
							</div>

							<div class="lexo-me-shume-holder">
								<span class="body-text">Leggi di più</span>
								<svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
									<path d="M8.70711 8.70711C9.09763 8.31658 9.09763 7.68342 8.70711 7.29289L2.34315 0.928932C1.95262 0.538408 1.31946 0.538408 0.928932 0.928932C0.538408 1.31946 0.538408 1.95262 0.928932 2.34315L6.58579 8L0.928932 13.6569C0.538408 14.0474 0.538408 14.6805 0.928932 15.0711C1.31946 15.4616 1.95262 15.4616 2.34315 15.0711L8.70711 8.70711ZM7 9H8V7H7V9Z" fill="#022B3C"/>
								</svg>
							</div>
							<?php endwhile;
						endif; ?>
					</a>
						<?php  }?>
					<?php endwhile;
				endif;
				wp_reset_postdata(); ?>
				</div>
		</div>
	</div>
</section>

<?php endwhile;
endif; ?>


<?php if(have_rows('vecant')):the_row();
$titulli = get_sub_field('titulli');
$teksti = get_sub_field('teksti');
$foto_mobile = get_sub_field('foto_mobile');
$foto_desktop = get_sub_field('foto_dekstop');
$foto_dhembi_mobile = get_sub_field('foto_dhembi_mobile');
$foto_dhembi_desktop = get_sub_field('foto_dhembi_desktop'); ?>
<section class="container-fluid animation-trigger px-0 dhembi-section">
	<div class="dhembi-main-images">
        <picture>
            <source media="(min-width:431px)" srcset="<?php echo $foto_desktop['url']; ?>">
            <img src="<?php echo $foto_mobile['url']; ?>" alt="<?php echo $foto_mobile['alt']; ?>" />
        </picture>
    </div>

	<div class="container dhembi-container">
		<div class="row">
			<div class="col-12 col-lg-6 offset-lg-3 dhembi-titles animated-items-holder">
				<div class="dhembi-title-text">
					<h3 class="heading"><?php echo $titulli; ?></h3>
					<p class="body-text"><?php echo $teksti; ?></p>
				</div>
			</div>
	

			<div class="col-12">
				<div class="dhembi-items">
					<?php if(have_rows('kualifikimet')):$i=0;
					while(have_rows('kualifikimet')):the_row();
					$icon = get_sub_field('ikona');
					$titulli = get_sub_field('titulli');
					$teksti = get_sub_field('teksti'); ?>
						<div class="dhembi-item dhembi-item-position<?php echo $i; ?>" data-target="<?php echo $i; ?>">
						<div class="dhembi-item-texts">

					
							<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
							<span class="body-text"><?php echo $titulli; ?></span>
							<p class="body-text"><?php echo $teksti; ?></p>

							</div>	

							<div class="dhembi-item-line-svg">
								<span></span>
								<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="17.2593" cy="17.7834" r="16.5166" stroke="#C29078"/>
							<circle cx="17.259" cy="17.7827" r="7.91427" fill="#C29078"/>
							</svg>
							</div>
						</div>
					<?php $i++;
					endwhile;
					endif; ?>
				
				<div class="dhembi-image">
					<picture>
						<source media="(min-width:431px)" srcset="<?php echo $foto_dhembi_desktop['url']; ?>">
						<img src="<?php echo $foto_dhembi_mobile['url']; ?>" alt="<?php echo $foto_dhembi_mobile['alt']; ?>" />
					</picture>
				</div>

				</div>
			</div>
		</div>
	</div>

</section>
<?php endif; ?>

<?php if(have_rows('personalizuar')):the_row();
$titulli = get_sub_field('titulli');
$teksti = get_sub_field('teksti');
$linku = get_sub_field('linku');
$teksti_i_linkut = get_sub_field('teksti_i_linkut');
$video = get_sub_field('video'); ?>
<section class="container animation-trigger personalizuar-container spacing-top spacing-bottom">
	<div class="row">
		<div class="col-12">
			<div class="personalizuar-tekst-buton animated-items-holder">
				<div class="personalizuar-titulli-teksti">
					<h4 class="heading with-clip"><?php echo $titulli; ?></h4>
					<p class="body-text"><?php echo $teksti; ?></p>
				</div>
				<a href="<?php echo $linku; ?>" class="linear-link ?>">
                                        <span><?php echo $teksti_i_linkut; ?></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                                        <path d="M6.31449 6.96295C6.60739 6.67005 6.60739 6.19518 6.31449 5.90229L1.54152 1.12932C1.24863 0.836423 0.773756 0.836424 0.480863 1.12932C0.18797 1.42221 0.18797 1.89708 0.480863 2.18998L4.7235 6.43262L0.480864 10.6753C0.187971 10.9682 0.187971 11.443 0.480864 11.7359C0.773757 12.0288 1.24863 12.0288 1.54152 11.7359L6.31449 6.96295ZM5.68896 7.18262L5.78416 7.18262L5.78416 5.68262L5.68896 5.68262L5.68896 7.18262Z" fill="white"/>
                                        </svg>
                                    </a>
			</div>
	
		</div>

		<div class="col-12">
			<div class="video-wrapper">
				<video muted loop>
					<source src="<?php echo $video['url']; ?>" type="video/mp4">
					Your browser does not support video tag.
				</video>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<?php if(have_rows('transformimet')):the_row(); 
$titulli = get_sub_field('titulli');
$teksti = get_sub_field('teksti');
$linku = get_sub_field('linku');
$teksti_i_linkut = get_sub_field('teksti_i_linkut');
$imazhi_mobile = get_sub_field('imazhi_mobile');
$imazhi_desktop = get_sub_field('imazhi_desktop'); ?>
<section class="container-fluid animation-trigger px-0 transformimet-container">
	<div class="dhembi-main-images">
			<picture>
				<source media="(min-width:431px)" srcset="<?php echo $imazhi_desktop['url']; ?>">
				<img src="<?php echo $imazhi_mobile['url']; ?>" alt="<?php echo $imazhi_mobile['alt']; ?>" />
			</picture>
		</div>

		<div class="container transformimet-second-container">
			<div class='row'>
				<div class="col-12">
					<div class="transformimet-items personalizuar-tekst-buton animated-items-holder">
						<div class="transformimet-text personalizuar-titulli-teksti">
							<h5 class="heading"><?php echo $titulli; ?></h5>
							<p class="body-text"><?php echo $teksti; ?></p>
						</div>
						<a href="<?php echo $linku; ?>" class="linear-link cream-linear">
                                        <span><?php echo $teksti_i_linkut; ?></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                                        <path d="M6.31449 6.96295C6.60739 6.67005 6.60739 6.19518 6.31449 5.90229L1.54152 1.12932C1.24863 0.836423 0.773756 0.836424 0.480863 1.12932C0.18797 1.42221 0.18797 1.89708 0.480863 2.18998L4.7235 6.43262L0.480864 10.6753C0.187971 10.9682 0.187971 11.443 0.480864 11.7359C0.773757 12.0288 1.24863 12.0288 1.54152 11.7359L6.31449 6.96295ZM5.68896 7.18262L5.78416 7.18262L5.78416 5.68262L5.68896 5.68262L5.68896 7.18262Z" fill="white"/>
                                        </svg>
                                    </a>
					</div>
				</div>

				<div class="col-12">
					<div class="teeth-container">
						<?php if(have_rows('imazhet')):
						while(have_rows('imazhet')):the_row(); 
						$pas_mobile = get_sub_field('pas_mobile');
						$pas_desktop = get_sub_field('pas_desktop');
						$para_mobile = get_sub_field('para_mobile');
						$para_desktop = get_sub_field('para_desktop');?>
							<?php get_template_part('template-parts/content', 'teeth', array(
								'after_mobile' => $pas_mobile,
								'after_desktop' =>$pas_desktop,
								'before_mobile' => $para_mobile,
								'before_desktop' => $para_desktop
							)); ?>
						<?php endwhile;
						endif; ?>
					</div>
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

<?php if(have_rows('kontakti')):
while(have_rows('kontakti')):the_row(); 
$titulli = get_sub_field('titulli');
$teksti = get_sub_field('teksti');
$imazhi_mobile = get_sub_field('imazhi_i_hartes_mobile');
$imazhi_desktop = get_sub_field('imazhi_i_hartes_desktop');
$lokacionet = get_sub_field('lokacionet');?>
<section class="container animation-trigger contact-section spacing-top spacing-bottom">
	<?php get_template_part('template-parts/content', 'kontakt', array(
		'current_language' => $current_language,
		'titulli'=>$titulli,
		'teksti'=>$teksti,
		'imazhi_mobile'=>$imazhi_mobile,
		'imazhi_desktop'=>$imazhi_desktop,
		'lokacionet'=>$lokacionet
	)); ?>
	</section>
<?php endwhile;
endif; ?>

<?php

get_footer();

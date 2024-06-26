<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TalenkoTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="container-fluid px-0">

<?php 	
			$menu_items = wp_get_nav_menu_items('Menu 1');
			$second_menu_items = wp_get_nav_menu_items('Menu 2');
			$third_menu_items = wp_get_nav_menu_items('Menu 3');
			$current_language = pll_current_language();
			
					
				global $post;
				$thePostID;
				if($post){
					$thePostID = $post->ID;
				}else{
					$thePostId = 99999;
				}
				 ?>
	<nav class="container">
		<div class="row">
			<ul class="col-lg-1 social-desktop">
				<li>
					<a href="https://www.instagram.com/tridont_dental/?hl=<?=$current_language;?>" target="_blank" aria-label="Instagram">
						<svg class="with-stroke" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
							<path d="M17.0004 21.5559C17.9434 21.5559 18.8477 21.1813 19.5145 20.5145C20.1813 19.8477 20.5559 18.9434 20.5559 18.0004C20.5559 17.0574 20.1813 16.153 19.5145 15.4862C18.8477 14.8194 17.9434 14.4448 17.0004 14.4448C16.0574 14.4448 15.153 14.8194 14.4862 15.4862C13.8194 16.153 13.4448 17.0574 13.4448 18.0004C13.4448 18.9434 13.8194 19.8477 14.4862 20.5145C15.153 21.1813 16.0574 21.5559 17.0004 21.5559Z" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M9 21.5556V14.4444C9 13.2657 9.46825 12.1352 10.3017 11.3017C11.1352 10.4683 12.2657 10 13.4444 10H20.5556C21.7343 10 22.8648 10.4683 23.6983 11.3017C24.5317 12.1352 25 13.2657 25 14.4444V21.5556C25 22.7343 24.5317 23.8648 23.6983 24.6983C22.8648 25.5317 21.7343 26 20.5556 26H13.4444C12.2657 26 11.1352 25.5317 10.3017 24.6983C9.46825 23.8648 9 22.7343 9 21.5556Z" stroke="#1E1E1E" stroke-width="1.5"/>
							<path d="M21.8892 13.1198L21.8978 13.1104" stroke="#1E1E1E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
							<circle cx="17.5" cy="17.5" r="16.75" stroke="#1E1E1E" stroke-width="1.2"/>
						</svg>
					</a>
				</li>
				<li>
					<a href="https://www.facebook.com/TriDont.Albania" target="_blank" aria-label="Facebook">
						<svg class="with-stroke" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
							<circle cx="17.5" cy="17.5" r="16.75" stroke="#1E1E1E" stroke-width="1.2"/>
							<path d="M23 8H20C18.6739 8 17.4021 8.52678 16.4645 9.46447C15.5268 10.4021 15 11.6739 15 13V16H12V20H15V28H19V20H22L23 16H19V13C19 12.7348 19.1054 12.4804 19.2929 12.2929C19.4804 12.1054 19.7348 12 20 12H23V8Z" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</a>
				</li>
				<li>
					<a href="https://www.tiktok.com/@tridontdental" target="_blank" aria-label="Tik Tok">
					<svg class="with-fill" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <circle cx="15.9677" cy="15.9677" r="15.3677" stroke="#1E1E1E" stroke-width="1.2"/>
  <path d="M17 8H18.98C19.124 8.715 19.52 9.617 20.215 10.512C20.895 11.389 21.797 12 23 12V14C21.247 14 19.93 13.186 19 12.171V19C19 19.9889 18.7068 20.9556 18.1573 21.7779C17.6079 22.6001 16.8271 23.241 15.9134 23.6194C14.9998 23.9978 13.9945 24.0969 13.0246 23.9039C12.0546 23.711 11.1637 23.2348 10.4645 22.5355C9.76521 21.8363 9.289 20.9454 9.09608 19.9755C8.90315 19.0055 9.00217 18.0002 9.3806 17.0866C9.75904 16.173 10.3999 15.3921 11.2222 14.8427C12.0444 14.2932 13.0111 14 14 14V16C13.4067 16 12.8266 16.1759 12.3333 16.5056C11.8399 16.8352 11.4554 17.3038 11.2284 17.8519C11.0013 18.4001 10.9419 19.0033 11.0576 19.5853C11.1734 20.1672 11.4591 20.7018 11.8787 21.1213C12.2982 21.5409 12.8328 21.8266 13.4147 21.9424C13.9967 22.0581 14.5999 21.9987 15.1481 21.7716C15.6962 21.5446 16.1648 21.1601 16.4944 20.6667C16.8241 20.1734 17 19.5933 17 19V8Z" fill="#1E1E1E"/>
</svg>
					</a>
				</li>		
			</ul>
			<ul class="col-xxl-3 col-xl-4  col-lg-5  offset-xxl-1 menu-items-desktop">
			<?php if($current_language==='sq'){ ?> 
					<?php $i=0;
					foreach($menu_items as $menu_item):
						?>
						<?php if($i<3){?>
						<li class="<?php if($menu_item->object_id==$thePostID){ echo "active-link";} ?>">
							<a href="<?php echo $menu_item->url; ?>">
								<?php echo $menu_item->title; ?>
							</a>
						</li>	
							
						<?php }else {break; }?>
							
		

					
					<?php $i++;
						endforeach;
					?>
					<?php }else if($current_language==='en'){ ?>
						<?php $i=0;
					foreach($second_menu_items as $menu_item):
						?>
						<?php if($i<3){?>
						<li class="<?php if($menu_item->object_id==$thePostID){ echo "active-link";} ?>">
							<a href="<?php echo $menu_item->url; ?>">
								<?php echo $menu_item->title; ?>
							</a>
						</li>	
							
						<?php }else {break; }?>
							
		

					
					<?php $i++;
						endforeach;
					?>

						 <?php }else{ ?> 
							
							<?php $i=0;
					foreach($third_menu_items as $menu_item):
						?>
						<?php if($i<3){?>
						<li class="<?php if($menu_item->object_id==$thePostID){ echo "active-link";} ?>">
							<a href="<?php echo $menu_item->url; ?>">
								<?php echo $menu_item->title; ?>
							</a>
						</li>	
							
						<?php }else {break; }?>
							
		

					
					<?php $i++;
						endforeach;
					?><?php } ?>
			</ul>
			<ul class="col-3 col-lg-1 col-xl-2 main-logo">
				<?php if($current_language==='sq'){ ?>
					
					<a href="/">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/Logo.webp'; ?>" alt="Tridont Logo" />
				</a>
					<?php }else if($current_language==='en'){ ?>
						<a href="/en">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/Logo.webp'; ?>" alt="Tridont Logo" />
				</a>
						 <?php }else{ ?>
							<a href="/it">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/Logo.webp'; ?>" alt="Tridont Logo" />
				</a>
							<?php } ?>
			
			
			</ul>

			<ul class="col-lg-5 col-xl-4 col-xxl-3  second-menu-items-desktop">
			<?php if($current_language==='sq'){ ?> 
					<?php $i=0;
					foreach($menu_items as $menu_item):
						?>
						<?php if($i>=3){?>
							<?php if($i===3){ ?> 
								<li>
									<div class="second-menu-items-sherbimet">
										<div class="second-menu-items-sherbimet-title">
											<span class="menu-item-text"><?php echo $menu_item->title; ?></span>
												<svg xmlns="http://www.w3.org/2000/svg" width="12" height="7" viewBox="0 0 12 7" fill="none">
													<path d="M5.46967 6.53033C5.76256 6.82322 6.23744 6.82322 6.53033 6.53033L11.3033 1.75736C11.5962 1.46447 11.5962 0.989593 11.3033 0.696699C11.0104 0.403806 10.5355 0.403806 10.2426 0.696699L6 4.93934L1.75736 0.696699C1.46447 0.403806 0.989593 0.403806 0.696699 0.696699C0.403806 0.989593 0.403806 1.46447 0.696699 1.75736L5.46967 6.53033ZM5.25 5V6H6.75V5H5.25Z" fill="#1E1E1E"/>
												</svg>
										</div>
										<div class="second-menu-items-list">
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

											<?php if($query->have_posts()): 
												while($query->have_posts()):$query->the_post(); ?>
												 
													<a href="/sherbimet/#<?php echo the_ID(); ?>">
														<span class="menu-item-text"><?php echo the_title(); ?></span>
													</a>
												
											<?php endwhile;
											endif;
											wp_reset_postdata(); ?>
										</div>
									</div>
								</li>
							<?php }else{ ?> 
						<li class="<?php if($menu_item->object_id==$thePostID){ echo "active-link";} ?>">
							<a href="<?php echo $menu_item->url; ?>">
								<?php echo $menu_item->title; ?>
							</a>
						</li>	

						<?php } ?>
							
						<?php }?>
							
		

					
					<?php $i++;
						endforeach;
					?>
					<?php }else if($current_language==='en'){ ?>
						<?php $i=0;
					foreach($second_menu_items as $menu_item):
						?>
						<?php if($i>=3){?>
							<?php if($i===3){ ?> 
								<li class="<?php if($menu_item->object_id==$thePostID){ echo "active-link";} ?>">
									<div class="second-menu-items-sherbimet">
										<div class="second-menu-items-sherbimet-title">
											<span class="menu-item-text"><?php echo $menu_item->title; ?></span>
												<svg xmlns="http://www.w3.org/2000/svg" width="12" height="7" viewBox="0 0 12 7" fill="none">
													<path d="M5.46967 6.53033C5.76256 6.82322 6.23744 6.82322 6.53033 6.53033L11.3033 1.75736C11.5962 1.46447 11.5962 0.989593 11.3033 0.696699C11.0104 0.403806 10.5355 0.403806 10.2426 0.696699L6 4.93934L1.75736 0.696699C1.46447 0.403806 0.989593 0.403806 0.696699 0.696699C0.403806 0.989593 0.403806 1.46447 0.696699 1.75736L5.46967 6.53033ZM5.25 5V6H6.75V5H5.25Z" fill="#1E1E1E"/>
												</svg>
										</div>
										<div class="second-menu-items-list">
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

											<?php if($query->have_posts()): 
												while($query->have_posts()):$query->the_post(); 	$title_en = ""; ?>
												<?php if(have_rows('pershkrimet')):
												while(have_rows('pershkrimet')):the_row();
												$titulli_en = get_sub_field('titulli_en'); ?>

												<?php endwhile;
												endif; ?>
													<a href="/en/services/#<?php echo the_ID(); ?>">
														<span class="menu-item-text"><?php echo $titulli_en; ?></span>
													</a>
												
											<?php endwhile;
											endif;
											wp_reset_postdata(); ?>
										</div>
									</div>
								</li>
							<?php }else{ ?> 
						<li class="<?php if($menu_item->object_id==$thePostID){ echo "active-link";} ?>">
							<a href="<?php echo $menu_item->url; ?>">
								<?php echo $menu_item->title; ?>
							</a>
						</li>	

						<?php } ?>
							
						<?php }?>
							
		

					
					<?php $i++;
						endforeach;
					?>
					<?php }else{ ?>
						
						<?php $i=0;
					foreach($third_menu_items as $menu_item):
						?>
						<?php if($i>=3){?>
							<?php if($i===3){ ?> 
								<li class="<?php if($menu_item->object_id==$thePostID){ echo "active-link";} ?>">
									<div class="second-menu-items-sherbimet">
										<div class="second-menu-items-sherbimet-title">
											<span class="menu-item-text"><?php echo $menu_item->title; ?></span>
												<svg xmlns="http://www.w3.org/2000/svg" width="12" height="7" viewBox="0 0 12 7" fill="none">
													<path d="M5.46967 6.53033C5.76256 6.82322 6.23744 6.82322 6.53033 6.53033L11.3033 1.75736C11.5962 1.46447 11.5962 0.989593 11.3033 0.696699C11.0104 0.403806 10.5355 0.403806 10.2426 0.696699L6 4.93934L1.75736 0.696699C1.46447 0.403806 0.989593 0.403806 0.696699 0.696699C0.403806 0.989593 0.403806 1.46447 0.696699 1.75736L5.46967 6.53033ZM5.25 5V6H6.75V5H5.25Z" fill="#1E1E1E"/>
												</svg>
										</div>
										<div class="second-menu-items-list">
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

											<?php if($query->have_posts()): 
												while($query->have_posts()):$query->the_post();
												$title_it = ""; ?>
												 <?php if(have_rows('pershkrimet')):
												 while(have_rows('pershkrimet')):the_row();
												 $title_it = get_sub_field('titulli_it'); ?>

												 <?php endwhile;
												 endif; ?>
													<a href="/it/servizi/#<?php echo the_ID(); ?>">
														<span class="menu-item-text"><?php echo $title_it; ?></span>
													</a>
												
											<?php endwhile;
											endif;
											wp_reset_postdata(); ?>
										</div>
									</div>
								</li>
							<?php }else{ ?> 
						<li class="<?php if($menu_item->object_id==$thePostID){ echo "active-link";} ?>">
							<a href="<?php echo $menu_item->url; ?>">
								<?php echo $menu_item->title; ?>
							</a>
						</li>	

						<?php } ?>
							
						<?php }?>
							
		

					
					<?php $i++;
						endforeach;
					?>
						<?php } ?>
			</ul>

			<ul class="col-lg-1 col-xxl-1 offset-xxl-1 language-switcher-desktop">
			<?php 
							$my_dropdown2 = pll_the_languages(array('raw'=>1,   'echo'=>0));
						
							?>
						
							
							<li class="language-dropdown-desktop">
								<?php foreach($my_dropdown2 as $dropdown): ?>
									<?php if($dropdown['current_lang']): ?>
									<div class="main-language-dropdown-desktop">
										<img title='<?php echo $dropdown['name']; ?>' src="<?php echo $dropdown['flag']; ?>" alt="<?php echo $dropdown['name']; ?>" />
										<svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none">
										<path d="M5.46967 7.02398C5.76256 7.31688 6.23744 7.31688 6.53033 7.02398L11.3033 2.25101C11.5962 1.95812 11.5962 1.48324 11.3033 1.19035C11.0104 0.897458 10.5355 0.897458 10.2426 1.19035L6 5.43299L1.75736 1.19035C1.46447 0.897458 0.989592 0.897458 0.696699 1.19035C0.403806 1.48324 0.403806 1.95812 0.696699 2.25101L5.46967 7.02398ZM5.25 6V6.49365H6.75V6H5.25Z" fill="black"/>
										</svg>
									</div>
									<?php endif; ?>
								<?php endforeach; ?>
									<div class="language-dropdown-items-desktop">
										<?php foreach($my_dropdown2 as $dropdown): ?>
										
												<?php if($dropdown['current_lang']===false): ?>
													<a href="<?php echo $dropdown['url']; ?>">
														<img src="<?php echo $dropdown['flag']; ?>" alt="<?php echo $dropdown['name']; ?>" />
													</a>
												<?php endif; ?>
											<?php endforeach; ?>
									</div>
							
							</li>
			</ul>

			<div class="col-3 offset-6 hamburger-box">
				<div class="hamburger-trigger">
					<span class="first-hamburger"></span>
					<span class="second-hamburger"></span>
				</div>
			</div>
		</div>
	</nav>

	<div class="full-screen-menu" id="mobile-menu">
		<div class="container">
			<div class="row">
				<div class="col-12 full-screen-menu-list">
					<ul>
						<?php if($current_language==='sq'){
							 ?> 
					<?php 
					$i=0;
					foreach($menu_items as $menu_item): ?>
						<?php if($i===3){ ?> 
							<li class="service-dropdown">
								<div class='service-dropdown-title'>
									<span><?php echo $menu_item->title; ?></span>
									<svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none">
										<path d="M5.46967 7.02398C5.76256 7.31688 6.23744 7.31688 6.53033 7.02398L11.3033 2.25101C11.5962 1.95812 11.5962 1.48324 11.3033 1.19035C11.0104 0.897458 10.5355 0.897458 10.2426 1.19035L6 5.43299L1.75736 1.19035C1.46447 0.897458 0.989592 0.897458 0.696699 1.19035C0.403806 1.48324 0.403806 1.95812 0.696699 2.25101L5.46967 7.02398ZM5.25 6V6.49365H6.75V6H5.25Z" fill="black"/>
										</svg>
								</div>

								<div class="services-dropdown-list">
								<?php if($query->have_posts()): 
												while($query->have_posts()):$query->the_post(); ?>
												 
													<a href="/sherbimet/#<?php echo the_ID(); ?>" id="hash-link">
														<span class="menu-item-text"><?php echo the_title(); ?></span>
													</a>
												
											<?php endwhile;
											endif;
											wp_reset_postdata(); ?>
								</div>
							</li>
							<?php }else { ?> 
						<li class="<?php if($menu_item->object_id==$thePostID){ echo "active-mobile-link";} ?>">
						
							<a href="<?php echo $menu_item->url; ?>">
								<?php echo $menu_item->title; ?>
							</a>
						</li>

						<?php }?>

					
						<?php $i++;
					endforeach; ?>
						<?php }else if($current_language==='en'){
							$i=0;?>
							<?php foreach($second_menu_items as $menu_item): ?>
					
								<?php if($i===3){ ?> 
							<li class="service-dropdown">
								<div class='service-dropdown-title'>
									<span><?php echo $menu_item->title; ?></span>
									<svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none">
										<path d="M5.46967 7.02398C5.76256 7.31688 6.23744 7.31688 6.53033 7.02398L11.3033 2.25101C11.5962 1.95812 11.5962 1.48324 11.3033 1.19035C11.0104 0.897458 10.5355 0.897458 10.2426 1.19035L6 5.43299L1.75736 1.19035C1.46447 0.897458 0.989592 0.897458 0.696699 1.19035C0.403806 1.48324 0.403806 1.95812 0.696699 2.25101L5.46967 7.02398ZM5.25 6V6.49365H6.75V6H5.25Z" fill="black"/>
										</svg>
								</div>

								<div class="services-dropdown-list">
								<?php if($query->have_posts()): 
												while($query->have_posts()):$query->the_post();
												 ?>
												 
													<a href="/en/services/#<?php echo the_ID(); ?>">
													<?php if(have_rows('pershkrimet')):
													while(have_rows('pershkrimet')):the_row(); 
													$titulli = get_sub_field('titulli_en');?>
														<span class="menu-item-text"><?php echo $titulli; ?></span>
														<?php endwhile;
														endif; ?>
													</a>
												
											<?php endwhile;
											endif;
											wp_reset_postdata(); ?>
								</div>
							</li>
							<?php }else { ?> 
						<li class="<?php if($menu_item->object_id==$thePostID){ echo "active-mobile-link";} ?>">
						
							<a href="<?php echo $menu_item->url; ?>">
								<?php echo $menu_item->title; ?>
							</a>
						</li>

						<?php }?>

							
								<?php $i++;
							 endforeach; ?>
							<?php }else { ?> 
								<?php $i=0;
									 foreach($third_menu_items as $menu_item): ?>
					
					<?php if($i===3){ ?> 
				<li class="service-dropdown">
					<div class='service-dropdown-title'>
						<span><?php echo $menu_item->title; ?></span>
						<svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none">
							<path d="M5.46967 7.02398C5.76256 7.31688 6.23744 7.31688 6.53033 7.02398L11.3033 2.25101C11.5962 1.95812 11.5962 1.48324 11.3033 1.19035C11.0104 0.897458 10.5355 0.897458 10.2426 1.19035L6 5.43299L1.75736 1.19035C1.46447 0.897458 0.989592 0.897458 0.696699 1.19035C0.403806 1.48324 0.403806 1.95812 0.696699 2.25101L5.46967 7.02398ZM5.25 6V6.49365H6.75V6H5.25Z" fill="black"/>
							</svg>
					</div>

					<div class="services-dropdown-list">
					<?php if($query->have_posts()): 
									while($query->have_posts()):$query->the_post();
									 ?>
									 
										<a href="/it/servizi/#<?php echo the_ID(); ?>">
										<?php if(have_rows('pershkrimet')):
										while(have_rows('pershkrimet')):the_row(); 
										$titulli = get_sub_field('titulli_it');?>
											<span class="menu-item-text"><?php echo $titulli; ?></span>
											<?php endwhile;
											endif; ?>
										</a>
									
								<?php endwhile;
								endif;
								wp_reset_postdata(); ?>
					</div>
				</li>
				<?php }else { ?> 
			<li class=" <?php if($menu_item->object_id==$thePostID){ echo "active-mobile-link";} ?>">
			
				<a href="<?php echo $menu_item->url; ?>">
					<?php echo $menu_item->title; ?>
				</a>
			</li>

			<?php }?>

				
					<?php $i++;
				 endforeach; ?>
								<?php }   ?>

						<?php 
							$my_dropdown = pll_the_languages(array('raw'=>1,   'echo'=>0));
						
							?>
						
							
							<li class="language-dropdown">
								<?php foreach($my_dropdown as $dropdown): ?>
									<?php if($dropdown['current_lang']): ?>
									<div class="main-language-dropdown">
										<img title='<?php echo $dropdown['name']; ?>' src="<?php echo $dropdown['flag']; ?>" alt="<?php echo $dropdown['name']; ?>" />
										<svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none">
										<path d="M5.46967 7.02398C5.76256 7.31688 6.23744 7.31688 6.53033 7.02398L11.3033 2.25101C11.5962 1.95812 11.5962 1.48324 11.3033 1.19035C11.0104 0.897458 10.5355 0.897458 10.2426 1.19035L6 5.43299L1.75736 1.19035C1.46447 0.897458 0.989592 0.897458 0.696699 1.19035C0.403806 1.48324 0.403806 1.95812 0.696699 2.25101L5.46967 7.02398ZM5.25 6V6.49365H6.75V6H5.25Z" fill="black"/>
										</svg>
									</div>
									<?php endif; ?>
								<?php endforeach; ?>
									<div class="language-dropdown-items">
										<?php foreach($my_dropdown as $dropdown): ?>
										
												<?php if($dropdown['current_lang']===false): ?>
													<a href="<?php echo $dropdown['url']; ?>">
														<img src="<?php echo $dropdown['flag']; ?>" alt="<?php echo $dropdown['name']; ?>" />
													</a>
												<?php endif; ?>
											<?php endforeach; ?>
									</div>
							
							</li>
					
						
						</ul>

						<ul class="col-12 full-screen-contacts">
							<li class="full-screen-svgs">
								<a href="tel:0696590652">
									<div class="full-screen-svg-wrapper">
									<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                                        <path d="M21.1842 23C21.6658 23 22.1276 22.8087 22.4682 22.4682C22.8087 22.1276 23 21.6658 23 21.1842V16.9474C23 16.4658 22.8087 16.0039 22.4682 15.6634C22.1276 15.3229 21.6658 15.1316 21.1842 15.1316C19.7679 15.1316 18.3758 14.9137 17.0442 14.4658C16.7259 14.3653 16.3861 14.3539 16.0617 14.4329C15.7373 14.5118 15.4408 14.6781 15.2042 14.9137L13.4611 16.6568C10.4496 15.0133 7.97455 12.5383 6.33105 9.52684L8.06211 7.79579C8.55842 7.32368 8.74 6.62158 8.52211 5.94368C8.08632 4.62421 7.86842 3.23211 7.86842 1.81579C7.86842 1.33421 7.67712 0.872359 7.33659 0.531832C6.99606 0.191306 6.53421 0 6.05263 0H1.81579C1.33421 0 0.872359 0.191306 0.531832 0.531832C0.191306 0.872359 0 1.33421 0 1.81579C0 13.4974 9.50263 23 21.1842 23ZM1.81579 1.21053H6.05263C6.21316 1.21053 6.36711 1.2743 6.48062 1.3878C6.59413 1.50131 6.65789 1.65526 6.65789 1.81579C6.65789 3.36526 6.9 4.87842 7.37211 6.31895C7.43263 6.48842 7.42053 6.73053 7.22684 6.92421L4.84211 9.29684C6.83947 13.2068 9.76895 16.1363 13.6911 18.1579L16.0516 15.7732C16.2211 15.6037 16.4511 15.5553 16.6689 15.6158C18.1216 16.1 19.6347 16.3421 21.1842 16.3421C21.3447 16.3421 21.4987 16.4059 21.6122 16.5194C21.7257 16.6329 21.7895 16.7868 21.7895 16.9474V21.1842C21.7895 21.3447 21.7257 21.4987 21.6122 21.6122C21.4987 21.7257 21.3447 21.7895 21.1842 21.7895C10.1684 21.7895 1.21053 12.8316 1.21053 1.81579C1.21053 1.65526 1.2743 1.50131 1.3878 1.3878C1.50131 1.2743 1.65526 1.21053 1.81579 1.21053Z" fill="#000000"/>
                                    </svg>
									</div>
									<span>069 659 0652</span>
								</a>
							</li>

							<li class="full-screen-svgs">
							<a href="mailto:0696590652">
								<div class="full-screen-svg-wrapper">
									<svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17" fill="none">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M1 3.58333V13.9167C1 14.6018 1.27217 15.2589 1.75664 15.7434C2.24111 16.2278 2.89819 16.5 3.58333 16.5H16.5C17.1851 16.5 17.8422 16.2278 18.3267 15.7434C18.8112 15.2589 19.0833 14.6018 19.0833 13.9167V3.58333C19.0833 2.89819 18.8112 2.24111 18.3267 1.75664C17.8422 1.27217 17.1851 1 16.5 1H3.58333C2.89819 1 2.24111 1.27217 1.75664 1.75664C1.27217 2.24111 1 2.89819 1 3.58333Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M3.58301 4.875L10.0413 8.75L16.4997 4.875" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</div>
								<span>dr.tridont@gmail.com</span>
								</a>
							</li>
							<li class="full-screen-socials">
							<a href="https://www.instagram.com/tridont_dental/?hl=<?=$current_language;?>" target="_blank" aria-label="Instagram">
								<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
									<path d="M17.0004 21.5559C17.9434 21.5559 18.8477 21.1813 19.5145 20.5145C20.1813 19.8477 20.5559 18.9434 20.5559 18.0004C20.5559 17.0574 20.1813 16.153 19.5145 15.4862C18.8477 14.8194 17.9434 14.4448 17.0004 14.4448C16.0574 14.4448 15.153 14.8194 14.4862 15.4862C13.8194 16.153 13.4448 17.0574 13.4448 18.0004C13.4448 18.9434 13.8194 19.8477 14.4862 20.5145C15.153 21.1813 16.0574 21.5559 17.0004 21.5559Z" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M9 21.5556V14.4444C9 13.2657 9.46825 12.1352 10.3017 11.3017C11.1352 10.4683 12.2657 10 13.4444 10H20.5556C21.7343 10 22.8648 10.4683 23.6983 11.3017C24.5317 12.1352 25 13.2657 25 14.4444V21.5556C25 22.7343 24.5317 23.8648 23.6983 24.6983C22.8648 25.5317 21.7343 26 20.5556 26H13.4444C12.2657 26 11.1352 25.5317 10.3017 24.6983C9.46825 23.8648 9 22.7343 9 21.5556Z" stroke="#1E1E1E" stroke-width="1.5"/>
									<path d="M21.8892 13.1198L21.8978 13.1104" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<circle cx="17.5" cy="17.5" r="16.75" stroke="#1E1E1E" stroke-width="1.5"/>
								</svg>
							</a>
							<a href="https://www.facebook.com/TriDont.Albania" target="_blank" aria-label="Facebook">
								<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
									<circle cx="17.5" cy="17.5" r="16.75" stroke="#1E1E1E" stroke-width="1.5"/>
									<path d="M23 8H20C18.6739 8 17.4021 8.52678 16.4645 9.46447C15.5268 10.4021 15 11.6739 15 13V16H12V20H15V28H19V20H22L23 16H19V13C19 12.7348 19.1054 12.4804 19.2929 12.2929C19.4804 12.1054 19.7348 12 20 12H23V8Z" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</a>

							<a href="https://www.tiktok.com/@tridontdental" target="_blank" aria-label="Tik Tok">
							<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
								<circle cx="17.5" cy="17.5" r="16.75" stroke="#1E1E1E" stroke-width="1.5"/>
								<path d="M21.44 11.82C20.7564 11.0396 20.3797 10.0374 20.38 9H17.29V21.4C17.2662 22.071 16.9829 22.7066 16.4998 23.1729C16.0167 23.6393 15.3714 23.8999 14.7 23.9C13.28 23.9 12.1 22.74 12.1 21.3C12.1 19.58 13.76 18.29 15.47 18.82V15.66C12.02 15.2 9 17.88 9 21.3C9 24.63 11.76 27 14.69 27C17.83 27 20.38 24.45 20.38 21.3V15.01C21.633 15.9099 23.1374 16.3926 24.68 16.39V13.3C24.68 13.3 22.8 13.39 21.44 11.82Z" fill="#1E1E1E"/>
								</svg>
							</a>
								
										<a href="https://wa.me/+355696590652" target="_blank">
								<svg class="with-fill" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
									<circle cx="17.5" cy="17.5" r="16.75" stroke="#1E1E1E" stroke-width="1.5"/>
									<path d="M24.2312 10.7645C23.3558 9.88478 22.3132 9.18724 21.1641 8.7126C20.015 8.23797 18.7824 7.99574 17.5382 8.00006C12.3251 8.00006 8.07638 12.2275 8.07638 17.4145C8.07638 19.077 8.51558 20.692 9.33668 22.117L8 27L13.0126 25.689C14.397 26.4395 15.9533 26.8385 17.5382 26.8385C22.7513 26.8385 27 22.611 27 17.424C27 14.9065 26.0166 12.541 24.2312 10.7645ZM17.5382 25.2425C16.1251 25.2425 14.7407 24.8625 13.5281 24.15L13.2417 23.979L10.2628 24.758L11.0553 21.87L10.8643 21.5755C10.0793 20.3281 9.66239 18.8863 9.66131 17.4145C9.66131 13.1015 13.194 9.58655 17.5286 9.58655C19.6291 9.58655 21.6055 10.4035 23.0854 11.8855C23.8182 12.6113 24.3989 13.4746 24.7939 14.4253C25.1889 15.376 25.3903 16.3953 25.3864 17.424C25.4055 21.737 21.8729 25.2425 17.5382 25.2425ZM21.8538 19.3905C21.6151 19.2765 20.4502 18.7065 20.2402 18.621C20.0206 18.545 19.8678 18.507 19.7055 18.735C19.5432 18.9725 19.0945 19.5045 18.9608 19.6565C18.8271 19.818 18.6839 19.837 18.4452 19.7135C18.2065 19.5995 17.4427 19.343 16.5452 18.545C15.8387 17.918 15.3709 17.1485 15.2276 16.911C15.094 16.6735 15.2085 16.55 15.3327 16.4265C15.4377 16.322 15.5714 16.151 15.6859 16.018C15.8005 15.885 15.8482 15.7805 15.9246 15.6285C16.001 15.467 15.9628 15.334 15.9055 15.22C15.8482 15.106 15.3709 13.947 15.1799 13.472C14.9889 13.016 14.7884 13.073 14.6452 13.0635H14.1869C14.0246 13.0635 13.7764 13.1205 13.5568 13.358C13.3467 13.5955 12.7357 14.1655 12.7357 15.3245C12.7357 16.4835 13.5854 17.6045 13.7 17.7565C13.8146 17.918 15.3709 20.293 17.7387 21.3095C18.302 21.5565 18.7412 21.699 19.0849 21.8035C19.6482 21.984 20.1638 21.9555 20.5744 21.8985C21.0327 21.832 21.9779 21.3285 22.1688 20.7775C22.3693 20.2265 22.3693 19.761 22.3025 19.6565C22.2357 19.552 22.0925 19.5045 21.8538 19.3905Z" fill="#1E1E1E"/>
								</svg>
							</a>
							<a href="viber://chat?number=+355696590652">
							<svg class="with-fill" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
								<circle cx="17.5" cy="17.5" r="16.75" stroke="#1E1E1E" stroke-width="1.5"/>
								<path d="M17 26C19.1217 26 21.1566 25.1571 22.6569 23.6569C24.1571 22.1566 25 20.1217 25 18C25 15.8783 24.1571 13.8434 22.6569 12.3431C21.1566 10.8429 19.1217 10 17 10C14.8783 10 12.8434 10.8429 11.3431 12.3431C9.84285 13.8434 9 15.8783 9 18C9 20.1217 9.84285 22.1566 11.3431 23.6569C12.8434 25.1571 14.8783 26 17 26ZM17 28C11.477 28 7 23.523 7 18C7 12.477 11.477 8 17 8C22.523 8 27 12.477 27 18C27 23.523 22.523 28 17 28Z" fill="#1E1E1E"/>
								<path d="M20.6439 17.404C20.6559 15.912 19.4249 14.544 17.8999 14.355L17.7999 14.34C17.7235 14.3248 17.6458 14.3161 17.5679 14.314C17.2549 14.314 17.1719 14.54 17.1499 14.675C17.1374 14.731 17.1363 14.789 17.1466 14.8455C17.1569 14.902 17.1785 14.9559 17.2099 15.004C17.3139 15.149 17.4959 15.174 17.6419 15.196C17.6849 15.202 17.7259 15.207 17.7589 15.216C19.1299 15.531 19.5919 16.028 19.8169 17.431C19.8229 17.466 19.8249 17.508 19.8269 17.553C19.8369 17.72 19.8579 18.069 20.2219 18.069C20.2519 18.069 20.2839 18.067 20.3179 18.061C20.6569 18.008 20.6459 17.689 20.6409 17.536C20.6384 17.499 20.6384 17.4619 20.6409 17.425C20.642 17.4183 20.6427 17.4117 20.6429 17.405L20.6439 17.404Z" fill="#1E1E1E"/>
								<path d="M17.4799 13.8069C17.5199 13.8099 17.5599 13.8129 17.5909 13.8179C19.8409 14.1759 20.8769 15.2759 21.1639 17.6179C21.1689 17.6579 21.1689 17.7059 21.1699 17.7579C21.1729 17.9409 21.1789 18.3209 21.5749 18.3289H21.5869C21.6413 18.3318 21.6956 18.323 21.7463 18.3032C21.797 18.2833 21.8429 18.2529 21.8809 18.2139C22.0039 18.0809 21.9959 17.8839 21.9889 17.7239C21.9869 17.6859 21.9849 17.6489 21.9859 17.6169C22.0139 15.2219 20.0059 13.0499 17.6879 12.9699L17.6599 12.9709C17.6509 12.9722 17.6419 12.9729 17.6329 12.9729C17.6099 12.9729 17.5809 12.9709 17.5509 12.9689C17.511 12.9652 17.4709 12.9632 17.4309 12.9629C17.0619 12.9629 16.9919 13.2329 16.9829 13.3949C16.9629 13.7679 17.3119 13.7949 17.4799 13.8069ZM21.0549 20.6439C21.0067 20.6062 20.9591 20.5678 20.9119 20.5289C20.6659 20.3249 20.4039 20.1369 20.1519 19.9549C20.0992 19.917 20.0465 19.879 19.9939 19.8409C19.6699 19.6069 19.3789 19.4919 19.1039 19.4919C18.7339 19.4919 18.4109 19.7039 18.1439 20.1209C18.0259 20.3049 17.8819 20.3949 17.7059 20.3949C17.583 20.3905 17.4626 20.3595 17.3529 20.3039C16.3079 19.8139 15.5609 19.0639 15.1339 18.0739C14.9279 17.5939 14.9939 17.2819 15.3579 17.0269C15.5639 16.8829 15.9479 16.6139 15.9209 16.0989C15.8909 15.5139 14.6399 13.7539 14.1129 13.5539C13.8881 13.469 13.6402 13.4683 13.4149 13.5519C12.8099 13.7619 12.3749 14.1319 12.1579 14.6189C11.9479 15.0909 11.9579 15.6439 12.1859 16.2199C12.8429 17.8859 13.7659 19.3379 14.9319 20.5359C16.0719 21.7089 17.4739 22.6689 19.0979 23.3909C19.2439 23.4559 19.3979 23.4909 19.5099 23.5169L19.6049 23.5409C19.6179 23.5446 19.6313 23.5466 19.6449 23.5469H19.6579C20.4219 23.5469 21.3389 22.8269 21.6209 22.0049C21.8679 21.2849 21.4169 20.9299 21.0549 20.6449V20.6439ZM17.8179 15.7099C17.6879 15.7129 17.4149 15.7199 17.3189 16.0059C17.2749 16.1399 17.2799 16.2559 17.3349 16.3509C17.4159 16.4909 17.5719 16.5339 17.7129 16.5569C18.2249 16.6419 18.4889 16.9349 18.5409 17.4769C18.5659 17.7309 18.7309 17.9069 18.9429 17.9069C18.9589 17.9072 18.9749 17.9066 18.9909 17.9049C19.2459 17.8729 19.3689 17.6799 19.3579 17.3299C19.3619 16.9639 19.1769 16.5499 18.8619 16.2199C18.5459 15.8879 18.1649 15.7009 17.8179 15.7099Z" fill="#1E1E1E"/>
								</svg>
							</a>
							</li>
						</ul>
				</div>
			</div>
		</div>
	</div>
</header>

<div class="whatsapp-icon-sticky">
	<a href="https://wa.me/+355696590652" target="_blank">
		<svg xmlns="http://www.w3.org/2000/svg" width="40" height="41" viewBox="0 0 40 41" fill="none">
			<g clip-path="url(#clip0_2244_831)">
				<path d="M0.853809 19.9152C0.852871 23.3022 1.73787 26.6094 3.42068 29.5244L0.692871 39.4841L10.8854 36.8116C13.7045 38.3463 16.8631 39.1504 20.0729 39.1506H20.0813C30.6774 39.1506 39.3029 30.5283 39.3074 19.9303C39.3094 14.7949 37.3113 9.9658 33.681 6.33268C30.0513 2.69986 25.224 0.698145 20.0805 0.695801C9.48319 0.695801 0.85834 9.31768 0.853965 19.9152" fill="url(#paint0_linear_2244_831)"/>
				<path d="M0.167188 19.9088C0.166094 23.4177 1.08281 26.8431 2.82562 29.8625L0 40.1792L10.558 37.4109C13.467 38.997 16.7423 39.8333 20.0752 39.8345H20.0837C31.06 39.8345 39.9953 30.902 40 19.9247C40.0019 14.6047 37.9319 9.60203 34.1719 5.83875C30.4114 2.07594 25.4114 0.0021875 20.0837 0C9.10562 0 0.171563 8.93125 0.167188 19.9088ZM6.45484 29.3425L6.06062 28.7167C4.40344 26.0817 3.52875 23.0367 3.53 19.91C3.53344 10.7858 10.9591 3.3625 20.09 3.3625C24.5119 3.36438 28.6675 5.08813 31.7931 8.21563C34.9186 11.3434 36.6384 15.5013 36.6373 19.9234C36.6333 29.0477 29.2075 36.4719 20.0837 36.4719H20.0772C17.1064 36.4703 14.1928 35.6725 11.6519 34.1648L11.0472 33.8063L4.78188 35.4489L6.45484 29.3425Z" fill="url(#paint1_linear_2244_831)"/>
				<path d="M15.1061 11.5858C14.7332 10.7572 14.3409 10.7405 13.9864 10.7259C13.6961 10.7134 13.3642 10.7144 13.0326 10.7144C12.7007 10.7144 12.1615 10.8392 11.7057 11.3369C11.2495 11.835 9.96387 13.0387 9.96387 15.487C9.96387 17.9353 11.7471 20.3016 11.9957 20.6339C12.2446 20.9656 15.4384 26.1506 20.4965 28.1453C24.7003 29.803 25.5557 29.4733 26.4681 29.3902C27.3806 29.3073 29.4125 28.1867 29.827 27.0247C30.2418 25.8628 30.2418 24.8669 30.1175 24.6587C29.9931 24.4514 29.6612 24.3269 29.1636 24.0781C28.6659 23.8294 26.2192 22.6253 25.7631 22.4592C25.3068 22.2933 24.9751 22.2105 24.6432 22.7087C24.3114 23.2062 23.3584 24.3269 23.0679 24.6587C22.7778 24.9914 22.4873 25.0328 21.9898 24.7839C21.4918 24.5342 19.8892 24.0094 17.9878 22.3142C16.5084 20.9952 15.5096 19.3662 15.2193 18.868C14.929 18.3705 15.1882 18.1008 15.4378 17.8528C15.6614 17.6298 15.9356 17.2717 16.1846 16.9812C16.4328 16.6906 16.5156 16.4833 16.6815 16.1514C16.8476 15.8192 16.7645 15.5286 16.6403 15.2797C16.5156 15.0308 15.5486 12.5697 15.1061 11.5858Z" fill="white"/>
			</g>
			<defs>
				<linearGradient id="paint0_linear_2244_831" x1="1931.42" y1="3879.52" x2="1931.42" y2="0.695801" gradientUnits="userSpaceOnUse">
				<stop stop-color="#1FAF38"/>
				<stop offset="1" stop-color="#60D669"/>
				</linearGradient>
				<linearGradient id="paint1_linear_2244_831" x1="2000" y1="4017.92" x2="2000" y2="0" gradientUnits="userSpaceOnUse">
				<stop stop-color="#F9F9F9"/>
				<stop offset="1" stop-color="white"/>
				</linearGradient>
				<clipPath id="clip0_2244_831">
				<rect width="40" height="40.3125" fill="white"/>
				</clipPath>
			</defs>
		</svg>
	</a>
</div>
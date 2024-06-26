<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TalenkoTheme
 */

 $current_language = pll_current_language();
?>

	<footer class="container-fluid px-0">
		<div class="footer-images">
			<picture>
				<source media="(min-width:431px)" srcset="<?php echo get_template_directory_uri(). "/assets/images/FooterDesktop.webp"; ?>" />
				<img src="<?php echo get_template_directory_uri() . "/assets/images/FooterMobile.webp"; ?>" alt="Blue background" />
			</picture>
		</div>
		<div class='container footer-container'>
			<div class="row">
				<ul class="col-12 col-lg-2 social-icons">
					<li>
						<?php if($current_language==='sq'){ ?> 
							
							<a href="/">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/FooterLogo.webp'; ?>" alt="Tridont Logo" />
						</a>
							<?php }else if($current_language==='en'){ ?>
								<a href="/en">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/FooterLogo.webp'; ?>" alt="Tridont Logo" />
						</a>
								<?php }else { ?>
									
									<a href="/it">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/FooterLogo.webp'; ?>" alt="Tridont Logo" />
						</a>
						<?php } ?>
				
					</li>

					<li>
						<div class="social-title">
							<span class="body-text">Social Media</span>
						</div>
						<?php 	
				$footer_menu = wp_get_nav_menu_items('Footer Menu');
				$second_menu_items = wp_get_nav_menu_items('Menu 2');
				$third_menu_items = wp_get_nav_menu_items('Menu 3');

				global $post;
				$thePostID;
				if($post){
					$thePostID = $post->ID;
				}else{
					$thePostId = 99999;
				}
				 ?>
		
						<div class="social-links">
							<a href="https://www.instagram.com/tridont_dental/?hl=<?php $current_language;?>" target="_blank" aria-label="Instagram">
								<svg class="with-stroke" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
									<path d="M17.0004 21.5559C17.9434 21.5559 18.8477 21.1813 19.5145 20.5145C20.1813 19.8477 20.5559 18.9434 20.5559 18.0004C20.5559 17.0574 20.1813 16.153 19.5145 15.4862C18.8477 14.8194 17.9434 14.4448 17.0004 14.4448C16.0574 14.4448 15.153 14.8194 14.4862 15.4862C13.8194 16.153 13.4448 17.0574 13.4448 18.0004C13.4448 18.9434 13.8194 19.8477 14.4862 20.5145C15.153 21.1813 16.0574 21.5559 17.0004 21.5559Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M9 21.5556V14.4444C9 13.2657 9.46825 12.1352 10.3017 11.3017C11.1352 10.4683 12.2657 10 13.4444 10H20.5556C21.7343 10 22.8648 10.4683 23.6983 11.3017C24.5317 12.1352 25 13.2657 25 14.4444V21.5556C25 22.7343 24.5317 23.8648 23.6983 24.6983C22.8648 25.5317 21.7343 26 20.5556 26H13.4444C12.2657 26 11.1352 25.5317 10.3017 24.6983C9.46825 23.8648 9 22.7343 9 21.5556Z" stroke="#fff" stroke-width="1.5"/>
									<path d="M21.8892 13.1198L21.8978 13.1104" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<circle cx="17.5" cy="17.5" r="16.75" stroke="#fff" stroke-width="1.5"/>
								</svg>
							</a>
							<a href="https://www.facebook.com/TriDont.Albania" target="_blank" aria-label="Facebook">

								<svg class="with-stroke" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
									<circle cx="17.5" cy="17.5" r="16.75" stroke="#fff" stroke-width="1.5"/>
									<path d="M23 8H20C18.6739 8 17.4021 8.52678 16.4645 9.46447C15.5268 10.4021 15 11.6739 15 13V16H12V20H15V28H19V20H22L23 16H19V13C19 12.7348 19.1054 12.4804 19.2929 12.2929C19.4804 12.1054 19.7348 12 20 12H23V8Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</a>

							<a href="https://www.tiktok.com/@tridontdental" target="_blank" aria-label="Tik Tok">
							<svg class="with-fill" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
								<circle cx="17.5" cy="17.5" r="16.75" stroke="#fff" stroke-width="1.5"/>
								<path d="M21.44 11.82C20.7564 11.0396 20.3797 10.0374 20.38 9H17.29V21.4C17.2662 22.071 16.9829 22.7066 16.4998 23.1729C16.0167 23.6393 15.3714 23.8999 14.7 23.9C13.28 23.9 12.1 22.74 12.1 21.3C12.1 19.58 13.76 18.29 15.47 18.82V15.66C12.02 15.2 9 17.88 9 21.3C9 24.63 11.76 27 14.69 27C17.83 27 20.38 24.45 20.38 21.3V15.01C21.633 15.9099 23.1374 16.3926 24.68 16.39V13.3C24.68 13.3 22.8 13.39 21.44 11.82Z" fill="#fff"/>
								</svg>
							</a>

						
						</div>
					</li>

					<li>
					<div class="kontakt-footer-title">
							<span class="body-text"><?php if($current_language==='sq'){ echo "Kontakt";}else if($current_language==='en'){ echo "Contact";}else{ echo "Contatto";}?></span>
						</div>
						<div class="social-links">
					<a href="https://wa.me/+355696590652" target="_blank">
								<svg class="with-fill" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
									<circle cx="17.5" cy="17.5" r="16.75" stroke="white" stroke-width="1.5"/>
									<path d="M24.2312 10.7645C23.3558 9.88478 22.3132 9.18724 21.1641 8.7126C20.015 8.23797 18.7824 7.99574 17.5382 8.00006C12.3251 8.00006 8.07638 12.2275 8.07638 17.4145C8.07638 19.077 8.51558 20.692 9.33668 22.117L8 27L13.0126 25.689C14.397 26.4395 15.9533 26.8385 17.5382 26.8385C22.7513 26.8385 27 22.611 27 17.424C27 14.9065 26.0166 12.541 24.2312 10.7645ZM17.5382 25.2425C16.1251 25.2425 14.7407 24.8625 13.5281 24.15L13.2417 23.979L10.2628 24.758L11.0553 21.87L10.8643 21.5755C10.0793 20.3281 9.66239 18.8863 9.66131 17.4145C9.66131 13.1015 13.194 9.58655 17.5286 9.58655C19.6291 9.58655 21.6055 10.4035 23.0854 11.8855C23.8182 12.6113 24.3989 13.4746 24.7939 14.4253C25.1889 15.376 25.3903 16.3953 25.3864 17.424C25.4055 21.737 21.8729 25.2425 17.5382 25.2425ZM21.8538 19.3905C21.6151 19.2765 20.4502 18.7065 20.2402 18.621C20.0206 18.545 19.8678 18.507 19.7055 18.735C19.5432 18.9725 19.0945 19.5045 18.9608 19.6565C18.8271 19.818 18.6839 19.837 18.4452 19.7135C18.2065 19.5995 17.4427 19.343 16.5452 18.545C15.8387 17.918 15.3709 17.1485 15.2276 16.911C15.094 16.6735 15.2085 16.55 15.3327 16.4265C15.4377 16.322 15.5714 16.151 15.6859 16.018C15.8005 15.885 15.8482 15.7805 15.9246 15.6285C16.001 15.467 15.9628 15.334 15.9055 15.22C15.8482 15.106 15.3709 13.947 15.1799 13.472C14.9889 13.016 14.7884 13.073 14.6452 13.0635H14.1869C14.0246 13.0635 13.7764 13.1205 13.5568 13.358C13.3467 13.5955 12.7357 14.1655 12.7357 15.3245C12.7357 16.4835 13.5854 17.6045 13.7 17.7565C13.8146 17.918 15.3709 20.293 17.7387 21.3095C18.302 21.5565 18.7412 21.699 19.0849 21.8035C19.6482 21.984 20.1638 21.9555 20.5744 21.8985C21.0327 21.832 21.9779 21.3285 22.1688 20.7775C22.3693 20.2265 22.3693 19.761 22.3025 19.6565C22.2357 19.552 22.0925 19.5045 21.8538 19.3905Z" fill="white"/>
								</svg>
							</a>
							<a href="viber://chat?number=+355696590652">
							<svg class="with-fill" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
								<circle cx="17.5" cy="17.5" r="16.75" stroke="white" stroke-width="1.5"/>
								<path d="M17 26C19.1217 26 21.1566 25.1571 22.6569 23.6569C24.1571 22.1566 25 20.1217 25 18C25 15.8783 24.1571 13.8434 22.6569 12.3431C21.1566 10.8429 19.1217 10 17 10C14.8783 10 12.8434 10.8429 11.3431 12.3431C9.84285 13.8434 9 15.8783 9 18C9 20.1217 9.84285 22.1566 11.3431 23.6569C12.8434 25.1571 14.8783 26 17 26ZM17 28C11.477 28 7 23.523 7 18C7 12.477 11.477 8 17 8C22.523 8 27 12.477 27 18C27 23.523 22.523 28 17 28Z" fill="white"/>
								<path d="M20.6439 17.404C20.6559 15.912 19.4249 14.544 17.8999 14.355L17.7999 14.34C17.7235 14.3248 17.6458 14.3161 17.5679 14.314C17.2549 14.314 17.1719 14.54 17.1499 14.675C17.1374 14.731 17.1363 14.789 17.1466 14.8455C17.1569 14.902 17.1785 14.9559 17.2099 15.004C17.3139 15.149 17.4959 15.174 17.6419 15.196C17.6849 15.202 17.7259 15.207 17.7589 15.216C19.1299 15.531 19.5919 16.028 19.8169 17.431C19.8229 17.466 19.8249 17.508 19.8269 17.553C19.8369 17.72 19.8579 18.069 20.2219 18.069C20.2519 18.069 20.2839 18.067 20.3179 18.061C20.6569 18.008 20.6459 17.689 20.6409 17.536C20.6384 17.499 20.6384 17.4619 20.6409 17.425C20.642 17.4183 20.6427 17.4117 20.6429 17.405L20.6439 17.404Z" fill="white"/>
								<path d="M17.4799 13.8069C17.5199 13.8099 17.5599 13.8129 17.5909 13.8179C19.8409 14.1759 20.8769 15.2759 21.1639 17.6179C21.1689 17.6579 21.1689 17.7059 21.1699 17.7579C21.1729 17.9409 21.1789 18.3209 21.5749 18.3289H21.5869C21.6413 18.3318 21.6956 18.323 21.7463 18.3032C21.797 18.2833 21.8429 18.2529 21.8809 18.2139C22.0039 18.0809 21.9959 17.8839 21.9889 17.7239C21.9869 17.6859 21.9849 17.6489 21.9859 17.6169C22.0139 15.2219 20.0059 13.0499 17.6879 12.9699L17.6599 12.9709C17.6509 12.9722 17.6419 12.9729 17.6329 12.9729C17.6099 12.9729 17.5809 12.9709 17.5509 12.9689C17.511 12.9652 17.4709 12.9632 17.4309 12.9629C17.0619 12.9629 16.9919 13.2329 16.9829 13.3949C16.9629 13.7679 17.3119 13.7949 17.4799 13.8069ZM21.0549 20.6439C21.0067 20.6062 20.9591 20.5678 20.9119 20.5289C20.6659 20.3249 20.4039 20.1369 20.1519 19.9549C20.0992 19.917 20.0465 19.879 19.9939 19.8409C19.6699 19.6069 19.3789 19.4919 19.1039 19.4919C18.7339 19.4919 18.4109 19.7039 18.1439 20.1209C18.0259 20.3049 17.8819 20.3949 17.7059 20.3949C17.583 20.3905 17.4626 20.3595 17.3529 20.3039C16.3079 19.8139 15.5609 19.0639 15.1339 18.0739C14.9279 17.5939 14.9939 17.2819 15.3579 17.0269C15.5639 16.8829 15.9479 16.6139 15.9209 16.0989C15.8909 15.5139 14.6399 13.7539 14.1129 13.5539C13.8881 13.469 13.6402 13.4683 13.4149 13.5519C12.8099 13.7619 12.3749 14.1319 12.1579 14.6189C11.9479 15.0909 11.9579 15.6439 12.1859 16.2199C12.8429 17.8859 13.7659 19.3379 14.9319 20.5359C16.0719 21.7089 17.4739 22.6689 19.0979 23.3909C19.2439 23.4559 19.3979 23.4909 19.5099 23.5169L19.6049 23.5409C19.6179 23.5446 19.6313 23.5466 19.6449 23.5469H19.6579C20.4219 23.5469 21.3389 22.8269 21.6209 22.0049C21.8679 21.2849 21.4169 20.9299 21.0549 20.6449V20.6439ZM17.8179 15.7099C17.6879 15.7129 17.4149 15.7199 17.3189 16.0059C17.2749 16.1399 17.2799 16.2559 17.3349 16.3509C17.4159 16.4909 17.5719 16.5339 17.7129 16.5569C18.2249 16.6419 18.4889 16.9349 18.5409 17.4769C18.5659 17.7309 18.7309 17.9069 18.9429 17.9069C18.9589 17.9072 18.9749 17.9066 18.9909 17.9049C19.2459 17.8729 19.3689 17.6799 19.3579 17.3299C19.3619 16.9639 19.1769 16.5499 18.8619 16.2199C18.5459 15.8879 18.1649 15.7009 17.8179 15.7099Z" fill="white"/>
								</svg>
							</a>
							</div>
					</li>
				</ul>
				<div class=' col-12 col-lg-8 offset-lg-2 col-xl-7 offset-xl-3 col-xxl-6 offset-xxl-4 navigation-flex-end'>
					<div>
				<ul class=" navigation-items">
					<li class="navigation-title main-navigation-title"><?php if($current_language==='sq'){ echo 'Navigacion'; }else if($current_language==='en'){echo 'Navigation'; }else{ echo "Navigazione";} ?></li>
					<?php if($current_language==='sq'){ ?>

						<?php foreach($footer_menu as $menu_item): ?>
						<li>
							<a class="<?php if($thePostID==$menu_item->object_id){echo "active-footer-menu"; }  ?>" href="<?php echo $menu_item->url; ?>">
								<?php echo $menu_item->title; ?>
							</a>
						</li>
						<?php endforeach; 
						wp_reset_postdata();?>

					<?php }else if($current_language==='en'){ ?>
						<?php foreach($second_menu_items as $menu_item): ?>
						<li>
							<a class="<?php if($thePostID==$menu_item->object_id){echo "active-footer-menu"; }  ?>" href="<?php echo $menu_item->url; ?>">
								<?php echo $menu_item->title; ?>
							</a>
						</li>
						<?php endforeach; 
						wp_reset_postdata();?>
						<?php }else { ?>
							<?php foreach($third_menu_items as $menu_item): ?>
						<li>
							<a class="<?php if($thePostID==$menu_item->object_id){echo "active-footer-menu"; }  ?>" href="<?php echo $menu_item->url; ?>">
								<?php echo $menu_item->title; ?>
							</a>
						</li>
						<?php endforeach; 
						wp_reset_postdata();?>
							<?php }?> 
				
				</ul>
				</div>
					<div class="navigation-list">
					<ul class="navigation-items">

					<?php if($current_language==='sq'){ ?> 
					<li class="navigation-title main-navigation-title"> Telefon</li>
					<li>
						<a href="tel:0696590652">
							Tiranë:+355 069 659 0652
						</a>
					</li>
					<li>
						<a href="tel:044897005">
							Prishtinë:+383 044 897 005
						</a>
					</li>

					<li>
					<a href="tel:045897005">
							Ferizaj:+383 045 897 005
						</a>
					</li>

				

					<?php } else if($current_language==='en'){ ?> 
						<li class="navigation-title main-navigation-title">Phone</li>
						<li>
							<a href="tel:0696590652">
								Tirana:+355 069 659 0652
							</a>
						</li>
						<li>
							<a href="tel:044897005">
								Pristine:+383 044 897 005
							</a>
						</li>

						<li>
							<a href="tel:045897005">
								Ferizaj:+383 045 897 005
							</a>
						</li>

					
						<?php }else { ?>
							<li class="navigation-title main-navigation-title">Telefono</li>
							<li>
							<a href="tel:0696590652">
							Tirana:+355 069 659 0652
							</a>
						</li>
						<li>
							<a href="tel:044897005">
							Pristina:+383 044 897 005
							</a>
						</li>

						<li>
							<a href="tel:045897005">
								Ferizaj:+383 045 897 005
							</a>
						</li>

				
							<?php } ?>

					</ul>
					<ul class="navigation-items">
						<li class="navigation-title">Email Address</li>
						<li>
							<a href="mailto:dr.tridont@gmail.com">
								dr.tridont@gmail.com
							</a>
						</li>
					</ul>

					<ul class="navigation-items">
						<?php if($current_language==='sq'){ ?> 
						<li class="navigation-title">Orari</li>
						<li>
						Hënë-Premte: 09:00 – 19:00<br/>E Shtunë: 09:00 - 15:00
						</li>

						<?php }else if($current_language==='en'){ ?> 
							<li class="navigation-title">Working Hours</li>
						<li>
						Monday-Friday: 09:00 – 19:00<br/>Saturday: 09:00 - 15:00
						</li>
							<?php }else{ ?>
								<li class="navigation-title">Ore lavorative</li>
						<li>
						Lunedi-Venerdì: 09:00 – 19:00<br/>Sabato: 09:00 - 15:00
						</li>
								<?php } ?>
					</ul>
					</div>
		
					<div class="address-holder navigation-list">
					<?php if(have_rows('kontakti', 6)):
						while(have_rows('kontakti',6)):the_row(); ?>
						<div class="address-navigation-title">
							<?php if($current_language==='sq'){ echo 'Adresa';}else if($current_language==='en'){ echo "Address";}else{ echo "Indirizzo";} ?>
						</div>
						<?php if(have_rows('lokacionet')):
						while(have_rows('lokacionet')):the_row(); 
						$google_maps_linku = get_sub_field('google_maps_linku');
						$qyteti = get_sub_field('qyteti');
						$lokacioni = get_sub_field('lokacioni');?>
							<ul class="navigation-items">
								<li class="navigation-title">
									<?php echo $qyteti; ?>
								</li>
								<li>
									<a class="white-space-link" href="<?php echo $google_maps_linku; ?>" target="_blank">
										<span><?php echo $lokacioni; ?></span>
									</a>
								</li>
							</ul>
						<?php endwhile;
						endif; ?>
					<?php endwhile;
				endif; ?>
				</div>
				</div>
			</div>
		</div>

		<div class="container imprint-and-made-by">
			<div class="row">
				<div class="made-by-and-imprint">
					<ul class="imprint-holder">
						<li>

							<?php if($current_language==='sq'){ ?>
								<a href="/imprint">Imprint</a>
							<?php }else if($current_language==='en'){ ?>
								<a href="/en/imprint-2">Imprint</a>
								 <?php }else if($current_language==='it'){ ?>
									<a href="/it/impronta">Impronta</a>
									<?php } ?>
							
						</li>
						<li>
							2024 © TriDont
						</li>
					</ul>

					<ul class="talenko-holder">
						<li>
							<a href="https://talenkoagency.com" target="_blank">
								Made by <span>Talenko Agency</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>


<?php wp_footer(); ?>

</body>
</html>

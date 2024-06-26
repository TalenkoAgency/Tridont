<?php 

/* Template Name: Rezervim */

get_header(); 

$current_language = pll_current_language();?>

<?php if(have_rows('hero')):the_row();
$video = get_sub_field('video'); ?>

<main class="container-fluid px-0 dental-main">
        <video muted loop autoplay playsinline>
					<source src="<?php echo $video['url']; ?>" type="video/mp4">
					Your browser does not support video tag.
				</video>

</main>

<?php endif; ?>

<?php if(have_rows('kontakt')):
while(have_rows('kontakt')):the_row();
$titulli = get_sub_field('titulli');
$whatsapp_text = get_sub_field('whatsapp_text');
$whatsapp_nr = get_sub_field('whatsapp_nr'); ?>
<section class="container animation-trigger spacing-top spacing-bottom">
    <div class="row">
        <div class="col-12 col-lg-8 col-xl-7">
            <div class="p-dental-tourist-title-texts animated-items-holder" >

                <div class="p-dental-tourist-title">
                    <h2 class="heading with-clip"><?php echo $titulli; ?></h2>
                </div>

                <div class="p-dental-tourist-texts">
                    <?php if(have_rows('tekstet')):
                    while(have_rows('tekstet')):the_row();
                    $tekst = get_sub_field('tekst'); ?>
                        <p class="body-text"><?php echo $tekst; ?></p>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-10 col-xl-9">
            <div class="p-dental-contact-form">
                <?php if($current_language==='sq'){ ?> 
                <?php echo do_shortcode('[contact-form-7 id="6e6b433" title="Contact Form Rezervim"]'); ?>
                <?php }else if($current_language==='en'){ ?>
                    <?php echo do_shortcode('[contact-form-7 id="d4780d2" title="Contact Rezervim En"]'); ?>
                    <?php }else if($current_language==='it'){ ?>
                    <?php echo do_shortcode('[contact-form-7 id="b2975e2" title="Contact It"]'); ?>
                    <?php } ?>
            </div>
        </div>

        <div class="col-12 col-lg-9">
            <div class="p-dental-contact-whatsapp">
                <div class="whatsapp-contacts">
                    <p class="body-text"><?php echo $whatsapp_text; ?></p>
                    <a href="https://wa.me/<?php echo str_replace(' ', '', $whatsapp_nr); ?>" target="_blank" class="linear-link white-link whatsapp-link">
                    <div class="whatsapp-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
  <path d="M11.0367 1.8333C6.03165 1.8333 1.95248 5.91247 1.95248 10.9175C1.95248 12.5216 2.37415 14.08 3.16248 15.455L1.87915 20.1666L6.69165 18.9016C8.02082 19.6258 9.51498 20.0108 11.0367 20.0108C16.0417 20.0108 20.1208 15.9316 20.1208 10.9266C20.1208 8.49747 19.1767 6.21497 17.4625 4.5008C16.622 3.65207 15.6209 2.9791 14.5177 2.52113C13.4145 2.06316 12.2311 1.82934 11.0367 1.8333ZM11.0458 3.36413C13.0625 3.36413 14.9508 4.15247 16.3808 5.58247C17.0824 6.28419 17.6387 7.11744 18.0178 8.03448C18.3969 8.95152 18.5913 9.93433 18.59 10.9266C18.59 15.0883 15.1983 18.4708 11.0367 18.4708C9.67998 18.4708 8.35082 18.1133 7.19582 17.4166L6.92082 17.2608L4.06082 18.0125L4.82165 15.2258L4.63832 14.9325C3.88165 13.7302 3.48118 12.3381 3.48332 10.9175C3.49248 6.7558 6.87498 3.36413 11.0458 3.36413ZM7.81915 6.71913C7.67248 6.71913 7.42498 6.77413 7.21415 7.0033C7.01248 7.23247 6.41665 7.79163 6.41665 8.9008C6.41665 10.0191 7.23248 11.0916 7.33332 11.2475C7.46165 11.4033 8.94665 13.695 11.2292 14.6666C11.77 14.9141 12.1917 15.0516 12.5217 15.1525C13.0625 15.3266 13.5575 15.2991 13.9517 15.2441C14.3917 15.18 15.29 14.6941 15.4825 14.1625C15.675 13.6308 15.675 13.1816 15.62 13.0808C15.5558 12.9891 15.4092 12.9341 15.18 12.8333C14.9508 12.705 13.8325 12.155 13.6308 12.0816C13.42 12.0083 13.2917 11.9716 13.1175 12.1916C12.9708 12.4208 12.5308 12.9341 12.4025 13.0808C12.265 13.2366 12.1367 13.255 11.9167 13.145C11.6783 13.0258 10.945 12.7875 10.0833 12.0175C9.40498 11.4125 8.95582 10.67 8.81832 10.4408C8.70832 10.2208 8.80915 10.0833 8.91915 9.98247C9.01998 9.88164 9.16665 9.71663 9.25832 9.57913C9.37748 9.4508 9.41415 9.34997 9.48748 9.2033C9.56082 9.04747 9.52415 8.91913 9.46915 8.80913C9.41415 8.7083 8.95582 7.57163 8.76332 7.12247C8.57998 6.68247 8.39665 6.73747 8.24998 6.7283C8.12165 6.7283 7.97498 6.71913 7.81915 6.71913Z" fill="#064C69"/>
</svg>
                    </div>
                                        <span>Whatsapp</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                                        <path d="M6.31449 6.96295C6.60739 6.67005 6.60739 6.19518 6.31449 5.90229L1.54152 1.12932C1.24863 0.836423 0.773756 0.836424 0.480863 1.12932C0.18797 1.42221 0.18797 1.89708 0.480863 2.18998L4.7235 6.43262L0.480864 10.6753C0.187971 10.9682 0.187971 11.443 0.480864 11.7359C0.773757 12.0288 1.24863 12.0288 1.54152 11.7359L6.31449 6.96295ZM5.68896 7.18262L5.78416 7.18262L5.78416 5.68262L5.68896 5.68262L5.68896 7.18262Z" fill="white"/>
                                        </svg>
                                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile;
endif; ?>

<?php get_footer(); ?>
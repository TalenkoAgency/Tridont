<?php

$titulli = $args['titulli'];
$linku_tekst = $args['linku_tekst'];
$link_url = $args['linku_url'];
$imazhi_mobile = $args['imazhi_mobile'];
$imazhi_desktop = $args['imazhi_desktop'];
$no_spacing = $args['no_spacing'];
?>

<section class="container-fluid px-0 animation-trigger shared-contact-section margin-spacing-top <?php if($no_spacing){ echo "no-spacing-top-contact";} ?>">
    <div class="shared-contact-image">
        <picture>
            <source media="(min-width:431px)" srcset="<?php echo $imazhi_desktop['url']; ?>" />
            <img src="<?php echo $imazhi_mobile['url']; ?>" alt="<?php echo $imazhi_mobile['alt']; ?>" />
        </picture>
    </div>

    <div class="container shared-contact-container">
        <div class="row">
            <div class="col-12">
                <div class="shared-contact-text-button animated-items-holder">
                    <div class="shared-contact-title">
                        <span class="heading with-clip"><?php echo $titulli; ?></span>
                    </div>
                    <div class="shared-contact-link">
                    <a href="<?php echo $link_url; ?>" class="linear-link ">
                                        <span><?php echo $linku_tekst; ?></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                                        <path d="M6.31449 6.96295C6.60739 6.67005 6.60739 6.19518 6.31449 5.90229L1.54152 1.12932C1.24863 0.836423 0.773756 0.836424 0.480863 1.12932C0.18797 1.42221 0.18797 1.89708 0.480863 2.18998L4.7235 6.43262L0.480864 10.6753C0.187971 10.9682 0.187971 11.443 0.480864 11.7359C0.773757 12.0288 1.24863 12.0288 1.54152 11.7359L6.31449 6.96295ZM5.68896 7.18262L5.78416 7.18262L5.78416 5.68262L5.68896 5.68262L5.68896 7.18262Z" fill="white"/>
                                        </svg>
                                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
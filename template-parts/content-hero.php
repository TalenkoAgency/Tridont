<?php 

$titulli = $args['titulli'];
$teksti = $args['teksti'];
$foto_mobile = $args['foto_mobile'];
$foto_desktop = $args['foto_desktop'];
$linkat = $args['linkat']; ?>

<main class="container-fluid animation-trigger px-0 hero-main">
    <div class="hero-main-images">
        <picture>
            <source media="(min-width:431px)" srcset="<?php echo $foto_desktop['url']; ?>">
            <img src="<?php echo $foto_mobile['url']; ?>" alt="<?php echo $foto_mobile['alt']; ?>" />
        </picture>
    </div>

    <div class="container hero-container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="hero-items animated-items-holder">
                    <div class="hero-texts">
                        <h1 class="title"><?php echo $titulli; ?></h1>
                        <p class="body-text"><?php echo $teksti; ?></p>
                    </div>

                    <div class="hero-buttons">
                        <?php if($linkat):$i=0; ?>
                            <?php foreach($linkat as $link): ?>
                                    <a href="<?php echo $link['linku']; ?>" class="linear-link <?php if($i===1){ echo "white-link";} ?>">
                                        <span><?php echo $link['teksti_i_linkut']; ?></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                                        <path d="M6.31449 6.96295C6.60739 6.67005 6.60739 6.19518 6.31449 5.90229L1.54152 1.12932C1.24863 0.836423 0.773756 0.836424 0.480863 1.12932C0.18797 1.42221 0.18797 1.89708 0.480863 2.18998L4.7235 6.43262L0.480864 10.6753C0.187971 10.9682 0.187971 11.443 0.480864 11.7359C0.773757 12.0288 1.24863 12.0288 1.54152 11.7359L6.31449 6.96295ZM5.68896 7.18262L5.78416 7.18262L5.78416 5.68262L5.68896 5.68262L5.68896 7.18262Z" fill="white"/>
                                        </svg>
                                    </a>
                                <?php $i++;
                                 endforeach; ?>
                            <?php endif; ?>
                    </div>
                    
                </div>
            
            </div>
        </div>
    </div>
</main>
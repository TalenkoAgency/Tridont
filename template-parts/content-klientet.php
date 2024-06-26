<?php 
    $titulli = $args['titulli'];
    $imazhi_mobile = $args['imazhi_mobile'];
    $imazhi_desktop  = $args['imazhi_desktop'];
    $shkrimet =$args['shkrimet'];

?>

<section class="container-fluid px-0 animation-trigger client-section margin-spacing-top">

<div class="client-image">
            <picture>
                <source media="(min-width:431px)" srcset="<?php echo $imazhi_desktop['url']; ?>" />
                <img src="<?php echo $imazhi_mobile['url']; ?>" alt="<?php echo $imazhi_mobile['alt']; ?>" loading="lazy" />
            </picture>
        </div> 

    <div class="container client-container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3 client-content animated-items-holder">
                    <div class="client-title">
                        <span class="heading with-clip"><?php echo $titulli; ?></span>
                    </div>
                </div>
        </div>
        </div>
        <?php if($shkrimet): ?>
        <div class="swiper client-swiper">
            
      
            <div class="swiper-wrapper">
                <?php foreach($shkrimet as $client): ?>
                    <div class="swiper-slide">
                        <div class="client-texts">
                            <div class="client-text">
                                <p class="body-text"><?php echo $client['teksti']; ?></p>
                            </div>
                            <div class="client-name-and-rating">
                                <div class="client-name">
                                    <span class="body-text"><?php echo $client['emri']; ?></span>
                                </div>
                                <div class="client-rating">
                                <?php for($i=0; $i<$client['yjet']; $i++): ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M5.825 21L7.45 13.975L2 9.25L9.2 8.625L12 2L14.8 8.625L22 9.25L16.55 13.975L18.175 21L12 17.275L5.825 21Z" fill="#FFD233"/>
                                    </svg>
                                    <?php endfor; ?>
                                </div>
                      
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="buttons-wrapper-clients">
                        <div class="my-buttons">
                            <button type="button" class="prev-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                                <path d="M4.56513 7.1145L3.69553 6.16014C2.68894 5.05786 1.68306 3.95663 0.677862 2.85642C0.264831 2.4031 0.153595 1.8029 0.379645 1.29008C0.772994 0.393352 1.76785 0.213014 2.42393 0.927549C3.62256 2.23267 4.81792 3.54069 6.01 4.8516C6.38426 5.26247 6.76061 5.67273 7.13398 6.08701C7.70775 6.72191 7.71103 7.51453 7.13398 8.14695C5.56595 9.86853 3.99534 11.5881 2.42214 13.3058C1.98764 13.7808 1.42341 13.8738 0.898842 13.567C0.255586 13.1908 0.0575693 12.1922 0.513246 11.5839C0.662355 11.3862 0.83055 11.2053 0.996955 11.0231C2.14728 9.76297 3.29751 8.50422 4.44763 7.24681C4.48342 7.20777 4.51801 7.16749 4.56513 7.1145Z" fill="#577A8D"></path>
                            </svg>
                            </button>

                            <button type="button" class="next-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                                <path d="M4.56513 7.1145L3.69553 6.16014C2.68894 5.05786 1.68306 3.95663 0.677862 2.85642C0.264831 2.4031 0.153595 1.8029 0.379645 1.29008C0.772994 0.393352 1.76785 0.213014 2.42393 0.927549C3.62256 2.23267 4.81792 3.54069 6.01 4.8516C6.38426 5.26247 6.76061 5.67273 7.13398 6.08701C7.70775 6.72191 7.71103 7.51453 7.13398 8.14695C5.56595 9.86853 3.99534 11.5881 2.42214 13.3058C1.98764 13.7808 1.42341 13.8738 0.898842 13.567C0.255586 13.1908 0.0575693 12.1922 0.513246 11.5839C0.662355 11.3862 0.83055 11.2053 0.996955 11.0231C2.14728 9.76297 3.29751 8.50422 4.44763 7.24681C4.48342 7.20777 4.51801 7.16749 4.56513 7.1145Z" fill="#577A8D"></path>
                            </svg>
                            </button>
                        </div>

                        </div>
                    </div>
                </div>
            </div>

       
        </div>
      <?php endif; ?>
   
</section>
<?php 
$titulli = $args['titulli'];
$tekst = $args['tekst'];
$ekipa = $args['ekipa']; ?>

<section class="container ekipa-container spacing-top">
    <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2 col-xxl-6 offset-xxl-3 ">
            <div class="ekipa-texts">
                <div class="ekipa-titulli">
                    <span class="heading with-clip"><?php echo $titulli; ?></span>
                </div>
                <div class="ekipa-tekst">
                    <p class="body-text"><?php echo $tekst; ?></p>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="ekipa-holder">
                <?php if($ekipa): $i=0; ?>
                    <?php foreach($ekipa as $member): ?>
                        <div class="member member<?php echo $i; ?> <?php if($i>1){ echo "member-small";} ?>">
                            <div class="member-images">
                                <div class="member-main-image">
                                    <picture>
                                        <source media="(min-width:431px)" srcset="<?php echo $member['imazhi_desktop']['url']; ?>" />
                                        <img src="<?php echo $member['imazhi_telefon']['url']; ?>" alt="<?php echo $member['imazhi_telefon']['alt']; ?>" />
                                    </picture>
                                </div>

                                
                            <div class="member-layers">
                                <?php if($i>0){ ?> 
                                    <picture>
                                        <source media="(min-width:431px)" srcset="<?php echo get_template_directory_uri() . '/assets/images/LayerBig.webp'; ?>" />
                                        <img src="<?php echo get_template_directory_uri() ."/assets/images/LayerMobile.webp"; ?>" alt="Layer" />
                                    </picture>
                                    <?php }else { ?>

                                        <picture>
                                        <source media="(min-width:431px)" srcset="<?php echo get_template_directory_uri() . "/assets/images/LayerSmall.webp"; ?>" />
                                        <img src="<?php echo get_template_directory_uri() ."/assets/images/LayerMobile.webp"; ?>" alt="Layer" />
                                    </picture>
                                         <?php } ?>
                            </div>
                            </div>

                            <div class="member-content">
                                <div class="member-texts">
                                    <div class="member-title">
                                        <span class="body-text"><?php echo $member['emri']; ?></span>
                                    </div>
                                    <div class="member-position">
                                        <span class="body-text"><?php echo $member['pozita']; ?></span>
                                    </div>
                                </div>

                                <div class="member-tel-and-location">

                                <a href="<?php echo $member['google_maps']; ?>" target="_blank" class="member-location">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="25" viewBox="0 0 19 25" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.60296 23.9986L10.5077 22.9791C11.5343 21.8034 12.4577 20.6879 13.2793 19.6268L13.9575 18.7321C16.7893 14.9167 18.2059 11.8885 18.2059 9.65027C18.2059 4.87276 14.3547 1 9.60296 1C4.85126 1 1 4.87276 1 9.65027C1 11.8885 2.41662 14.9167 5.24843 18.7321L5.92663 19.6268C7.09869 21.1286 8.32494 22.5859 9.60296 23.9986Z" stroke="#C29078" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9.60312 13.1876C11.5828 13.1876 13.1877 11.5827 13.1877 9.603C13.1877 7.6233 11.5828 6.01843 9.60312 6.01843C7.62342 6.01843 6.01855 7.6233 6.01855 9.603C6.01855 11.5827 7.62342 13.1876 9.60312 13.1876Z" stroke="#C29078" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span class="body-text"><?php echo $member['lokacioni']; ?></span>
                                    </a>
                                    <div class="member-tel">
                                    <a href="tel:<?php echo str_replace(' ', '', $member['telefon']); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                                        <path d="M21.1842 23C21.6658 23 22.1276 22.8087 22.4682 22.4682C22.8087 22.1276 23 21.6658 23 21.1842V16.9474C23 16.4658 22.8087 16.0039 22.4682 15.6634C22.1276 15.3229 21.6658 15.1316 21.1842 15.1316C19.7679 15.1316 18.3758 14.9137 17.0442 14.4658C16.7259 14.3653 16.3861 14.3539 16.0617 14.4329C15.7373 14.5118 15.4408 14.6781 15.2042 14.9137L13.4611 16.6568C10.4496 15.0133 7.97455 12.5383 6.33105 9.52684L8.06211 7.79579C8.55842 7.32368 8.74 6.62158 8.52211 5.94368C8.08632 4.62421 7.86842 3.23211 7.86842 1.81579C7.86842 1.33421 7.67712 0.872359 7.33659 0.531832C6.99606 0.191306 6.53421 0 6.05263 0H1.81579C1.33421 0 0.872359 0.191306 0.531832 0.531832C0.191306 0.872359 0 1.33421 0 1.81579C0 13.4974 9.50263 23 21.1842 23ZM1.81579 1.21053H6.05263C6.21316 1.21053 6.36711 1.2743 6.48062 1.3878C6.59413 1.50131 6.65789 1.65526 6.65789 1.81579C6.65789 3.36526 6.9 4.87842 7.37211 6.31895C7.43263 6.48842 7.42053 6.73053 7.22684 6.92421L4.84211 9.29684C6.83947 13.2068 9.76895 16.1363 13.6911 18.1579L16.0516 15.7732C16.2211 15.6037 16.4511 15.5553 16.6689 15.6158C18.1216 16.1 19.6347 16.3421 21.1842 16.3421C21.3447 16.3421 21.4987 16.4059 21.6122 16.5194C21.7257 16.6329 21.7895 16.7868 21.7895 16.9474V21.1842C21.7895 21.3447 21.7257 21.4987 21.6122 21.6122C21.4987 21.7257 21.3447 21.7895 21.1842 21.7895C10.1684 21.7895 1.21053 12.8316 1.21053 1.81579C1.21053 1.65526 1.2743 1.50131 1.3878 1.3878C1.50131 1.2743 1.65526 1.21053 1.81579 1.21053Z" fill="#C29078"/>
                                        </svg>
                                        <span class="body-text"><?php echo $member['telefon']; ?></span>
                                        </a>
                                    </div>

                                  
                                </div>
                            </div>

                        </div>
                    <?php $i++; 
                    endforeach;?>
                <?php endif; ?>                
            </div>
        </div>
    </div>
</section>
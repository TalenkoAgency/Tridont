<?php 
$after_mobile = $args['after_mobile'];
$after_desktop = $args['after_desktop'];
$before_mobile = $args['before_mobile'];
$before_desktop = $args['before_desktop'];
 ?>

<div class="teeth-items">
    <div class='teeth-after'>
        <picture>
            <source media="(min-width:431px)" srcset="<?php echo $after_mobile['url']; ?>">
            <img loading="lazy" src="<?php echo $after_desktop['url']; ?>" alt="<?php echo $after_desktop['alt']; ?>" />
        </picture>
    </div>

    <div class="teeth-before">
    <picture>
            <source media="(min-width:431px)" srcset="<?php echo $before_desktop['url']; ?>">
            <img loading="lazy" src="<?php echo $before_mobile['url']; ?>" alt="<?php echo $before_mobile['alt']; ?>" />
        </picture>
    </div>
</div>
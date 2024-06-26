<?php 
/* Template Name: Imprint */
get_header(); ?>

<main class="imprint-container container">
    <div class="row">
    <div class="col-12 col-lg-10 imprint-main-content">
        <h1 class="title"><?php echo the_title(); ?></h1>
    </div>

    <div class="col-12 col-lg-10 col-xl-8 imprint-content">
        <div class="imprint-content-wrapper">
            <?php echo the_content(); ?>
        </div>
    </div>
    </div>
</main>

<?php get_footer(); ?>
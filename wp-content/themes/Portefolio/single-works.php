<?php
    get_header();
    $obj = get_post_type_object( 'works' );
?>
<h1 class="works__title">
    <span class="hidden"><?= get_field('title'); ?>'s</span><?= $obj->labels->singular_name; ?>
</h1>
<div class="single-work">
    <h2 class="name_single_work"><?= get_field('title'); ?></h2>

    <!-- *************Taxonomy*************-->
    <?php $terms = get_the_terms( $post->ID , 'type' );
    foreach ( $terms as $term ) {
        echo '<p class="taxo">' . '#' . $term->name . '</p>';
    }
    ?>
    <!-- *************First image*************-->
    <?php if (have_rows('images')): while (have_rows('images')): the_row(); ?>
        <?php $arrImg = get_sub_field('img'); ?>
        <?= wp_get_attachment_image($arrImg['ID'], 'port-big',"", ["class" => "img_single_work"]); ?>
    <?php endwhile; endif; ?>

    <!-- *************Content*************-->
    <p class="content-single-work"><?= get_field('content'); ?></p>

    <!-- *************First paragraph*************-->
    <p class="para-single-work"><?= get_field('paragraph'); ?></p>

    <!-- *************Second image*************-->
    <?php if (have_rows('images_2')): while (have_rows('images_2')): the_row(); ?>
        <img src="<?= get_sub_field('img'); ?>" alt="<?= get_sub_field('alt'); ?>" class="scdimg-single-work">
    <?php endwhile; endif; ?>

    <!-- *************Second paragraph*************-->
    <p class="para-single-work"><?= get_field('paragraph_2'); ?></p>

    <!-- *************Third image*************-->
    <?php if (have_rows('images_3')): while (have_rows('images_3')): the_row(); ?>
        <img src="<?= get_sub_field('img'); ?>" alt="<?= get_sub_field('alt'); ?>" class="thdimg-single-work">
    <?php endwhile; endif; ?>

    <!-- *************Third paragraph*************-->
    <p class="para-single-work"><?= get_field('paragraph_3'); ?></p>

    <!-- *************Link*************-->
    <?php if (have_rows('link')): while (have_rows('link')): the_row(); ?>
    <a href="<?= get_sub_field('url'); ?>" class="link-single-work">Go to see the website</a>
    <?php endwhile; endif; ?>
</div>
<?php
    get_footer();
?>

<?php
    get_header()
?>
<h1 class="works__title">
    <span class="hidden">Charlotte Toussaint's</span><?= get_field('text'); ?>
</h1>
<?php
    $args = array( 'post_type' => 'works' );
    $loop = new WP_Query( $args );
?>
<ul class="flex_worklist">
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <li class="list_item_work">
                <a href="<?php the_permalink(); ?>">
                    <?php if (have_rows('images')): while (have_rows('images')): the_row(); ?>
                        <?php $arrImg = get_sub_field('img'); ?>
                        <?= wp_get_attachment_image($arrImg['ID'], 'port-thumbnail', "", ["class" => "img_work_page"]); ?>
                    <?php endwhile; endif; ?>
                    <p class="name__worklist">
                        <?= get_field('title'); ?><br>
                        <!--<span class="button-page-work">
                            Voir le projet
                        </span>-->
                    </p>
                </a>
            </li>
        <?php /*$terms = get_the_terms( $post->ID , 'type' );
        foreach ( $terms as $term ) {
            echo '<p class="taxo">' . $term->name . '</p>';
        }
        */?>
    <?php endwhile; ?>
</ul>
<?php get_footer(); ?>

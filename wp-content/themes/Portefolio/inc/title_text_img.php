<section class="blochobbies">
    <div class="blochobbies__margin">
        <div class="blochobbies__aboutme aboutme">
            <h2 class="aboutme__title1">
                <?= get_sub_field('title'); ?> <span class="aboutme__title1--typochange"><?= get_sub_field('title_2'); ?></span>
            </h2>
            <p class="aboutme__text">
                <?= get_sub_field('text'); ?>
            </p>
        </div>
        <ul class="blochobbies__list">
            <?php if (have_rows('images')): while(have_rows('images')): the_row(); ?>
                <li class="blochobbies__list__items item">
                    <img src="<?= get_sub_field('img'); ?>" alt="<?= get_sub_field('alt'); ?>" width="201" height="201" class="item__img">
                </li>
            <?php endwhile; endif; ?>
        </ul>
    </div>
</section>
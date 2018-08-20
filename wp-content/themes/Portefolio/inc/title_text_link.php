<section class="blocme">
    <h2 class="blocme__title1">
        <?= get_sub_field('title'); ?>
    </h2>
    <p class="blocme__chapo">
        <?= get_sub_field('text'); ?>
    </p>
    <?php if(have_rows('paragraphe')): while (have_rows('paragraphe')): the_row(); ?>
        <p class="blocme__text">
            <?= get_sub_field('text'); ?>
        </p>
    <?php endwhile; endif; ?>
    <?php $button = get_sub_field('button'); ?>
        <a href="<?= $button['url']; ?>" class="blocme__button" title="<?= $button['desc']; ?>"><?= $button['label']; ?></a>
</section>
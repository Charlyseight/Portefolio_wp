<section class="blocskills">
    <div class="blocskills__content">
        <h2 class="blocskills__content__title1">
            <span class="blocskills__content__title1--typochange"><?= get_sub_field('title'); ?></span> <?=get_sub_field('title_2'); ?>
        </h2>
        <p class="blocskills__content__text text">
            <?= get_sub_field('text'); ?>
        </p>
        <?php if(have_rows('paragraphe')): while (have_rows('paragraphe')): the_row(); ?>
            <p class="text__adjectif"><?=get_sub_field('text'); ?></p>
        <?php endwhile; endif ; ?>
        <div class="blocskills__icon">
           <!-- <ul class="blocskills__icon__list skillslist">
                <?php /*if (have_rows('images')): while(have_rows('images')): the_row(); */?>
                    <li class="skillslist__item">
                        <img src="<?/*= get_sub_field('img'); */?>" alt="<?/*= get_sub_field('alt'); */?>" width="50" height="50" class="skillslist__item__img">
                    </li>
                <?php /*endwhile; endif; */?>
            </ul>-->
            <p class="label_range">Adobe suite</p>
            <div class="container_range">
                <div class="skillsrange adoberange">70%</div>
            </div>

            <p class="label_range">HTML</p>
            <div class="container_range">
                <div class="skillsrange htmlrange">80%</div>
            </div>

            <p class="label_range">CSS</p>
            <div class="container_range">
                <div class="skillsrange cssrange">75%</div>
            </div>

            <p class="label_range">JavaScript</p>
            <div class="container_range">
                <div class="skillsrange jsrange">55%</div>
            </div>

            <p class="label_range">PHP</p>
            <div class="container_range">
                <div class="skillsrange phprange">55%</div>
            </div>

            <p class="label_range">Wordpress</p>
            <div class="container_range">
                <div class="skillsrange wprange">80%</div>
            </div>
        </div>
        <p class="text__catch"><?= get_sub_field('text_2'); ?></p>
        <?php $button = get_sub_field('button'); ?>
            <a href="<?= $button['url']; ?>" class="blocskills__content__button" title="<?= $button['desc']; ?>"><?= $button['label']; ?></a>
    </div>
</section>
<section class="bloccontact__info">
    <h1 class="contact__title">
        <span class="hidden">Charlotte Toussaint's</span><?= get_field('text'); ?>
    </h1>
    <div class="bloccontact__picture">
        <?php if (have_rows('image')): while (have_rows('image')): the_row(); ?>
            <img src="<?= get_sub_field('img'); ?>" alt="<?= get_sub_field('desc'); ?>" width="3215" height="899" class="bloccontact__picture__img">
        <?php endwhile; endif; ?>
    </div>
    <p class="info_send">
        For sending your message, please complete all fields.
    </p>
    <div class="contact__div">
        <div class="bloccontact__content">
            <h2 class="bloccontact__title1">
                <?= get_sub_field('title'); ?>
            </h2>
            <div itemscope itemtype="http://schema.org/Person" class="bloccontact__info__content content">

                <p itemprop="name" class="content--name info"><?= get_sub_field('text'); ?></p>
                <meta itemprop="jobTitle" content="webdesigner">
                <meta itemprop="birthDate" content="16/07/1994">
                <meta itemprop="gender" content="female">
                <img src="../assets/images/charlotte_toussaint.jpg" alt="Charlotte Toussaint" class="meta" itemprop="image">
                <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                    <meta itemprop="addressLocality" content="Luxembourg">
                </div>
                <p itemprop="email" class="content--email info"><?= get_sub_field('text_2'); ?></p>
                <p itemprop="telephone" class="content--number info"><?= get_sub_field('text_3'); ?></p>
            </div>
            <div class="bloccontact__network">
                <?php if (have_rows('network')): while (have_rows('network')): the_row(); ?>
                    <a href="<?= get_sub_field('url'); ?>" class="bloccontact__network__link--facebook social" title="Go to the <?= get_sub_field('text'); ?> account of Charlotte Toussaint">
                                    <span class="fab fa-<?= get_sub_field('text'); ?>">
                                        <span class="hidden"><?= get_sub_field('text'); ?> de Charlotte Toussaint</span>
                                    </span>
                    </a>
                <?php endwhile; endif; ?>
            </div>
        </div>
        <div class="bloccontact__form border">
            <?= get_sub_field('form'); ?>
        </div>
    </div>
</section>
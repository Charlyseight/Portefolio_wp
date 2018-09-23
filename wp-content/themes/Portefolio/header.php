<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!--<title>About | Charlotte Toussaint's portefolio</title>-->
    <meta name="description" content="Charlotte Toussaint portefolio">
    <meta name="keywords" content="portefolio, web, design, webdesign">
    <meta name="author" content="Charlotte Toussaint">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= assets("assets/css/style.css"); ?>">
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->
<header>
    <h1 class="header__title">
        <span class="hidden">The portefolio of</span>
        <span class="hidden">charlotte toussaint</span>
        <span class="hidden">webdesigner</span>
    </h1>
    <div class="blocheader__flex flex blocheader__white">
        <div class="flex__logo">
        <?php if (have_rows('image')): while (have_rows('image')): the_row(); ?>
            <a href="<?=get_sub_field('link'); ?>" class="flex__logo__link link">
                    <img src="<?= get_sub_field('img'); ?>" alt="<?= get_sub_field('alt'); ?>" class="link__logo">
            </a>
        <?php endwhile; endif; ?>
        </div>
        <button class="blocheader__menu__desk" id="buttonjs">
                    <span class="hidden">
                        Ouvrir/fermer le menu
                    </span>
        </button>
        <input id="burger" type="checkbox">
        <label for="burger" class="burgercss">
            <span class="hidden">Ouvrir/fermer le menu</span>
            <span></span>
            <span></span>
            <span></span>
        </label>
        <nav class="blocheader__menu">
            <h2 class="hidden">Main navigation</h2>
            <ul class="blocheader__menu__list menu aboutmenu">
                <?php foreach (port_get_menu('main')->getItems() as $item): ?>
                    <li class="menu__items">
                        <a href="<?= $item->url; ?>" class="menu__items__link blocother__menu__link" id="link"><?= $item->label; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>
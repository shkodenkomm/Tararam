<?php if($mainPage): ?>

    <title><?=$mainPage['title'];?></title>

    <section class="row">
        <div class="col-2 col-s-0 col-m-0"><p></p></div>
        <div class="col-8 col-s-12" >
            main_karusel
            <?php   //include "parts/main_karusel.php";  ?>
        </div>
        <div class="col-2 col-s-0 col-m-0"><p></p></div>
    </section >
    <section class="row">
        <div class="col-2 col-s-0 col-m-0"><p></p></div>
        <div class="col-8 col-s-12">
            <section>
                aboutMe
                <?php //include "aboutMe.php"  ?>
            </section>
        </div>
        <div class="col-2 col-s-0 col-m-0"><p></p></div>
    </section>
    <section class="row">
        <div class="col-2 col-s-0 col-m-0"><p></p></div>
        <div class="col-8 col-s-12">
            <h1>Услуги фотографа в Киеве</h1>
            <section>
                <?php // include "parts/objects/CommonCart.php"; insertCarts(); ?>
            </section>
        </div>
        <div class="col-2 col-s-0 col-m-0"><p></p></div>
    </section>

    <section class="row">
        <div class="col-2 col-s-0 col-m-0"><p></p></div>
        <div class="col-8 col-s-12">
            <h1>Как выбрать фотографа в Киеве?</h1>
            <section>
                <?php //include "content/howSelectPhotograph.php"  ?>
            </section>
        </div>
        <div class="col-2 col-s-0 col-m-0"><p></p></div>
    </section>
<?php else: ?>
    <h2>Главная страница не найдена</h2>
<?php endif; ?>
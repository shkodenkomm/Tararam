<!DOCTYPE html>
<html lang="ru">
    <head>
        <?php echo GAN_HEAD, GTM_HEAD ?>

        <link rel ="icon" type = "image/png" href = "/favicon.png">
        <link rel="stylesheet" href="/web/css/main.css">
        <script src="/web/js/utils.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta    name="description"
        content="Доступные цены на фотосессию в фотостудии и на выезде.
        Детская, семейная, персональная, фотосессия беременности, Love Story,
        таинства венчания и крещения, репортажная сьемка.
        Услуги: фотосьемка, фотокнига, подарочный сертификат, помощь с созданием образа">

    </head>

    <body>
        <?php echo  fbMsgPlugin ?>
        <header class ="row">
            <div class="col-2 col-s-0 col-m-0" ><p></p></div>
            <div class="col-8 col-s-12">
                <?php include "header.php" ?>
            </div>
            <div class="col-2 col-s-0 col-m-0"><p></p></div>
        </header>
        <main>
            <?php  include $contentPage  ?>
        </main>
    </body>
</html>












































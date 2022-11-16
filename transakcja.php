<html>
    <head>
        <title>ZSP-Shop</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styl.css">
        <?php
            $db = new mysqli("localhost","root","","zsp-shop");
            $db -> query ('SET NAMES utf8');
        ?>
    </head>
    <body>
        <div class="banner">
            <h2>Tranzakcja</h2>
            <?php
                echo "<b>Zalogowany jako: </b>".$_COOKIE["uzytkownik"].' ';
            ?>
            |
            <a href="ogloszenia.php" class="a1"><b>Wróć do ogłoszeń</b></a>
        </div>
        <div class="main">
            <h3>Dziękujemy za dokonanie transakcji</h3>
            <?php
                $zakup = 'INSERT INTO zamowienia (produkty_id, uzytkownicy_id) VALUES ('.$_COOKIE["id_oferty"].', "'.$_COOKIE["id_uzytkownik"].'")';
                $db -> query ($zakup);
            ?>
        </div>
        <div class="banner">
            <h4>ZSP-Shop</h4>
        </div>
    </body>
</html>
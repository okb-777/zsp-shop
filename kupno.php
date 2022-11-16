<html>
    <head>
        <title>ZSP-Shop</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styl.css">
        <?php
            $db = new mysqli("localhost","root","","zsp-shop");
            $db -> query ('SET NAMES utf8')
        ?>
    </head>
    <body>
        <div class="banner">
            <h2>Kupno</h2>
            
            <?php
                echo "<b>Zalogowany jako: </b>".$_COOKIE["uzytkownik"].'<br>';
            ?> 
            <p><a href="ogloszenia.php" class="a1"><b>Wróć do ogłoszeń</b></a></p>
        </div>
        <div class="main">
            <h3>Kup: </h3>
            <?php
                echo $_COOKIE["nazwa"].' '.$_COOKIE["opis"].' '.$_COOKIE["cena"].' zł';
            ?>
        </div>
        <div class="banner">
            <h4>ZSP-Shop</h4>
        </div>
    </body>
</html>
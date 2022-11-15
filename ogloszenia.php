<html>
    <head>
        <title>ZSP-Shop</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styl.css">
        <?php
            $db = new mysqli("localhost","root","","zsp-shop");
            $db -> query ('SET NAMES utf8');
            $ogloszenia = ("SELECT nazwa, opis, cena FROM produkty");
            $zamowienia = ("SELECT produkty_id, uzytkownicy_id FROM zamowienia");
            $sql =("SELECT * FROM `produkty` LEFT JOIN zamowienia ON produkty.id = zamowienia.produkty_id WHERE uzytkownicy_id IS NULL");
        ?>
    </head>
    <body>
        <div>
            <h2>Ogłoszenia</h2> 
            <p><a href="stworz_ogloszenie.php">Stwórz ogłoszenie</a> | <a href="index.php">Wyloguj</a></p>
        </div>
        <div>
            <h4>Dostępne ogłoszenia:</h4>
            <?php
                if($result_sql = $db -> query($sql))
                {
                    while($row_sql = $result_sql -> fetch_array())
                    {
                        echo "<b>Nazwa: </b>".$row_sql["nazwa"];
                        echo "<br>";
                        echo "<b>Opis: </b>".$row_sql["opis"];
                        echo "<br>";
                        echo "<b>Cena: </b>".$row_sql["cena"]." zł";
                        echo "<br>";
                        echo "<br>";
                    }
                }
            ?>
        </div>
    </body>
</html>
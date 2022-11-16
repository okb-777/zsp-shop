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
            $sql =("SELECT produkty.id, produkty.nazwa, produkty.opis, produkty.cena, zamowienia.produkty_id, zamowienia.uzytkownicy_id FROM `produkty` LEFT JOIN zamowienia ON produkty.id = zamowienia.produkty_id WHERE uzytkownicy_id IS NULL;");
            setcookie("nazwa");
            setcookie("opis");
            setcookie("cena");
        ?>
    </head>
    <body>
        <div class="banner">
            <h2>Ogłoszenia</h2> 
            <p>
                <?php
                    echo "<b>Zalogowany jako: </b>".$_COOKIE["uzytkownik"].'<br>';
                ?> 
                <a href="stworz_ogloszenie.php" class="a1"><b>Stwórz ogłoszenie</b></a>
                |
                <a href="twoje_zakupy.php" class="a1"><b>Twoje zakupy</b></a>
                |
                <a href="index.php" class="a1"><b>Wyloguj</b></a>
            </p>
        </div>
        <div class="main">
            <h3>Dostępne ogłoszenia:</h3>
            <?php
                if($result_sql = $db -> query($sql))
                {
                    while($row_sql = $result_sql -> fetch_array())
                    {
                        echo "<form action='kupno.php' method='post'>";
                            echo "<b>Nazwa: </b>".$row_sql["nazwa"];
                            echo "<br>";
                            echo "<b>Opis: </b>".$row_sql["opis"];
                            echo "<br>";
                            echo "<b>Cena: </b>".$row_sql["cena"]." zł";
                            echo "<p><button type='submit'><b>Kup</b></button></p>";
                        
                            setcookie("nazwa", $row_sql["nazwa"]);
                            setcookie("opis", $row_sql["opis"]);
                            setcookie("cena", $row_sql["cena"]);
                            
                            setcookie("id_oferty", $row_sql["id"]);
                        echo "</form>";
                    }
                }
            ?>
        </div>
        <div class="banner">
            <h4>ZSP-Shop</h4>
        </div>
    </body>
</html>
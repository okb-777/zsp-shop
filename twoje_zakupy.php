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
            <h2>Twoje zakupy</h2>
            
            <?php
                echo "<b>Zalogowany jako: </b>".$_COOKIE["uzytkownik"].'<br>';
            ?> 
            <p><a href="ogloszenia.php" class="a1"><b>Wróć do ogłoszeń</b></a></p>
        </div>
        <div class="main">
            
            <?php
                $ogloszenia = "SELECT produkty.nazwa, produkty.opis, produkty.cena, zamowienia.produkty_id, uzytkownicy.id, uzytkownicy.nazwa AS nick FROM `produkty` LEFT JOIN zamowienia ON produkty.id = zamowienia.produkty_id LEFT JOIN uzytkownicy ON zamowienia.uzytkownicy_id = uzytkownicy.id;";
            
                $a = 0;
            
                echo '<h3>Kupujesz: </h3>';
            
                if($result_ogloszenia = $db -> query($ogloszenia))
                {
                    while($row_ogloszenia = $result_ogloszenia -> fetch_array())
                    {
                            
                        if($_COOKIE["uzytkownik"] == $row_ogloszenia['nick'])
                        {
                            $a++;
                            echo '• '.$row_ogloszenia['nazwa'].' - '.$row_ogloszenia['opis'].' - '.$row_ogloszenia['cena'].' zł<br>';
                            break;
                        }
                    }
                }
                if($a==0){
                    echo 'brak złożeonego zamówienia';
                }
            ?>
        </div>
        <div class="banner">
            <h4>ZSP-Shop</h4>
        </div>
    </body>
</html>
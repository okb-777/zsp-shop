<html>
    <head>
        <title>Ogloszenia</title>
        <?php
            $db = new mysqli("127.0.0.1","root","","zsp-shop");
            $ogloszenia = "SELECT nazwa, opis, cena FROM produkty";
            $db -> query ('SET NAMES utf8');
        ?>
    </head>
    <body>
        <div>
            <a href="index.php">wroc</a><br>
            <?php
                print_r($_COOKIE);
                echo '<br><br>';
                echo '<b>Zalogowany jako: </b>'.$_COOKIE['nazwa'].'<br>';
            ?>
        </div>
        
        <div>
            <?php
                if($o_result = $db -> query($ogloszenia))
                {
                    while ($o_row = $o_result -> fetch_array())
                    {
                       
                        echo "<br>";
                        echo '<b>Przedmiot: </b>'.$o_row['nazwa'].'
                        <br> <b>Opis: </b>'.$o_row['opis'].'
                        <br> <b>Cena: </b>'.$o_row['cena'].' 
                        zł <br>';
                    }
                } 

            ?>
        </div>
    </body>
</html>

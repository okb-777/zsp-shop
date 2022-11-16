<html>
    <head>
        <title>ZSP-Shop</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styl.css">
        <?php
            $db = new mysqli("localhost","root","","zsp-shop");
            $db -> query ('SET NAMES utf8');
            $sql = ("SELECT * FROM `produkty` WHERE id = ".$_COOKIE["id_oferty"]."");
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
                if($result_sql = $db -> query($sql))
                {
                    while($row_sql = $result_sql -> fetch_array())
                    {
                        echo "<form action='transakcja.php' method='post'>";
                            
                            echo "<b>Nazwa: </b>".$row_sql["nazwa"];
                            echo "<br>";
                            echo "<b>Opis: </b>".$row_sql["opis"];
                            echo "<br>";
                            echo "<b>Cena: </b>".$row_sql["cena"]." zł";
                        
                            echo "<p><button type='submit' name='button'><b>Kup</b></button></p>";
                            
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
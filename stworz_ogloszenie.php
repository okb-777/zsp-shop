<html>
    <head>
        <title>ZSP-Shop</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styl.css">
        <?php
            $db = new mysqli("localhost","root","","zsp-shop");
        ?>
    </head>
    <body>
        <div class="banner">
            <h2>Stwórz swoje ogłoszenie</h2>
            
            <?php
                echo "<b>Zalogowany jako: </b>".$_COOKIE["uzytkownik"].'<br>';
            ?> 
        </div>
        <div class="main">
            <form method="post">
                <p><label>Nazwa: <input type="text" name="nazwa"></label></p>
                <p><label>Opis: <input type="text" name="opis"></label></p>
                <p><label>Cena: <input type="text" name="cena"></label></p> 
                <p>
                    <button type="submit"><b>Stwórz</b></button> 
                    | 
                    <a href="ogloszenia.php" class="a2"><b>Wróć do ogłoszeń</b></a>                
                </p>
            </form>
            
            <?php
                if(isset($_POST["nazwa"]) && isset($_POST["opis"]) && isset($_POST["cena"]))
                {
                    $order_add = 'INSERT INTO produkty (nazwa, opis, cena) VALUES ("'.$_POST["nazwa"].'", "'.$_POST["opis"].'", "'.$_POST["cena"].'")'; 
                    $db -> query($order_add);
                }
            ?>
        </div>
        <div class="banner">
            <h4>ZSP-Shop</h4>
        </div>
    </body>
</html>
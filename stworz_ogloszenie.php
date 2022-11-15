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
        <div>
            <h2>Stwórz swoje ogłoszenie</h2>
        </div>
        <div>
            <form method="post">
                <p><label>Nazwa: <input type="text" name="nazwa"></label></p>
                <p><label>Opis: <input type="text" name="opis"></label></p>
                <p><label>Cena: <input type="text" name="cena"></label></p> 
                <p><button type="submit">Stwórz</button> | <a href="ogloszenia.php">Wróć do ogłoszeń</a></p>
            </form>
            
            <?php
                if(isset($_POST["nazwa"]) && isset($_POST["opis"]) && isset($_POST["cena"]))
                {
                    $order_add = 'INSERT INTO produkty (nazwa, opis, cena) VALUES ("'.$_POST["nazwa"].'", "'.$_POST["opis"].'", "'.$_POST["cena"].'")'; 
                    $db -> query($order_add);
                }
            ?>
        </div>
    </body>
</html>
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
            <h2>Stwórz konto</h2>
        </div>
        <div>
            <form method="post">
                <p><label>Login: <input type="text" name="login"></label></p>
                <p><label>Password: <input type="password" name="password"></label></p>
                <p><button type="submit">Stwórz konto</button> | <a href="index.php">Wróć</a></p>
            </form>
            
            <?php
                if(isset($_POST["login"]) && isset($_POST["password"]))
                {
                    $user_add = 'INSERT INTO uzytkownicy (nazwa, haslo) VALUES ("'.$_POST["login"].'", "'.$_POST["password"].'")';
                    $db -> query ($user_add);
                }
            ?>
        </div>
    </body>
</html>
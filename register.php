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
            <h2>Stwórz konto</h2>
        </div>
        <div class="main">
            <form method="post">
                <p><label>Login: <input type="text" name="login"></label></p>
                <p><label>Password: <input type="password" name="password"></label></p>
                <p><button type="submit"><b>Stwórz konto</b></button> | <a href="index.php" class="a2"><b>Wróć</b></a></p>
            </form>
            
            <?php
                if(isset($_POST["login"]) && isset($_POST["password"]))
                {
                    $user_add = 'INSERT INTO uzytkownicy (nazwa, haslo) VALUES ("'.$_POST["login"].'", "'.$_POST["password"].'")';
                    $db -> query ($user_add);
                }
            ?>
        </div>
        <div class="banner">
            <h4>ZSP-Shop</h4>
        </div>
    </body>
</html>
<html>
    <head>
        <title>ZSP-Shop</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styl.css">
        <?php
            $db = new mysqli("localhost","root","","zsp-shop");
            $db -> query ('SET NAMES utf8');
            $user = "SELECT nazwa, haslo FROM uzytkownicy";
            setcookie("czy_zalogowano",0);
            setcookie("uzytkownik");
        ?>
    </head>
    <body>
        <div class="banner">
            <h2>ZSP-Shop</h2>
        </div>
        <div class="main">
            <form method="post">
                <p><label>Login: <input type="text" name="login"></label></p>
                <p><label>Password: <input type="password" name="password"></label></p>
                <p><button type="submit"><b>Zaloguj się</b></button> | <a href="register.php" class="a2"><b>Stwórz konto</b></a></p>
            </form>
        </div>
        <div class="banner">
            <?php
                if($result_user = $db -> query($user))
                {
                    while($row_user = $result_user -> fetch_array())
                    {
                        if(isset($_POST["login"]) && isset($_POST["password"]))
                        {
                            if($row_user["nazwa"] == $_POST["login"] && $row_user["haslo"] == $_POST["password"])
                            {
                                echo "<b>Zalogowano</b>";
                                echo "<br>";
                                echo "<a href='ogloszenia.php' class='a1'><b>Ogłoszenia</b></a>";
                                $_COOKIE["czy_zalogowano"] = 1;
                                setcookie("uzytkownik", $row_user["nazwa"]);
                                break;
                            }  
                        }
                        else
                        {
                            break;
                        }
                    } 
                }
                if($_COOKIE["czy_zalogowano"] == 0)
                {
                    echo "<b>Zalogowanie nie powiodło się</b>"; 
                }
            ?>
        </div>
    </body>
</html>
<html>
    <head>
        <title>ZSP-Shop</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styl.css">
        <?php
            $db = new mysqli("localhost","root","","zsp-shop");
            $db -> query ('SET NAMES utf8');
            $user = "SELECT nazwa, haslo FROM uzytkownicy";
            setcookie("Czy_zalogowano",0);
        ?>
    </head>
    <body>
        <div>
            <h2>ZSP-Shop</h2>
        </div>
        <div>
            <form method="post">
                <p><label>Login: <input type="text" name="login"></label></p>
                <p><label>Password: <input type="password" name="password"></label></p>
                <p><button type="submit">Zaloguj się</button> | <a href="register.php">Stwórz konto</a></p>
            </form>
            
            <?php
                if($result_user = $db -> query($user))
                {
                    while($row_user = $result_user -> fetch_array())
                    {
                        if(isset($_POST["login"]) && isset($_POST["password"]))
                        {
                            if($row_user["nazwa"]==$_POST["login"] && $row_user["haslo"]==$_POST["password"])
                            {
                                echo "<b>Zalogowano</b>";
                                echo "<br>";
                                echo "<a href='ogloszenia.php'>Ogłoszenia</a>";
                                $_COOKIE["Czy_zalogowano"] = 1;
                                break;
                            }  
                        }
                        else
                        {
                            break;
                        }
                    } 
                }
                if($_COOKIE["Czy_zalogowano"] == 0)
                {
                    echo "<b>Zalogowanie nie powiodło się</b>";
                }
            ?>
        </div>
    </body>
</html>
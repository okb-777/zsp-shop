<<<<<<< HEAD
<html>
    <head>
        <meta charset="utf-8">
        <title>ZSP-Shop</title>
        <link rel="stylesheet" href="styl.css">
        <?php
            $db = new mysqli("127.0.0.1","root","","zsp-shop");
            $user = "SELECT nazwa, haslo FROM uzytkownicy";
        ?>
    </head>
    <body>
        <div>
            <h2>ZSP-Shop</h2>
        </div>
        <div>
            <form action="index.php" method="post">
                <h4>Logowanie</h4>
                <p>login: <input type="text" name="login"></p>
                <p>password: <input type="password" name="password"></p>
                <p>
                    <button type="submit" onclick>Log in</button>
                </p>
                
                <?php
                    if($u_result = $db -> query($user))
                    {
                        while ($u_row = $u_result -> fetch_array())
                        {
                            print_r($u_row);
                            
                            echo "<br>";
                            echo "<br>";
                        }
                    }
                    print_r($_COOKIE);
                    echo "<br>";

                    setcookie ("nazwa", $_POST['login']);
                    setcookie ("haslo", $_POST['password']);
                    
                    if ((isset($_COOKIE['nazwa'])) == $u_row['nazwa'] && (isset($_COOKIE['haslo'])) == $u_row['haslo'])
                    {
                        echo "<b>Zalogowano</b><br>
                            <a href='ogloszenia.php'>Przejdź do ogłoszeń</a>
                            ";
                    }
                    else
                    {
                        echo "<b>Zalogowanie nie powiodło się </b><br>";
                    }
                ?>
            </form>
        </div>
    </body>
=======
<html>
    <head>
        <meta charset="utf-8">
        <title>ZSP-Shop</title>
        <link rel="stylesheet" href="styl.css">
        <?php
            $db = new mysqli("127.0.0.1","root","","zsp-shop");
            $user = "SELECT nazwa, haslo FROM uzytkownik";
        ?>
    </head>
    <body>
        <div>
            <h2>ZSP-Shop</h2>
        </div>
        <div>
            <form method="post">
                <?php
                    if($u_result = $db -> query($user))
                    {
                        while ($u_row = $u_result -> fetch_array())
                        {
                            echo $u_row;
                        }
                    }
                ?>
            </form>
        </div>
    </body>
>>>>>>> 0895970d70d465110cd2a3a1740af7dcfb739766
</html>
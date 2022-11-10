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
</html>
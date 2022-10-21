<html>
    <head>
        <meta charset="utf-8" />
        <title>Vilain défaut</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        $flag = false;
        if($_POST['username']=='root'){
            if($_POST['password']==''){
                $flag = true;
                echo '<h1 id="gg">Bien joué !<h1>';
                echo '<p>Il ne faut JAMAIS garder un mot de passe par défaut.</p>';
                echo '<p id="flag">PolyFlag{Never_Use...DEFAULT!}</p>';
            }
        }
        if(!$flag){
            header('Location: index.html');
        }
        ?>
    </body>
</html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Shopping</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form method="POST" onsubmit="">
            <label>Nom d'utilisateur :</label><br>
            <input type="text" name="username"><br>
            <label>Password :</label><br>
            <input type="password" name="password"><br>
            <input type="submit" value="Connexion">
        </form>
    </body>
</html>

<?php
/*if(isset($_POST['username']) && isset($_POST['password'])){
    header('Location: shop.php');
}*/
?>
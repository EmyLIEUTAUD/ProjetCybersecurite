<html>
    <head>
        <meta charset="utf-8" />
        <title>Inactif</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Bienvenue ! </h1>
        <img src="inactif.PNG" width="700">
        <h2>Site inactif</h2>
        <form method="GET" action="">
            <label>Afficher </label>
            <input type="text" name="valeur">
            <input type="submit" name="">
        </form>
        <p><?php system('echo ' . $_GET['valeur']); ?></p>
    </body>
</html>


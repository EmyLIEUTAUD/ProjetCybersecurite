<html>
<head>
<title>Connexion</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>
<body>
<?php
$conn=@mysqli_connect("localhost",'root','') or die("Échec de la connexion à la base de données！");;
mysqli_select_db($conn,"inject") or die("La base de données que vous voulez sélectionner n'existe pas");
$name=$_POST['username'];
$pwd=$_POST['password'];
$sql="select * from users where username='$name' and password= md5('$pwd')";
$query=mysqli_query($conn,$sql);
$arr=mysqli_fetch_array($query);
if(is_array($arr)){
header("Location:manager.php");
}else{
echo "Votre nom d'utilisateur ou votre mot de passe a été saisi de manière incorrecte，<a href=\"Login.php\">Veuillez vous reconnecter！</a>";
}
?>
</body>
</html>
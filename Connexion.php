<!DOCTYPE html>
<html>
<style>
#corps{
	background-image: url(aa.JPG);
}
#bloc1{

	width: 100%;
		height: 50px;
		border: solid black 2px;
		background-color :black;
		opacity: 0.6;
}	
#bloc2{
	width: 15%;
	height: 45px;
	display: inline-block;
	margin-top: -10px;
	  }
#ecrit1{
	color: Pink;
	display: inline-block;
}
#ecrit2{
	color: white;
	display: inline-block;
}
#bloc3{
	width: 60%;
	height: 45px;
	display: inline-block;
	margin-left: 20%; 
	margin-top: 10px;
}
li{
	display: inline-block;
	margin-left: 15px;
}
a{
	text-decoration: none;
	color: white; 
}
nav{
margin-left: 10%;

}

#bloc4 {
	width: 35%;
	height: 300px;
	border:solid white 0.5px;
	margin-top: 7%;
	display: inline-block;
}
label{
	color: white;
}
form{
	margin-left: 25px;
	margin-top: 5%;
}
h2{
	color: white;
	text-align: center;
}
#bloc5{

	width: 40%;
	height: 350px;
	display: inline-block;
	margin-left: 57%;
	margin-top: -21%;
	

}
#pieds{
	width: 100%;
		height: 50px;
		border: solid black 2px;
		background-color :black;
		opacity: 0.6;
		margin-top: 10%;
}
h3{
	color: white;
	text-align:center;
}








</style>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>vente café</title>
<div id="bloc1">
	<div id="bloc2">
		<h1 id="ecrit1">CAFE</h1>
		<h1 id="ecrit2">ROSE</h1>
		
	</div>
	<div id="bloc3">
		<nav>
			<ul>
		<li><a href="#">DOMICILE</a>
		<li><a href="#">NOTRE HISTOIRE</a>
		<li><a href="#">MENU</a>
		<li><a href="#">FAIRE UNE COMMANDE</a>
		<li><a href="#">CONTACTS</a></li>

			</ul>

		</nav>
	</div>

</div>


</head>
<body id="corps">
	<div id="bloc4">
	<h2>Formulaire d'inscription</h2>
	<form method="POST">
		<label>Nom :</label>
		<input type="texte" name="Nom" placeholder="saississez votre Nom"><br><br>
		<label>Prenom :</label> 
		<input type="texte" name="Prenom" placeholder="saississez votre Prenom"><br><br>
		<label>Adresse:</label>
		<input type="texte" name="Adresse" placeholder="saississez votre Adresse"><br><br>
		<label>Numero de telephone:</label>
		<input type="Numero" name="Telephone" placeholder="saississez votre Numero de telephone" ><br><br>
		<label>Email</label>
		<input type="texte" name="Email" placeholder="saississez votre Mail"><br><br>
		<input type="submit" name="Envoyez" value="Envoyez"><br><br>
	</form>
	<?php 
	try {
		$db=new PDO('mysql:localhost=host; dbname=formulaire','root','');

		
	} catch (Exception $e) {
		die('Base de donnée introuvable'.$e->getmessage());
	}
	if (isset($_POST['Envoyez'])) {
		$Nom=$_POST['Nom'];
		$Prenom=$_POST['Prenom'];
		$Adresse=$_POST['Adresse'];
		$Telephone=$_POST['Telephone'];
		$Email=$_POST['Email'];

		$P=$db->prepare('SELECT Email FROM user WHERE Email=:Email');
		$P->execute([
			'Email'=>$Email
		]);
		$resultat=$P->rowcount();

	if ($resultat == 0) {
		$P=$db->prepare('INSERT INTO user(Nom,Prenom,Adresse,Telephone,Email) VALUES(:Nom,:Prenom,:Adresse,:Telephone,:Email)');

$P->execute([
'Nom'=>$Nom,
'Prenom'=>$Prenom,
'Adresse'=>$Adresse,
'Telephone'=>$Telephone,
'Email'=>$Email


]);
echo "Enregistrement effectué avec succes";
	} else{
		echo "compte deja existant";
	}



	}
	 ?>
	
</div>
 <div id="bloc5">

<video width="100%" height="100%" controls autoplay muted>
	<source src="formation.mp4" type="video/mp4">
</video>


         </div>


</body>
<footer id="pieds">
	<h3>Ce site a été conçu par Monsieur MABIALA Eriga MacK Dorcel By EXPERTISE-TIC-2023</h3>
</footer>
</html>
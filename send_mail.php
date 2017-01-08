<?php
if (isset($_POST["submit"])){
	$nom = $_POST["nom"];
	$email = $_POST["email"];
	$ville = $_POST["ville"];
	$pays = $_POST["pays"];
	$date = $_POST["date"];
	$message = $_POST["message"];
	$br = "\n";
	$destinataire = "kevinkenfack2000@gmail.com";
	$en_tete1 = "Contact sur le site Fedjo.de";
	$en_tete2 = "Contact sur notre site de mariage";
	$info = "Un message a été envoyé à partir du site www.fedjo.de".$br.$br."Email:".$email.$br."Nom:".$nom.$br."Ville:".$ville.$br."Pays:".$pays.$br."Date:".$date.$br.$br."Message:".$message;
	$info2 = "Merci Pour votre message.".$br.$br.$br."Joelle et Florent.";
	
	$header = "From: $nom \r\nReply-to : $nom \nX-Mailer:PHP";
	 
	 mail($destinataire,$en_tete1,$info,$header);
	 
	 
}
?>

<body>

<script>
alert("Merci pour votre message. Il sera d'ici peu ajouté dans notre livre d'or");
window.location.replace("contacts.php");
</script>

</body>

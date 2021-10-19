<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8"> <link rel="stylesheet" type="text/css" href="assets/css/form.css"> <link rel="shortcut icon" type="image/png"> <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	

    <!-- Theme CSS -->
    <link href="<?php echo base_url('assets/css/form.css');?>" rel="stylesheet"> 
 <title>Ajouter un nouvel utilisateur</title>
 <center><h1>Ajouter un nouvel utilisateur</h1></center>
</head>
<body>
	
	

	<form method="POST">
		
		<label> Nom </label><input class="pseudo" id="pseudo" type="text" placeholder=" Durant " name="nom" required=""> 
		
		<br> 
		<label> Prenom </label><input class="pseudo" id="pseudo" type="text" placeholder=" Laurent " name="prenom" required="">
		<br>

		<div class="texte">
		
		<br>
		<br>
		<input type="radio" name="role" value="Professionnel">Professionnel
		<input type="radio" name="role" value="Etudiant">Etudiant
		<input type="radio" name="role" value="Responsable">Responsable
		<input type="radio" name="role" value="Secretariat">Secretariat	
			
		<br>
		<br>


		<label>Civilité</label>
		<br>
		<br>
		
		<div class="styled-select blue semi-square">

		 <select id="carte" name="civilite">
     		 <option value="Mr">Mr</option>
     		 <option value="Mrs">Mrs</option>
     		 <option value="Autre">Autre</option>
   		 </select>

   		</div>

   		<br> 
		<label> Mail </label><input class="pseudo" id="pseudo" type="mail" placeholder=" Laurent.durant@gmail.com " name="mail" required="">
		<br>

		<br> 
		<label> Adresse </label><input class="pseudo" id="pseudo" type="text" placeholder=" rue des palmiers " name="adresse" required="">
		<br>

		<br> 
		<label> Complement </label><input class="pseudo" id="pseudo" type="text" placeholder=" Lieu dit de la plage " name="complement">
		<br>

		<br> 
		<label> Code Postal </label><input class="pseudo" id="pseudo" type="text" placeholder=" 33101 " name="code_postal" required="">
		<br>

		<br> 
		<label> Pays </label><input class="pseudo" id="pseudo" type="text" placeholder=" France " name="pays" required="">
		<br>
		
		<br> 
		<label> Ville </label><input class="pseudo" id="pseudo" type="text" placeholder=" ville " name="ville" required="">
		<br>

		<br> 
		<label> Telephone </label><input class="pseudo" id="pseudo" type="text" placeholder=" 0785645678 " name="tel" required="" pattern="(01|02|03|04|05|06|07|08|09)[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}">
		<br>

		<br> 
		<label> Date de naissance </label><input type="date" name="date_naissance" class="pseudo" id="pseudo" required="">
		<br>

		<br> 
		<label> Numero de sécurité sociale </label><input type="text" class="pseudo" id="pseudo" name="num_secu" required="" placeholder="123456789012345" pattern="[12][ \.\-]?[0-9]{2}[ \.\-]?(0[1-9]|[1][0-2])[ \.\-]?([0-9]{2}|2A|2B)[ \.\-]?[0-9]{3}[ \.\-]?[0-9]{3}[ \.\-]?[0-9]{2}">
		<br>
	
		<br> 
		<label> Mutuelle </label><input type="text" class="pseudo" id="pseudo" name="mutuelle" required="" placeholder="CDC Mutuelle">
		<br>

		<br> 
		<label> Objectif pro </label><input type="text" class="pseudo" id="pseudo" name="obj_pro" required="" placeholder="Decrivez brievement votre objectif pro">
		<br>
		
		<br> 
		<label>fonction pro </label><input type="text" class="pseudo" id="pseudo" name="fct_pro" >
		<br>
		
		<br> 
		<label> Mot de passe </label><input type="text" class="pseudo" id="pseudo" name="motdepasse" required="" >
		<br>
 
		<br>
			
		<center><input type="submit" id="button" value="Valider"></center>


		</div>
		

		
	</form> 





 </html>
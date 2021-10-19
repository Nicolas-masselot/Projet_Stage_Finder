<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> <link rel="stylesheet" type="text/css" href="/style/form.css"> <link rel="shortcut icon" type="image/png"> <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Theme CSS -->
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/agency.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/form.css');?>" rel="stylesheet">
 <title>Description du stage</title>
 <center><h1>Description du stage</h1></center>
</head>


<!-- Le Bouton -->

<div>
<?php echo anchor('/main_stage/afficher_gestion_stages','Retour ', 'class="btn_choice" ' ); ?>
</div> 


<body>
	
	

	<form method="POST">
		
		
		<label> Intitulé du Stage </label><input class="pseudo" id="pseudo" type="text"  name="intitule" required="" >
		<br>

		<label> Nom Entreprise </label>
		<select name="nom_entreprise" class="pseudo">
			<?php foreach ($entreprises as $entreprise ):?>
				<option value="<?php echo $entreprise->id_entreprise; ?>"> <?php echo $entreprise->nom_entreprise; ?></option>
			<?php endforeach ; ?>
		</select>
		<br> 
		<label> Date de début </label><input type="date" name="date_debut" class="pseudo" id="pseudo" required="">
		<br>

		<br> 
		<label> Date de fin </label><input type="date" name="date_fin" class="pseudo" id="pseudo" required="">
		<br>

		<br> 
		<label> Adresse du stage</label><input class="pseudo" id="pseudo" type="text"  name="adresse" required="">
		<br>

		<br> 
		<label> Mission du stage</label><input class="pseudo" id="pseudo" type="text"  name="mission" required="">
		<br>

		<br> 
		<label> Code Postal du stage </label><input class="pseudo" id="pseudo" type="text"  name="code_postal" required="">
		<br>

		<br> 
		<label> Ville du stage </label><input class="pseudo" id="pseudo" type="text" name="ville" required="">
		<br>

		<br> 
		<!--
		<label> Mail Auteur du stage </label><input class="pseudo" id="pseudo" type="mail" name="mail" required="">
		<br> -->
		<label> Mail Auteur du stage </label>
		<select name="mail" class="pseudo">
			<?php foreach ($pros as $user_pro ):?>
				<option value="<?php echo $user_pro->id_personne; ?>"> <?php echo $user_pro->mail; ?></option>
			<?php endforeach ; ?>
		</select>

		<br> 
		<label> Pays du stage </label><input class="pseudo" id="pseudo" type="text"  name="pays_stage" required="" >
		<br>
		
		<center><input type="Submit" id="button" value="Ajouter le stage"></center>
		

		<br> 
		<br>

		</div>
		

		
	</form> 






 </html>
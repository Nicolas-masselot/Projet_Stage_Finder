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
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/agency.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/form.css');?>" rel="stylesheet">
    
 <title>Détails de l'entreprise</title>
 <center><h1> Détails de l'entreprise</h1></center>
</head>
<body>
	
	<div>
		<?php echo anchor('/main_stage/afficher_dashboard','Retour ', 'class="btn_choice" ' ); ?>
	</div> 

	<form method="POST">
		
		<label> Nom Entreprise</label><input class="pseudo" id="pseudo" type="text" placeholder=" StageFinderAndCo " name="nom_ent" required="" value="<?php echo set_value('nom',$entreprise->nom_entreprise);?>"> 
		<br>
		<br> 

		<label> Effectif</label><input class="pseudo" id="pseudo" type="text" placeholder=" 11 salariés " name="effectif" required="" value="<?php echo set_value('effectif',$entreprise->effectif);?>"> 
		<br>
		

   		</div>

   		<br> 
		<label> Mail </label><input class="pseudo" id="pseudo" type="mail" placeholder=" StageFinderAndCo@gmail.com " name="mail" required="" value="<?php echo set_value('mail',$entreprise->mail);?>">
		<br>

		<br> 
		<label> Adresse </label><input class="pseudo" id="pseudo" type="text" placeholder=" rue des palmiers " name="adresse" required="" value="<?php echo set_value('adresse',$entreprise->adresse);?>">
		<br>
		
		<br> 
		<label> Complement </label><input class="pseudo" id="pseudo" type="text" name="complement" value="<?php echo set_value('complement',$entreprise->complement);?>">
		<br>

		<br> 
		<label> Code Postal </label><input class="pseudo" id="pseudo" type="text" name="code_postal" value="<?php echo set_value('code_postal',$entreprise->code_postal);?>" required="">
		<br>

		<br> 
		<label> Activité </label><input class="pseudo" id="pseudo" type="text" placeholder=" Technologie " name="activite" value="<?php echo set_value('activite',$entreprise->activite);?>">
		<br>


		<br> 
		<label> Ville </label><input class="pseudo" id="pseudo" type="text" placeholder=" Miami " name="ville" required="" value="<?php echo set_value('ville',$entreprise->ville);?>">
		<br>
		
		<br> 
		<label> Pays </label><input type="text" class="pseudo" id="pseudo" name="pays" value="<?php echo set_value('pays',$entreprise->pays);?>" required="" >
		<br>

		<br> 
		<label> Telephone </label><input class="pseudo" id="pseudo" type="text" placeholder=" 0785645678 " name="tel" required="" pattern="(01|02|03|04|05|06|07|08|09)[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}"  value="<?php echo set_value('tel',$entreprise->tel);?>">
		<br>
		<br>

		<label> Tuteur </label><input class="pseudo" id="pseudo" type="mail" placeholder=" email_tuteur@mail.com " name="tuteur" required="" value="<?php $this->load->model('mStages'); echo set_value('email_tuteur',$this->mStages->get_utilisateur_email($entreprise->tuteur));?>" > 
		<br>
			
		<center><input type="submit" id="button" value="Valider"></center>


		</div>
		

		
	</form> 





 </html>
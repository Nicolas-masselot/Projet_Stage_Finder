<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8"> <link rel="stylesheet" type="text/css" href="assets/css/form.css"> <link rel="shortcut icon" type="image/png"> <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url('assets/css/agency.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/form.css');?>" rel="stylesheet">
 <title>Mon Profil</title>
 <center><h1>Mon Profil</h1></center>
</head>
<body>
	
	<div>
		<?php echo anchor('/main_stage/afficher_dashboard','Retour', 'class="btn_choice" ' ); ?>
	</div>	
	

	<form method="POST">
		
		<label> Nom </label><input class="pseudo" id="pseudo" type="text"  name="nom" value="<?php echo set_value('nom',$personne->nom);?>" required=""> 
		<br>
		<br> 
		<label> Prenom </label><input class="pseudo" id="pseudo" type="text" name="prenom" value="<?php echo set_value('prenom',$personne->prenom);?>" required="">
		<br>
		<br>
		
		
		
		
		<label>Civilité</label>

		
		<div class="styled-select blue semi-square">
		
		 <select id="carte" name="civilite">
     		 <option value="Mr" <?php if($personne->civilite == 'Mr'){ echo set_select('civilite', 'Mr', TRUE);} ?> >Mr</option>
     		 <option value="Mrs" <?php if($personne->civilite == 'Mrs'){ echo set_select('civilite', 'Mrs', TRUE);} ?>>Mrs</option>
     		 <option value="Autre" <?php if($personne->civilite == 'Autre'){ echo set_select('civilite', 'Autre', TRUE); }?>>Autre</option>
   		 </select>

   		</div>


		<br> 
		<label> Adresse </label><input class="pseudo" id="pseudo" type="text" name="adresse" value="<?php echo set_value('adresse',$personne->adresse);?>" required="" >
		<br>

		<br> 
		<label> Complement </label><input class="pseudo" id="pseudo" type="text" name="complement" value="<?php echo set_value('complement',$personne->complement);?>">
		<br>

		<br> 
		<label> Code Postal </label><input class="pseudo" id="pseudo" type="text" name="code_postal" value="<?php echo set_value('code_postal',$personne->code_postal);?>" required="">
		<br>
		
		<br> 
		<label> Ville </label><input type="text" class="pseudo" id="pseudo" name="ville" value="<?php echo set_value('ville',$personne->ville);?>" required="" >
		<br>
		
		<br> 
		<label> Pays </label><input type="text" class="pseudo" id="pseudo" name="pays" value="<?php echo set_value('pays',$personne->pays);?>" required="" >
		<br>

		<br> 
		<label> Telephone </label><input class="pseudo" id="pseudo" type="text"  name="tel" value="<?php echo set_value('tel',$personne->tel);?>" required="" pattern="(01|02|03|04|05|06|07|08|09)[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}">
		<br>

		<br> 
		<label> Date de naissance </label><input type="date" name="date_naissance" value="<?php echo set_value('date_naissance',$personne->date_naiss);?>" class="pseudo" id="pseudo" required="">
		<br>

		<br> 
		<label> Numero de sécurité sociale </label><input type="text" class="pseudo" id="pseudo" name="num_secu" value="<?php echo set_value('num_secu',$personne->num_secu);?>" required="" pattern="[12][ \.\-]?[0-9]{2}[ \.\-]?(0[1-9]|[1][0-2])[ \.\-]?([0-9]{2}|2A|2B)[ \.\-]?[0-9]{3}[ \.\-]?[0-9]{3}[ \.\-]?[0-9]{2}">
		<br>
	
		<br> 
		<label> Mutuelle </label><input type="text" class="pseudo" id="pseudo" name="mutuelle" value="<?php echo set_value('mutuelle',$personne->mutuelle);?>" required="" >
		<br>

		<br> 
		<label> Objectif pro </label><input type="text" class="pseudo" id="pseudo" name="obj_pro" value="<?php echo set_value('obj_pro',$personne->objectif_pro);?>" required="" >
		<br>

		<br> 
		<label> Fonction pro </label><input type="text" class="pseudo" id="pseudo" name="fct_pro" value="<?php echo set_value('fct_pro',$personne->fonction_pro);?>" required="">
		<br>
		
		<br> 
		<label> Mot de passe </label><input type="text" class="pseudo" id="pseudo" name="motdepasse" value="<?php echo set_value('motdepasse',$personne->motdepasse);?>" required="" >
		<br>
 
		<br> 
			
		<center><input type="submit" id="button" value="Valider"></center>


		</div>
		

		
	</form> 





 </html>
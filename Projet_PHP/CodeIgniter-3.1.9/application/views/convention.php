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
 <title>Convention</title>
 <center><h1>Convention de stage</h1></center>
</head>


<!-- Le Bouton -->

<div>
<?php echo anchor('/main_stage/afficher_dashboard','Retour ', 'class="btn_choice" ' ); ?>
</div> 


<body>
	
	

	<form  method="POST" >
		
		
		<h2> L'Organisme d'accueil : </h2>
		<br>
		<br>

		<label> Nom organisme </label><input class="pseudo" id="pseudo" type="text"  name="nom_organisme" value="<?php echo set_value('nom_organisme',$convention['nom_ent']);?>" required>
		<br>

		<label> Adresse organisme </label><input class="pseudo" id="pseudo" type="text" name="adr_organisme" value="<?php echo set_value('adr_organisme',$convention['adresse_ent']);?>">
		<br>

		<br>

		<label>Complement organisme </label><input class="pseudo" id="pseudo" type="text" name="cpl_organisme" value="<?php echo set_value('cpl_organisme',$convention['complement_ent']);?>">
		<br>
		
		

		<label> Code Postal organisme</label><input class="pseudo" id="pseudo" type="text"  name="code_postal_organisme" value="<?php echo set_value('code_postal_organisme',$convention['CP_ent']);?>">
		<br>

		<br> 
		<label> Ville organisme</label><input class="pseudo" id="pseudo" type="text" name="ville_organisme" value="<?php echo set_value('ville_organisme',$convention['ville_ent']);?>" >
		<br>

		<br> 
		<label> Pays organisme</label><input class="pseudo" id="pseudo" type="text"  name="pays_organisme" value="<?php echo set_value('pays_organisme',$convention['pays_ent']);?>">
		<br>



		<br> 
		<label> Nom signataire de convention </label><input class="pseudo" id="pseudo" type="text"  name="nom_signataire" value="<?php echo set_value('nom_signataire',$convention['contact_ent']);?>" >
		<br>

		<br> 
		<label> Telephone de l'organisme </label><input class="pseudo" id="pseudo" type="text" name="tel_organisme" value="<?php echo set_value('tel_organisme',$convention['tel_ent']);?>">
		<br>

		<br> 
		<label> Mail de l'organisme </label><input class="pseudo" id="pseudo" type="mail" name="mail_organisme" value="<?php echo set_value('mail_organisme',$convention['mail_ent']);?>">
		<br>

		<label> Adresse stage</label><input class="pseudo" id="pseudo" type="text" name="adr_stage" value="<?php echo set_value('adr_stage',$convention['adresse_stage']);?>">
		<br>


		<label> Code Postal stage </label><input class="pseudo" id="pseudo" type="text"  name="code_postal_stage" value="<?php echo set_value('code_postal_stage',$convention['CP_stage']);?>" >
		<br>

		<br> 
		<label> Ville stage </label><input class="pseudo" id="pseudo" type="text" name="ville_stage" value="<?php echo set_value('ville_stage',$convention['ville_stage']);?>">
		<br>

		<br> 
		<label> Pays stage </label><input class="pseudo" id="pseudo" type="text"  name="pays_stage" value="<?php echo set_value('pays_stage',$convention['pays_stage']);?>">
		<br>
		<br> 
		<br> 
		<br>

		<h2> Le stagiaire : </h2>
		
		<br>

		<label> Nom </label><input class="pseudo" id="pseudo" type="text" name="nom" value="<?php echo set_value('nom',$convention['nom_de_famille']);?>"> 
		
		<br> 
		<label> Prenom </label><input class="pseudo" id="pseudo" type="text" name="prenom" value="<?php echo set_value('prenom',$convention['prenoms']);?>">
		<br>

		


		<label>Civilité</label>
		<br>
		<br>
		
		<div class="styled-select blue semi-square">

		 <select id="carte" name="civilite">
     		 <option value="Mr" <?php if($convention['civilite'] == 'Mr'){ echo set_select('civilite', 'Mr', TRUE);} ?> >Mr</option>
     		 <option value="Mrs"<?php if($convention['civilite'] == 'Mrs'){ echo set_select('civilite', 'Mrs', TRUE);} ?> >Mrs</option>
     		 <option value="Autre" <?php if($convention['civilite'] == 'Autre'){ echo set_select('civilite', 'Autre', TRUE);} ?> >Autre</option>
   		 </select>

   		</div>

   		<br> 
		<label> Date de naissance </label><input type="date" name="date" class="pseudo" id="pseudo" value="<?php echo set_value('date',
		$convention['nee_le']);?>">
		<br>

		<label> Adresse Stagiaire </label><input class="pseudo" id="pseudo" type="text" name="adr_stagiaire" value="<?php echo set_value('adr_stagiaire',$convention['adresse']);?>">
		<br>
		
		<br> 
		<label> Complement </label><input type="text" name="complement_stagiaire" class="pseudo" id="pseudo" value="<?php echo set_value('complement_stagiaire',$convention['complement']);?>">
		<br>


		<label> Code Postal stagiaire</label><input class="pseudo" id="pseudo" type="text"  name="code_postal_stagiaire" value="<?php echo set_value('code_postal_stagiaire',$convention['CP']);?>">
		<br>

		<br> 
		<label> Ville stagiaire</label><input class="pseudo" id="pseudo" type="text" name="ville_stagiaire" value="<?php echo set_value('ville_stagiaire',$convention['ville']);?>">
		<br>

		<br> 
		<label> Pays stagiaire</label><input class="pseudo" id="pseudo" type="text"  name="pays_stagiaire" value="<?php echo set_value('pays_stagiaire',$convention['pays']);?>">
		<br>


		<br> 
		<label> Telephone du stagiaire </label><input class="pseudo" id="pseudo" type="text" name="tel_stagiaire" value="<?php echo set_value('tel_stagiaire',$convention['tel_portable']);?>">
		<br>

		<br> 
		<label> Mail du stagiaire </label><input class="pseudo" id="pseudo" type="mail" name="mail_stagiaire"  value="<?php echo set_value('mail_stagiaire',$convention['mel']);?>">
		<br>

		<br>
		<label> numero de sécurité sociale du stagiaire: </label><input class="pseudo" id="pseudo" type="mail" name="secu_stagiaire"  value="<?php echo set_value('secu_stagiaire',$convention['num_secu']);?>">
		<br>

		<br>
		<label> mutuelle du stagiaire: </label><input class="pseudo" id="pseudo" type="mail" name="mutuelle_stagiaire"  value="<?php echo set_value('mutuelle_stagiaire',$convention['mutuelle']);?>">
		<br>


		<br> 
		<br>

		<h2> Le Stage : </h2>

		<br> 


		<label> Description du stage </label> 
		<textarea rows="4" cols="50" name="description" class="form-control"> <?php echo set_value('fin',$convention['mission_stage']);?></textarea>


		<br> 
		<label> Date de début </label><input type="date" name="date_debut" class="pseudo" id="pseudo" value="<?php echo set_value('date_debut',$convention['stage_du']);?>">
		<br>

		<br> 
		<label> Date de fin </label><input type="date" name="date_fin" class="pseudo" id="pseudo" value="<?php echo set_value('date_fin',$convention['stage_au']);?>">
		<br>

		<br>
		<label> Nom Tuteur </label><input class="pseudo" id="pseudo" type="text" name="nom_tuteur" value="<?php echo set_value('nom_tuteur',$convention['nom_mds']);?>"> 
		<br>
		
		<br> 
		<label> Prenom Tuteur </label><input class="pseudo" id="pseudo" type="text" name="prenom_tuteur" value="<?php echo set_value('prenom_tuteur',$convention['prenom_mds']);?>">
		<br>


		<br> 
		<label> Fonction Tuteur </label><input class="pseudo" id="pseudo" type="text" name="fonction_tuteur" value="<?php echo set_value('fonction_tuteur',$convention['fonction_mds']);?>">
		<br>

		<br> 
		<label> Telephone du tuteur </label><input class="pseudo" id="pseudo" type="text" name="tel_tuteur" value="<?php echo set_value('tel_tuteur',$convention['tel_portable_mds']);?>">
		<br>

		<br> 
		<label> Mail du tuteur </label><input class="pseudo" id="pseudo" type="mail" name="mail_tuteur" value="<?php echo set_value('mail_tuteur',$convention['mel_mds']);?>">
		<br>





		<br>
			
		<center><input type="Submit" id="button" value="Imprimer"></center>
		

		<br> 
		<br>

		</div>
		

		
	</form> 





 </html>
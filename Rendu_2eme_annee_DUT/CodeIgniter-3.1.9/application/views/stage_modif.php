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
	
	

	<form method="POST" >
		
		
		<label> Intitulé du Stage </label><input class="pseudo" id="pseudo" type="text"  name="intitule" value="<?php echo set_value('intitule',$stage->intitule_stage);?>" required="" >
		<br>

		<label> Nom Entreprise </label><input class="pseudo" id="pseudo" type="text" name="nom_entreprise" value="<?php echo set_value('nom_entreprise',$stage->nom_entreprise);?>" required="">
		<br>
		
		<br> 
		<label> Date de début </label><input type="date" name="date_debut" class="pseudo" id="pseudo" value="<?php echo set_value('date_debut',$stage->date_debut_stage);?>" required="" >
		<br>

		<br> 
		<label> Date de fin </label><input type="date" name="date_fin" class="pseudo" id="pseudo" value="<?php echo set_value('date_fin',$stage->date_fin_stage);?>" required="">
		<br>

		<br> 
		<label> Adresse du stage</label><input class="pseudo" id="pseudo" type="text"  name="adresse" value="<?php echo set_value('adresse',$stage->stage_adresse);?>" required="">
		<br>

		<br> 
		<label> Mission du stage</label><input class="pseudo" id="pseudo" type="text"  name="mission"   value="<?php echo set_value('mission',$stage->mission);?>" required="">
		<br>

		<br> 
		<label> Code Postal du stage </label><input class="pseudo" id="pseudo" type="text"  name="code_postal"  value="<?php echo set_value('code_postal',$stage->cp_stage);?>" required="">
		<br>

		<br> 
		<label> Ville du stage </label><input class="pseudo" id="pseudo" type="text" name="ville" value="<?php echo set_value('ville',$stage->ville_stage);?>" required="">
		<br>

		<br> 
		<label> Mail Auteur du stage </label><input class="pseudo" id="pseudo" type="mail" name="mail" value="<?php $this->load->model('mStages'); echo set_value('mail',$this->mStages->get_utilisateur_email($stage->auteur));?>" required="" >
		<br>

		<br> 
		<label> Pays du stage </label><input class="pseudo" id="pseudo" type="text"  name="pays_stage" value="<?php echo set_value('pays_stage',$stage->pays_stage);?>" required="" >
		<br>

		<br>
		<br> 
		<br>
			
		<center><input type="submit" id="button" value="Modifier les valeurs"><?php echo anchor("/main_stage/afficher_confirmation_suppression_stage/$stage->id_stage",'Supprimer', 'class="btn_choice" ' ); ?></center>
		

		<br> 
		<br>

		</div>
		

		
	</form> 






 </html>
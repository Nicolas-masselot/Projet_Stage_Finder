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
    <link href="<?php echo base_url('assets/css/form.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/agency.css');?>" rel="stylesheet">


 <title>Suppression Entreprise</title>
 <center><h1>Êtes vous sur de supprimer cette entreprise ?</h1></center>
</head>

<!-- Le Bouton -->

<div>
<?php echo anchor('/main_stage/gestion_entreprises','Retour ', 'class="btn_choice" ' ); ?>
</div> 


<body>


	<h4> Les informations suivantes seront supprimées : </h4>

	<br> 
	<br>
	
	<section id="about" class="bg-light-gray">
	<form method="POST">
		
		<label> Nom de l'entreprise: </label>
		<p style="font-size:160%;"><?php echo $entreprise->nom_entreprise;?></p>
		
		
		<br> 
		<label> Effectif: </label>
		<p style="font-size:160%;"><?php echo $entreprise->effectif;?></p>

   		<br> 
		<label> Mail: </label>
		<p style="font-size:160%;"><?php echo $entreprise->mail;?></p>
		<br>

		<br> 
		<label> Adresse: </label>
		<p style="font-size:160%;"><?php echo $entreprise->adresse;?></p>
		<br>

		<br> 
		<label> Complement: </label>
		<p style="font-size:160%;"><?php echo $entreprise->complement;?></p>
		<br>

		<br> 
		<label> Code Postal: </label>
		<p style="font-size:160%;"><?php echo $entreprise->code_postal;?></p>
		<br>

		<br> 
		<label> Ville: </label>
		<p style="font-size:160%;"><?php echo $entreprise->ville;?></p>
		<br>
		
		<br> 
		<label> Pays: </label>
		<p style="font-size:160%;"><?php echo $entreprise->ville;?></p>
		<br>

		<br> 
		<label> Telephone :</label>
		<p style="font-size:160%;"><?php echo $entreprise->tel;?></p>
		<br>

		<br> 
		<label> Activité :</label>
		<p style="font-size:160%;"><?php echo $entreprise->activite;?></p>
		<br>

		<br> 
		<label> Mail du tuteur </label>
		<p style="font-size:160%;"><?php $this->load->model('mStages'); echo $this->mStages->get_utilisateur_email($entreprise->tuteur);?></p>
		<br>
	

		<br> 
		<br>
			
		<button class="btn_choice" type="submit" name="action" value="delete">Oui</button>				
		<button class="btn_choice" type="submit" name="action" value="annuler">Non</button>


		<br> 
		<br>


		</div>
		

		
	</form> 
	</section>




 </html>
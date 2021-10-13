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
 <title>Gestion des contenus</title>
 <center><h1>Gestion des contenus</h1></center>
</head>


<!-- Le Bouton -->

<div>
<?php echo anchor('/main_stage/afficher_dashboard','Retour ', 'class="btn_choice" ' ); ?>
</div> 


<body>
	<br>
	<h3>Dernière modification par :</h1>
	<center><p style="font-size:200%"><?php  $this->load->model('mStages'); echo $this->mStages->get_utilisateur_email($content->id_auteur);?></p></center>

	<center><form method="POST">
		
		<label> Procedure de candidature </label> 
		<textarea class="form-control" rows="4" cols="50" name="procedure"> <?php echo set_value('procedure',$content->procedure_candidature);?> </textarea>
		
		<br> 
		<label> Suivi des stages </label>
		<textarea class="form-control" rows="4" cols="50" name="suivi" > <?php echo set_value('suivi',$content->suivi_stage);?>  </textarea>
   		<br> 
		<label> Rapport de stage </label>
		<textarea class="form-control" rows="4" cols="50" name="rapport" > <?php echo set_value('rapport',$content->rapport_stage);?>"</textarea>
		<br>

		<br> 
		<label> Documents de fin de stage </label>
		<textarea class="form-control" rows="4" cols="50" name="fin" ><?php echo set_value('fin',$content->doc_fin_stage);?> </textarea>
		<br>

		<br> 
		<label> Soutenance </label>
		<textarea class="form-control" rows="4" cols="50" name="soutenance"> <?php echo set_value('soutenance',$content->soutenance);?> </textarea>
		<br>

		<br> 
		
		<center><input type="submit" id="button" value="Valider"></center>


		</div>
		

		
	</form> </center>





 </html>
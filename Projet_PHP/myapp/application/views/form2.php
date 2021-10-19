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
 <title>Se connecter ?</title>
 <center><h1>Se connecter</h1></center>
</head>
<body>
	
	

	<form action="<?php echo base_url();?>index.php/main_stage/login_validation" method="POST" >
		
		<label> Mail </label><input class="pseudo" id="mail" type="mail" placeholder=" Laurent.durant@gmail.com " name="mail" required="">
		<br>

		
		<br> 
		<label> Mot de passe </label><input type="password" class="pseudo" id="motdepasse" name="motdepasse" required="" placeholder="Votre mot de passe" >
		<br>


		<br> 
		<br>
		 <center><input type="submit" id="button" name="insert" value="Valider"></center> 
		
		<?php echo $this->session->flashdata("error");?>
		</div>
		

		
	</form> 





 </html>
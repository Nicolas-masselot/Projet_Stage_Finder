<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stage Finder</title>
	
	

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css" rel="stylesheet');?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


    <!-- Theme CSS -->
    <link href="<?php echo base_url('assets/css/agency.css');?>" rel="stylesheet">
    <!-- <link href="<?php //echo base_url('assets/css/form.css');?>" rel="stylesheet"> -->

</head>



<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom ">
        <div class="container">
                <a class="navbar-brand page-scroll">Stage Finder</a>
                <div class="image" align="right">

                <img src="<?php echo base_url('img\logo.jpg')?>" width="300" height="100">

                </div>
            </div>  
		
					
    </nav>



    <!-- Services Section -->
    <section id="service" align="center">
     <div class="container">
			
			<div>
				<?php echo anchor('/main_stage/afficher_dashboard','Retour', 'class="btn_choice" ' ); ?>
			</div>	
			
			
                <h1>Liste des utilisateurs</h1>
        <table class="table">
			<tr>
				<th>NOM</th>
				<th>Prenom</th>
				<th>Statut</th>
				<th>Email</th>
				<th>&nbsp;</th>
			</tr>
               <?php foreach($personne as $pers) : ?>
			<tr>
			<td><?php echo $pers->nom;?></td>
			<td><?php echo $pers->prenom; ?></td>
			<td><?php echo $pers->statut; ?></td>
			<td><?php echo $pers->mail; ?></td>
			<td>
				<?php echo anchor("/main_stage/edit_profil_admin/$pers->id_personne", 'Acceder au profil', 'class="btn btn-info"' );?>
				
			</td>
			<tr>
			<?php endforeach; ?>
                    
        </table> 
                
            </div>

    </section>

    </br>



    <!-- About Section -->
    <section id="about" class="bg-light-gray">
        <div class="row text-center"> 
            
                    

                    <h7> Ajouter un utilisateur </h7>
                    <br>
                    <br>
                     
					 <?php echo anchor('/main_stage/ajouter_utilisateur','Cliquer ici', 'class="btn_choice" ' ); ?>
                   <!-- <a href="#.html" class="btn_choice"> Cliquer ici <a> -->
                         <br>
                         <br>
                         <br>
                        

                    <h7> Ajouter une liste d'etudiants </h7>
                     
                     <br>
					 
                    <form action="<?php echo base_url('index.php/main_stage/lire_csv'); ?>" method="post" enctype="multipart/form-data">
                    <div class="custom-file">
                     <center><input type="file" class="custom-file-input" name="fichier"  class="custom-file-input" required accept=".csv"/></center> <p>Fichier .csv uniquement</p>
                    </div>     
                     <input type="submit"  class="btn_choice" value="Envoyer la liste"> 					 
					</form>
					
					<br>
					
					

				
        </div>
    </section>
	
    <br>
    </br>

   <center><?php echo anchor('/main_stage/gestion_entreprises','gerer les entreprises', 'class="btn_choice" ' ); ?> </center>

</body>

</html>

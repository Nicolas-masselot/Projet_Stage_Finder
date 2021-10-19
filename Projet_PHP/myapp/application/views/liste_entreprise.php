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
    <link href="<?php echo base_url('assets/css/form.css');?>" rel="stylesheet">

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
				<?php echo anchor('/main_stage/afficher_utilisateurs','Retour', 'class="btn_choice" ' ); ?>
			</div>	
				<h1>Liste des Entreprises</h1>
				                              
				
				<table class="table">
			<tr>
				<th>NOM Entreprise</th>
				<th>Email</th>
				<th>&nbsp;</th>
			</tr>
               <?php foreach($entreprises as $ent) : ?>
			<tr>
			<td><?php echo $ent->nom_entreprise;?></td>
			<td><?php echo $ent->mail; ?></td>
			<td>
				<?php echo anchor("/main_stage/edit_entreprise_admin/$ent->id_entreprise", 'Voir entreprise', 'class="btn btn-info"' );?>
				
			</td>
			<tr>
			<?php endforeach; ?>
                    
        </table> 

                
        </div>

    </section>




    <!-- About Section -->
    <section id="about" class="bg-light-gray">
        <div class="row text-center"> 
            
                    
                    <br>
                    <h7> Ajouter une Entreprise </h7>
                    <br>
                    <br>
                     
                    <?php echo anchor('/main_stage/ajouter_entreprise','Cliquer ici', 'class="btn_choice" ' ); ?>
                         <br>
                         <br>
                         <br>
                                                                     

		</div>
            
        
    </section>
    <br>
    </br>

   

</body>

</html>

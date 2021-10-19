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
				<?php echo anchor('/main_stage/afficher_dashboard','Retour', 'class="btn_choice" ' ); ?>
			</div>	
				<h1>Liste des offres de stage à valider ou non </h1>
				                              
				
				<table class="table">
			<tr>
				<th>NOM Entreprise</th>
				<th>intitulé du stage</th>
				<th>&nbsp;</th>
			</tr>
               <?php foreach($stages as $offre) : ?>
			<tr>
			<td><?php echo $offre->nom_entreprise;?></td>
			<td><?php echo $offre->intitule_stage; ?></td>
			<td>
				<?php echo anchor("/main_stage/afficher_demande/$offre->id_stage", 'Voir offre', 'class="btn btn-info"' );?>
				
			</td>
			<tr>
			<?php endforeach; ?>
                    
        </table> 

                
        </div>

    </section>
  

</body>

</html>

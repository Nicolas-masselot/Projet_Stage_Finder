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

</head>

<body id="page-top" class="index">



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


 <section id="service" align="center">
     <div class="container">
 
                
                   <h2 class="section-heading">Bienvenue</h2>
               </br>
                    
         
            <div class="row text-center"> 

            
                    <h4 class="service-heading">Vous êtes connecté sous le profil : Responsable</h4>
                    <p class="text-muted">Voulez vous consulter votre profil, des offres de stage, valider un stage, vous deconnecter ou encore acceder a la gestion des contenus ?</p>
                    <br>
                    <br>
                    <br>
                        
						<?php echo anchor('/main_stage/edit_profil','Consulter votre profil', 'class="btn_choice" name="profil"' ); ?>
                        <!-- <a href="#" class="btn_choice" name="profil" >Consulter votre profil</a> -->
                        <!-- <a href="#" class="btn_choice" name="validation" >Valider un stage</a> -->
                        <?php echo anchor('/main_stage/afficher_demandes_validation','Valider un stage', 'class="btn_choice" name="validation"' ); ?>
                        </br>
                        </br>
                        </br>
						<?php echo anchor('/main_stage/afficher_gestion_stages','Gestion des offres de stage', 'class="btn_choice" name="stage"' ); ?>
                        <!-- <a href="#" class="btn_choice" name="stage" >Gestion des offres de stages</a> menu avec suppression modif comme pro -->
						<?php echo anchor('/main_stage/gerer_contenus','Gérer des contenus', 'class="btn_choice" name="gestion"' ); ?>
                        <!-- <a href="#" class="btn_choice" name="gestion" >Gerer des contenus</a> -->
						<?php echo anchor('/main_stage/logout','Se deconnecter', 'class="btn_choice" name="deconnecter"' )?>
                       <!-- <a href="#" class="btn_choice" name="deconnecter" >Se deconnecter</a> -->

                        </br>
                        </br>
                
                </div>

               

                
            </div>

    </section>

    </br>
    </br>








</body>

</html>

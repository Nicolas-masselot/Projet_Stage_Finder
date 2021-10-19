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

            
                    <h4 class="service-heading">Vous êtes connecté sous le profil : Etudiant</h4>
                    <p class="text-muted">Voulez vous consulter votre profil ou demander une validation de stage ou vous deconnecter ?</p>
                    <br>
                    <br>
                    <br>
                        <?php echo anchor('/main_stage/edit_profil','Consulter votre profil', 'class="btn_choice" name="profil"' ); ?>
                      <!--  <a href="#" class="btn_choice" name="profil" >Consulter votre profil</a> -->
						<?php echo anchor('/main_stage/afficher_offres_save','Demander une validation de stage', 'class="btn_choice" name="validation"' )?>
                        <!-- <a href="#" class="btn_choice" name="validation" >Demander une validation de stage</a> -->
						<?php echo anchor('/main_stage/logout','Se deconnecter', 'class="btn_choice" name="deconnecter"' )?>
                      <!--  <a href="#" class="btn_choice" name="deconnecter" >Se deconnecter</a> -->
                        <br>
                        <br>
                        <br>
                    
                
                </div>

                <h4 class="service-heading">Plus generalement vous pouvez :</h4>
                    
                    <br>
                    <br>
                    
                         <?php echo anchor('/main_stage/afficher_stages','Consulter les offres de stage', 'class="btn_choice" name="offre"' ); ?>
                        <!-- <a href="#" class="btn_choice" name="offre" >Consulter les offres de stage</a> -->
                       
                        <br>
                
                </div>

                
            </div>

    </section>

    </br>
    </br>








</body>

</html>

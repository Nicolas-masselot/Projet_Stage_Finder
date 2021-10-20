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
 
                
                   <h2 class="section-heading">Qui etes vous ?</h2>
               </br>
                    
         
            <div class="row text-center"> 

            
                    <h4 class="service-heading">Professionnel / Etudiant / Secrétariat / Responsable</h4>
                    <p class="text-muted">Indiquez nous qui vous êtes.</p>
                    <br>
                    <img src="<?php echo base_url('img\utilisateur.png')?>" width="200" height="200">
                    <br>
                    <br>
                        <?php echo anchor('/main_stage/login','Se connecter', 'class="btn_choice" name="connecter"' ); ?>
                        <br>
                
                </div>

                
            </div>

    </section>

    </br>
    </br>

	<!-- rajouter téléchargement des fichiers -->
    <!-- About Section -->
    <section id="about" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Informations sur les stages</h2>

                    <h7> Procedure de candidature </h7>
                    <p class="text-muted"> <?php echo $contenus->procedure_candidature;?><p>

                    <h7> Suivi </h7>
                    <p class="text-muted"> 
                    <img src="<?php echo base_url('img\cv.png')?>" width="200" height="200">
                    <br>
                    <br>
                    <?php echo $contenus->suivi_stage;?>
                    </p>
                    <img src="<?php echo base_url('img\stage.png')?>" width="200" height="200">
                    <br>
                    <br>
                    <h7> Documents de fin de stage </h7>
                    <p class="text-muted"><?php echo $contenus->doc_fin_stage;?></p>
                    <img src="<?php echo base_url('img\doc.png')?>" width="150" height="200">
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <br>
    </br>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Element d'évaluation</h2>
                    
                    <h7> Le rapport de stage </h7>
                    <p class="text-muted"><?php echo $contenus->rapport_stage;?> </p>
                    <img src="<?php echo base_url('img\rapport.png')?>" width="210" height="260">
                    <br>
                    <br>

                    <h7> La soutenance </h7>
                    <p class="text-muted"><?php echo $contenus->soutenance;?></p>
                    <img src="<?php echo base_url('img\expose.png')?>" width="300" height="300">
                    <br>
                    <br>

                </div>
            </div>
        </div>
    </section>
    <br>
    </br>
    
     <section id="about" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">A propos</h2>

                    <p class="text-muted"> 
                        Ce site web a été programmé dans le cadre du projet PHP du module M3104. <br>
                        Le site a pour principale vocation la gestion et le suivi des stages des étudiants.<br>
                        Actuellement, ce processus demande enormement de temps, le but étant de faciliter tout ça.<br>
                        <br>
                        <br>
                    </p>

                    <p class="text-muted"> Les créateurs du site :
                                            -Lucas Collado
                                            -Nicolas Masselot</p>

                    <img src="<?php echo base_url('img\amis.png')?>" width="350" height="250">
                </div>
            </div>
        </div>
    </section>
    <br>
    </br>




</body>

</html>
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


    <!-- Le Bouton -->

<div>
<?php echo anchor('/main_stage/afficher_stages','Retour ', 'class="btn_choice" ' ); ?>
</div> 


</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom ">
        <div class="container">
                <a class="navbar-brand page-scroll">Stage Finder</a>
            </div>      
    </nav>


	 <section id="service" align="center">
     <div class="container">
 
                
                   <h1 class="section-heading">Intitulé du stage</h1>
				  <center> <p style="font-size:300%;"><?php echo $stage->intitule_stage;?></p></center>
               
           
            </div>

    </section>

   
    <section id="about" class="bg-light-gray"> 
	
               <div class="row text-center"> 
                    <label>Nom Entreprise</label>
					 <p style="font-size:160%;"><?php echo $stage->nom_entreprise;?></p>
                    <br>
                    <br>
                    <label>Date de debut</label>
					 <p style="font-size:160%;"><?php echo $stage->date_debut_stage;?></p>
                    <br>
                    <br>
                    <label>Date de fin</label>
					<p style="font-size:160%;"><?php echo $stage->date_fin_stage;?></p>
                    <br>
                    <br>
                    <label>Adresse du stage</label>
					<p style="font-size:160%;"><?php echo $stage->stage_adresse;?></p>
                    <br>
                    <br>
                    <label>Mission du stage</label>
					<p style="font-size:160%;"><?php echo $stage->mission;?></p>
                    <br>
                    <br>
                    <label>Code postal</label>
					<p style="font-size:160%;"><?php echo $stage->cp_stage;?></p>
                    <br>
                    <br>
                    <label>Ville du stage</label>
					<p style="font-size:160%;"><?php echo $stage->ville_stage;?></p>
                    <br>
                    <br>
                    <label>Mail de l'auteur du stage</label>
					<p style="font-size:160%;"><?php $this->load->model('mStages'); echo $this->mStages->get_utilisateur_email($stage->auteur);?></p>
                    <br>
                    <br>
                    <label>Pays du stage</label>
					<p style="font-size:160%;"><?php echo $stage->pays_stage;?></p>
                    <br>
                    <br>
                    <label>Telephone de l'entreprise</label>
					<p style="font-size:160%;"><?php echo $stage->tel;?></p>
                    <br>
                    <br>
                    <label>Mail de l'entreprise</label>
					<p style="font-size:160%;"><?php echo $stage->mail;?></p>
                    <br>
                    <br>    
                    <label>Activité de l'entreprise</label>
					<p style="font-size:160%;"><?php echo $stage->activite;?></p>
                    <br>
                    <br>
					<label>Adresse de l'entreprise</label>
					<p style="font-size:160%;"><?php echo $stage->adresse_ent;?></p>
                    <br>
                    <br>
					
                    <label>Ville de l'entreprise</label>
					<p style="font-size:160%;"><?php echo $stage->ville_ent;?></p>
                    <br>
                    <br>    
                    <label>Pays de l'entreprise</label>
					<p style="font-size:160%;"><?php echo $stage->pays_ent;?></p>
                    <br>
                    
                    <h7> Demander une validation de stage ? </h7>
                    <br>
                    <br>
                    
                   <div>
						<?php echo anchor("/main_stage/postuler_offre/$stage->id_stage",'Oui', 'class="btn_choice" ' ); ?>
						<?php echo anchor("/main_stage/afficher_offre_demande/$stage->id_stage",'Non ', 'class="btn_choice" ' ); ?>
					</div>                    
			</div>
            
	</section>

   

</body>

</html>

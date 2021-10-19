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
            </div>      
    </nav>



    <!-- Services Section -->
    <section id="service" align="center">
     <div class="container">
 
                
                   <h2 class="section-heading">Voulez vous supprimer le compte suivant :</h2>
               </br>
           
            </div>

    </section>



    <!-- About Section -->
    <section id="about" class="bg-light-gray">
	<form method="post">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

                    <br>
                    <br>

                    <h7> Nom : </h7>
					<p><?php echo $personne->nom;?></p>
                    <br>
                    <br>

                    <h7> Prenom : </h7>
					<p><?php echo $personne->prenom;?></p>
                    <br>
                    <br>
                    
                    <h7> Civilité : </h7>
					<p><?php echo $personne->civilite;?></p>
                    <br>
                    <br>

                    <h7> Mail : </h7>
					<p><?php echo $personne->mail;?></p>
                    <br>
                    <br>

                    <h7> Mot de passe : </h7>
					<p><?php echo $personne->motdepasse;?></p>
                    <br>
                    <br>
                    
                    <h7> Pays : </h7>
					<p><?php echo $personne->pays;?></p>
                    <br>
                    <br>

                    <h7> Ville : </h7>
					<p><?php echo $personne->ville;?></p>
                    <br>
                    <br>

                    <h7> Adresse : </h7>
					<p><?php echo $personne->adresse;?></p>
                    <br>
                    <br>
                    
                    <h7> Complement : </h7>
                    <p><?php echo $personne->complement;?></p>
                    <br>
                    <br>

                    <h7> Telephone : </h7>
					<p><?php echo $personne->tel;?></p>
                    <br>
                    <br>

                    <h7> Code Postal : </h7>
					<p><?php echo $personne->code_postal;?></p>
                    <br>
                    <br>
                    
                    <h7> Numero de Securité Sociale : </h7>
					<p><?php echo $personne->num_secu;?></p>
                    <br>
                    <br>

                    <h7> Mutuelle : </h7>
					<p><?php echo $personne->mutuelle;?></p>
                    <br>
                    <br>

                    <h7> Objectif Professionnel : </h7>
					<p><?php echo $personne->objectif_pro;?></p>
                    <br>
                    <br>

                    <h7> Date de Naissance : </h7>
					<p><?php echo $personne->date_naiss;?></p>
                    <br>
                    <br>
                    
                    <h7> Fonction Professionnelle : </h7>
					<p><?php echo $personne->fonction_pro;?></p>
                   
				    <div>
						<button class="btn_choice" type="submit" name="action" value="delete">Oui</button>
						<button class="btn_choice" type="submit" name="action" value="annuler">Non</button>
					</div>

                </div>
            </div>
        </div>
	</form>	
    </section>
    <br>
    </br>

   


</body>

</html>

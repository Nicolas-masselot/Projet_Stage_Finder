<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> <link rel="stylesheet" type="text/css" href="/style/form.css"> <link rel="shortcut icon" type="image/png"> <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<body style="background-color:powderblue;">


</head>

<body>

<div class="image">

<img src="<?php echo base_url('img\logo.jpg')?>" width="300" height="150">

</div>


<div class="topcorner">

<br>

<label>Année universitaire 2017 /2018</label>
<br>
<label>CONVENTION DE STAGE « sortant » - Formation initiale</label>
<br>
<label>Composante/UFR/Service : IUT d’Aix-Marseille - Site d’Arles</label>
<br>
<label>2 rue Raoul Follereau - Cité Yvan Audourad - BP 90178 - 13637 ARLES Cedex</label>
<br>
<label>Contact : Pauline GASTON</label>
<br>
<label>Tél : 04 13 55 21 70</label>
<br>
<label>Courriel : pauline.gaston@univ-amu.fr</label>

<style type="text/css">
 .topcorner{
   position:absolute;
   top:0;
   right:0;
  }
  .left2{
   position:absolute;
   top: 500px;
  }
  .left{
   position:absolute;
   left:0;
  }
   .right{
   position:absolute;
   right:100px;
  }
  .container3{
   position:absolute;
   top: 500px;
   right:300px;
  }
  .container4{
   position:absolute;
   top: 850px;
  }
  .container5{
   position:absolute;
   top: 850px;
   right: 100px;
  }
  .container6{
   position:absolute;
   top: 1030px;
  }
  .container7{
   position:absolute;
   top: 1110px;
  }
  .container8{
   position:relative;
   top: 1500px;
   text-align: center;
  }
</style>


</div>


<br>
<br>

<div class="container">

<label>Nota : pour faciliter la lecture du document, les mots « stagiaire », « enseignant référent », « tuteur de stage », « représentant légal », « étudiant » sont utilisés au masculin</label>

</div>

<br>
<br>

<hr width="100%" color="white">

<div class="container2">

<div class="left">

<br>


<label>1 - L’ÉTABLISSEMENT D’ENSEIGNEMENT OU DE FORMATION</label>
<br>
<br>
<label>Nom : AIX-MARSEILLE UNIVERSITE</label>
<br>
<br>
<label>Adresse : Jardin du Pharo 58 boulevard Charles Livon 13284 Marseille cedex</label>
<br>
<br>
<label>Représenté par : le Président Yvon Berland et par délégation (signataire de la convention) : Brett DESBENOIT</label>
<br>
<br>
<label>Qualité du représentant : Chef de département Informatique</label>
<br>
<br>
<hr width="50%" color="white">
</div>

<div class="right">



<br>
<label>IUT d’Aix-Marseille - Site d’Arles</label>
<br>
<br>
<label>2 rue Raoul Follereau</label>
<br>
<br>
<label>Cité Yvan Audourad</label>
<br>
<br>
<label>BP 90178</label>
<br>
<br>
<label>13637 ARLES Cedex</label>

</div>


</div>



<div class="left2">

<br>


<label>2 - L’ORGANISME D’ACCUEIL</label>
<br>
<br>
<label>Nom : <?php echo $convention["nom_ent"]; ?> </label>
<br>
<br>
<label>Adresse : <?php echo $convention["adresse_ent"]; ?></label>
<br>
<br>
<label>Représenté par(nom du signataire de la convention): <?php echo $convention["contact_ent"]; ?></label>
<br>
<br>
<label>Telephone : <?php echo $convention["tel_ent"]; ?></label>
<br>
<br>
<label>Mail : <?php echo $convention["mail_ent"]; ?></label>
<br>
<br>
<label>Lieu du stage : <?php echo $convention["adresse_stage"]; ?>,<?php echo $convention["CP_stage"]; ?>,<?php echo $convention["ville_stage"]; ?>, <?php echo $convention["pays_stage"]; ?> </label>
<br>
<br>
<br>
<br>
<hr width="100%" color="white">


</div>

<div class="container3">

<br>


<label>3 - LE STAGIAIRE</label>
<br>
<br>
<label>Nom : <?php echo $convention["nom_de_famille"]; ?></label>
<br>
<br>
<label>Prenom : <?php echo $convention["prenoms"]; ?></label>
<br>
<br>
<label>Date naissance : <?php echo $convention["nee_le"]; ?></label>
<br>
<br>
<label>Genre : <?php echo $convention["civilite"]; ?></label>
<br>
<br>
<label>Adresse : <?php echo $convention["adresse"]; ?></label>
<br>
<br>
<label>Telephone : <?php echo $convention["tel_portable"]; ?></label>
<br>
<br>
<label>Mail : <?php echo $convention["mel"]; ?></label>
<br>
<br>


</div>


<div class="container4">

<br>


<label>ENCADREMENT DU STAGIAIRE PAR  L’ETABLISSEMENT D’ENSEIGNEMENT</label>
<br>
<br>
<label>Nom et prénom de l’enseignant référent : </label>
<br>
<br>
<label>Fonction (ou discipline): Enseignant - Tuteur de stage</label>
<br>
<br>
<label>Télephone : 04 13 55 21 70 mél:</label>
<br>
<br>
<hr width="100%" color="white">
</div>


<div class="container5">

<br>


<label>ENCADREMENT DU STAGIAIRE PAR  L’ORGANISME D’ACCUEIL</label>
<br>
<br>
<label>Nom et prénom du tuteur de stage: <?php echo $convention["nom_mds"]; ?>,  <?php echo $convention["prenom_mds"]; ?>     </label>
<br>
<br>
<label>Fonction : <?php echo $convention["fonction_mds"]; ?></label>
<br>
<br>
<label>Télephone : <?php echo $convention["tel_portable_mds"]; ?> mél: <?php echo $convention["mel_mds"]; ?></label>
<br>
<br>
</div>



<div class="container6">

<br>


<label>Caisse primaire d’assurance maladie à contacter en cas d’accident (lieu de domicile du stagiaire sauf exception): <?php echo $convention["mutuelle"]; ?>
	N° de SS: <?php echo $convention["num_secu"]; ?>
</label>
<br>
<br>
<hr width="100%" color="white">
</div>


<div class="container7">

<br>


<label>Fait à ...................... le :  ......./........./........</label>
<br>
<br>
<label>POUR L’ÉTABLISSEMENT D’ENSEIGNEMENT</label>
<br>
<label>Nom  et signature du représentantde l’établissement </label>
<br>
<br>
<br>
<br>
<br>
<br>
<label>POUR L’ORGANISME D’ACCUEIL</label>
<br>
<label>Nom et signature du représentantde l’organisme d’accueil</label>
<br>
<br>
<br>
<br>
<br>
<br>
<label>STAGIAIRE(ET SON REPRESENTANT LEGAL LE CAS ECHEANT)</label>
<br>
<label>Nom et signature</label>
<br>
<br>
<br>
<br>
<br>
<br>
<label>L’enseignant référent du stagiaire</label>
<br>
<label>Nom et signature</label>
<br>
<br>
<br>
<br>
<br>
<br>
<label>Le tuteur de stage de l’organisme d’accueil</label>
<br>
<label>Nom et signature</label>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</div>
<br>
<br>
<br>


<div class="container8">
<input type="button" value="Imprimer la convention" onClick="window.print()">
</div>


<br>
<br>
<br>
<br>
<br>
<br>

</body>

</html>
<?php

	class Main_stage extends CI_controller
	{
		public function index()
		{
			$this->accueil();
			ini_set('date.timezone', 'Europe/Paris');
		}
		public function accueil()
		{
			$this->load->helper('url');
			$this->load->model('mStages');
			$content = $this->mStages->get_all_contenus();
			$data = array();
			$data['contenus'] = $content;
			$this->load->view('accueil',$data);
		}
		
		public function afficher_stages()
		{
			$this->load->model('mStages');
			$data = array();
			$data['stages'] = $this->mStages->get_all_stages();
			$this->load->view('liste_stages_etu',$data);
			 
		}
		
		
		public function afficher_offre_demande($id_stage)
		{
			$this->load->model('mStages');
			$stage = $this->mStages->get($id_stage);
			if(!$stage) redirect('main_stage/afficher_offres_save');
			
			$data = array();
			$data['stage'] = $stage;
			$this->load->view('stage_etudiant_demande',$data);
		}
		
		public function postuler_offre($id_stage)
		{
			$this->load->helper('url');
			$this->load->model('mStages');
			$email = $this->session->userdata('email'); 			
			$id_etu = $this->mStages->get_utilisateur_id($email);	
			$this->mStages->demande_etu($id_etu,$id_stage);
			redirect('main_stage/afficher_offres_save'); 
		}
		
		public function afficher_confirmation_save($id_stage)
		{
			$this->load->model('mStages');
			$stage = $this->mStages->get($id_stage);
			if(!$stage) redirect('main_stage/afficher_stages');
			
			$data = array();
			$data['stage'] = $stage;
			$this->load->view('stage_etudiant_save',$data);
		
		}
		
		public function afficher_confirmation_demande($id_stage)
		{
			$this->load->model('mStages');
			$stage = $this->mStages->get($id_stage);
			if(!$stage) redirect('main_stage/afficher_offre_demande');
			
			$data = array();
			$data['stage'] = $stage;
			$this->load->view('stage_etudiant_demande_confirm',$data);
		
		}
		
		public function sauvegarder_offre($id_stage)
		{
			$this->load->helper('url');
			$this->load->model('mStages');
			$email = $this->session->userdata('email'); 			
			$id_etu = $this->mStages->get_utilisateur_id($email);	
			$this->mStages->sauvegarde_etu($id_etu,$id_stage);
			redirect('main_stage/afficher_stages');
		}
		
		public function valider_offre($id_stage)
		{
			$this->load->helper('url');
			$this->load->model('mStages');
			$this->mStages->validation($id_stage);
			redirect('main_stage/afficher_demandes_validation');
		
		}
		
		
		public function afficher_gestion_stages()
		{
		
			$this->load->model('mStages');
			$data = array();
			$data['stages'] = $this->mStages->get_all_stages();
			$this->load->view('liste_stages_gestion',$data);
		}
		
		public function creer_stage()
		{
			$this->load->helper(array('form','url'));
			
			$this->load->library('form_validation');
			$this->form_validation->set_rules('intitule', 'Intitule_stage','required');
			
			$this->form_validation->set_rules('nom_entreprise','Nom entreprise','required'); 
			$this->form_validation->set_rules('date_debut','Date de début','required');
			$this->form_validation->set_rules('date_fin','Date de fin','required');
			$this->form_validation->set_rules('adresse','Adresse','required');
			$this->form_validation->set_rules('mission','Mission du stage','required');
			$this->form_validation->set_rules('code_postal','code postal','required');
			$this->form_validation->set_rules('ville','Ville','required');
			$this->form_validation->set_rules('pays_stage','Pays','required');
			$this->form_validation->set_rules('mail','Mail auteur','required'); 

			$this->load->model('mStages');
			$data = array() ;
			$data['entreprises'] = $this->mStages->get_all_entreprise() ;
			$data['pros'] = $this->mStages->get_all_pro() ;
			
			if($this->form_validation->run() == FALSE) $this->load->view('ajout_stage',$data);
			else{
					$new_stage = array(
					'intitule_stage' => $this->input->post('intitule'),
					'entreprise' => $this->input->post('nom_entreprise'),
					'date_debut_stage' => $this->input->post('date_debut'),
					'date_fin_stage' => $this->input->post('date_fin'),
					'adresse' => $this->input->post('adresse'),
					'mission' => $this->input->post('mission'),
					'code_postal' => $this->input->post('code_postal'),
					'ville' => $this->input->post('ville'),
					'pays' => $this->input->post('pays_stage'),
					'auteur' => $this->input->post('mail'),
					'validation' => '0'
					);
					$this->mStages->create_stage($new_stage);
					redirect('main_stage/afficher_gestion_stages');
				 
			}
		}
		
		public function modifier_stage($stage_id)
		{
			$this->load->helper(array('form','url'));
			
			$this->load->model('mStages');
			$stage_validation = $this->mStages->get_non_valide($stage_id);
			$stage = $this->mStages->get($stage_id) ;

			$data = array();
			$data['stage'] = $stage;
			$data['validation'] = 1;

			if(!$stage_validation) $data['validation'] = 0;
			
			$this->load->library('form_validation');
			$this->form_validation->set_rules('intitule', 'Intitule_stage','required');
			$this->form_validation->set_rules('nom_entreprise','Nom entreprise','required'); 
			$this->form_validation->set_rules('date_debut','Date de début','required');
			$this->form_validation->set_rules('date_fin','Date de fin','required');
			$this->form_validation->set_rules('adresse','Adresse','required');
			$this->form_validation->set_rules('mission','Mission du stage','required');
			$this->form_validation->set_rules('code_postal','code postal','required');
			$this->form_validation->set_rules('ville','Ville','required');
			$this->form_validation->set_rules('pays_stage','Pays','required');
			$this->form_validation->set_rules('mail','Mail auteur','required'); 
			
			
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('stage_modif',$data);
				echo validation_errors();
			}
			else{
					$emailauteur = $this->input->post('mail');
					$entreprise_nom = $this->input->post('nom_entreprise');
					
					$idauteur = $this->mStages->get_utilisateur_id($emailauteur);
					$entreprise_id = $this->mStages->get_entreprise_id($entreprise_nom);
					$stage_modif = array(
					'intitule_stage' => $this->input->post('intitule'),
					'entreprise' => $entreprise_id,
					'date_debut_stage' => $this->input->post('date_debut'),
					'date_fin_stage' => $this->input->post('date_fin'),
					'adresse' => $this->input->post('adresse'),
					'mission' => $this->input->post('mission'),
					'code_postal' => $this->input->post('code_postal'),
					'ville' => $this->input->post('ville'),
					'pays' => $this->input->post('pays_stage'),
					'auteur' => $idauteur,
					
					);
					
					$this->mStages->update_stage($stage_id,$stage_modif);
					redirect('main_stage/afficher_gestion_stages');
			}
		}
		
		public function afficher_confirmation_suppression_stage($id_stage)
		{
			$this->load->model('mStages');
			$stage = $this->mStages->get($id_stage);
			if(!$stage) redirect('main_stage/afficher_gestion_stages');
			
			$data = array();
			$data['stage'] = $stage;
			$this->load->view('stage_suppression_confirm',$data);
		}
		
		public function supprimer_stage($stage_id)
		{
			$this->load->helper('url');
			$this->load->model('mStages');	
			$this->mStages->delete_stage($stage_id);
			redirect('main_stage/afficher_gestion_stages');
		}
		
		public function afficher_offre($stage_id)
		{
			$this->load->model('mStages');
			$stage = $this->mStages->get($stage_id);
			if(!$stage) redirect('main_stage');
			
			$data = array();
			$data['stage'] = $stage;
			$this->load->view('stage_etudiant',$data);	
		}
		
		
		public function editer_convention($id_stage)
		{
			$this->load->helper(array('form','url'));
			$this->load->model('mStages');
			$stagiaire = $this->mStages->get_infos_convention_stagiaire($id_stage);
			$tuteur = $this->mStages->get_infos_convention_tuteur($id_stage);
			$stage = $this->mStages->get_infos_convention_stage($id_stage);
			$entreprise = $this->mStages->get_infos_convention_entreprise($id_stage);
			
			$convention = array (
			'nom_ent' => $entreprise->nom_entreprise,
			'adresse_ent' => $entreprise->adresse_ent,
			'complement_ent' => $entreprise->complement,
			'CP_ent'=>$entreprise->cp_ent,
			'ville_ent'=>$entreprise->ville_ent,
			'pays_ent'=>$entreprise->pays_ent,
			'contact_ent'=>$tuteur->nom,  //champ nom_mds en plus
			'tel_ent'=>$entreprise->tel,
			'mail_ent'=>$entreprise->mail,
			'adresse_stage'=>$stage->adresse,
			'CP_stage'=>$stage->code_postal,
			'ville_stage'=>$stage->ville,
			'pays_stage'=>$stage->pays,
			'mission_stage'=>$stage->mission,
			'stage_du'=>$stage->date_debut_stage,
			'stage_au'=>$stage->date_fin_stage,
			'nom_de_famille'=>$stagiaire->nom,
			'civilite'=>$stagiaire->civilite,
			'prenoms'=>$stagiaire->prenom,
			'nee_le'=>$stagiaire->date_naiss,
			'adresse'=>$stagiaire->adresse_stagiaire,
			'complement'=>$stagiaire->complement,
			'mutuelle'=>$stagiaire->mutuelle,
			'num_secu'=>$stagiaire->num_secu,
			'CP'=>$stagiaire->cp_stagiaire,
			'tel_portable'=>$stagiaire->tel,
			'mel'=>$stagiaire->mail,
			'ville'=>$stagiaire->ville_stagiaire,
			'pays'=>$stagiaire->pays_stagiaire,
			'nom_mds'=>$tuteur->nom,
			'prenom_mds'=>$tuteur->prenom,
			'fonction_mds'=>$tuteur->fonction_pro,
			'tel_portable_mds'=>$tuteur->tel,
			'mel_mds'=>$tuteur->mail
			
			);
			
			$data = array();
			$data['convention'] = $convention; 
			
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nom_organisme', 'Nom organisme','required');

			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('convention',$data);
				echo validation_errors();
			}
			else
			{
				$this->load->view('convention_page',$data);
			}
			
		}
		
		
		
		public function ajouter_utilisateur()
		{
			
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nom', 'Nom','required');
			$this->form_validation->set_rules('prenom','Prenom','required');  
			$this->form_validation->set_rules('role','Statut','required');
			$this->form_validation->set_rules('civilite','Civilité','required');
			$this->form_validation->set_rules('mail','Mail','required');
			$this->form_validation->set_rules('adresse','Adresse','required');
			$this->form_validation->set_rules('complement','Complement','required');
			$this->form_validation->set_rules('code_postal','Code Postal','required');
			$this->form_validation->set_rules('ville','Ville','required');
			$this->form_validation->set_rules('pays','Pays','required');
			$this->form_validation->set_rules('tel','Telephone','required');
			$this->form_validation->set_rules('date_naissance','Date de naissance','required');
			$this->form_validation->set_rules('num_secu','Numéro de sécurité sociale','required');
			$this->form_validation->set_rules('mutuelle','Mutuelle','required');
			$this->form_validation->set_rules('obj_pro','Objectif pro','required');
			$this->form_validation->set_rules('motdepasse','Mot de passe','required');
			

			
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('form_ajout');
				echo validation_errors();
			}
			else{
				
				
				$new_user = array(
					'nom' => $this->input->post('nom'),
					'prenom' => $this->input->post('prenom'),
					'statut'=> $this->input->post('role'),
					'civilite' => $this->input->post('civilite'),				
					'mail' => $this->input->post('mail'),
					'adresse' => $this->input->post('adresse'),
					'complement' => $this->input->post('complement'),
					'code_postal' => $this->input->post('code_postal'),
					'ville' => $this->input->post('ville'),
					'pays' =>$this->input->post('pays'),
					'tel' => $this->input->post('tel'),
					'date_naiss' => $this->input->post('date_naissance'),
					'num_secu' => $this->input->post('num_secu'),
					'mutuelle' => $this->input->post('mutuelle'),
					'objectif_pro' => $this->input->post('obj_pro'),
					'motdepasse' => $this->input->post('motdepasse'),
					'fonction_pro' => $this->input->post('fct_pro')
					);
			
					$this->load->model('mStages');
					$this->mStages->create_utilisateur($new_user);
					$this->envoyer_mail($new_user['mail'],$new_user['motdepasse'],$new_user['nom'],$new_user['prenom']);
					redirect('main_stage/afficher_utilisateurs');
				
				
			}
		}
		
		public function supprimer_utilisateur($utilisateur_id)
		{
			$this->load->helper('url');
			$this->load->model('mStages');
			$utilisateur = $this->mStages->get_utilisateur_admin($utilisateur_id);
			$data = array();
			$data['personne'] = $utilisateur;
			
			if(!$utilisateur) redirect('main_stage/afficher_utilisateurs');
			
			if($_POST) {
				if($this->input->post('action')=="delete")
				{
					$this->mStages->delete_personne($utilisateur_id);
				}
				redirect('main_stage/afficher_utilisateurs');
			} else $this->load->view('profil_delete',$data);
		}
		
		public function afficher_utilisateurs()
		{
			$this->load->model('mStages');
			$data = array();
			$data['personne'] = $this->mStages->get_all_utilisateurs();
			$this->load->view('liste_utilisateurs',$data);
		}
		
		public function afficher_offres_pro()
		{
			$email_user = $this->session->userdata('email');
			$id_tuteur = $this->mStages->get_utilisateur_id($email_user);	
			$entreprise_id = $this->mStages->get_entreprise_id_pro($id_tuteur);
			$this->load->model('mStages');
			$data = array();
			$data['stages'] = $this->mStages->get_stage_pro($entreprise_id);
			$this->load->view('liste_stages_gestion',$data);
		}
		
		public function afficher_demandes_validation()
		{
			$this->load->model('mStages');
			$data = array();
			$data['stages'] = $this->mStages->get_stage_demandes();
			$this->load->view('liste_stages_validation',$data);	 
		}

		public function afficher_demande($id_stage)
		{
			$this->load->model('mStages');
			$data = array();
			$data['stage'] = $this->mStages->get_demande($id_stage);
			$this->load->view('stage_validation',$data);
		}

		public function afficher_confirmation_validation($id_stage)
		{
			$this->load->model('mStages');
			$stage = $this->mStages->get_demande($id_stage);
			
			$data = array();
			$data['stage'] = $stage;
			$this->load->view('stage_validation_confirm',$data);
		}
		
		public function afficher_offres_save()
		{
			$this->load->model('mStages');
			$email_user = $this->session->userdata('email');
			$id_etu = $this->mStages->get_utilisateur_id($email_user);
			$data = array();
			$data['stages'] = $this->mStages->get_liste_stage_save($id_etu);
			$this->load->view('liste_stages_etu_saved',$data);
		}
		
		
		public function afficher_offres_valide()
		{
			$this->load->model('mStages');
			$data = array();
			$data['stages'] = $this->mStages->get_liste_stage_valide();
			$this->load->view('liste_stages_validees',$data);
		}
		
		public function gerer_contenus()
		{
			$this->load->helper(array('form','url'));
			$this->load->model('mStages');
			$content = $this->mStages->get_all_contenus();
			if(!$content) redirect('main_stage/afficher_dashboard');
			
			$this->load->model('mStages');
			$email_user = $this->session->userdata('email');
			$auteur = $this->mStages->get_utilisateur_id($email_user);
			
			$data = array();
			$data['content'] = $content;
			
			$this->load->library('form_validation');
			$this->form_validation->set_rules('procedure','Procedure candidature','required');
			$this->form_validation->set_rules('suivi','Suivi de stage','required');
			$this->form_validation->set_rules('fin','Documents de fin de stage','required');
			$this->form_validation->set_rules('rapport','Rapport de stage','required');
			$this->form_validation->set_rules('soutenance','Soutenance','required');
			
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('gestion_contenus',$data);
			}
			else
			{
				$update_contents = array (
					'id_auteur' => $auteur,
					'procedure_candidature' => $this->input->post('procedure'),
					'suivi_stage' => $this->input->post('suivi'),
					'doc_fin_stage' => $this->input->post('fin'),
					'rapport_stage' => $this->input->post('rapport'),
					'soutenance' => $this->input->post('soutenance')
				);
				$this->mStages->update_contenus($update_contents);
				redirect('main_stage/afficher_dashboard');
			}
		}
		
		
		
		public function edit_profil()
		{
			$this->load->helper(array('form','url'));
			
			
			$this->load->model('mStages');
			$email_user = $this->session->userdata('email');
			$utilisateur = $this->mStages->get_utilisateur($email_user);
			if(!$utilisateur) redirect('main_stage/afficher_dashboard');
			
			$data = array();
			$data['personne'] = $utilisateur;
			
			
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nom','Nom','required');
			$this->form_validation->set_rules('prenom','Prénom','required');
			$this->form_validation->set_rules('adresse','Adresse','required');
			$this->form_validation->set_rules('code_postal','Code postal','required');
			$this->form_validation->set_rules('tel','téléphone','required');
			$this->form_validation->set_rules('date_naissance','Date de naissance','required');
			$this->form_validation->set_rules('num_secu','numéro de sécurité sociale','required');
			$this->form_validation->set_rules('mutuelle','Mutuelle','required');
			$this->form_validation->set_rules('obj_pro','Objectif pro','required');
			$this->form_validation->set_rules('fct_pro','Fonction pro','required');
			$this->form_validation->set_rules('motdepasse','Mot de passe','required');
			
			
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('form',$data);
				echo validation_errors();
			}
			else 
			{
				$update_profil = array (
					'civilite' => $this->input->post('civilite'),
					'prenom' => $this->input->post('prenom'),
					'nom' => $this->input->post('nom'),
					'adresse' => $this->input->post('adresse'),
					'complement' => $this->input->post('complement'),
					'code_postal' => $this->input->post('code_postal'),
					'tel' => $this->input->post('tel'),
					'date_naiss' => $this->input->post('date_naissance'),
					'num_secu' => $this->input->post('num_secu'),
					'mutuelle' => $this->input->post('mutuelle'),
					'objectif_pro' => $this->input->post('obj_pro'),
					'motdepasse' => $this->input->post('motdepasse'),
					'fonction_pro'=> $this->input->post('fct_pro')
					
					);
					$this->load->model('mStages');
					$utilisateur_id = $this->mStages->get_utilisateur_id($email_user);
					$this->mStages->update_personne($utilisateur_id,$update_profil); 
					redirect('main_stage/afficher_dashboard');			
			}
		}
		
		public function gestion_entreprises()
		{
			$this->load->helper('url');
			$data = array();
			$this->load->model('mStages');
			$data['entreprises'] = $this->mStages->get_all_entreprise();
			
			$this->load->view('liste_entreprise',$data);
		}
		
		public function ajouter_entreprise()
		{
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nom', 'nom Entreprise','required');
			$this->form_validation->set_rules('effectif','Effectif','required');
			$this->form_validation->set_rules('tel','telephone','required');
			$this->form_validation->set_rules('mail','Email','required');
			$this->form_validation->set_rules('adresse','Adresse','required');
			$this->form_validation->set_rules('complement','Complement','required');
			$this->form_validation->set_rules('code_postal','Code postal','required');
			$this->form_validation->set_rules('activite','Activite','required');
			$this->form_validation->set_rules('ville','Ville','required');
			$this->form_validation->set_rules('pays','Pays','required');
			$this->form_validation->set_rules('email_tuteur','Tuteur','required');
			
			
			if($this->form_validation->run() == FALSE) $this->load->view('ajout_entreprise');
			else{
				$this->load->model('mStages');
				$tuteur = $this->input->post('email_tuteur');
				$tuteur_id = $this->mStages->get_utilisateur_id($tuteur);
				$new_ent = array(
					'nom_entreprise'=> $this->input->post('nom'),
					'effectif' => $this->input->post('effectif'),
					'tel' => $this->input->post('tel'),
					'mail' => $this->input->post('mail'),
					'adresse' => $this->input->post('adresse'),
					'complement' => $this->input->post('complement'),
					'code_postal' => $this->input->post('code_postal'),
					'activite' => $this->input->post('activite'),
					'ville' => $this->input->post('ville'),
					'pays' => $this->input->post('pays'),
					'tuteur' => $tuteur_id
				);
			
			$this->mStages->insert_entreprise($new_ent);
			redirect('main_stage/gestion_entreprises');
			}
		}
		
		public function edit_entreprise_admin($id_entreprise)
		{
			
			$this->load->model('mStages');
			$entreprise = $this->mStages->get_entreprise($id_entreprise);
			if(!$entreprise) redirect('main_stage/gestion_entreprises');
			
			$data = array();
			$data['entreprise'] = $entreprise;
			
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nom', 'nom Entreprise','required');
			$this->form_validation->set_rules('effectif','Effectif','required');
			$this->form_validation->set_rules('tel','telephone','required');
			$this->form_validation->set_rules('mail','Email','required');
			$this->form_validation->set_rules('adresse','Adresse','required');
			$this->form_validation->set_rules('complement','Complement','required');
			$this->form_validation->set_rules('code_postal','Code postal','required');
			$this->form_validation->set_rules('activite','Activite','required');
			$this->form_validation->set_rules('ville','Ville','required');
			$this->form_validation->set_rules('pays','Pays','required');
			$this->form_validation->set_rules('email_tuteur','Tuteur','required');
			
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('form_entreprise',$data);
			}
			else{
				$this->load->model('mStages');
				$tuteur = $this->input->post('email_tuteur');
				$tuteur_id = $this->mStages->get_utilisateur_id($tuteur);
				$update_ent = array(
					'nom_entreprise'=> $this->input->post('nom'),
					'effectif' => $this->input->post('effectif'),
					'tel' => $this->input->post('tel'),
					'mail' => $this->input->post('mail'),
					'adresse' => $this->input->post('adresse'),
					'complement' => $this->input->post('complement'),
					'code_postal' => $this->input->post('code_postal'),
					'activite' => $this->input->post('activite'),
					'ville' => $this->input->post('ville'),
					'pays' => $this->input->post('pays'),
					'tuteur' => $tuteur_id
			);
			$this->mStages->update_entreprise($id_entreprise,$update_ent);
			redirect('main_stage/gestion_entreprises');
			}
			
		}
		
		public function edit_entreprise_pro()
		{
			
			$this->load->helper(array('form','url'));
			
			$this->load->model('mStages');
			$email_user = $this->session->userdata('email');
			$id_user = $this->mStages->get_utilisateur_id($email_user);
			$entreprise = $this->mStages->get_entreprise_pro($id_user);
			if(!$entreprise) redirect('main_stage/afficher_dashboard');
			
			$data = array();
			$data['entreprise'] = $entreprise;
			
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nom_ent', 'nom Entreprise','required');
			$this->form_validation->set_rules('effectif','Effectif','required');
			$this->form_validation->set_rules('tel','telephone','required');
			$this->form_validation->set_rules('mail','Email','required');
			$this->form_validation->set_rules('adresse','Adresse','required');
			$this->form_validation->set_rules('complement','Complement','required');
			$this->form_validation->set_rules('code_postal','Code postal','required');
			$this->form_validation->set_rules('activite','Activite','required');
			$this->form_validation->set_rules('ville','Ville','required');
			$this->form_validation->set_rules('pays','Pays','required');
			$this->form_validation->set_rules('tuteur','Tuteur','required'); //array userdata dans la vue 
			
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('form_entreprise_pro',$data);
				echo validation_errors();
			}
			else{
				$this->load->model('mStages');
				$tuteur = $this->input->post('tuteur');
				$tuteur_id = $this->mStages->get_utilisateur_id($tuteur);
				$update_ent = array(
					'nom_entreprise'=> $this->input->post('nom_ent'),
					'effectif' => $this->input->post('effectif'),
					'tel' => $this->input->post('tel'),
					'mail' => $this->input->post('mail'),
					'adresse' => $this->input->post('adresse'),
					'complement' => $this->input->post('complement'),
					'code_postal' => $this->input->post('code_postal'),
					'activite' => $this->input->post('activite'),
					'ville' => $this->input->post('ville'),
					'pays' => $this->input->post('pays'),
					'tuteur' => $tuteur_id
			);
			$id_entreprise = $entreprise->id_entreprise;
			$this->load->model('mStages');
			$this->mStages->update_entreprise($id_entreprise,$update_ent);
			redirect('main_stage/afficher_dashboard');
			}
		}
		
		public function supprimer_entreprise($id_entreprise)
		{
			$this->load->helper('url');
			$this->load->model('mStages');
			$entreprise = $this->mStages->get_entreprise($id_entreprise);
			
			if(!$entreprise) redirect('main_stage/gestion_entreprises');
			
			if($_POST) {
				if($this->input->post('action')=="delete")
				{
					$this->mStages->delete_entreprise($id_entreprise);
				}
				redirect('main_stage/gestion_entreprises');
			} else $this->load->view('suppression_entreprise',array('entreprise'=> $entreprise));
		}
		
		public function edit_profil_admin($id_user)
		{
			$this->load->helper(array('form','url'));
			
			
			$this->load->model('mStages');
			$utilisateur = $this->mStages->get_utilisateur_admin($id_user);
			if(!$utilisateur) redirect('main_stage/afficher_utilisateurs');
			
			$data = array();
			$data['personne'] = $utilisateur;
			
			
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nom','Nom','required');
			$this->form_validation->set_rules('prenom','Prénom','required');
			$this->form_validation->set_rules('mail','Email','required');
			$this->form_validation->set_rules('adresse','Adresse','required');
			$this->form_validation->set_rules('code_postal','Code postal','required');
			$this->form_validation->set_rules('tel','téléphone','required');
			$this->form_validation->set_rules('date','Date de naissance','required');
			$this->form_validation->set_rules('num_secu','numéro de sécurité sociale','required');
			$this->form_validation->set_rules('mutuelle','Mutuelle','required');
			$this->form_validation->set_rules('obj_pro','Objectif pro','required');
			$this->form_validation->set_rules('fct_pro','Fonction pro','required');
			$this->form_validation->set_rules('motdepasse','Mot de passe','required');
			
			
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('form_modif_profil',$data);
			}
			else 
			{
				$update_profil = array (
					'civilite' => $this->input->post('civilite'),
					'prenom' => $this->input->post('prenom'),
					'nom' => $this->input->post('nom'),
					'mail' => $this->input->post('mail'),
					'adresse' => $this->input->post('adresse'),
					'complement' => $this->input->post('complement'),
					'code_postal' => $this->input->post('code_postal'),
					'tel' => $this->input->post('tel'),
					'date_naiss' => $this->input->post('date'),
					'num_secu' => $this->input->post('num_secu'),
					'mutuelle' => $this->input->post('mutuelle'),
					'objectif_pro' => $this->input->post('obj_pro'),
					'motdepasse' => $this->input->post('motdepasse'),
					'fonction_pro'=> $this->input->post('fct_pro')
					
					);
					$this->load->model('mStages');
					
					$this->mStages->update_personne($id_user,$update_profil); 
					redirect('main_stage/afficher_utilisateurs');			
			}
		}
		
		public function lire_csv()
		{
			date_default_timezone_set('Europe/Paris');
			$csv = array_map('str_getcsv', file($_FILES['fichier']['tmp_name'])); 

			array_walk($csv, function(&$a) use ($csv) {
					$a = array_combine($csv[0], $a);
				})	;

			$header = array_shift($csv);

			foreach ($csv as $key => $value) 
			{
				$date_nais = strtr($csv[$key]['Date_naissance'],'/','-');
				$date_insert = date('Y-m-d',strtotime($date_nais));
				
				$insert_etu = array(
					'nom' => $csv[$key]['Nom'],
					'prenom' => $csv[$key]['Prenom'],
					'statut'=> 'Etudiant',
					'civilite' => $csv[$key]['Civilite'],				
					'mail' => $csv[$key]['Mail'], 
					'adresse' => $csv[$key]['Adresse'],
					'complement' => $csv[$key]['Complement'],
					'code_postal' => $csv[$key]['Code_postal'],
					'ville' => $csv[$key]['Ville'],
					'pays' =>$csv[$key]['Pays'],
					'tel' => $csv[$key]['Telephone'],
					'date_naiss' => $date_insert,
					'num_secu' => $csv[$key]['Num_secu'],
					'mutuelle' => $csv[$key]['Mutuelle'],
					'objectif_pro' =>$csv[$key]['Objectif_pro'],
					'motdepasse' => uniqid(),
					'fonction_pro' => 'non_specifié'

				);
				$this->load->model('mStages');
				$this->mStages->create_utilisateur($insert_etu);
				$this->envoyer_mail($insert_etu['mail'],$insert_etu['motdepasse'],$insert_etu['nom'],$insert_etu['prenom']);
				redirect('main_stage/afficher_utilisateurs');	
				
			}
			
		}
		
		
		
		public function envoyer_mail($login_mail,$motdepasse,$nom,$prenom)
		{
			$this->load->library('email');
			date_default_timezone_set('Europe/Paris');
			$config = array(
				'mailtype' =>"html",
			);
			$email_admin = $this->session->userdata('email');
			
			$this->email->initialize($config);
			$this->email->from($email_admin,'secrétariat');
			$this->email->to($login_mail);
			$this->email->subject('accès à stage finder');
			$this->email->message($this->mail_text($login_mail,$motdepasse,$nom,$prenom));
			$this->email->send();
			
		}
		
		public function mail_text($login_mail,$motdepasse,$nom,$prenom)
		{
			$texte = '<html> 
			<h1> Bonjour '. $prenom .' '. $nom .'</h1>
			<p> voici votre login : ' . $login_mail .'</p>
			<p> votre mot de passe :'. $motdepasse .'</p>  
			<p> pour vous connecter sur stage finder
			</p>
			</html>';
			return $texte;
		}
		
		public function login()
		{
			$this->load->view('form2');
		}
		
		public function login_validation()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('mail', 'Email','required');
			$this->form_validation->set_rules('motdepasse', 'Motdepasse','required');
			if($this->form_validation->run())
			{
				$email = $this->input->post('mail');
				$password = $this->input->post('motdepasse');
				$this->load->model('mStages');
				if ($this->mStages->userLogin($email,$password))
				{
					$session_data = array (
					'email' => $email
					);
					$this->session->set_userdata($session_data);
					redirect(base_url(). 'index.php/main_stage/afficher_dashboard');
				} 
				else
				{
					$this->session->set_flashdata('error','email ou motdepasse invalide');
					redirect(base_url(). 'index.php/main_stage/login');
				}
				
			}
			else
			{
				$this->login();
			}
			
		}
		
		public function afficher_dashboard()
		{
			if ($this->session->userdata('email') != '')
			{
				$email_dash = $this->session->userdata('email');
				
				$this->load->model('mStages');
				$statut_user = $this->mStages->get_utilisateur_statut($email_dash);
				$this->load->helper('url');
				if ($statut_user == 'Secretariat')
				{
					$this->load->view('admin_dashboard');
				} else if ($statut_user == 'Responsable')
				{
					$this->load->view('responsable_dashboard');
				} else if ($statut_user == 'Professionnel')
				{
					$this->load->view('professionel_dashboard');
				} else if ($statut_user == 'Etudiant')
				{
					$this->load->view('etudiant_dashboard');
				} else
				{
					echo "ERREUR STATUT INCONNU";
				}
			}
			else
			{
				redirect(base_url(). 'index.php/main_stage/login');
			}
		}
		
		public function logout()
		{
			$this->session->unset_userdata('email');
			redirect('main_stage');
		}
	}

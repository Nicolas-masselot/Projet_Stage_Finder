<?php 

class mStages extends CI_model 
{
	function __construct()
	{
		parent::__construct();

	}
	
	public function get_all_utilisateurs()
	{
		$this->db->select('id_personne,mail,nom,prenom,statut');
		$query = $this->db->get('personne');
		
		if( $query->num_rows() > 0 )
		{
			return $query->result();
		}
		else return array();
	}
	
	public function get_entreprise_id($nom_entreprise)
	{
		$this->db->select('id_entreprise');
		$this->db->where('nom_entreprise',$nom_entreprise);
		$query = $this->db->get('entreprise');
		
		if( $query->num_rows() > 0)
		{
			return $query->row()->id_entreprise;
		} else return null;
	}
	
	public function get_utilisateur_id($utilisateur_email)
	{
		$this->db->select('id_personne');
		$this->db->where('mail',$utilisateur_email);
		$query = $this->db->get('personne');
		
		if( $query->num_rows() > 0)
		{
			return $query->row()->id_personne;
		} else return null;		
	}

	public function get_all_pro()
	{
		$this->db->select('id_personne,mail,nom,prenom,statut');
		$this->db->where('statut','Professionnel');
		$query = $this->db->get('personne');
		if( $query->num_rows() > 0 )
		{
			return $query->result();
		}
		else return array();
	}
	
	public function get_utilisateur_email($utilisateur_id)
	{
		$this->db->select('mail');
		$this->db->where('id_personne',$utilisateur_id);
		$query = $this->db->get('personne');
		
		if( $query->num_rows() > 0)
		{
			return $query->row()->mail;
		} else return null;		
	}
	
	public function get_utilisateur_statut($utilisateur_email)
	{
		$this->db->select('statut');
		$this->db->where('mail',$utilisateur_email);
		$query = $this->db->get('personne');
		
		if( $query->num_rows() > 0)
		{
			return $query->row()->statut;
			
		} else return null;		
	}
	
	public function get_all_stages() 
	{
		$this->db->select('id_stage,intitule_stage,nom_entreprise,validation');
		$this->db->from('stage');
		$this->db->join('entreprise','entreprise = id_entreprise');
		$query = $this->db->get();
		
		if( $query->num_rows() > 0 )
		{
			return $query->result();
		}
		else return array();
		
	}
	
	public function get($stage_id)
	{
		$this->db->select('id_stage,nom_entreprise,tel,mail,stage.adresse AS stage_adresse,entreprise.adresse AS adresse_ent,activite,entreprise.ville AS ville_ent,entreprise.pays AS pays_ent,intitule_stage,date_debut_stage
		,date_fin_stage,stage.code_postal AS cp_stage,stage.ville AS ville_stage,stage.pays AS pays_stage,mission,auteur');
		$this->db->from('stage');
		$this->db->join('entreprise','entreprise = id_entreprise');
		$this->db->where('id_stage',$stage_id);
		$query = $this->db->get();
		
		if( $query->num_rows() > 0)
		{
			$stage = $query->result(); 
			return $stage[0];
		} else return null;
	}

	public function get_demande($stage_id)
	{
		$this->db->select('id_stage,nom_entreprise,entreprise.tel AS tel_ent,entreprise.mail AS mail_ent,stage.adresse AS stage_adresse,entreprise.adresse AS adresse_ent,activite,entreprise.ville AS ville_ent,entreprise.pays AS pays_ent,intitule_stage,date_debut_stage
		,date_fin_stage,stage.code_postal AS cp_stage,stage.ville AS ville_stage,stage.pays AS pays_stage,mission,auteur,personne.mail AS demandeur');
		$this->db->from('personne');
		$this->db->join('stage','postuler = id_personne');
		$this->db->join('entreprise','entreprise = id_entreprise');
		$this->db->where('id_stage',$stage_id);
		$query = $this->db->get();
		
		if( $query->num_rows() > 0)
		{
			$stage = $query->result(); //afficher infos de l'entreprise
			return $stage[0];
		} else return null;
	}
	
	public function get_all_stages_pro() 
	{
		$this->db->select('intitule_stage,nom_entreprise');
		$this->db->from('stage');
		$this->db->join('entreprise','entreprise = id_entreprise');
		$query = $this->db->get_where('stage',array('id_stage' => $stage_id,'validation' => 0));
		
		if( $query->num_rows() > 0 )
		{
			return $query->result();
		}
		else return array();
		
	}
	
	public function get_non_valide($stage_id)
	{
		$this->db->select('id_stage,nom_entreprise,stage.adresse AS stage_adresse,intitule_stage,date_debut_stage
		,date_fin_stage,stage.code_postal AS cp_stage,stage.ville AS ville_stage,stage.pays AS pays_stage,mission,auteur');
		$this->db->from('stage');
		$this->db->join('entreprise','entreprise = id_entreprise');
		$this->db->where('id_stage',$stage_id);
		$this->db->where('validation',0);
		$query = $this->db->get();
		
		if( $query->num_rows() > 0)
		{
			$stage = $query->result(); 
			return $stage[0];
		} else return null;
	}
	
	
	public function validation($stage_id)
	{
		$this->db->set('validation',1);
		$this->db->where('id_stage',$stage_id);
		$query = $this->db->update('stage');
	}
	
	public function demande_etu($etudiant_id,$id_stage)
	{
		$this->db->set('postuler',$etudiant_id);
		$this->db->where('id_stage',$id_stage);
		$query = $this->db->update('stage');
	}
	
	public function sauvegarde_etu($etudiant_id,$id_stage)
	{
		$this->db->set('sauvegarder_offre',$etudiant_id);
		$this->db->where('id_stage',$id_stage);
		$query = $this->db->update('stage');
	}
	
	public function get_entreprise_id_pro($id_tuteur)
	{
		$this->db->select('id_entreprise');
		$this->db->from('entreprise');
		$this->db->where('tuteur', $id_tuteur);
		$query = $this->db->get();
		
		if( $query->num_rows() > 0)
		{
			return $query->row()->id_entreprise;	
		} else return null;
	}
	
	public function get_stage_pro($entreprise_id)
	{
		$this->db->select('id_stage,intitule_stage,nom_entreprise');
		$this->db->from('stage');
		$this->db->join('entreprise','entreprise = id_entreprise');
		$this->db->where('id_entreprise', $entreprise_id);
		$query = $this->db->get();
		
		if( $query->num_rows() > 0)
		{
			$stage = $query->result();
			return $stage;
		} else return null;
	}
	
	
	public function get_stage_demandes()
	{
		$this->db->select('id_stage,intitule_stage,nom_entreprise');
		$this->db->from('stage');
		$this->db->join('entreprise','entreprise = id_entreprise');
		$this->db->where('postuler !=', NULL);
		$this->db->where('validation', 0);
		$query = $this->db->get();
		
		if( $query->num_rows() > 0)
		{
			return $query->result();	
		} else return array();
	}
	
	public function get_liste_stage_valide()
	{
		$this->db->select('id_stage,intitule_stage,nom_entreprise');
		$this->db->from('stage');
		$this->db->join('entreprise','entreprise = id_entreprise');
		$this->db->where('validation = 1');
		$query = $this->db->get();
		
		if( $query->num_rows() > 0)
		{
			return $query->result();
		} else return array();
	}
	
	public function get_liste_stage_save($id_user)
	{
		$this->db->select('id_stage,intitule_stage,nom_entreprise');
		$this->db->from('stage');
		$this->db->join('entreprise','entreprise = id_entreprise');
		$this->db->where('sauvegarder_offre',$id_user);
		$this->db->where('validation',0);
		$query = $this->db->get();
		
		if( $query->num_rows() > 0)
		{
			return $query->result();
		} else return array();
	}
	
	
	public function get_all_contenus()
	{
		$query = $this->db->get('contenus');
		
		if( $query->num_rows() > 0)
		{
			$content = $query->result();
			return $content[0];
		} else return null;
	}
	
	public function update_contenus($data)
	{
		return $this->db->update('contenus', $data);
	}
	
	public function get_all_entreprise()
	{
		$this->db->select('id_entreprise,nom_entreprise,mail');
		$query = $this->db->get('entreprise');
		
		if( $query->num_rows() > 0 )
		{
			return $query->result();
		}
		else return array();
	}
	
	public function get_entreprise($entreprise_id)
	{
		$query = $this->db->get_where('entreprise',array('id_entreprise' => $entreprise_id));
		
		if( $query->num_rows() > 0)
		{
			$entreprise = $query->result();
			return $entreprise[0];
		} else return null;
	} //modif
	
	public function get_entreprise_pro($id_pro)
	{
		$query = $this->db->get_where('entreprise',array('tuteur' => $id_pro));
		
		if( $query->num_rows() > 0)
		{
			$entreprise = $query->result();
			return $entreprise[0];
		} else return null;
	}
	
	public function insert_entreprise($new_ent)
	{
		return $this->db->insert('entreprise',$new_ent);
	}
	
	public function update_entreprise($entreprise_id,$data)
	{
		$this->db->where('id_entreprise',$entreprise_id);
		return $this->db->update('entreprise', $data);
	}
	
	public function delete_entreprise($entreprise_id)
	{
		$this->db->where('id_entreprise',$entreprise_id);
		return $this->db->delete('entreprise');
	}
	
	public function get_utilisateur($utilisateur_mail)
	{
		$query = $this->db->get_where('personne',array('mail' => $utilisateur_mail));
		
		if( $query->num_rows() > 0)
		{
			$utilisateur = $query->result();
			return $utilisateur[0];
		} else return null;
	}
	
	public function get_utilisateur_admin($utilisateur_id)
	{
		$query = $this->db->get_where('personne',array('id_personne' => $utilisateur_id));
		
		if( $query->num_rows() > 0)
		{
			$utilisateur = $query->result();
			return $utilisateur[0];
		} else return null;
		
	}
	
	public function get_infos_convention_stagiaire($id_stage)
	{
		$this->db->select('nom,prenom,civilite,num_secu,mutuelle,date_naiss,mail,personne.adresse AS adresse_stagiaire,complement,personne.code_postal AS cp_stagiaire,personne.ville AS ville_stagiaire,personne.pays AS pays_stagiaire,tel,num_secu,mutuelle');
		$this->db->from('stage');
		$this->db->join('personne','postuler = id_personne');
		$this->db->where('id_stage',$id_stage);
		$query = $this->db->get();
		if( $query->num_rows() > 0)
		{
			$convention_stagiaire = $query->result();
			return $convention_stagiaire[0];
		} else return null;
	}
	
	public function get_infos_convention_tuteur($id_stage)
	{
		$this->db->select('nom,prenom,tel,mail,fonction_pro');
		$this->db->from('stage');
		$this->db->join('personne','auteur = id_personne');
		$this->db->where('id_stage',$id_stage);
		$query = $this->db->get();
		if( $query->num_rows() > 0)
		{
			$convention_tuteur = $query->result();
			return $convention_tuteur[0];
		} else return null;
		
	}
	
	public function get_infos_convention_entreprise($id_stage)
	{
		$this->db->select('nom_entreprise,entreprise.adresse AS adresse_ent,entreprise.code_postal AS cp_ent,complement,entreprise.ville AS ville_ent,entreprise.pays AS pays_ent,mail,tel');
		$this->db->from('stage');
		$this->db->join('entreprise','entreprise = id_entreprise');
		$this->db->where('id_stage',$id_stage);
		$query = $this->db->get();
		if( $query->num_rows() > 0)
		{
			$convention_entreprise = $query->result();
			return $convention_entreprise[0];
		} else return null;
	}
	
	public function get_infos_convention_stage($id_stage)
	{
		$this->db->select('intitule_stage,date_debut_stage,date_fin_stage,adresse,code_postal,ville,pays,mission');
		$this->db->from('stage');
		$this->db->where('id_stage',$id_stage);
		$query = $this->db->get();
		
		if( $query->num_rows() > 0)
		{
			$stage = $query->result(); 
			return $stage[0];
		} else return null;
	}
	
	
	public function userLogin($mail_utilisateur,$mdp_utilisateur)
	{
		$this->db->where('mail',$mail_utilisateur);
		$this->db->where('motdepasse',$mdp_utilisateur); // hasher le mdp !!!!!!!!!!!!!!!!!!!!!!!!!
		$query = $this->db->get('personne');
		
		if ($query->num_rows() > 0)
		{
			return true;
		} else {
			return false;
		}
	}
	
	public function create_stage($data)
	{
		return $this->db->insert('stage',$data);
	}
	
	public function update_stage($stage_id,$data)
	{
		$this->db->where('id_stage',$stage_id);
		$query = $this->db->update('stage', $data);
	}
	
	public function delete_stage($stage_id)
	{
		$this->db->where('id_stage',$stage_id);
		return $this->db->delete('stage');
	}
	
	public function create_utilisateur($new_user)
	{
		return $this->db->insert('personne',$new_user);
	}
	
	
	public function update_personne($utilisateur_id,$data)
	{
		$this->db->where('id_personne',$utilisateur_id);
		return $this->db->update('personne', $data);
	}
	
	public function delete_personne($utilisateur_id)
	{
		$this->db->where('id_personne',$utilisateur_id);
		return $this->db->delete('personne');
	}
}

?>
<?php
// const AFFICHER_DIV =  1;

// class SuperAdmin extends Group {
// 	function __construct() {
// 		$this->id = 1; // cette classe � le droit de tout faire, pas besoin de parametrage
// 	}
// }


// $this->setPermission('Rechercher_entreprise');
// $this->setPermission('Creer_entreprise');
// $this->setPermission('Modifier_entreprise');
// $this->setPermission('Evaluer_entreprise');
// $this->setPermission('Supprimer_entreprise');
// $this->setPermission('Consulter_stats_entreprise');

// $this->setPermission('Rechercher_offre');
// $this->setPermission('Creer_offre');
// $this->setPermission('Modifier_offre');
// $this->setPermission('Supprimer_offre');
// $this->setPermission('Consulter_stats_offre');

// $this->setPermission('Rechercher_pilote');
// $this->setPermission('Creer_pilote');
// $this->setPermission('Modifier_pilote');
// $this->setPermission('Supprimer_pilote');

// $this->setPermission('Rechercher_delegue');
// $this->setPermission('Creer_delegue');
// $this->setPermission('Modifier_delegue');
// $this->setPermission('Supprimer_delegue');
// $this->setPermission('Assigner_droit_delegue');

// $this->setPermission('Rechercher_etudiant');
// $this->setPermission('Creer_etudiant');
// $this->setPermission('Modifier_etudiant');
// $this->setPermission('Supprimer_etudiant');
// $this->setPermission('Consulter_stats_etudiant');

// $this->setPermission('Ajouter_offre_wishlist');
// $this->setPermission('Retirer_offre_wishlist');
// $this->setPermission('Postuer_offre');



class Admin extends Group {
	function __construct() {
		parent::__construct();
		
		$this->setPermission('Rechercher_entreprise');
		$this->setPermission('Creer_entreprise');
		$this->setPermission('Modifier_entreprise');
		$this->setPermission('Evaluer_entreprise');
		$this->setPermission('Supprimer_entreprise');
		$this->setPermission('Consulter_stats_entreprise');
		
		$this->setPermission('Rechercher_offre');
		$this->setPermission('Creer_offre');
		$this->setPermission('Modifier_offre');
		$this->setPermission('Supprimer_offre');
		$this->setPermission('Consulter_stats_offre');
		
		$this->setPermission('Rechercher_pilote');
		$this->setPermission('Creer_pilote');
		$this->setPermission('Modifier_pilote');
		$this->setPermission('Supprimer_pilote');
		
		$this->setPermission('Rechercher_delegue');
		$this->setPermission('Creer_delegue');
		$this->setPermission('Modifier_delegue');
		$this->setPermission('Supprimer_delegue');
		$this->setPermission('Assigner_droit_delegue');
		
		$this->setPermission('Rechercher_etudiant');
		$this->setPermission('Creer_etudiant');
		$this->setPermission('Modifier_etudiant');
		$this->setPermission('Supprimer_etudiant');
		$this->setPermission('Consulter_stats_etudiant');
		
		$this->setPermission('Ajouter_offre_wishlist');
		$this->setPermission('Retirer_offre_wishlist');
		$this->setPermission('Postuer_offre');
	}
}

class Pilote extends Group {
	function __construct() {
		parent::__construct();
		
		$this->setPermission('Rechercher_entreprise');
		$this->setPermission('Creer_entreprise');
		$this->setPermission('Modifier_entreprise');
		$this->setPermission('Evaluer_entreprise');
		$this->setPermission('Supprimer_entreprise');
		$this->setPermission('Consulter_stats_entreprise');
		
		$this->setPermission('Rechercher_offre');
		$this->setPermission('Creer_offre');
		$this->setPermission('Modifier_offre');
		$this->setPermission('Supprimer_offre');
		$this->setPermission('Consulter_stats_offre');
		
		$this->setPermission('Rechercher_delegue');
		$this->setPermission('Creer_delegue');
		$this->setPermission('Modifier_delegue');
		$this->setPermission('Supprimer_delegue');
		$this->setPermission('Assigner_droit_delegue');
		
		$this->setPermission('Rechercher_etudiant');
		$this->setPermission('Creer_etudiant');
		$this->setPermission('Modifier_etudiant');
		$this->setPermission('Supprimer_etudiant');
		$this->setPermission('Consulter_stats_etudiant');
	}
}

class Delegue extends Group {
	function __construct() {
		parent::__construct();

	}
}

class Etudiant extends Group {
	function __construct() {
		parent::__construct();

		$this->setPermission('Rechercher_entreprise');
		$this->setPermission('Evaluer_entreprise');
		$this->setPermission('Consulter_stats_entreprise');

		$this->setPermission('Rechercher_offre');
		$this->setPermission('Consulter_stats_offre');

		$this->setPermission('Ajouter_offre_wishlist');
		$this->setPermission('Retirer_offre_wishlist');	
		$this->setPermission('Postuer_offre');

	}
}

abstract class Group {
	// private $id;
	// private $groups; // Groupes rattach�s
	private $permissions = array();
	// public $filters = array();
			
	function __construct() {

	}

	
	/**
	* Ajoute ou modifie un �l�ment dans le tableau associatif $permissions avec l'id de la permission en cl� de tableau.
	* La valeur affect�e sera true si $filter = null, la valeur sera un entier qui correspond � l'id du filtre que l'on souhaite appliquer.
	* @param		int			$permissionId		L'identifiant de la permission (d�fini dans la classe statique Permissions)
	* @param		int			$type				To do
	* @param		boolean		$value				To do
	*/
	public function setPermission($permissionId) {
		$this->permissions[] = $permissionId;
	}
	
	public function getPermission($permissionId) {
		return $this->permissions[$permissionId];
	}
	
    public function getPermissions() {
		return $this->permissions;
	}

	// public function allowed($permissionId) {
    //     return in_array($permissionId, $this->permissions);
    // }
	
}

?>
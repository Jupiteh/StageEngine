<?php
require_once '../MODEL/perm.php';

require_once '../CONTROLLER/getRight.php';

if ($role == 1){

$roleObjet = new Admin();

$permissions = $roleObjet->getPermissions();

setcookie('permissions', serialize($permissions), time() + (600));
}


else if ($role == 'pilote'){

    $roleObjet = new Pilote();
    
    $permissions = $roleObjet->getPermissions();
    
    setcookie('permissions', serialize($permissions), time() + (600));
    }


    else if ($role == 'delegue'){
    
        $roleObjet = new Delegue();
        
		if ($company == 1) {
			$roleObjet->setPermission('Rechercher_entreprise');
			$roleObjet->setPermission('Creer_entreprise');
			$roleObjet->setPermission('Modifier_entreprise');
			$roleObjet->setPermission('Evaluer_entreprise');
			$roleObjet->setPermission('Supprimer_entreprise');
			$roleObjet->setPermission('Consulter_stats_entreprise');
		}
		if ($offer == 1) {
			$roleObjet->setPermission('Rechercher_offre');
			$roleObjet->setPermission('Creer_offre');
			$roleObjet->setPermission('Modifier_offre');
			$roleObjet->setPermission('Supprimer_offre');
			$roleObjet->setPermission('Consulter_stats_offre');
		}
		if ($delegue == 1) {
			$roleObjet->setPermission('Rechercher_delegue');
			$roleObjet->setPermission('Creer_delegue');
			$roleObjet->setPermission('Modifier_delegue');
			$roleObjet->setPermission('Supprimer_delegue');
		}
		if ($student == 1) {
			$roleObjet->setPermission('Rechercher_etudiant');
			$roleObjet->setPermission('Creer_etudiant');
			$roleObjet->setPermission('Modifier_etudiant');
			$roleObjet->setPermission('Supprimer_etudiant');
			$roleObjet->setPermission('Consulter_stats_etudiant');
		}
        
        $permissions = $roleObjet->getPermissions();
        
        setcookie('permissions', serialize($permissions), time() + (600));

        }
    
        else if ($role == 'etudiant'){

            $roleObjet = new Etudiant();
            
            $permissions = $roleObjet->getPermissions();
            
            setcookie('permissions', serialize($permissions), time() + (600));
            }
        

?>
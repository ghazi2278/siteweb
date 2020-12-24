<?PHP
include "../config.php";
require "../Model/Abonement.php";

class AbonementC
{
		  
                         //Nvabs
	function ajouterAbs($activite)
	{
		$sql = "INSERT INTO abonement (type, dure, nom, Email, MotDePasse, TypeDeCarte, NumeroDeCarte, DateDExpiration) 
			VALUES (:type,:dure,:nom,:Email,:MotDePasse,:TypeDeCarte,:NumeroDeCarte,:DateDExpiration)";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				'type' => $activite->gettype(),
				'dure' => $activite->getdure(),
                'nom' => $activite->getnom(),
                'Email' => $activite->getEmail(),
                'MotDePasse' => $activite->getMotDePasse(),
                'TypeDeCarte' => $activite->getTypeDeCarte(),
                'NumeroDeCarte' => $activite->getNumeroDeCarte(),
                'DateDExpiration' => $activite->getDateDExpiration(),
                
				
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}

	function afficherAbs()
	{

		$sql = "SELECT * FROM abonement";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function supprimerAbs($id)
	{
		$sql = "DELETE FROM abonement WHERE id= :id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function modifierAbs($activite, $id)
	{
		try {
			$db = config::getConnexion();
			$query = $db->prepare(
				'UPDATE abonement SET 
						type = :type, 
						dure = :dure,
						nom = :nom,
                        Email = :Email, 
						MotDePasse = :MotDePasse,
						TypeDeCarte = :TypeDeCarte,
                        NumeroDeCarte = :NumeroDeCarte,
						DateDExpiration = :DateDExpiration,

						
					WHERE id = :id'
			);
			$query->execute([
				'type' => $activite->gettype(),
				'dure' => $activite->getdure(),
                'nom' => $activite->getnom(),
                'Email' => $activite->getEmail(),
                'MotDePasse' => $activite->getMotDePasse(),
                'TypeDeCarte' => $activite->getTypeDeCarte(),
                'NumeroDeCarte' => $activite->getNumeroDeCarte(),
                'DateDExpiration' => $activite->getDateDExpiration(),
				'id' => $id
			]);
			echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}

	function recupererAbs($id)
	{
		$sql = "SELECT * from abonement where id=$id";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();

			$user = $query->fetch();
			return $user;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function recupererAbs1($id)
	{
		$sql = "SELECT * from abonement where id=$id";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();

			$user = $query->fetch(PDO::FETCH_OBJ);
			return $user;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}



	
									   


}
?>
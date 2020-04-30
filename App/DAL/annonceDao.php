<?php
namespace App\Dal;
use App\Model\AnnonceEntity;
use PDO;
use PDOStatement;

/*
* annonceDao.php
* annonceDao
* @author lBV <email@email.com>
* 2020
*/

class AnnonceDao extends AbstractDao
{
    public function add_annonce(AnnonceEntity $annonce):bool
    {
        $pdo = $this->pdo;

        $titre = $annonce->titre;
        $descrip = $annonce->descrip;
        $places = $annonce->places;
        $prix = $annonce->prix_pers;
        $url_img = $annonce->url_img;
        $membre = $annonce->membre_id;
        $ville = $annonce->ville;
        $code_postale = $annonce->code_postale;
        $num_rue = $annonce->num_rue;
        $nom_rue = $annonce->nom_rue;

        $query = 
        "INSERT INTO annonce (titre, description, nb_places, prix_personne,  membre_id, ville, code_postale, num_rue, nom_rue) 
        VALUES (:titre, :descrip, :places, :prix, :membre, :ville, :code_postale, :num_rue, :nom_rue)";

        $stmt = $pdo->prepare($query);
        $result = $stmt->execute([
        ':titre' => $titre, 
        ':descrip' => $descrip, 
        ':places' => $places, 
        ':prix' => $prix, 
        ':membre' => $membre, 
        ':ville' => $ville,
        ':code_postale' => $code_postale, 
        ':num_rue' => $num_rue, 
        ':nom_rue' => $nom_rue]);
        
        return $result;
    }


    public function get_all_annonce():array
    {   
        $pdo = $this->pdo;
        $id_annonce = $_GET['id_annonce'];
        $query = "SELECT * FROM annonce";

        $stmt = $pdo->query($query);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    public function get_search_annonce($nb_voyageur, $ville):array
    {   

        $pdo = $this->pdo;
        $query = "SELECT * FROM annonce WHERE ville like :ville and nb_places like :nb_voyageur ";

        $stmt = $pdo->prepare($query);
        $stmt->execute([':nb_voyageur' => $nb_voyageur, ':ville' => $ville]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;

    }

    public function get_annonce($id_annonce)
    {   

        $pdo = $this->pdo;
        $query = "SELECT * FROM annonce WHERE id = $id_annonce";

        $stmt = $pdo->prepare($query);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;

    }

    public function delete_annonce(AnnonceEntity $reservation):void
    {

    }

    public function update_annonce(AnnonceEntity $reservation):void
    {

    }
}
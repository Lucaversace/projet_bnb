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
        $stmt = $stmt->execute([
        ':titre' => $titre, 
        ':descrip' => $descrip, 
        ':places' => $places, 
        ':prix' => $prix, 
        ':membre' => $membre, 
        ':ville' => $ville,
        ':code_postale' => $code_postale, 
        ':num_rue' => $num_rue, 
        ':nom_rue' => $nom_rue]);
        
        return $stmt;
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
        $results = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $results;

    }

    public function get_annonce_by_id($id_annonce)
    {   

        $pdo = $this->pdo;

        $id = $id_annonce;
        $query = "SELECT * FROM annonce WHERE id = :id_annonce";

        $stmt = $pdo->prepare($query);
        $stmt->execute([':id_annonce' => $id]);
        $ligne = $stmt->fetch(PDO::FETCH_OBJ);

        return $ligne;

    }

    public function get_annonce_by_id_membre($id_membre)
    {   

        $pdo = $this->pdo;

        $id = $id_membre;
        $query = "SELECT * FROM annonce WHERE membre_id = :id_membre";

        $stmt = $pdo->prepare($query);
        $stmt->execute([':id_membre' => $id]);
        $results = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $results;

    }
    public function exist_image($filename, $id_annonce)
    {
        $pdo = $this->pdo;

        $query = "SELECT nom FROM images WHERE nom = :filename and id_annonce = :id_annonce";   
        
        $stmt = $pdo->prepare($query);
        $stmt->execute([':filename' => $filename, ':id_annonce' => $id_annonce]);

        return $stmt;
    }
    public function insert_image($filename, $id_annonce)
    {
        $pdo = $this->pdo;

        $query = "INSERT INTO images(nom, id_annonce) VALUES(:filename, :id_annonce)";   
        
        $stmt = $pdo->prepare($query);
        $stmt->execute([':filename' => $filename, ':id_annonce' => $id_annonce]);

        return $stmt;
    }

    public function get_id_annonce_recent($id_membre)
    {   
        $pdo = $this->pdo;

        $query = "SELECT * FROM annonce WHERE membre_id = :id_membre ORDER BY  id DESC";

        $stmt = $pdo->prepare($query);
        $stmt->execute([':id_membre' => $id_membre]);
        $ligne = $stmt->fetch(PDO::FETCH_OBJ);

        return $ligne;
    }
    public function get_id_image()
    {   
        $pdo = $this->pdo;

        $query = "SELECT * FROM images ORDER BY  id_annonce DESC";

        $stmt = $pdo->query($query);
        $ligne = $stmt->fetch(PDO::FETCH_OBJ);

        return $ligne;
    }

    public function add_id_image_annonce($id_annonce, $id_image)
    {
        $pdo = $this->pdo;

        $query = "UPDATE annonce SET id_images = $id_image  WHERE id = $id_annonce";

        $stmt = $pdo->query($query);

        return $stmt;
    }
    public function get_all_image_by_id_annonce($id_annonce)
    {   
        $pdo = $this->pdo;

        $query = "SELECT nom FROM images WHERE  id_annonce = :id_annonce";

        $stmt = $pdo->prepare($query);
        $stmt->execute([':id_annonce' => $id_annonce]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $results;
    }
    public function get_first_image_by_id_annonce($id_annonce)
    {   
        $pdo = $this->pdo;

        $query = "SELECT nom FROM images WHERE  id_annonce = :id_annonce LIMIT 1";

        $stmt = $pdo->prepare($query);
        $stmt->execute([':id_annonce' => $id_annonce]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $results;
    }

    public function delete_annonce(AnnonceEntity $reservation):void
    {

    }

    public function update_annonce(AnnonceEntity $reservation):void
    {

    }
}
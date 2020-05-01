<?php
namespace App\Model;
/*
* annonce.php
* annonceEntity
* @author lBV <email@email.com>
* 2020
*/

class AnnonceEntity
{
    public $id_annonce;
    public $titre;
    public $description;
    public $nb_places;
    public $prix_personne;
    public $url_photo;
    public $membre_id;
    public $ville;
    public $code_postale;
    public $num_rue;
    public $nom_rue;

    public function __construct($resultSql=null)
    {   
        if($resultSql != null)
        {
            $this->id_annonce = $resultSql->id;
            $this->titre = $resultSql->titre;
            $this->prix_personne = $resultSql->prix_personne;
            $this->nb_places = $resultSql->nb_places;
            $this->description = $resultSql->description;
            $this->url_photo = $resultSql->url_photo;
            $this->membre_id = $resultSql->membre_id;
            $this->ville = $resultSql->ville;
            $this->code_postale = $resultSql->code_postale;
            $this->num_rue = $resultSql->num_rue;
            $this->nom_rue = $resultSql->nom_rue;
        }
    }
}
<?php 
Class Annonce{
    private $_id;
    private $_titre;
    private $_description;
    private $_nb_places;
    private $_prix_personnes;
    private $_annonceur_id;
    private $_img;

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);
                
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }
    public function id_annonce()
    {
      return $this->_id;
    }


    public function titre()
    {
      return $this->_titre;
    }

    public function description()
    {
      return $this->_description;
    }

    public function nb_places()
    {
      return $this->_nb_places;
    }

    public function prix_personnes()
    {
      return $this->_prix_personnes;
    }
    
    public function annonceur_id()
    {
      return $this->_annonceur_id;
    }

    public function img()
    {
      return $this->_img;
    }

    public function setId($id)
    {
      if (!is_int($id)) // S'il ne s'agit pas d'un nombre entier.
      {
        trigger_error("L'ID d'une annocne doit être un nombre entier", E_USER_WARNING);
        return;
      }
      $this->_id = $id;

    }

    public function setTitre($titre)
    {
      if (!is_string($titre)) // S'il ne s'agit pas d'une chaîne de caractère
      {
        trigger_error("Le titre d'une annonce doit être une chaîne de caractère", E_USER_WARNING);
        return;
      }
      $this->_titre = $titre;

    }

    public function setDescription($desctiption)
    {
      if (!is_string($desctiption)) // S'il ne s'agit pas d'une chaîne de caractère
      {
        trigger_error("Le titre d'une annonce doit être une chaîne de caractère", E_USER_WARNING);
        return;
      }
      $this->_description = $desctiption;

    }

    public function setNb_places($nb_places)
    {
      if (!is_int($nb_places)) // S'il ne s'agit pas d'un entier
      {
        trigger_error("Le nombre de place d'une annonce doit être un entier", E_USER_WARNING);
        return;
      }
      $this->_nb_places = $nb_places;

    }

    public function setPrix_personnes($prix_personnes)
    {
      if (!is_string($prix_personnes)) // S'il ne s'agit pas d'une chaîne de caractère
      {
        trigger_error("Le titre d'une annonce doit être une chaîne de caractère", E_USER_WARNING);
        return;
      }
      $this->_prix_personnes = $prix_personnes;

    }

    public function setAnnonceur_id($annonceur_id)
    {
      if (!is_int($annonceur_id)) // S'il ne s'agit pas d'un entier
      {
        trigger_error("L'id de l'annonceur doit être un entier", E_USER_WARNING);
        return;
      }
      $this->_annonceur_id = $annonceur_id;

    }

    public function setImg($img)
    {
      if (!is_string($img)) // S'il ne s'agit pas d'une chaîne de caractère
      {
        trigger_error("Le titre d'une annonce doit être une chaîne de caractère", E_USER_WARNING);
        return;
      }
      $this->_img = $img;

    }

}







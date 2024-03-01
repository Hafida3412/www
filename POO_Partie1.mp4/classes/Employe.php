<?php

class Employe {

    private string $nom;
    private string $prenom;
    private string $email;

    public function __construct(string $nom, string $prenom, string $email){
        $this->nom =$nom;
        $this->prenom =$prenom;
        $this->email=$email;
    }

    
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}
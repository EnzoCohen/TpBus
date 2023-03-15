<?php

class Conducteur
{
private string $Nom;
private string $Prenom;

    /**
     * @param string $Nom
     * @param string $Prenom
     */
    public function __construct(string $Nom, string $Prenom)
    {
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
    }

    /**
     * @param string $Nom
     */
    public function setNom(string $Nom): void
    {
        $this->Nom = $Nom;
    }

    /**
     * @param string $Prenom
     */
    public function setPrenom(string $Prenom): void
    {
        $this->Prenom = $Prenom;
    }


}
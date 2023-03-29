<?php

class Conducteur
{
private string $Nom;
private string $Prenom;

private bool $Affecter=false;

    /**
     * @return bool
     */
    public function isAffecter(): bool
    {
        return $this->Affecter;
    }

    /**
     * @param bool $Affecter
     */
    public function setAffecter(bool $Affecter): void
    {
        $this->Affecter = $Affecter;
    }

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

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->Nom;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->Prenom;
    }


}
<?php

class Vehicule
{
private string $Matriculation;
private string $Type;
private string $Statut;
private Conducteur $conducteur;

    /**
     * @return string
     */
    public function getMatriculation(): string
    {
        return $this->Matriculation;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * @return string
     */
    public function getStatut(): string
    {
        return $this->Statut;
    }

    /**
     * @return Conducteur
     */
    public function getConducteur(): Conducteur
    {
        return $this->conducteur;
    }

    /**
     * @param Conducteur $conducteur
     */
    public function setConducteur(Conducteur $conducteur): void
    {
        $this->conducteur = $conducteur;
    }

}
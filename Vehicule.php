<?php

class Vehicule
{
private string $Matriculation;
private string $Type;
private string $Statut;
private Conducteur $conducteur;

    /**
     *
     * @param string $Matriculation Du bus
     * @param string $Type
     * @param string $Statut
     */
    public function __construct(string $Matriculation, string $Type, string $Statut)
    {
        $this->Matriculation = $Matriculation;
        $this->Type = $Type;
        $this->Statut = $Statut;
    }

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
        $this->conducteur->setAffecter(true);
    }

}
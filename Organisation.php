<?php

class Organisation
{
private string $Nom;
private string $Ville;
private Array $garages = [];

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
    public function getVille(): string
    {
        return $this->Ville;
    }

    /**
     * @return array
     */
    public function getGarages(): array
    {
        return $this->garages;
    }

    /**
     * @param string $Nom
     * @param string $Ville
     */
    public function __construct(string $Nom, string $Ville)
    {
        $this->Nom = $Nom;
        $this->Ville = $Ville;
    }

    /**
     * @param Vehicule $vehicule
     * @param $Garage
     *
     */
    public function addVehiculeInGarage(Vehicule $vehicule): void
    {
        $this->garages[] = $vehicule;
    }


}
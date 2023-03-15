<?php

class Organisation
{
private string $Nom;
private string $Ville;
private Vehicule $vehicule;

    /**
     * @param Vehicule $vehicule
     * @param $Garage
     *
     */
    public function addVehiculeInGarage(Vehicule $vehicule): void
    {
        $this->vehicule = $vehicule;
    }


}
<?php

namespace App\Poo_Abstract;

require_once('HighWay.php');

class ResidentialWay extends HighWay
{
    private const NB_LANE = 2;
    private const MAX_SPEED = 50;
    private const AUTHORIZED_VEHICULES=['bike', 'skateboard', 'car', 'truck', 'bus'];

    public function __construct()
    {
        parent::setMaxSpeed(self::MAX_SPEED);
        parent::setNbLane(self::NB_LANE);

    }

    /**
     * @inheritDoc
     */
    function addVehicule($vehicule)
    {
        if (in_array($vehicule->getType(), self::AUTHORIZED_VEHICULES )) {
            $this->currentVehicles[] = $vehicule;
        } else {
            echo 'véhicule interdit';
        }
    }
}
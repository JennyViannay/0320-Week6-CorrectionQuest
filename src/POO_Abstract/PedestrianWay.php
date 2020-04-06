<?php

namespace App\Poo_Abstract;

require_once('HighWay.php');

class PedestrianWay extends HighWay
{
    const NB_LANE = 1;
    const MAX_SPEED = 10;
    const AUTHORIZED_VEHICULES=['bike', 'skateboard'];

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
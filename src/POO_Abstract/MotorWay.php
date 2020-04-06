<?php

namespace App\Poo_Abstract;

require_once('HighWay.php');
require_once('Vehicule.php');

class MotorWay extends HighWay
{

    const NB_LANE = 4;
    const MAX_SPEED = 130;
    const AUTHORIZED_VEHICULES=['car', 'truck', 'bus'];

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
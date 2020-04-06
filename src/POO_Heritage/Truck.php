<?php

namespace App\POO_Heritage;

require_once 'Vehicule.php';

class Truck extends Vehicule{

    /**
     * @var string
     */

    private $storageCapacyties;


    /**
     * @var string
     */
    private $loading;

    /**
     * @return string
     */

    public function __construct(string $color, int $nbSeats, string $storageCapacyties, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->storageCapacyties =$storageCapacyties;
        $this->energy=$energy;
    }


    public function inFilling(): string
    {
        $sentence = "";
        if($this->getStorageCapacyties() === 0){
            $sentence .= "in filling";
        }else{
            $sentence .= "full";
        }
        return $sentence;
    }


    public function getStorageCapacyties(): int
    {
        return $this->storageCapacyties;
    }

    /**
     * @param string $storageCapacyties
     */
    public function setStorageCapacyties(int $storageCapacyties): void
    {
        $this->storageCapacyties = $storageCapacyties;
    }

    /**
     * @return string
     */
    public function getLoading(): string
    {
        return $this->loading;
    }

    /**
     * @param string $loading
     */
    public function setLoading(string $loading): void
    {
        $this->loading = $loading;
    }
}
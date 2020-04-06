<?php

namespace App\Wcs;

class Hello
{
    private $hello = "Hello World !";

    /*
     * return hello world
     */
    public function talk(){
        return $this->hello;
    }

}
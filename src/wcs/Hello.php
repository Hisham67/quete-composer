<?php

namespace App\wcs;

class Hello {

    public  $greeting = "Hello World !";

    public function talk(){
        return $this->greeting;
    }

}
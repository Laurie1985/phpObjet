<?php

require_once './Bateau.php';

class Cuirasse extends Bateau
{

    public function deplacer()
    {
        $this->avancer();
    }
}

<?php

class formController {

    private $halamanawal;
    private $halamanakhir;
    private $poin;

public function gethalamanawal(){
    $this->halamanawal = new formView();
    $this->halamanawal->halamanformawal();
}
    
public function gethalamanakhir(){
    $this->poin = new formModel();
    $dapatpoin = $this->poin->random();

   $this->halamanakhir = new formView();
    $this->halamanakhir->halamanformakhir($dapatpoin);
}
}
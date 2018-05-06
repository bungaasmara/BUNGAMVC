<?php

class formModel {

    public function random() {
        $poin = array('5','10','15','20','25','30','35','40');
        $randompoin = $poin[array_rand($poin)];
        return $randompoin;
    }

}
<?php

namespace Tulio\Cliente\Utils;

interface ClienteInterface {

    public function setRank($rank);
    public function getRank();
    public function setEnderecoCobranca($enderecoCobranca);
    public function getEnderecoCobranca();

} 
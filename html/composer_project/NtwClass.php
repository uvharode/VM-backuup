<?php

namespace App;
class NtwClass {
    private $numberToWords;
    public function __construct($numberToWords){
        $this -> numberToWords = $numberToWords;
    }

    function translateToEng($num)
    {
        $numberTransformer = $this->numberToWords->getNumberTransformer('en');
        return $numberTransformer->toWords($num);
    }
    function translateToFrench($num)
    {
        $numberTransformer = $this->numberToWords->getNumberTransformer('fr');
        return $numberTransformer->toWords($num);
    }

}

?>
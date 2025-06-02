<?php
    class ZipCheck{
        private $zip;
        
        function __construct($zip){
        $this->zip = $zip;
        }

    function isZip(){
        if(preg_match("/^[0-9]{3}-[0-9]{4}$/",$this->zip) == 1){
            return true;
        }else{
            return false;
        }
    }
    function getStr(){
        return $this->zip;
    }
}

    $c1 = new ZipCheck("171-0022");
    $check = $c1->getStr();
    if($c1->isZip() == true){
        echo "{$check}は郵便番号です。<br>";
    }else{
        echo "{$check}は郵便番号ではありません。<br>";
    }
    $c2 = new ZipCheck("1710022");
    $check2 = $c2->getStr();
    if($c2->isZip() == true){
        echo "{$check2}は郵便番号です。<br>";
    }else{
        echo "{$check2}は郵便番号ではありません。<br>";
    }
?>
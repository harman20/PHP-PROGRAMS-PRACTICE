<?php

trait practice{
 
    public function prac(){
        echo "traits practice ";

    }
    public function pracc(){
        echo "traits implementation ";
    }
}
    trait traitts{
        public function praccc()
        {
            echo "traitts ";
        }
    }
    class Traitt{
       use practice,traitts; 
    }
    $obj1=new Traitt();
    $obj1->prac();
    $obj1->pracc();
    $obj1->praccc();
?>
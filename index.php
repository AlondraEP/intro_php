<?php
/** Variables String */
$name = "Alondra"; 
$lastname = 'elguera'; 

/** Variables Numericas */
$age = 23;
$size=1.50;

/** Variables Booleanas */
$booleanTrue = true;
$booleanFalse = false;

/** Arrays */
$array = [] ;
$array2 = array();
$arrayVaues = [10,'string',true,['otro valor']];

/** Constantes */
const  constant_1 = 12;
const constant_2 = 23;

/**objetos */
 $object = new stdClass();

 /**Clases */
class Auto {
    var $color;
    string $marca; 
    array $array;
    bool $propiedadBoolean = false;
    $propiedadSinTipoDeDato = []; 
     /** constructor */
     int $numberOfDoors = null;

    //  public function __constructor(int $doors){
        // $this-> numberOfDoors = $doors;
    //  }

    public function __constructor(public int $numberOfDoors){

    }
     
     public function getDetails( string $time){
        echo 'Time $time';
        echo "Time $time";
        echo "Time:".$time;
        echo "Hello world";
        echo 'hello world';
     }
}
/** Crear instancias de Clases */
$autoInstance = new Auto(4);
$autoInstance2 = new Auto(4);

/** Ciclos */
for ($i=0; $i < ; $i++) { 
    echo $i ."\n";
}


?>
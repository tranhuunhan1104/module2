<?php
class Patient
{
    public $name;
    public $code;
    public $element = [];
    // public function __construct($code)
    // {
    //     $this->code = $code;
    // }
    public function enqueue($name){
        array_push($this->element,$name);
        // array_push($this->element,$code);
    }
    public function dequeque(){
        array_shift($this->element);
    }

}
$objPatient = new Patient();
$objPatient->enqueue('baba , 5');
$objPatient->enqueue('Jones , 4');
$objPatient->enqueue('Fehrenbach , 6');
$objPatient->enqueue('Brown , 1');
$objPatient->enqueue('Ingram , 1');
$objPatient->dequeque();
echo'<pre>';
print_r($objPatient);
echo'</pre>';


    

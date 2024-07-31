<?php
// error_reporting(E_ALL);
// ini_set('display_errors', '1');

interface Communicative{
    //service class or interface
    public function speak();
}
class Dog implements Communicative{
    //client class
    public function speak(){
        return 'bark'; 
    }
}
class Cat implements Communicative{
    //client class
    public function speak(){
        return 'meaw'; 
    }
}
class communicate{

    public $animal; 
    public function __construct(Communicative $animal){
        $this->animal = $animal;
    }
    public function communicate()
    {
        echo $this->animal->speak();
    }

}
$arr = [];
$arr[0] = new Cat();
$arr[1] = new Dog();

foreach($arr as $arr){
    $animal = new communicate($arr);
    echo $animal->communicate().'</br>'; 
}
<?php

    class Person{
        public $name;
        public $last_name;
        public $age;
        private $job;// Also exists protected
        private static $full_name = "Miguel Licea";

        function __construct($name,$last_name,$age,$job)
        {
            $this->name = $name;
            $this->last_name = $last_name;
            $this->age = $age;
            $this->job = $job;
        }

        function __destruct()
        {
            //Se ejecuta al final del script
        }

        public static function sayName(){
            echo self::$full_name;
        }

        public function get_job(){
            return $this->name;
        }

        public function set_job($job){
            $this->job = $job;
        }

        protected function intro(){
            return "Hello my name is".$this->name." ".$this->last_name;
        }


    }

    $migue = new Person("Miguel","Licea",19,"Student");
    //print $migue->get_job();


//Inheritance

final class Europeo extends Person{
    protected $origen;
    const VALOR_PI = 3.14;// Para acceder: Europe::VALOR_PI

    function __construct($name,$last_name,$age,$job,$origen)
    {
        $this->name = $name;
        $this->last_name = $last_name;
        $this->age = $age;
        $this->job = $job;
        $this->orige = $origen;
        
    }
}

// Abstracts Classes
abstract class Fruit{// Las clases que la extiendan deben definir los metodos abstractos
    public $name;
    abstract public function sayName($name);

    function __construct($name)
    {
        $this->name=$name;
    }
}

// Interfaces
interface Animal{
    function walk();
    function scream();
}

Class Cat implements Animal{
    function walk(){
        return "Walking!!";
    }

    function scream(){
        return "Meowww!!";
    }
}

// Traits

trait message1{
    public function msg1(){
        return "Hello";
    }

    abstract function msg2(int $valor):string;
}

Class Welcome{
    use message1;

    public function msg2(int $valor):string{
        return "Hello2 $valor";
    }
}

$wel = new Welcome();
$message = $wel->msg1();

?>
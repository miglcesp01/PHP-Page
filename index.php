<!DOCTYPE html>
<?php
    $cookie_name = "user";
    $cookie_value = "Miguel";
    setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>PHP</title>

</head>
<body>
    <h1>PHP Course</h1>

    <form action="forms.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="email" name="email"><br>
    <input type="submit">
    </form>
    <?php
    if(!isset($_COOKIE[$cookie_name])){
        print $_COOKIE[$cookie_name];
    }
    ?>


    <?php
        // echo "Hello World!<br>";
        $nombre = "Miguel";
        $apellido = "Licea";
        // echo "Hola ",$nombre," ",$apellido . "<br>";
        // echo strlen($nombre)

        //definir constantes
        define("EDAD", 19);
        // echo "Edad: " .EDAD. "<br>";

        if(EDAD<18){
            print "Eres menor de edad";
        }elseif(EDAD<40){
            // print "Eres un adulto";
        }else{
            print "Retirate viejo";
        }

        //Switch
        // switch (EDAD){
        //     case 19:
        //         print "Tienes 19 anios";
        //         break;
        //     case 20:
        //         print "Tienes 20 anios";
        //         break;
        //     default:
        //         print "Tienes m[as de 0 anios";
        // }

        //WHILE ,DO WHILE, FOR
        // Same as java

        //FOR EACH
        $cars = array("VW","MERCEDES BENZ","BMW");
        foreach($cars as $car){
            //
        }

        // Strict Mode
        /* To enable the Strict Mode in php you have to write declare(strict_types=1)
        later to the statement <?php
        */

        function addNumber(int $a,int &$value,int $minHeight = 150) :float{
            return 1.8;
        }
        // normal argument: int $a
        // argument passed by reference: &$value
        // default argument value: $minHeight

        // ARRAYS
        // Creation
        $laptops = array();
        // get the length: count($laptops)

        // Indexed Arrays
        $laptop[0] = "Lenovo";
        
        //Associative Arrays
        $age = array("Laura"=>20);
        $age["Miguel"] = 19;

        // Loop of above
        // foreach($age as $x => $x_value) {
        //     echo "Key=" . $x . ", Value=" . $x_value;
        //     echo "<br>";
        //   } 
    ?>


    <footer>
    <?php
    include 'footer.php';
    include 'OOP.php';
    // include 'files.php'
    ?>
    </footer>
    
</body>
</html>
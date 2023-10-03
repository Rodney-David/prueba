<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <style>
        p{
            font-size: 30px;
        }
        .mayor{
            color: blue;
        }
        .menor{
            color: red;
        }

    </style>
</head>
<body>
    <?php 
        $array = array(
            array('id'=>"1", 'nombre'=>"Rodney",'apellido'=>"Chiluiza", 'edad'=>"17", 'estado'=>"1"),
            array('id'=>"2", 'nombre'=>"Bruce",'apellido'=>"Naranjo", 'edad'=>"16", 'estado'=>"0"),
            array('id'=>"3", 'nombre'=>"Ana",'apellido'=>"Gómez", 'edad'=>"25", 'estado'=>"1"),
            array('id'=>"4", 'nombre'=>"Luis",'apellido'=>"Pérez", 'edad'=>"30", 'estado'=>"1"),
            array('id'=>"5", 'nombre'=>"María",'apellido'=>"López", 'edad'=>"22", 'estado'=>"0"),
            array('id'=>"6", 'nombre'=>"Pedro",'apellido'=>"Martínez", 'edad'=>"19", 'estado'=>"1"),
            array('id'=>"7", 'nombre'=>"Sara",'apellido'=>"García", 'edad'=>"28", 'estado'=>"1"),
            array('id'=>"8", 'nombre'=>"Juan",'apellido'=>"Rodríguez", 'edad'=>"24", 'estado'=>"0"),
            array('id'=>"9", 'nombre'=>"Elena",'apellido'=>"Hernández", 'edad'=>"15", 'estado'=>"1"),
            array('id'=>"10", 'nombre'=>"Diego",'apellido'=>"Sánchez", 'edad'=>"17", 'estado'=>"1"),
            array('id'=>"11", 'nombre'=>"Laura",'apellido'=>"Ramírez", 'edad'=>"29", 'estado'=>"0"),
            array('id'=>"12", 'nombre'=>"Carlos",'apellido'=>"Gutiérrez", 'edad'=>"14", 'estado'=>"1"),
            array('id'=>"13", 'nombre'=>"Marta",'apellido'=>"Fernández", 'edad'=>"27", 'estado'=>"1"),
            array('id'=>"14", 'nombre'=>"José",'apellido'=>"González", 'edad'=>"16", 'estado'=>"0"),
            array('id'=>"15", 'nombre'=>"Andrea",'apellido'=>"Torres", 'edad'=>"26", 'estado'=>"1"),
            array('id'=>"16", 'nombre'=>"Fernando",'apellido'=>"Díaz", 'edad'=>"31", 'estado'=>"1"),
            array('id'=>"17", 'nombre'=>"Patricia",'apellido'=>"Mendoza", 'edad'=>"32", 'estado'=>"0"),
            array('id'=>"18", 'nombre'=>"Alejandro",'apellido'=>"Lara", 'edad'=>"14", 'estado'=>"1"),
            array('id'=>"19", 'nombre'=>"Valentina",'apellido'=>"Vargas", 'edad'=>"16", 'estado'=>"1"),
            array('id'=>"20", 'nombre'=>"Gabriel",'apellido'=>"Cruz", 'edad'=>"18", 'estado'=>"0")
        
        );
        //echo $array[0]["id"];
        /*echo "Id: " . $persona["id"] . " Nombre: " . $persona["Nombre"] .
             " Apellido: " . $persona["Apellido"] . " Edad: " . $persona["Edad"] . "<br>";*/
        foreach($array as $persona){
            //echo "Prueba";
            if($persona["edad"] >= "18"){
            ?>                                             <!-- Se reemplaza php por = para imprimir la variable -->
                <p class="mayor">Id: <?php echo $persona["id"] ?> - Persona: <?=  $persona["nombre"] . " " . $persona["apellido"] ?> - Edad: <?= $persona["edad"] ?> <strong> Es mayor de edad. </strong> </p> 
            <?php
            } else{
            ?>
                <p class="menor">Id: <?php echo $persona["id"] ?> - Persona: <?=  $persona["nombre"] . " " . $persona["apellido"] ?> - Edad: <?= $persona["edad"] ?> <strong> Es menor de edad. </strong> </p> 
            <?php
            }
        }
    ?>

    
</body>
</html>
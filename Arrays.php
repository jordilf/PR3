<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
<?php
//Ejercicio 1
echo "<>1<><br><br>";
$array1 = [
    "nombre" => "Sara",
    "apellido" => "Martinez",
    "edad" => 23,
    "ciudad" => "Barcelona"
];
/*Variable para poder determinar datos con 
diferente numero: Dato 1, Dato 2, Dato 3, Dato 4. */
$contador = 1;
//Bucle para recorrer un array asociativo.
foreach($array1 as $valor){
    echo "Dato " . $contador . ": " . $valor . "<br>";
    $contador++;
}
//Ejercicio 2
echo "<br><br><>2<><br><br>";
//Bucle para recorrer un array asociativo.
foreach($array1 as $clave => $valor){
    //Ucfirst pone la primera letra de los valores $clave en mayuscula.
    echo ucfirst($clave) . ": " . $valor . "<br>";
}
//Ejercicio 3
echo "<br><br><>3<><br><br>";
$array1["edad"] = 24;
/*Variable para poder determinar datos con 
diferente numero: Dato 1, Dato 2, Dato 3, Dato 4. */
$contador = 1;
//Bucle para recorrer un array asociativo.
foreach($array1 as $valor){
    echo "Dato " . $contador . ": " . $valor . "<br>";
    $contador++;
}
//Ejercicio 4
echo "<br><br><>4<><br><br>";
//
unset($array1['ciudad']);
var_dump($array1);
//Ejercicio 5
echo "<br><br><>5<><br><br>";
$letters = "a,b,c,d,e,f";
//Explode separa caracter por caracter y eso crea un array asociativo.
$arrayLetters = explode(",",$letters);
$contador = 6;
//Rsort cambia el orden a descendente del array
rsort($arrayLetters);
foreach($arrayLetters as $clave => $valor){
    echo "Letter " . $contador . ": " . $valor . "<br>";
    $contador--;
}
//Ejercicio 6
echo "<br><br><>6<><br><br>";
$arrayNotas = [
    "Miguel" => 5,
    "Luís" => 7,
    "Marta" => 10,
    "Isabel" => 8,
    "Aitor" => 4,
    "Pepe" => 1,
];
echo "Nota de los estudiantes:<br>";
arsort($arrayNotas);//arsort ordena la array en funciona de las notas.
foreach($arrayNotas as $clave => $valor){
    echo $clave . " : " . $valor . "<br>";
}
//Ejercicio 7
echo "<br><br><>7<><br><br>";
$totalNotas = array_sum($arrayNotas); //array_sum para sumar todas las notas dentro del array
$totalAlumnos = count($arrayNotas);//count para contar cuantos alumnos hay dentro de la array
$mediaNotas = $totalNotas / $totalAlumnos; //Para calcular la media de los alumnos
echo "La media de los alumnos es de " . number_format($mediaNotas ,2) . "!<br>";
echo "Alumnos con nota superior a la media:";
foreach($arrayNotas as $clave => $valor){
    if($valor > $mediaNotas){
        echo "<br>" . $clave;
    }
}//foreach para recorrer toda la array
//Ejercicio 8
echo "<br><br><>8<><br><br>";
$notaMasAlta = max($arrayNotas); //max para buscar el valor maximo dentro de la array de notas
$mejorAlumno = array_search($notaMasAlta,$arrayNotas); 
//array_serach para buscar dentro de una array, desde una variable.
echo "La nota mas alta es un " . $notaMasAlta . " y corresponde a " . $mejorAlumno . "!";
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

echo "Confeccionar una clase llamada Mascota. Definir un atributo donde se almacene su nombre. 
Luego definir dos métodos, uno que cargue el nombre y otro que lo imprima.";
echo "<br>";

class Mascota1{
var $nombre;

function cargar_nombre($nom){
    $this->nombre=$nom;
    echo "<br>";
     
}
function muestra_nombre(){
    echo $this->nombre;
    }



}

$Mascota1= new Mascota1;
$Mascota1->cargar_nombre("pepe");
$Mascota1->muestra_nombre();




class Mascota2{
var $nombre;
function cargar_nombre($nom){
    $this->nombre=$nom;
     
}
function muestra_nombre(){
    echo $this->nombre;
    }
}
$Mascota2= new Mascota2;
$Mascota1->cargar_nombre("pepa");
$Mascota1->muestra_nombre();

?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?
class Caja{
var $alto;
var $ancho;
var $largo;
var $contenido;
var $color;

function introduce($cosa){
$this->contenido = $cosa;
}

function muestra_contenido(){
 $this->contenido;
}

}
$micaja = new Caja;
echo "Con esto hemos creado, o mejor dicho, instanciado, un objeto de la clase Caja llamado $micaja."
$micaja->introduce("algo");
$micaja->muestra_contenido();
echo "Con estas dos sentencias estamos introduciendo "'algo'" en la caja y luego estamos mostrando ese
contendido en el texto de la página. Nos fijamos que los métodos de un objeto se llaman utilizando el
código ->."
echo "nombre_del_objeto->nombre_de_metodo()"
echo "Para acceder a los atributos de una clase también se accede con el código ->. De esta forma:
nombre_del_objeto->nombre_del_atributo"
?>
</body>
</html>
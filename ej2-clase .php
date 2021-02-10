<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

echo "Confeccionar una clase TituloPagina que permita mostrar un título, indicarle si queremos que aparezca centrada, a derecha o izquierda.
 Utilizar un constructor para inicializar los dos atributos.";

 //public function __construct($tit,$ubi);
echo "<br>";



class CabeceraPagina {
    private $titulo;
    private $ubicacion;
    public function __construct($tit,$ubi)
    {
      $this->titulo=$tit;
      $this->ubicacion=$ubi;
    }
    public function graficar()
    {
      echo '<div style="font-size:40px;text-align:'.$this->ubicacion.'">';
      echo $this->titulo;
      echo '</div>';
    }
  }
  $cabecera=new CabeceraPagina('CabeceradeMipagina.com','center');
  $cabecera->graficar();
  
?>
</body>
</html>
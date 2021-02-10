



<!-- Hacer una clase Operacion que tenga como atributos $valor1, $valor2, $resultado y tenga como métodos
cargar1 , cargar2  y mostrar el contenido de $resultado.
Luego heredar dos subclases de la clase Operacion. Una sum y una resta -->


<html>

<head>

<title>Pruebas</title>

</head>

<body>

<?php

class Operacion {
   //Definir aqui los atributos
public $valor1;
public $valor2;
public $resultado;




  public function cargar1($v)

  {
    $this->valor1=$v;


  }

  public function cargar2($v)

  {
    $this->valor2=$v;



  }

  public function imprimirResultado()

  {
    echo $this->resultado;


  }

}



class Suma extends Operacion{

  public function operar()

  {
$this->resultado=$this->valor1+$this->valor2;


  }

}



//Hacer clase Resta
class Operacion2{
    public $valor1;
    public $valor2;
    public $resultado;
    
    
    
    
      public function cargar1($v)
    
      {
    $this->valor1=$v;
    
    
      }
    
      public function cargar2($v)
    
      {
        $this->valor2=$v;
    
    
    
      }
    
      public function imprimirResultado()
    
      {
    echo $this->resultado;
    
    
    
      }
   
}


class Resta extends Operacion2{

    public function operar()
  
    {
  $this->resultado=$this->valor1-$this->valor2;
  
  
    }
}




$suma=new Suma();

$suma->cargar1(10);

$suma->cargar2(10);

$suma->operar();

echo 'El resultado de la suma de 10+10 es:';


$suma->imprimirResultado();
echo '<br>';
$resta=new Resta();

$resta->cargar1(10);

$resta->cargar2(5);

$resta->operar();

echo 'El resultado de la diferencia de 10-5 es:';

$resta->imprimirResultado();



?>

</body>

</html>
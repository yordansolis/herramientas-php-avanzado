
<p>
La herencia permite que se puedan definir nuevas clases basadas
 de unas ya existentes a fin de reutilizar el código, generando así 
 una jerarquía de clases dentro de una aplicación. Si una clase deriva 
 de otra, esta hereda sus atributos y métodos y puede añadir nuevos
  atributos, métodos o redefinir los heredados <br>
</p>
<br>

<?php

class Suma
{
    public $num1;
    public $num2;
    // su tubieramos el __costru no tendriamos que invicar los metodos
     public function getParametros($num1, $num2)
    {
        //-> lectura representa ->
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function setSuma()
    {
        echo 'la suma: ';
       return $this->num1 + $this->num2;
    }
}

class Resta extends Suma
{

    public function setResta()
    {   
        // aqui se puede heredar tambien  setSuma();
        echo 'la resta: ';
        return $this->num1 - $this->num2;        
    }
}
// Ilegal: lectura-escritura -> sólo lectura
$foo = new Suma();
$foo = new Resta();
$foo->getParametros(10,11); // Salida: 'Foo: baz'
echo $foo->setSuma();
echo "<br>";
echo $foo->setResta();

?>
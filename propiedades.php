<?php
/* 
y tiene palabras reservada como private, propecte, publi
propiedades publi
esta se puede haceder desde cualquier clase
 */
class MyClass
{
    public $public = 'Public';
    //las protecte se pueden conpartir en clases
    //pero no se puede acceder a ellas con instacias 
    protected $protected = 'Protected';
    //las pribadas solo puede ser usadas para esa clase
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new MyClass();
echo $obj->public;    // Funciona bien
//echo $obj->protected; // Error Fatal
//echo $obj->private;   // Error Fatal
$obj->printHello();   // Muestra Public, Protected y Private


/**
 * Definición de MyClass2
 */
class MyClass2 extends MyClass
{
    // Se pueden redeclarar las propiedades pública y protegida, pero no la privada
  //  public $public = 'Public2';
   // protected $protected = 'Protected2';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        //error echo $this->private;
    }
}
echo  "<hr>";
$obj2 = new MyClass2();
echo $obj2->public; echo  "<br>";   // Funciona bien
//secho $obj2->protected; // Error Fatal
// echo $obj2->private;   // Undefined
$obj2->printHello();   // Muestra Public2, Protected2, Undefined

?>
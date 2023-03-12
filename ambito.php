es un token que permite acceder
 a elementos estáticos, constantes, y 
 sobrescribir propiedades o métodos de una clase.

 <?php
 echo "<br>";
class MyClass {
    const CONST_VALUE = 'Un valor constante';
}

$classname = 'MyClass';
echo $classname::CONST_VALUE; // A partir de PHP 5.3.0

echo MyClass::CONST_VALUE;
?>
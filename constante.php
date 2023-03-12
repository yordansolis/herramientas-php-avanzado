<?php
class MiClase
{
    const CONSTANTE = 'valor constante';    

    function mostrarConstante() {
        echo  self::CONSTANTE . " Primera constante";
        echo "<br>";
    }
}

echo MiClase::CONSTANTE . " Segunda constante";
echo "<br>";

echo "<br>";
$clase = new MiClase();
echo $clase->mostrarConstante();

//echo $clase::CONSTANTE."\n"; // A partir de PHP 5.3.0
?>
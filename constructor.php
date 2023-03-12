<?php
/*
Se suele utilizar para darle un valor a los atributos del objeto al crearlo. 
Es el primer método que se ejecuta al crear el objeto y se llama automáticamente al crearlo.
********************
Es el primer método que se ejecuta al crear el objeto y se llama automáticamente al crearlo.
Este método puede recibir parámetros como cualquier otro método 
y para pasárselos tenemos que pasarle los parámetros al objeto. El constructor NO DEVUELVE ningún dato.
*/

// Definimos la clase
class Coche{
     
    // Atributos
    public $modelo;
    public $color;
    public $velocidad;
     
    // Constructor con el contrictor ahorramos codigo
    public function __construct($modelo, $color, $velocidad = 0){
        $this->modelo = $modelo;
        $this->color = $color;
        $this->velocidad = $velocidad;
    }
     
    //Métodos
    public function getColor(){
// Devolvemos un atributo
        return $this->color;
    }
     
    public function setColor($color){
//Le damos un valor a un atributo
        $this->color = $color;
    }
     // devolvemos la velocidad

    public function getVelocidad(){
        return $this->velocidad;
    }
     
    public function mostrarInfo(){
         
        // Llamamos a otros métodos
        $info = "<h1>Información del coche:</h1>";
        $info.= "Modelo: ".$this->modelo;
        $info.= "<br/> Color: ".$this->getColor();
        $info.= "<br/> Velocidad: ".$this->getVelocidad();
         
        return $info;
    }
}

?>
 
<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>El constructor</title>
</head>
<body>
 
<?php
// Creamos el objeto / Instanciamos la clase y le pasamos los parámetros del constructor
$coche = new Coche("BMW VICTOR", "ROJO", 100);
 
// Mostramos la información del primer coche
echo $coche->mostrarInfo();
 
$coche2 = new Coche("SEAT 500", "VERDE");
 
// Mostramos la información del segundo coche
echo $coche2->mostrarInfo();
?>
 
</body>
</html>




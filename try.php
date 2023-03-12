#el try catch se suele usar para que si en caso tla ocurra un error nuestra aplicacion no 
# procesando  se caiga  y le muestre un mensaje agradable al usuario

<?php
function Dividir($x,$i) {

    if (!$x|| !$i ) {
       
        throw new Exception('Un numero no puede dividorse por: .'.$i  );echo "<br>";
      
    }
    return $x/$i;
}

try {
    // si lo metemos aqui y ejecutamos el 0 no generara un error
    echo Dividir(5,2) . "\n";
    //da su error pero no detiene el codigo
    echo Dividir(5,0) . "\n";
} catch (Exception $e) {
    echo "<br>";
    echo  'Excepción capturada: ',  $e->getMessage(), "\n";echo "<br>";
}


// Continuar la ejecución
echo Dividir(8,2);
//echo Dividir(5,0) . error fatal; y se detiene el codigo
echo "<br>";
echo 'Hola Mundo\n'; echo "<br>";
?>


<?php
echo "<hr>";

echo '
#otra forma de usar exceciones el hp  mas facil 
porque nos captura la excecion sin saber como invocarla  <br> <br>';

function Dividir2($x,$i) {

    if (!$x|| !$i ) {
       
       /// throw new Exception('Un numero no puede dividorse por: .'.$i  );echo "<br>";
       echo 'Un numero no puede dividorse por:s';
    }
    return $x/$i;
}

try {
    // si lo metemos aqui y ejecutamos el 0 no generara un error
    echo Dividir2(5,2) . "\n";
    echo Dividir2(5,0) . "\n";
} catch (\Throwable  $e) {
    echo "<br>";
    echo ' <p style="color:red"> 
    Excepción capturada: </p>: ',  $e->getMessage(), "\n";echo "<br>";
}

/*
como vemos si estuviera afuera el (5,0) se detiene la aplicacion, como como esta en y es lo mismo de lo que esta en el try 
 */

// Continuar la ejecución
echo Dividir2(8,2);
//echo Dividir2(5,0) . error fatal; y se detiene el codigo
echo "<br>";
echo 'Hola Mundo\n';
?>

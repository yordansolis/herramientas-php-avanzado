<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validar radio</title>
</head>

<body>


    <form action="validar-formulario.PHP" method="POST"> 

        <?php  
        
        if (isset($_POST['nivel'])) {
            $nivel = $_POST['nivel'];
        }else {
            $nivel = "";
        }
        $campo = array();
        if($nivel == ""){
            array_push($campo, "El nivel esta vacio");

        if (count($campo) > 0) {
            for ($i=0; $i < count($campo); $i++) { 
                echo "<li>" .$campo[$i]."</li>";
            }
        }    
        }
        ?>
    <p>
        Nivel de desarrollo <br>
        <input type="radio" name="nivel" value="principiante"
        <?php if($nivel == "principiante") echo "checked"; ?>>Principiante:
        <input type="radio" name="nivel" value="intermedio"
        <?php if($nivel == "intermedio") echo "checked"; ?>>Intermedio:
        <input type="radio" name="nivel" value="avanzado"
        <?php if($nivel == "avanzado") echo "checked"; ?>>Avanzado:
    </?>
    <input type="submit" value="enviar datos">
    </form>

</body>

</html>
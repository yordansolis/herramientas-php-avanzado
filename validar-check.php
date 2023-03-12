<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="validar-check.php" method="POST">
        <?php
        $lenguaje  =  array();
        $campo = array();
        if (isset($_POST['lenguajes'])) {
            $lenguaje = $_POST['lenguajes'];
        } else {
            //si no quieda vacio
            $lenguaje = [];
        }
        if ($lenguaje == "" || count($lenguaje) < 2) {
            array_push($campo, "* Debe selecionar almenos  dos lenguajes");
        }

        if (count($campo) > 0) {
            for ($i = 0; $i < count($campo); $i++) {
                echo "<li>" . $campo[$i] . "</li>";
            }
        }

        ?>

        <input type="checkbox" name="lenguajes[]" value="php" <?php if (in_array("php", $lenguaje)) echo "checked" ?>> PHP <br>
        <!--in_array sirve para validar si se encuentra php-->
        <input type="checkbox" name="lenguajes[]" value="js" <?php if (in_array("js", $lenguaje)) echo "checked" ?>> Js <br>
        <input type="checkbox" name="lenguajes[]" value="python" <?php if (in_array("python", $lenguaje)) echo "checked" ?>> Python
        </p>
        <button type="submit" value="enviar datos"> Enviear </button>
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="formulario.php" method="POST">
        <?php
        if (isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            $campo = array();
            if ($nombre == "") {
                array_push($campo, "El campo nombre no puede estar vacio");
            }

            if ($password == ""  ||  strlen($password) < 6) {
                array_push($campo, "El passwor no puede estar vacio, ni debe tener 
                                        menos de  caracteres");
            }
            //Strops nos devienve 1 
            if ($email == "" || strpos($email, "@") === false) {
                array_push($campo, "Ingrese un email valido");
            }
            //si los campos
            if (count($campo) > 0) {
                # significa que hay un error
                echo "error";
                for ($i=0; $i <count($campo); $i++) { 
                    echo "<li>".$campo[$i]."</li>";
                }
            }else {
                # correcto de hace lo que se deba hacer
                echo "<p> Correcto </p>";
            }
        }
        ?>

        <label for="password">Nombre: </label>
        <input id="nombre" name="nombre" type="text" required>
        <br>
        <label for="password">password: </label>
        <input id="password" name="password" type="text" required>
        <br>
        <label for="email">email: </label>
        <input id="email" name="email" type="text" required>
        <br>
        <button type="submit"> Enviar</button>
    </form>



</body>

</html>
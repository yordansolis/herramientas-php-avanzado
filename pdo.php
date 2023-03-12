<?php
//Una mejor manera y mas segura para las bases de datos
//y permite trabajar con diferentes motores de bases de datos
//es orientado a objetos


/**
 * @  seguridad, usabilidad y reusabilidad, maneja erroes
 * avanzados  
 */

 $host = "localhost"; 
 $usuario ="root";
$password="";
$badeDB = "crud";
//confiurar DSN
$dsn = 'mysql:host=' .$host. ';dbname=' . $badeDB;

// crear instacia PDO
$pdo = new PDO($dsn, $usuario , $password);

//Agregar el setAtribute de manera global para no estra repidiento el ATTER_DEFAUL
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ );

/*
// primer query con pdo selecionamos la db
$query = $pdo->query('SELECT  * FROM usuarios');

ejempli1
while ($fila = $query->fetch() ) {
   echo $fila['nombre'];
echo "<br/>";
}
*/
/*
//espeficiando el modo
while ($fila = $query->fetch(PDO::FETCH_OBJ) ) {
   echo $fila->nombre;
    echo "<br/>";
}
*/


/*
//EJEMPLO = 3;  manera insegura
$nombre1 = "Martra "; 
//$query2= "SELECT * FROM  usuarios Where nombre = '$nombre'";             jummmm 
*/



// manera segura con parametros posicionales 
$nombre2 ="jose";
$query3 = "SELECT * from usuarios where nombre = ? "; 
$stmt = $pdo->prepare($query3);
//Execute 
$stmt->execute([$nombre2]);
$usuario  = $stmt->fetch();
echo '<pre>';
var_dump($usuario);



//// manera segura con parametros posicionales ANONIMOS
/*
$nombre2 ="jose";
$query3 = "SELECT * from usuarios where nombre = :nombre "; 
$stmt = $pdo->prepare($query3);
//Execute 
$stmt->execute([':nombre' => $nombre2]);
$usuario2  = $stmt->fetchAll();
echo '<pre>';

/* var_dump($usuario2); */

/*
foreach ($usuario2 as $value ) {    
    echo $value->nombre;
}
*/

// Trae un unico registros 
/*
$id = 1; 
$query4 = "SELECT * from usuarios where id = :id"; 
$stmt = $pdo->prepare($query4);

//Opcion fext un solo registro
$stmt->execute([':id' => $id]);
$usuario4  = $stmt->fetch();
echo $usuario4->telefono;



//Contar filas 

$id = 2; 
$query5 = "SELECT * from usuarios where id = :id"; 
$stmt = $pdo->prepare($query5);

//Opcion fext un solo registro
$stmt->execute([':id' => $id]);


//Accedemos al rowCount()
$totalUsuairos = $stmt->rowCount();
echo '<br />';

echo 'Total Usuarios' . $totalUsuairos; 

*/



/* ------Insertar datos forma 1


 public function  insertar(Modelo $data){
   $query="INSERT INTO customers (dnipa,nombrep,apellidop,seguro,tele,sexo,usuario,password,estado)VALUES(?,?,?,?,?,?,?,?,?)";
       $this->db->prepare($query)->execute(array($data->dnidoc,$data->nomdoc,$data->apedoc,
      $data->codespe,$data->sexo));





 * 
$nombre = 'nancy';
$apellido ='lemus';
$tel ='019999';


$query6 = "INSERT INTO usuarios(nombre, password, telefono)
Values (:nombre, :apellido, :tel)";

$stmt = $pdo->prepare($query6);
$stmt->execute([':nombre' => $nombre, 
':apellido' => $apellido,
':tel' => $tel,]);

echo "<br/>";

echo 'user creado';
*/







/*


$nombre = 'asprilla';
$apellido ='jose';
$tel ='090999';


$query7 = "INSERT INTO usuarios(nombre, password, telefono)
Values (:nombre, :apellido, :tel)";

// vinculacion de parametros 
$stmt = $pdo->prepare($query7);

//FORMA MAS RECOMENDADA
$stmt->bindParam(':nombre',$nombre, PDO::PARAM_STR); 

$stmt->bindParam(':apellido',$apellido, PDO::PARAM_STR); 

$stmt->bindParam(':tel',$tel, PDO::PARAM_STR); 
$stmt->execute();

echo "<br/>";

echo 'Nuevo user';
*/

/* actualizar datos 
$id = 2;
$nombre = 'XIRO';
$password ='mozila';
$telefono ='00000000';


$query9 = "UPDATE  usuarios set nombre=:nombre, password=:password, telefono=:tel
  WHERE id=:id";
 
$stmt = $pdo->prepare($query9);

//FORMA MAS RECOMENDADA
$stmt->bindParam(':nombre',$nombre, PDO::PARAM_STR); 
$stmt->bindParam(':password',$password, PDO::PARAM_STR);
$stmt->bindParam(':tel',$telefono, PDO::PARAM_STR);
$stmt->bindParam(':id',$id, PDO::PARAM_INT);
$stmt->execute();
echo "Seccess full";



//CON PARAMETROS ANONIMOS 
 $id = 2;
$nombre = 'LOPEZ';
$password ='GGGG';
$telefono ='00000000';


$query9 = "UPDATE  usuarios set nombre=?, password=?, telefono=?
  WHERE id=?";
 
$stmt = $pdo->prepare($query9);

//FORMA MAS RECOMENDADA
$stmt->bindParam(1,$nombre, PDO::PARAM_STR); 
$stmt->bindParam(2,$password, PDO::PARAM_STR);
$stmt->bindParam(3,$telefono, PDO::PARAM_STR);
$stmt->bindParam(4,$id, PDO::PARAM_INT);
$stmt->execute();
echo "Seccess full";

 */


 /* borrar 
 $id = 2;
 
 $query10 = "DELETE FROM usuarios  WHERE id=:id";
 $stmt = $pdo->prepare($query10);
 $stmt->bindParam(':id',$id, PDO::PARAM_INT);
 $stmt->execute();
 echo "Seccess full";

 */
//buscar texto
 $textoBuscar = "%l%";
 
 $query11 = "SELECT * FROM usuarios  WHERE nombre 
 like :nombre";
 $stmt = $pdo->prepare($query11);
 $stmt->bindParam(':nombre',$textoBuscar, PDO::PARAM_STR);
 $stmt->execute();
 $usuario = $stmt->fetchAll();
 echo "<pre>";
 var_dump($usuario);
 


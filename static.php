#Cuando usar metodos staticos y cuando no 

comienza statuic public 

los metodos estaicos ejecutan tareas para ser almacenadas
se usa cuando se necesita traer  la informacion 
de la db. almacenarla o poderlas ulizar ne las partes d ela interfaz
<br>
<?php
class MiClase{

	public function NoEstatico(){

		echo "soy un método no estático";

	}

}
$MetodoNoEstatico = new MiClase();
$MetodoNoEstatico -> NoEstatico();

?>


<?php
class MiClase2{

static public function Estatico(){

    return "soy un método estático";

}

}

$MetodoEstatico = MiClase2::Estatico();
echo $MetodoEstatico."<br>";
echo $MetodoEstatico."<br>";
echo $MetodoEstatico;

?>
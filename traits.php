# El objetivo de un trait es el de reducir las limitaciones propias de la herencia simple permitiendo que
 los desarrolladores reutilicen a voluntad conjuntos de métodos sobre varias clases independientes y
  pertenecientes a clases jerárquicas distintas. La semántica a la hora combinar Traits y clases 
se define de tal manera que reduzca su complejidad y se eviten los problemas típicos asociados a la
 herencia múltiple y a los Mixins.#
 <br>
 Ejemplo #1 Ejemplo de rasgo
<br>
 
en php solo existe la herencia simple,  esto extiende a que una clase hija solo puede heredar una clase padre
por eso esto se usa para sumilar la herencia multiple

nota: los trait no se puede instanciar, solo se usan para obtener las propiedades y metodos de una clase jaja
y sobre escribe el metodo si tiene el mismo nombre la clase padre.

tambien se puede usar varios trait dentro de una clASE EJEMEPLO .:: use A, B;
<hr>
<?php
class Persona{
    public $nombre;

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getNombre($nombre){
       return $this->nombre;
    }

}

trait LatinoAmericano{
    public function saludarLatinoAmericano(){
         echo 'Hola soy latino americano';
    }
}

trait Europeo {
    public function saludarEuropeo(){
        echo 'Hola soy Europeo';
   }
}

class Colombiano extends Persona {
    use LatinoAmericano;
    /* usamos la clase lationoamericano  y tambien*/
}

class Aleman extends Persona {
    use Europeo;
    /* ... */
}

$foo = new Aleman;

$foo->saludarEuropeo();
?>
<hr>
Al usar el operador as, se puede también ajustar la visibilidad del método en la clase exhibida. <br> <br>

<?php
trait HolaMundo {
    public function decirHola() {
        echo 'Hola Mundo!';
    }
}

// Cambiamos visibilidad de decirHola
class MiClase1 {
    use HolaMundo { decirHola as protected; }
}
/*
$foo = new MiClase1;
$foo->decirHola();  error 
*/
// Método alias con visibilidad cambiada
// La visibilidad de decirHola no cambia
class MiClase2 {
  use HolaMundo { decirHola as private miPrivadoHola; }
}
$foo = new MiClase2;
$foo->decirHola();   

?>
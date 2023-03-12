
Que es una clase absatracta 
#una clase se dice abstracta si no es posible utilizarla para
 crear objetos (instancias).
----Suena un poco raro, ¿no? ¿Para qué quiero tener una clase si no
 es para crear instancias?-- 
R::La explicación viene asociada al concepto de Herencia
----------

 se utulizan solo como super clases 
no se puede instaciar objetos
nos da una idea de metodo que no se sabe como imprementar pero se debe poner
<br>
<img src="img/explicaxionABSTRACT.PNG" width="600px" alt="">
<br>
<hr>
<?php
//* padre
abstract class Servivo{
   //  abstract protected function getValor();
    abstract public function Alimentarse();
}

class Planta extends Servivo{
     public function Alimentarse(){
        return 'La plata se alimentan de las fotosintesis';
    }
}

abstract class Animal extends Servivo{
}

class AnimalCarniviro extends Animal{

    public function Alimentarse(){
        return 'el animal Carnivoro se alimenta de carne';
    }
}

class AnimalHervivoro extends Animal{
    
    public function Alimentarse(){
        return 'El alimentan heriviro de hierbas ';
    }
}




$foo = new Planta();
echo $foo-> Alimentarse();
 echo '<hr/>';
 $foo = new AnimalCarniviro();
 echo $foo-> Alimentarse();
 echo '<hr/>';
 $foo = new AnimalHervivoro();
 echo $foo-> Alimentarse();


<?php
//la interfaces sirve para declarar los metodos que van a usar nuestras clases 
// Declarar la interfaz 'iTemplate'
interface MetodosInterfaz
{
    public function setVariable($nombre, $edad, $password);
    public function getResul();
}

// Implementar la interfaz
// Ésto funcionará
class Metodos implements MetodosInterfaz
{
    private $vars = array();

    public function setVariable($nombre, $edad, $password)
    {
        $this->vars[$nombre] = $nombre;
        $this->vars[$edad] = $edad;
        $this->vars[$password] = $password;
    }

    public function getResul()
    {
        foreach($this->vars as $name => $value) {
            var_dump($value);
        }

    }
}
$foo = new Metodos();
$foo->setVariable('Jordan','23','ADMIN');

$foo->getResul();
// error fatal echo $foo->$vars;
?>
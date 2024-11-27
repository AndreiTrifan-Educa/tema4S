<?php
 /*
    Privado - private: sólo puede acceder la propia clase.
    Protegido - protected: sólo puede acceder la propia clase o sus descendientes.
    Público - public: puede acceder cualquier otra clase. 
*/
class Persona {
    private string $nombre;

    private string $apellido;


    public function setNombre(string $nom) {
        $this->nombre=$nom;
    }

    public function setApellido(string $ape) {
        $this->apellido=$ape;
    }

    public function imprimirNombreCompleto(){
        echo "Me llamo ".$this->nombre." ".$this->apellido;
        echo '<br>';
    }
}

$lolo = new Persona(); // creamos un objeto
$lolo->setNombre("Lolo");

$lolo->setApellido("García");
$lolo->imprimirNombreCompleto();

/*Si queremos leer datos con forma de objeto utilizando PDO::FETCH_OBJ, debemos crear un objeto con propiedades públicas con el mismo nombre 
que las columnas de la tabla que vayamos a consultar. */
$sql="select * from personas";

$sentencia=$conexion->prepare($sql);
$sentencia->setFetchMode(PDO::FETCH_OBJ);
$sentencia ->execute();

while($t = $sentencia -> fetch()){
    echo "ID: ".$t->id_persona."<br>";
    echo "Nombre: ".$t->nombre."<br>";
}
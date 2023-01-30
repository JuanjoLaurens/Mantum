<?php

class Person {
  private $nombre;
  private $id;
  private $nacimiento;
  private $genero;

  public function __construct($nombre, $id, $nacimiento, $genero) {
    $this->nombre = $nombre;
    $this->id = $id;
    $this->nacimiento = $nacimiento;
    $this->genero = $genero;
  }

  public function getnombre() {
    return $this->nombre;
  }

  public function getId() {
    return $this->id;
  }

  public function getnacimiento() {
    return $this->nacimiento;
  }

  public function getgenero() {
    return $this->genero;
  }

  public function loadData($data) {
    $this->nombre = $data['nombre'];
    $this->id = $data['id'];
    $this->nacimiento = $data['nacimiento'];
    $this->genero = $data['genero'];
  }

  public function saveData() {
    $data = array(
      'nombre' => $this->nombre,
      'id' => $this->id,
      'nacimiento' => $this->nacimiento,
      'genero' => $this->genero
    );
  }
}

class PersonManager {
  private $person;

  public function __construct() {
    $this->person = new Person("John Laurens", "12345678", "1990-01-01", "Male");
  }

  public function savePerson() {
    $this->person->saveData();
  }

  public function loadPerson() {
    $personData = array(
      'nombre' => "Jane Doe",
      'id' => "87654321",
      'nacimiento' => "1995-05-05",
      'genero' => "Female"
    );
    $this->person->loadData($personData);
  }

  public function displayPerson() {
    echo "nombre: " . $this->person->getnombre() . "<br>";
    echo "ID: " . $this->person->getId() . "<br>";
    echo "Date of Birth: " . $this->person->getnacimiento() . "<br>";
    echo "genero: " . $this->person->getgenero() . "<br>";
  }
}

$personManager = new PersonManager();
$personManager->savePerson();
$personManager->loadPerson();
$personManager->displayPerson();

?>
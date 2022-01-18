<!-- /**
     * 
     *      Definire classe Persona:
     *          - ATTRIBUTI (private):
     *              - nome
     *              - cognome
     *              - dataNascita (stringa)
     *          - METODI:
     *              - costruttore che accetta nome e cognome
     *              - setter/getter per ogni variabile
     *              - printFullPerson: che stampa "nome cognome: dataNascita"
     *              - toString: che ritorna "nome cognome: dataNascita"
     * 
     * 
     *      Definire classe Employee che eredita da Persona:
     *          - ATTRIBUTI (private):
     *              - stipendio
     *              - dataAssunzione
     *          - METODI:
     *              - costruttore che accetta nome, cognome e stipendio
     *              - setter/getter per variabili 
     *              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
     *              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)"
     * 
     */ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Person{
        private $name;
        private $surname;
        private $date;

        public function __construct($name, $surname) {

            $this -> name = $name;
            $this -> surname = $surname;
        }

        public function setName($name) {
            
            $this -> name = $name;
        }

        public function setSurname($surname) {

            $this -> surname = $surname;
        }

        public function setDate($date) {

            $this -> date = $date;
        }

        public function getName() {

            return $this -> name;
        }
        
        public function getSurname() {

            return $this -> surname;
        }

        public function getDate() {

            return $this -> date;
        }

        public function printFullPerson() {
            
            return $this -> name . "  " . $this -> surname . " : " . $this -> setDate;
            
        }
        public function __toString() {
            
            return $this -> printFullPerson();
            
        }
    }

    class Employee extends Person{
        private $salary;
        private $hiringDate;
        
        public function __construct($name, $surname, $salary) {

            $this -> name = $name;
            $this -> surname = $surname;
            $this -> salary = $salary;
        }
        public function setSalary($salary) {
            
            $this -> salary = $salary;
        }

        public function getSalary() {

            return $this -> salary;
        }

        public function setHiringDate($hiringDate) {
            
            $this -> hiringDate = $hiringDate;
        }

        public function getHiringDate() {

            return $this -> hiringDate;
        }

        public function printFullEmployee() {
            
            return $this -> name . "  " . $this -> surname  . " : " . $this -> salary . "  "  . "(" . $this -> setHiringDate .")";
            
        }

        public function __toString() {
            
            return $this -> printFullEmployee();            
        }
    }
    
    $s1 = new Person("Jacopo","Chessa");
    $s2 = new Person("Guido","Guidi");
    $s1 -> setDate = ("21/07/1989");
    $s2 -> setDate = ("01/01/1909");

    echo  $s1 . "<br>";
    echo  $s2 . "<br>";
    echo "<br>--------------------------------------<br><br>";

    $s1 = new Employee("Jacopo","Chessa","1200$");
    $s1 -> setHiringDate = ("01-05-2021");
    echo  $s1 . "<br>";

    ?>
</body>
</html>
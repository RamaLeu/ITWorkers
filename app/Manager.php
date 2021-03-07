<?php

namespace ITApp;
class Manager extends ITWorker{
    private $level;
    private $management;

    public function __construct($name, $surname, $salary, $departament, $level, $management){
        $this->name=$name;
        $this->surname=$surname;
        $this->salary=$salary;
        $this->departament=$departament;
        $this->level=$level;
        $this->management = $management;
    }






    public function addExtra($extra)
    {
       $this->extra = $extra;
    }

    public function showWorker()
    {
        return [
            "Name: " =>$this->name,
            "Surname: " =>$this->surname,
            "Salary: " =>$this->salary,
            "Departament: " =>$this->departament,
            "Level: " =>$this->level,
            "Management: " =>$this->management,
            "Extra: " =>$this->extra
        ];
    }
}
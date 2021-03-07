<?php

namespace ITApp;
class Programmer extends ITWorker{
    private $field;
    private $yearsOfWork;
    private $type;

    public function __construct($name, $surname, $salary, $field, $yearsOfWork, $type){
        $this->name=$name;
        $this->surname=$surname;
        $this->salary=$salary;
        $this->field=$field;
        $this->yearsOfWork=$yearsOfWork;
        $this->type = $type;
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
            "Field: " =>$this->field,
            "Years of work: " =>$this->yearsOfWork,
            "Work Type: " =>$this->type,
            "Extra: " =>$this->extra
        ];
    }
}
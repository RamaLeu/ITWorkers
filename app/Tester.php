<?php

namespace ITApp;


class Tester extends ITWorker{
    private $experience;
    private $level;
    private $workTendencies;

    public function __construct($name, $surname, $salary, $experience, $workTendencies, $level){
        $this->name=$name;
        $this->surname=$surname;
        $this->salary=$salary;
        $this->experience=$experience;
        $this->level=$level;
        $this->workTendencies = $workTendencies;
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
            "Experience: " =>$this->experience,
            "Level: " =>$this->level,
            "Work Tendencies: " =>$this->workTendencies,
            "Extra: " =>$this->extra
        ];
    }
}
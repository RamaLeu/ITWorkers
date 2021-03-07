<?php

namespace ITApp;

abstract class ITWorker {
    protected $name;
    protected $surname;
    protected $salary;
    protected $departament;
    protected $extra;

    //setter
    abstract public function addExtra($extra);

    //getter

    abstract public function showWorker();

}
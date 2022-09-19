<?php

interface Funcionario {
    public function Trabalhar();
}

class Programador implements Funcionario{
    public function Trabalhar()
    {
        return 'Codando';
    }
}

class Tester implements Funcionario{
    
    public function Trabalhar()
    {
        return 'Testando';
    }
}
<?php
        //com estilo
interface flip{
    public function Abrir() : string;
    public function Fechar() : string;
    public function FazerLigacao() : string;
}

        //sem graça
interface flat{
    public function FazerLigacao() : string;
}
        //raiz
interface Fixo{
    public function TirarDoGancho() : bool;
    public function FazerLigacao() : string;
    public function Bina() : bool; //Quem souber o que é bina ganha um abraço
}

class CelularFlip implements flip{

    public function Abrir() : string{
        return 'Abriu';
    }

    public function Fechar() : string{
        return 'Fechou';
    }

    public function FazerLigacao(): string
    {
        return 'Ligando';
    }
}

class CelularFlat implements flat{

    public function FazerLigacao(): string
    {
        return 'Ligando';
    }
}

class TelefoneFixo implements fixo{
    public function TirarDoGancho(): bool
    {
        return true;
    }
    
    public function FazerLigacao(): string
    {
        return 'Ligando';
    }

    public function Bina(): bool
    {
        return true;
    }
}
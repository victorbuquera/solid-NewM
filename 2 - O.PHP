<?php

interface animais {
    public function comportamento();
}

class Gato implements animais {
    public function comportamento()
    {
        echo 'MIA';
    }
}

class Cachorro implements animais {
    public function comportamento()
    {
        echo 'LATE';
    }
}

///////////

class Boi implements animais{
    public function comportamento()
    {
        return 'Churrasco';
    }
}

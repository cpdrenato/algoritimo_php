<?php
class Pilha {

    private $lista = [];
    private $topo = -1;

    public function empilha($valor) {
        $this->topo++;
        $this->lista[$this->topo] = $valor;
    }

    public function remove() {
        if($this->_isset())
            unset($this->lista[$this->topo]);
            $this->topo--;
    }

    public function _isset() {
        $ret = true;

        if($this->topo < 0) {
            $ret = false;
        }

        return $ret;
    }

    public function getTopo(){
        return $this->lista[$this->topo];
    }
}

//lista principal
$p1 = new Pilha();
//lista de pares
$p2 = new Pilha();
//lista tmp
$p3 = new Pilha();

//preenche pilha de ex. 1,2,3...100
for($i = 1; $i < 101; $i++) {
    $p1->empilha($i);
}

//move pilha
while($p1->_isset()) {
    $topo = $p1->getTopo();

    if($topo % 2 == 0) {
        $p2->empilha($topo);
    }
    else {
        $p3->empilha($topo);
    }

    $p1->remove();
}

//agora p1 esta vazia, p2 esta com os pares e p3 com os impares
//soh jogar o p3 para o p1 ($p1 = $p3) ou fazer um loop (como eh pra facu possivemente o professor vai querer assim)
while($p3->_isset()) {
    $p1->empilha($p3->getTopo());
    $p3->remove();
}

echo "<pre>";
var_dump($p1, $p2, $p3);

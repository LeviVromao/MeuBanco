<pre>
<?php  
    require_once "index.php";
    $p1 = new MeuBanco; //valéria
    $p2 = new MeuBanco; //claudinho
    $p2->abrirConta('cc');
    $p2->setDono('Claudinho');
    $p2->setnumConta(111111);
    $p2->depositar(250);
    $p2->pagarMensal();
    $p2->sacar(288);
    $p2->fecharConta();

    $p1->abrirConta('cp');
    $p1->setDono('Valéria');
    $p1->setnumConta(222222);
    $p1->depositar(250);
    $p1->pagarMensal();
    $p1->sacar(288);
    $p1->sacar(92);
    $p1->fecharConta();
    print_r($p1);
    print_r($p2)
?>
</pre>
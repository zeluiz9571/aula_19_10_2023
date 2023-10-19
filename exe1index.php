<?php
    //Incluindo a classe que criada na pasta "Classes"    
    include("Classes/carro.class.php");

    //Instanciando um novo objeto
    $carro0 = new carro();

    //Atribuindo valores aos atributos
    $carro0->ano        ="";
    $carro0->modelo     ="";
    $carro0->cor        ="";
    $carro0->fabricante ="";
    $carro0->status     ="";

    //Instanciando um novo objeto
    $carro1 = new carro();

    //Atribuindo valores aos atributos
    $carro1->ano        ="";
    $carro1->modelo     ="";
    $carro1->cor        ="";
    $carro1->fabricante ="";
    $carro1->status     ="";

    //Imprimindo na tela do usuário os valores do objeto (carro0) acima:
    echo "Carro ". $carro0->status . ": <br/><br/>";

    echo "Fabricante do carro: ". $carro0->fabricante . "<br?>
                        Modelo: ". $carro0->modelo "<br />
                        de Cor: ". $carro0->cor . "<br />
                            Ano: ". $carro0->ano . "<br /> <hr>";

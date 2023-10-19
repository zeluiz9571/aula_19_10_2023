<?php
    //Incluindo a classe que criada na pasta "Classes"    
    include("Classes/carro.class.php");

    //Instanciando um novo objeto
    $carro0 = new carro();

    //Atribuindo valores aos atributos
    $carro0->ano        ="2012";
    $carro0->modelo     ="C4 VTR";
    $carro0->cor        ="Preto";
    $carro0->fabricante ="Citroen";
    $carro0->status     ="Disponível";

    //Instanciando um novo objeto
    $carro1 = new carro();

    //Atribuindo valores aos atributos
    $carro1->ano        ="2014 / 2015";
    $carro1->modelo     ="Corcel 2";
    $carro1->cor        ="Amarelo";
    $carro1->fabricante ="Ford";
    $carro1->status     ="Indisponível";

    //Instanciando um novo objeto
    $carro2 = new carro();

    //Atribuindo valores aos atributos
    $carro2->ano        ="2024";
    $carro2->modelo     ="BMW Série 3";
    $carro2->cor        ="Cinza";
    $carro2->fabricante ="BMW";
    $carro2->status     ="Disponível";

    //Instanciando um novo objeto
    $carro3 = new carro();

    //Atribuindo valores aos atributos
    $carro3->ano        ="Maserati";
    $carro3->modelo     ="Maserati Gran Turismo";
    $carro3->cor        ="Cinza";
    $carro3->fabricante ="2023";
    $carro3->status     ="Indisponível";

    //Instanciando um novo objeto
    $carro4 = new carro();

    //Atribuindo valores aos atributos
    $carro4->ano        ="2023";
    $carro4->modelo     ="Ferrari Roma";
    $carro4->cor        ="Vermelho";
    $carro4->fabricante ="Ferrari";
    $carro4->status     ="Disponível";

    //Instanciando um novo objeto
    $carro5 = new carro();

    //Atribuindo valores aos atributos
    $carro5->ano        ="2012/2021";
    $carro5->modelo     ="Aventador";
    $carro5->cor        ="Cinza/Azul";
    $carro5->fabricante ="Lmborghini";
    $carro5->status     ="Indisponível";

    //Imprimindo na tela do usuário os valores do objeto (carro0) acima:
    echo "Carro ". $carro0->status . ": <br/><br/>";

    echo "Fabricante do carro: ". $carro0->fabricante . "<br>
                        Modelo: ". $carro0->modelo . "<br>
                        de Cor: ". $carro0->cor . "<br>
                            Ano: ". $carro0->ano . "<br /> <hr>";

    //Imprimindo na tela do usuário os valores do objeto (carro0) acima:
    echo "Carro ". $carro1->status . ": <br/><br/>";

    echo "Fabricante do carro: ". $carro1->fabricante . "<br>
                        Modelo: ". $carro1->modelo . "<br>
                        de Cor: ". $carro1->cor . "<br>
                            Ano: ". $carro1->ano . "<br> <hr>";

    //Imprimindo na tela do usuário os valores do objeto (carro0) acima:
    echo "Carro ". $carro2->status . ": <br/><br/>";

    echo "Fabricante do carro: ". $carro2->fabricante . "<br>
                        Modelo: ". $carro2->modelo . "<br>
                        de Cor: ". $carro2->cor . "<br>
                            Ano: ". $carro2->ano . "<br> <hr>";

    //Imprimindo na tela do usuário os valores do objeto (carro0) acima:
    echo "Carro ". $carro3->status . ": <br/><br/>";

    echo "Fabricante do carro: ". $carro3->fabricante . "<br>
                        Modelo: ". $carro3->modelo . "<br>
                        de Cor: ". $carro3->cor . "<br>
                            Ano: ". $carro3->ano . "<br> <hr>";

    //Imprimindo na tela do usuário os valores do objeto (carro0) acima:
    echo "Carro ". $carro4->status . ": <br/><br/>";

    echo "Fabricante do carro: ". $carro4->fabricante . "<br>
                        Modelo: ". $carro4->modelo . "<br>
                        de Cor: ". $carro4->cor . "<br>
                            Ano: ". $carro4->ano . "<br> <hr>";

    //Imprimindo na tela do usuário os valores do objeto (carro0) acima:
    echo "Carro ". $carro5->status . ": <br/><br/>";

    echo "Fabricante do carro: ". $carro5->fabricante . "<br>
                        Modelo: ". $carro5->modelo . "<br>
                        de Cor: ". $carro5->cor . "<br>
                            Ano: ". $carro5->ano . "<br> <hr>";

?>
